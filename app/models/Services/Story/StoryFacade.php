<?php namespace Services\Story;

use \Illuminate\Support\Facades\Facade;

/**
* Facade class to be called whenever the class StoryService is called
*/
class StoryFacade extends Facade {

    /**
     * Get the registered name of the component. This tells $this->app what record to return
     * (e.g. $this->app[‘storyService’])
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'storyService'; }

}