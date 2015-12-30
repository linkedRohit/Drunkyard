<?php namespace drunkyard\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class APIAuthenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Authenticate an incoming api request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	public function handle($request, Closure $next)
	{
		var_dump($request);die;
		if($request->getallheaders("API_KEY") == $_API_KEY)
			return response('Unauthorized.', 401);
		else
			return $next($request);
	}

}
