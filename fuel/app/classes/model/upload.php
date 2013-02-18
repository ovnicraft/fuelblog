<?php
use Orm\Model;

class Model_Upload extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'location',
		'file_name',
		'type',
		'created_at',
		'updated_at',
	);

	protected static $_many_many=array('posts');

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('location', 'Location', 'required|max_length[255]');
		$val->add_field('file_name', 'File Name', 'required|max_length[255]');
		$val->add_field('type', 'Type', 'required|max_length[255]');

		return $val;
	}

	public static function files_uploaded()
	{
		if(count(Upload::get_files())):

			return true;

		else:

			return false;

		endif;
	}

	public static function make_upload_folder()
	{
		if(!is_dir(DOCROOT.Config::get('application_settings.uploads_folder').date('Y_m'))):

			mkdir(DOCROOT.Config::get('application_settings.uploads_folder').date('Y_m'),0777,true);

		endif;
		
		$upload_config=array(
				'path' => DOCROOT.Config::get('application_settings.uploads_folder').date('Y_m')
			);

		return $upload_config;
	}

	public static function add($files)
	{
		$val=Model_Upload::validate('create');

		if($val->run(array(
			'name' => Input::post('name'),
			'location' => Config::get('application_settings.uploads_folder').date('Y_m'),
			'file_name' => $files[0]['filename'],
			'type' => $files[0]['extension']
		))):

			$upload=Model_Upload::forge(array(
				'name' => Input::post('name'),
				'location' => Config::get('application_settings.uploads_folder').date('Y_m'),
				'file_name' => $files[0]['filename'],
				'type' => $files[0]['extension']
			));

			$upload->save();
					
			return true;

		else:

			return false;

		endif;
	}

	public static function update_with_files($files)
	{
		$val=Model_Upload::validate('create');

		if($val->run(array(
			'name' => Input::post('name'),
			'location' => Config::get('application_settings.uploads_folder').date('Y_m'),
			'file_name' => $files[0]['filename'],
			'type' => $files[0]['extension']
		))):

			$upload=new Model_Upload();

			$upload->name = Input::post('name');
			$upload->location = Config::get('application_settings.uploads_folder').date('Y_m');
			$upload->file_name = $files[0]['filename'];
			$upload->type = $files[0]['extension'];

			$upload->save();
					
			return true;

		else:

			return false;

		endif;
	}
}
