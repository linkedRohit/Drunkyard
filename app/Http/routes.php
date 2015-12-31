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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Redirect to facebook, twitter, google to authenticate
Route::get('facebook', 'WelcomeController@facebook_redirect');
// Get back to redirect url
Route::get('facebook_callback', 'WelcomeController@facebook');

Route::get('google', 'WelcomeController@google_redirect');
Route::get('google_callback', 'WelcomeController@google');

Route::get('twitter', 'WelcomeController@twitter_redirect');
Route::get('twitter_callback', 'WelcomeController@twitter');

Route::get('/create', 'StoryController@create');

Route::post('/dyUploader', 'HomeController@uploadFile');