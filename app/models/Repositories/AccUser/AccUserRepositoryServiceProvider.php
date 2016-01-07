<?php namespace Repositories\AccUser;

use Entities\AccUser;
use Repositories\AccUser\AccUserRepository;
use Illuminate\Support\ServiceProvider;

/**
* Register our Repository with Laravel
*/
class AccUserRepositoryServiceProvider extends ServiceProvider 
{
    /**
    * Registers the userInterface with Laravels IoC Container
    * 
    */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\UserInterface
        $this->app->bind('Repositories\AccUser\AccUserInterface', function($app)
        {
            return new AccUserRepository(new AccUser());
        });

        
        /*$this->app->bind(
              'Repositories\AccUser\AccUserRepository',
              'Repositories\User\EloquentUserRepository'
            );*/
    }
}