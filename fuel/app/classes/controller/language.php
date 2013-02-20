<?php
class Controller_Language extends Controller_Right 
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$pagination=Pagination::forge('pagination', array(
			'pagination_url' => Uri::base(false).'language/index/',
			'total_items' => Model_Language::count(array()),
			'per_page' => Config::get('application_settings.pagination_items'),
			'uri_segment' => Config::get('application_settings.pagination_uri_segment'),
			'num_links' => Config::get('application_settings.pagination_num_links')
		));

		$data['languages'] = Model_Language::find('all',array(
			'order_by' => array(
				'id' => 'desc'
			),
			'offset' => $pagination->offset,
			'limit' => $pagination->per_page
		));
		$data['pagination']=$pagination->render();
		$this->template->title = "Languages";
		$this->template->content = View::forge('language/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Language');

		if ( ! $data['language'] = Model_Language::find($id))
		{
			Session::set_flash('error', 'Could not find language #'.$id);
			Response::redirect('Language');
		}

		$this->template->title = "Language";
		$this->template->content = View::forge('language/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Language::validate('create');
			
			if ($val->run())
			{
				$language = Model_Language::forge(array(
					'name' => Input::post('name'),
					'status' => Input::post('status'),
				));

				if ($language and $language->save())
				{
					Session::set_flash('success', 'Added language #'.$language->id.'.');

					Response::redirect('language');
				}

				else
				{
					Session::set_flash('error', 'Could not save language.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Languages";
		$this->template->content = View::forge('language/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Language');

		if ( ! $language = Model_Language::find($id))
		{
			Session::set_flash('error', 'Could not find language #'.$id);
			Response::redirect('Language');
		}

		$val = Model_Language::validate('edit');

		if ($val->run())
		{
			$language->name = Input::post('name');
			$language->status = Input::post('status');

			if ($language->save())
			{
				Session::set_flash('success', 'Updated language #' . $id);

				Response::redirect('language');
			}

			else
			{
				Session::set_flash('error', 'Could not update language #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$language->name = $val->validated('name');
				$language->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('language', $language, false);
		}

		$this->template->title = "Languages";
		$this->template->content = View::forge('language/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Language');

		if ($language = Model_Language::find($id))
		{
			$language->delete();

			Session::set_flash('success', 'Deleted language #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete language #'.$id);
		}

		Response::redirect('language');

	}


}
