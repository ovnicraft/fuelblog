<?php
class Controller_Upload extends Controller_Template 
{

	public function action_index()
	{
		$data['uploads'] = Model_Upload::find('all');
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
			if(Model_Upload::add()):
			
			else:

				Session::set_flash('error', 'Could not upload file');

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

		$val = Model_Upload::validate('edit');

		if ($val->run())
		{
			$upload->name = Input::post('name');
			$upload->location = Input::post('location');
			$upload->file_name = Input::post('file_name');
			$upload->type = Input::post('type');

			if ($upload->save())
			{
				Session::set_flash('success', 'Updated upload #' . $id);

				Response::redirect('upload');
			}

			else
			{
				Session::set_flash('error', 'Could not update upload #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$upload->name = $val->validated('name');
				$upload->location = $val->validated('location');
				$upload->file_name = $val->validated('file_name');
				$upload->type = $val->validated('type');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('upload', $upload, false);
		}

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
