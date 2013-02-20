<?php
class Controller_Category extends Controller_Template 
{

	public function action_index()
	{
		$pagination=Pagination::forge('pagination', array(
			'pagination_url' => Uri::base(false).'category/index/',
			'total_items' => Model_Category::count(array()),
			'per_page' => Config::get('application_settings.pagination_items'),
			'uri_segment' => Config::get('application_settings.pagination_uri_segment'),
			'num_links' => Config::get('application_settings.pagination_num_links')
		));

		$data['categories'] = Model_Category::find('all',array(
			'order_by' => array(
				'id' => 'desc'
			),
			'offset' => $pagination->offset,
			'limit' => $pagination->per_page
		));
		$data['pagination']=$pagination->render();
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
				Model_Category::add_child_last();

				Session::set_flash('success', 'Added new category');

				Response::redirect('category');
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

		if ($val->run(array(
			'name' => Input::post('name'),
			'title' => Input::post('title'),
			'parent_id' => Input::post('parent_id'),
			'status' => Input::post('status'))))
		{
			if(Input::post('parent_id') === $category->parent_id):
			
				$category->name = Input::post('name');
				$category->title = Input::post('title');
				$category->parent_id = Input::post('parent_id');
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

			else:

				Model_Category::move_node($id);
				
				Response::redirect('category');

			endif;
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$category->name = $val->validated('name');
				$category->title = $val->validated('title');
				$category->parent_id = $val->validated('parent_id');
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

		Model_Category::delete_node($id);

		Session::set_flash('success', 'Deleted category #'.$id);

		Response::redirect('category');
	}
}
