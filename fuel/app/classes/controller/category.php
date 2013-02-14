<?php
class Controller_Category extends Controller_Template 
{

	public function action_index()
	{
		$data['categories'] = Model_Category::find('all',array(
			'order_by' => array(
				'id' => 'desc'
			)
		));
		$this->template->title = "Categories";
		$this->template->content = View::forge('category/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Category');

		if ( ! $data['category'] = Model_Category::find($id))
		{
			Session::set_flash('error', 'Could not find category #'.$id);
			Response::redirect('Category');
		}

		$this->template->title = "Category";
		$this->template->content = View::forge('category/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Category::validate('create');
			
			if ($val->run())
			{
				$category = Model_Category::forge(array(
					'name' => Input::post('name'),
					'title' => Input::post('title'),
					'parent_id' => Input::post('parent_id'),
					'lft' => Input::post('lft'),
					'rght' => Input::post('rght'),
					'status' => Input::post('status'),
				));

				if ($category and $category->save())
				{
					Session::set_flash('success', 'Added category #'.$category->id.'.');

					Response::redirect('category');
				}

				else
				{
					Session::set_flash('error', 'Could not save category.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Categories";
		$this->template->content = View::forge('category/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Category');

		if ( ! $category = Model_Category::find($id))
		{
			Session::set_flash('error', 'Could not find category #'.$id);
			Response::redirect('Category');
		}

		$val = Model_Category::validate('edit');

		if ($val->run())
		{
			$category->name = Input::post('name');
			$category->title = Input::post('title');
			$category->parent_id = Input::post('parent_id');
			$category->lft = Input::post('lft');
			$category->rght = Input::post('rght');
			$category->status = Input::post('status');

			if ($category->save())
			{
				Session::set_flash('success', 'Updated category #' . $id);

				Response::redirect('category');
			}

			else
			{
				Session::set_flash('error', 'Could not update category #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$category->name = $val->validated('name');
				$category->title = $val->validated('title');
				$category->parent_id = $val->validated('parent_id');
				$category->lft = $val->validated('lft');
				$category->rght = $val->validated('rght');
				$category->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('category', $category, false);
		}

		$this->template->title = "Categories";
		$this->template->content = View::forge('category/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Category');

		if ($category = Model_Category::find($id))
		{
			$category->delete();

			Session::set_flash('success', 'Deleted category #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete category #'.$id);
		}

		Response::redirect('category');

	}


}
