<?php
use Orm\Model;

class Model_User extends Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'email',
		'status',
		'level',
		'created_at',
		'updated_at',
	);

	protected static $_has_many=array('comments');

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
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('status', 'Status', 'required');
		$val->add_field('level', 'Level', 'required');

		return $val;
	}

	public static function add()
	{
		$user=new Model_User(array(
			'username' => Input::post('username'),
			'password' => crypt(Input::post('username'), '!2y!'.Config::get('blowfish_difficulty').'!'.Input::post('password').'!'),
			'email' => Input::post('email'),
			'status' => Input::post('status'),
			'level' => Input::post('level'),
		));

		if($user && $user->save()):

			return $user;

		else:

			return false;

		endif;	
	}

}
