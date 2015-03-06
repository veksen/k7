<?php

class AdminController extends BaseController {

	public function __construct()
	{
		View::share('active', Route::currentRouteName());
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if(!Auth::attempt(array('email' => $email, 'password' => $password))) {
			$message = "Les informations de connection sont invalides";

			return Redirect::back()
				->with('message', $message)
				->with('message_type', 'danger')
				->withInput();
		}

		if(Session::has('pre_login_url')) {
			$url = Session::get('pre_login_url');
			Session::forget('pre_login_url');
			return Redirect::to($url);
		} else {
			return Redirect::route('entries.list');
		}
	}

}