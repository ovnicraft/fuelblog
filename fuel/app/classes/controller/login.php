<?php
class Controller_Login extends Controller_Template
{
	public function action_index()
	{
		session_start();

		if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']['user_level'] == Config::get('application_settings.admin_level') && $_SESSION['user_logged_in']['user_id']):

			Response::redirect('post');
		
		endif;

		if(Input::post()):

			$username=Input::post('username');
			$password=Input::post('password');
			$password=crypt($password,'!2y!'.Config::get('blowfish_difficulty').'!'.$username.'!');
			$user=Model_User::find('first', array(
				'where' => array(
					array('username', $username),
					array('password', $password)
				)
			));

			if($user):

				session_regenerate_id();

				$_SESSION['user_logged_in']['user_level']=$user->level;
				$_SESSION['user_logged_in']['user_id']=$user->id;
				$_SESSION['user_logged_in']['user_time_in']=time();

				Response::redirect('post');

			endif;

		endif;

		$this->template->title='';
		$this->template->content = View::forge('login/index');
	}

	public function action_logout()
	{
		session_start();

		unset($_SESSION['user_logged_in']);

		Response::redirect('login');
	}

	public static function is_user_logged_in()
	{
		return isset($_SESSION['user_logged_in']); 
	}
} 
