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


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'story' => 'StoryController',
]);

// Redirect to facebook, twitter, google to authenticate

Route::get('facebook', 'Auth\AuthController@facebook_redirect');
Route::get('facebook_callback', 'Auth\AuthController@facebook');

Route::get('google', 'Auth\AuthController@google_redirect');
Route::get('google_callback', 'Auth\AuthController@google');

Route::get('twitter', 'Auth\AuthController@twitter_redirect');
Route::get('twitter_callback', 'Auth\AuthController@twitter');

Route::get('medium', 'Auth\AuthController@facebook_medium');
Route::get('medium_callback', 'Auth\AuthController@medium');

Route::post('/dyUploader', 'HomeController@uploadFile');


Route::get('create', 'StoryController@createStory');
Route::get('feed', 'StoryController@getStories');
Route::post('save', 'StoryController@saveDraft');

Route::get('/', 'WelcomeController@index');