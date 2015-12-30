<?php namespace drunkyard\Http\Controllers;

class StoryController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Story Controller
	|--------------------------------------------------------------------------
	|
	| This controller exposes the functionality to create and find drunkyard stories
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

}
