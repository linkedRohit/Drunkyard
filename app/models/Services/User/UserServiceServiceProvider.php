<?php namespace Services\User;

use Illuminate\Support\ServiceProvider;

/**
* Register our user service with Laravel
*/
class UserServiceServiceProvider extends ServiceProvider 
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
            return new UserService(
                // Inject in our class of userInterface, this will be our repository
                $app->make('Repositories\User\UserInterface')
            );
        });
    }
}