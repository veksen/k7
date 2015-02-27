<?php

class EntryController extends BaseController {

	public function getForm()
	{
		return View::make('entry.form');
	}

}