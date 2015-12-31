<?php namespace Repositories\Story;

use Entities\Story;
use Repositories\Story\StoryRepository;
use Illuminate\Support\ServiceProvider;

/**
* Register our Repository with Laravel
*/
class StoryRepositoryServiceProvider extends ServiceProvider 
{
    /**
    * Registers the storyInterface with Laravels IoC Container
    * 
    */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\StoryInterface
        $this->app->bind('Repositories\Story\StoryInterface', function($app)
        {
            return new StoryRepository(new Story());
        });

        
        /*$this->app->bind(
              'Repositories\Story\StoryRepository',
              'Repositories\Story\EloquentStoryRepository'
            );*/
    }
}