<?php namespace Services\AccUser;

use Illuminate\Support\ServiceProvider;

/**
* Register our user service with Laravel
*/
class AccUserServiceServiceProvider extends ServiceProvider 
{
    /**
    * Registers the service in the IoC Container
    * 
    */
    public function register()
    {
        // Binds 'userService' to the result of the closure
        $this->app->bind('userService', function($app)
        {
            return new AccUserService(
                // Inject in our class of AccUserInterface, this will be our repository
                $app->make('Repositories\AccUser\AccUserInterface')
            );
        });
    }
}