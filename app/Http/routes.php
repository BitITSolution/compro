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
	Route::group(['prefix' => 'backend'], function () {
      Route::get('compro', 'Backend\controller_compro@index');
      Route::post('compro/editCompro', 'Backend\controller_compro@editCompro');
      Route::post('compro', 'Backend\controller_compro@editCompro');
      /*Route::post('compro/editCompro', function()
	    {
		  /*$rules = [
			  'info_key'=>'required',
			  'info_value'=>'required'
		  ];

		  $validator = Validator::make(Input::all(), $rules);

		  if ($validator->fails())
		  {
		  	return redirect('backend/compro')->withErrors($validator);
		  }
			return redirect('backend/compro');
	    });*/
      Route::get('compro/getData', 'Backend\controller_compro@getData');
      Route::post('compro/getData', 'Backend\controller_compro@getData');

	  Route::get('portfolio', 'Backend\controller_portfolio@index');
	  Route::post('portfolio', 'Backend\controller_portfolio@editPortfolio');
    });
  #endregion

	#region Client
    Route::group(['prefix' => 'client'], function () {
      Route::get('compro', 'Backend\controller_compro@index');
      Route::get('compro/getEditorData', 'Backend\controller_compro@getEditorData');
      Route::post('compro/getEditorData', 'Backend\controller_compro@getEditorData');
    });  
	#endregion

	Route::get('/',       'controller_frontend@home');
	Route::get('index',   'controller_frontend@home');
	Route::get('home',    'controller_frontend@home');
    Route::get('about',   'controller_frontend@about');
    Route::get('client',  'controller_frontend@client');
    Route::get('product', 'controller_frontend@product'); //Product + portfolio
    Route::get('career',  'controller_frontend@career');
	Route::get('contact', 'controller_frontend@contact');

  #region Message (Project Planner & Message us)
  Route::get('planner', 'controller_frontend@planner');
  Route::post('planner','controller_frontend@submitPlanner');
  #endregion
  
	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

