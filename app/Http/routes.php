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

	#region Backend.portfolio
		Route::get('/backend/portfolio', 'Backend\controller_portfolio@index');
		Route::get('/backend/portfolio/getEditorData', 'Backend\controller_portfolio@getEditorData');
		Route::post('/backend/portfolio/getEditorData', 'Backend\controller_portfolio@getEditorData');
		Route::post('/backend/portfolio/testing', 'Backend\controller_portfolio@testing');
	#endregion

	Route::get('/', 'controller_index@index');

	Route::get('home', 'HomeController@index');
	Route::get('contactus', 'controller_contactus@index');
	Route::get('portfolio', 'controller_portfolio@index');


	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

