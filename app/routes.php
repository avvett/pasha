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

Route::get('/', array('uses'=>'HomeController@showWelcome', 'as'=>'home'));

/*Route::get('/',function(){
	return View::make('hello');
});*/

Route:: group(array('before'=> 'guest'),function()
{
	Route::get('/customer/register',  array('uses'=>'CustomerController@getRegister', 'as'=>'getRegister'));
	//Route::get('/customer/register',  'CustomerController@getRegister');
	Route::get('/customer/login','CustomerController@getLogin');

	Route:: group(array('before'=>'csrf'),function()
	{
		//Route::post('/customer/register', 'CustomerController@postRegister');
		Route::post('/customer/register', array('uses'=> 'CustomerController@postRegister', 'as' => 'postRegister'));
		Route::post('/customer/login','CustomerController@postLogin');
	});
});
