<?php namespace Services\Story;

use Illuminate\Support\ServiceProvider;

/**
* Register our story service with Laravel
*/
class StoryServiceServiceProvider extends ServiceProvider 
{
    /**
    * Registers the service in the IoC Container
    * 
    */
    public function register()
    {
        // Binds 'storyService' to the result of the closure
        $this->app->bind('storyService', function($app)
        {
            return new StoryService(
                // Inject in our class of storyInterface, this will be our repository
                $app->make('Repositories\Story\StoryInterface')
            );
        });
    }
}