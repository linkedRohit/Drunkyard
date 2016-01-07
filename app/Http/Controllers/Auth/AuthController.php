<?php namespace drunkyard\Http\Controllers\Auth;

use drunkyard\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Socialize;
use Redirect;
use AccUser;
use drunkyard\User;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/*
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
     * Handle an authentication attempt.
     *
     * @return Response
     */ 
    public function authenticate()
    {
        if (Auth::attempt(['id' => $id, 'password' => $password]))
        {
            return redirect()->intended('dashboard');
        }
    }

	public function facebook_redirect(){
		return Socialize::with('facebook')->redirect();
	}

	public function facebook() {
		try {
            $user = Socialize::with('facebook')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/login');
        }

        $authUser = $this->findOrCreateUser('facebook', $user);

        Auth::login($authUser, true);

        return Redirect::to('home');
	}

	public function google_redirect(){
		return Socialize::with('google')->redirect();
	}

	public function google() {
	  try {
            $user = Socialize::with('google')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/login');
        }

        try {
        	$authUser = $this->findOrCreateUser('google', $user);
        }  catch ( \Illuminate\Database\QueryException $e) {
        	if($e->errorInfo[1] == '1062') {
        		echo "Email already exists, Login Instead";
        		Auth::login($authUser, true);
        	}
		    var_dump($e);die;
		    $message = $e;
		}

        Auth::login($authUser, true);

        return Redirect::to('home');
    }

	public function twitter_redirect(){
		return Socialize::with('twitter')->redirect();
	}

	public function twitter() {
	    try {
            $user = Socialize::with('twitter')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/login');
        }

        $authUser = $this->findOrCreateUser('twitter', $user);

        Auth::login($authUser, true);

        return Redirect::to('home');
	}
/*
	public function medium_redirect(){
		return Socialize::with('medium')->redirect();
	}

	public function medium() {
	  $user = Socialize::with('medium')->user();
	  print_r($user);die;
	}
*/

	/**
     * Return user if exists; create and return if doesn't
     *
     * @param $providerUser
     * @param $providerId
     * @return User
     */
    private function findOrCreateUser($provider, $providerUser)
    {
        if ($authUser = User::where('provider_id', $providerUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $providerUser->name,
            'email' => $providerUser->email,
            'provider'=> $provider,
            'provider_id' => $providerUser->id,
            'avatar' => $providerUser->avatar,
            'authToken' => $providerUser->token
        ]);
    }

}
