<?php
class Controller_Post extends Controller_Right 
{
	public function before()
	{
		parent::before();
	}


	public function action_index()
	{
		$pagination=Pagination::forge('pagination', array(
			'pagination_url' => Uri::base(false).'post/index/',
			'total_items' => Model_Post::count(array()),
			'per_page' => Config::get('application_settings.pagination_items'),
			'uri_segment' => Config::get('application_settings.pagination_uri_segment'),
			'num_links' => Config::get('application_settings.pagination_num_links')
		));

		$data['posts'] = Model_Post::find('all',array(
			'order_by' => array(
				'id' => 'desc'
			),
			'offset' => $pagination->offset,
			'limit' => $pagination->per_page
		));
		$data['pagination']=$pagination->render();
		$this->template->title = "Posts";
		$this->template->content = View::forge('post/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Post');

		if ( ! $data['post'] = Model_Post::find($id,array('related' => array('uploads'))))
		{
			Session::set_flash('error', 'Could not find post #'.$id);
			Response::redirect('Post');
		}

		$this->template->title = "Post";
		$this->template->content = View::forge('post/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Post::validate('create');
			
			if ($val->run())
			{
				$post = new Model_Post(array(
					'name' => Input::post('name'),
					'title' => Input::post('title'),
					'body_short' => Input::post('body_short'),
					'body' => Input::post('body'),
					'status' => Input::post('status'),
					'category_id' => Input::post('category_id'),
					'language_id' => Input::post('language_id'),
					'uploads' => array(
						Model_Upload::find(Input::post('upload_id'))
					)
				));

				if ($post and $post->save())
				{
					Session::set_flash('success', 'Added post #'.$post->id.'.');

					Response::redirect('post');
				}

				else
				{
					Session::set_flash('error', 'Could not save post.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Posts";
		$this->template->content = View::forge('post/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Post');

		if ( ! $post = Model_Post::find($id))
		{
			Session::set_flash('error', 'Could not find post #'.$id);
			Response::redirect('Post');
		}

		$val = Model_Post::validate('edit');

		if ($val->run())
		{
			$post->name = Input::post('name');
			$post->title = Input::post('title');
			$post->body_short = Input::post('body_short');
			$post->body = Input::post('body');
			$post->status = Input::post('status');
			$post->category_id = Input::post('category_id');
			$post->language_id = Input::post('language_id');
			$post->uploads = array(
				Model_Upload::find(Input::post('upload_id'))
			);

			if ($post->save())
			{
				Session::set_flash('success', 'Updated post #' . $id);

				Response::redirect('post');
			}

			else
			{
				Session::set_flash('error', 'Could not update post #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$post->name = $val->validated('name');
				$post->title = $val->validated('title');
				$post->body_short = $val->validated('body_short');
				$post->body = $val->validated('body');
				$post->status = $val->validated('status');
				$post->category_id = $val->validated('category_id');
				$post->language_id = $val->validated('language_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('post', $post, false);
		}

		$this->template->title = "Posts";
		$this->template->content = View::forge('post/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Post');

		if ($post = Model_Post::find($id))
		{
			$post->delete();

			Session::set_flash('success', 'Deleted post #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete post #'.$id);
		}

		Response::redirect('post');

	}


}
