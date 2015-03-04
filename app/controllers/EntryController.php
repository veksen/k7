<?php

class EntryController extends BaseController {

	public function __construct()
	{
		View::share('active', Route::currentRouteName());
	}

	public function getForm()
	{
		return View::make('entry.form');
	}

	public function postForm()
	{
		$v = Validator::make(Input::all(), Entry::$rules);

		if(!$v->passes()) {
			$message = 'message d\'erreur';
			return Redirect::back()
				->with('message', $message)
				->withErrors($v->messages())
				->withInput();
		} else {
			$entry = new Entry;
			$entry->idea      = Input::get('idea');
			$entry->email     = Input::get('email');
			$entry->firstname = Input::get('firstname');
			$entry->lastname  = Input::get('lastname');
			$entry->address   = Input::get('address');
			$entry->city      = Input::get('city');
			$entry->zipcode   = Input::get('zipcode');
			$entry->save();

			$message = 'message de succès';
			return Redirect::back()
				->with('message', $message);
		}
	}

	public function getRules()
	{
		return View::make('entry.rules');
	}

	public function getList()
	{
		$entries = Entry::all();

		return View::make('entry.list')
			->with('entries', $entries);
	}

}