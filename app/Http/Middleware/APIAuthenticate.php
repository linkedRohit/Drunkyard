<?php namespace drunkyard\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Config;

class APIAuthenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $apiauth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $apiauth
	 * @return void
	 */
	public function __construct(Guard $apiauth)
	{
		$this->apiauth = $apiauth;
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
		if(Config::get('app.key') == Config::get('constants.API_KEY'))
			return response('Unauthorized.', 401);
		else
			return $next($request);
	}

}
