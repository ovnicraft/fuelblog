<?php
class Controller_Right extends Controller_Template
{
	public function before()
	{
		parent::before();

		session_start();

		if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']['user_level'] == Config::get('application_settings.admin_level') && $_SESSION['user_logged_in']['user_id']):

			if($_SESSION['user_logged_in']['user_time_in'] + Config::get('application_settings.regenerate_session_after_seconds') <= time() ):

				session_regenerate_id();

			endif;

		else:

			Response::redirect('login');

		endif;
	}
} 
