<?php namespace drunkyard\Http\Controllers;

use Socialize;
use redirect;
use AccUser;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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

	public function facebook_redirect(){
		return Socialize::with('facebook')->redirect();
	}

	public function facebook() {
	  $user = Socialize::with('facebook')->user();
	  print_r($user);die;
	}

	public function google_redirect(){
		return Socialize::with('google')->redirect();
	}

	public function google() {
	  $user = Socialize::with('google')->user();
	  print_r($user);die;
	}

	public function twitter_redirect(){
		var_dump(AccUser::getUser(1));
		return Socialize::with('twitter')->redirect();
	}

	public function twitter() {
	    $user = Socialize::with('twitter')->user();
	    AccUser::getUser($user->id);
	    print_r($user);die;
	    
	    if(User::where('email', '=', $user->email)){
	        echo "Auth attempt matched";
	        $checkUser = User::where('email', '=', $user->email);
	        Auth::login($checkUser);
	    } else{
	        echo "auth no attempt matched";
	        $row = new User;
	        $row->email = $user->email;
	        $row->avatar = $user->avatar;
	        $row->name = $user->name;
	        $row->save();
	    }
	    echo Auth::user()->name;
	}


}
