<?php namespace drunkyard\Http\Controllers;

use Input;
use Validator;
use File;
use Response;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}


	public function uploadFile(){

		$input = Input::all();
		$rules = array(
		    'file' => 'image|max:3000',
		);

		$validation = Validator::make($input, $rules);
		if ($validation->fails())
		{
			return Response::make($validation->messages()->toJson(), 400);
		}

		$file = Input::file('file');
        $extension = File::extension($file->getClientOriginalName());
        $directory = public_path().'/uploads/'.date("dmY");
        $filename = sha1(time().time()).".{$extension}";

        $upload_success = $file->move($directory, $filename);
        if( $upload_success ) {
        	return Response::json('success', 200);
        } else {
        	return Response::json('error', 400);
        }
	}

}
