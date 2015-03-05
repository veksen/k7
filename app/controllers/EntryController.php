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

	public function getForm2()
	{
		return View::make('entry.form2');
	}

	public function postForm()
	{
		$v = Validator::make(Input::all(), Entry::$rules);

		if(!$v->passes()) {
			$message = 'message d\'erreur';
			return Redirect::back()
				->with('message', $message)
				->with('message_type', 'danger')
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
				->with('message', $message)
				->with('message_type', 'success');
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

	public function tagEntry($id, $status)
	{
		if(in_array($status, array(1,2,3))) {
			$entry = Entry::find($id);
			$entry->status = $status;
			$entry->save();
		}

		return Redirect::back();
	}

}
