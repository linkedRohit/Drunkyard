<?php namespace Repositories\User;

use Entities\AccUser;
use Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

/**
* Register our Repository with Laravel
*/
class UserRepositoryServiceProvider extends ServiceProvider 
{
    /**
    * Registers the userInterface with Laravels IoC Container
    * 
    */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\UserInterface
        $this->app->bind('Repositories\User\UserInterface', function($app)
        {
            return new UserRepository(new AccUser());
        });

        
        /*$this->app->bind(
              'Repositories\User\UserRepository',
              'Repositories\User\EloquentUserRepository'
            );*/
    }
}