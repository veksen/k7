<?php

class EntryController extends BaseController {

	public function getForm()
	{
		return View::make('entry.form');
	}

	public function postForm()
	{
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

	public function getList()
	{
		$entries = Entry::all();

		return $entries;
	}

}