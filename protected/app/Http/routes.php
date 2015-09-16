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

Route::get('/', 'HomeController@index');

Route::post('oauth/access_token', function() {
	return Response::json(Authorizer::issueAccessToken());
});

Route::post('upload', 				'PortfolioController@uploadFile');

Route::group(['before' => 'oauth'], function() {
	// Portfólio
	Route::resource('portfolio', 		'PortfolioController');	
	Route::get('galeria/{id}', 			'PortfolioController@getGaleria');
	Route::get('galeria/delete/{id}', 	'PortfolioController@deleteGaleria');

	Route::resource('post', 			'ApiController', ['except' => ['create', 'edit']]);
	
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'admin\PainelController@index');
});