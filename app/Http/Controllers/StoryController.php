<?php namespace drunkyard\Http\Controllers;

use Story;
use Route;
use Illuminate\Http\Request;
use Response;
use Auth;

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

	public function createStory(Request $Request) 
	{	
		$dataBag = array();
		$title = ($Request->input() && $Request->input()['title']) ? $Request->	input()['title'] : "";
		$dataBag['title'] = $title;
	    return view('Story/CreateStory', $dataBag);
	}

	public function getStories() {
	    return 'Hello World';
	}
	
	public function saveDraft(Request $Request) {
	    $story = ($Request->input() && $Request->input()['draft']) ? $Request->input()['draft'] : "";
	    try {
		    if($story) {
		    	$storyObject = json_decode($story, true);
		    	$status = Story::saveStory($storyObject);
		        if(is_numeric($status)) {
		           return Response::json($status, 200);
		        } else {
		        	return Response::json($status, 406);
		        }
			} else {
				return Response::json('ok', 200);
			}
	    } catch(Exception $ex) {
	    	Log::critical($ex->getMessage());
	    	return Response::json("Unexpected went wrong", 500);
	    }
	}

	public function myYard() {
		$dataBag = array();
		return view('Story/yard', $dataBag);
	}


	public function Yard($criteria = null, $orderType = null){
		$user = Auth::user();
		if(isset($criteria) && isset($orderType)){
			$activity = Story::getStoriesByUserInOrder($user->id, $criteria, $orderType);
		} else {
			$activity = Story::getStoriesByUser($user->id);
		}
		if($activity) {
			$dataBag['ACTIVITY'] = $activity;
			return Response::json( json_encode($dataBag),200);
		} else {
			$dataBag['MESSAGE'] = 'You are very new to us, Share stories.';
			return Response::json( json_encode($dataBag),200);
		}
	}


}
