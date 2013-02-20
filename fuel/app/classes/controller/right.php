<?php
class Controller_Right extends Controller_Template
{
	public function before()
	{
		parent::before();

		session_start();

		if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']['user_level'] == Config::get('application_settings.admin_level') && $_SESSION['user_logged_in']['user_id']):

		else:

			Response::redirect('login');

		endif;
	}
} 
