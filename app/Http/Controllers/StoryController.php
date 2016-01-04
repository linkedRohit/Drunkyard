<?php namespace drunkyard\Http\Controllers;

use Story;
use Route;
use Request;

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
		$this->middleware('auth');
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

	public function createStory() 
	{	
		$dataBag = array();
		$title = Request::input() && Request::input()['title'] ? Request::input()['title'] : "";
		$dataBag['title'] = $title;
	    return view('Story/CreateStory', $dataBag);
	}

	public function getStories() {
	    return 'Hello World';
	}

}
