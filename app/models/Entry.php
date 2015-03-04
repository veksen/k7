<?php

class Entry extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entries';

	public static $rules = array(
		'idea'      => 'required|max:255',
		'email'     => 'required|email|max:255',
		'firstname' => 'required|max:255',
		'lastname'  => 'required|max:255',
		'address'   => 'required|max:255',
		'city'      => 'required|max:255',
		'zipcode'   => 'required|max:7|regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/',
	);

}