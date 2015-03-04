<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/concours', array('as' => 'entries.form', 'uses' => 'EntryController@getForm'));
Route::post('/concours', array('as' => 'entries.form_post', 'uses' => 'EntryController@postForm'));
Route::get('/reglements', array('as' => 'entries.rules', 'uses' => 'EntryController@getRules'));

Route::get('/liste', array('as' => 'entries.list', 'uses' => 'EntryController@getList'));