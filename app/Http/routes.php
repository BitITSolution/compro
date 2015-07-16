<?php

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the controller to call when that URI is requested.
	|
	*/

	#region Backend
		Route::get('/backend/login', 'Backend\controller_auth@index');
		Route::post('/backend/login', 'Backend\controller_auth@login');
		Route::get('/backend/home', 'Backend\controller_home@index');
	#endregion

	#region Backend.compro
		Route::get('/backend/compro', 'Backend\controller_compro@index');
		Route::get('/backend/compro/getEditorData', 'Backend\controller_compro@getEditorData');
		Route::post('/backend/compro/getEditorData', 'Backend\controller_compro@getEditorData');
	#endregion

	#region Message (Project Planner & Message us)
		Route::get('/message/projectPlanner', 'controller_message@projectPlanner');
		Route::post('/message/projectPlanner', 'controller_message@submitProjectPlanner');
	#endregion

	Route::get('home', 'HomeController@index');

	Route::get('/', 'controller_index@index');
	Route::get('index', 'controller_index@index');
	Route::get('contactus', 'controller_contactus@index');
	Route::get('portfolio', 'controller_portfolio@index');


	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

