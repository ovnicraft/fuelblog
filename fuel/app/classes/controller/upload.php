<?php
class Controller_Upload extends Controller_Right 
{
	public function before()
	{
		parent::before();
	}


	public function action_index()
	{
		$pagination=Pagination::forge('pagination', array(
			'pagination_url' => Uri::base(false).'upload/index/',
			'total_items' => Model_Upload::count(array()),
			'per_page' => Config::get('application_settings.pagination_items'),
			'uri_segment' => Config::get('application_settings.pagination_uri_segment'),
			'num_links' => Config::get('application_settings.pagination_num_links')
		));

		$data['uploads'] = Model_Upload::find('all',array(
			'order_by' => array(
				'id' => 'desc'
			),
			'offset' => $pagination->offset,
			'limit' => $pagination->per_page
		));
		$data['pagination']=$pagination->render();
		$this->template->title = "Uploads";
		$this->template->content = View::forge('upload/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Upload');

		if ( ! $data['upload'] = Model_Upload::find($id))
		{
			Session::set_flash('error', 'Could not find upload #'.$id);
			Response::redirect('Upload');
		}

		$this->template->title = "Upload";
		$this->template->content = View::forge('upload/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			if(Model_Upload::files_uploaded()):

				$upload_config=Model_Upload::make_upload_folder();

				Upload::process($upload_config);

				if(Upload::is_valid()):

					Upload::save();

					$files=Upload::get_files();

					if(Model_Upload::add($files)):
					
					else:

						Session::set_flash('error', 'Could not upload file');

					endif;

				endif;

			endif;
		}

		$this->template->title = "Uploads";
		$this->template->content = View::forge('upload/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Upload');

		if ( ! $upload = Model_Upload::find($id))
		{
			Session::set_flash('error', 'Could not find upload #'.$id);
			Response::redirect('Upload');
		}

		if(input::method() == 'POST'):

			if(Model_Upload::files_uploaded()):

				$upload_config=Model_Upload::make_upload_folder();

				Upload::process($upload_config);

				if(Upload::is_valid()):

					Upload::save();

					$files=Upload::get_files();

					if(Model_Upload::update_with_files($files)):
				
					else:

						Session::set_flash('error', 'Could not update upload #' . $id);
					endif;

				endif;

			else:

				$val = Model_Upload::validate('edit');
			
				if($val->run(array(
					'name' => Input::post('name'),
					'location' => $upload->location,
					'file_name' => $upload->file_name,
					'type' => $upload->type
				))):
		
					$upload->name=Input::post('name');

					if($upload->save()):

						Session::set_flash('success', 'Updated upload #' . $id);

						Response::redirect('upload');

					else:

						Session::set_flash('error', 'Could not update upload #' . $id);

					endif;
			
				else:

					$upload->name = $val->validated('name');

					Session::set_flash('error', $val->error());

				endif;

			endif;

		endif;

		$this->template->set_global('upload', $upload, false);

		$this->template->title = "Uploads";
		$this->template->content = View::forge('upload/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Upload');

		if ($upload = Model_Upload::find($id))
		{
			$upload->delete();

			Session::set_flash('success', 'Deleted upload #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete upload #'.$id);
		}

		Response::redirect('upload');

	}


}
