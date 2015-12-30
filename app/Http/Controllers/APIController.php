<?php namespace drunkyard\Http\Controllers;


class APIController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| API Controller
	|--------------------------------------------------------------------------
	|
	| This controller exposes all possible actions for this website. Whitelisting requests with tJX77y6wN9OcYOrcuDbexGMo6uTvhT1H as API KEY
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('api_auth');
	}

	Route::get('/User/{userId}', function ($user) {
	    return AccUser::getUser($user);
	});

}
