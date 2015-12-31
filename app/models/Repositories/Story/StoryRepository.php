<?php namespace Repositories\Story;

use Illuminate\Database\Eloquent\Model;
use \stdClass;

/**
* Our story repository, containing commonly used queries
*/
//This will contain all the database interactions and operations
class StoryRepository implements StoryInterface
{
    // Our Eloquent story model
    protected $storyModel;
    
    /**
    * Setting our class $storyModel to the injected model
    * 
    * @param Model $story
    * @return StoryRepository
    */
    public function __construct(Model $story)
    {
        $this->storyModel = $story;
    }

    /**
    * Returns the story object associated with the passed id
    * 
    * @param mixed $storyId
    * @return Model
    */
    public function getStoryById($storyId)
    {
        return $this->convertFormat($this->storyModel->find($storyId));
    }

    /**
    * Converting the Eloquent object to a standard format
    * 
    * @param mixed $story
    * @return stdClass
    */
    protected function convertFormat($story)
    {
        if ($story == null)
        {
            return null;
        }
        
        $object = new stdClass();
        $object->id = $story->id;
        $object->name = $story->name;
        
        return $object;
    }
}