<?php namespace Repositories\Story;

use Illuminate\Database\Eloquent\Model;
use \stdClass;
use Auth;
use Entities\Story;

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
    public function __construct(Story $story)
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

    /**
    * Returns the story object associated with the passed id
    * 
    * @param mixed $story
    * @return Model
    */
    public function saveStory($story)
    {
        $story['status'] = 'DRAFT';
        $story['visible'] = 0;
        $story['author'] = Auth::user()->id;
        $story['genre'] = '';

        $storyObject = json_decode(json_encode($story));
        foreach ($storyObject as $key => $value) 
            $this->storyModel->{$key} = $value;
        
        if(empty($story['id'])) {
            $oldStory = $this->storyModel->whereTitle($story['title'])->get();
            if($oldStory) {
                $oldStory->title = $story['title'];
                $oldStory->description = $story['description'];
                $oldStory->tags = $story['tags'];
                $status = $oldStory->save();
                if($status) {
                    return $oldStory->id;
                }
            } else {
                $status = $this->storyModel->save();
                if($status) {
                    return $this->storyModel->id;
                }
            }
        } else {
            $oldStory = $this->storyModel->find($story['id']);
            $oldStory->title = $story['title'];
            $oldStory->description = $story['description'];
            $oldStory->tags = $story['tags'];
            $status = $oldStory->save();
            if($status) {
                return $this->storyModel->id;
            }
        }
        return $status;
    }

    public function getStoriesByUser($userId, $storyType) {
        $myStories = $this->storyModel->whereAuthorAndStatus($userId, $storyType)->get();
        return $myStories;
    }
}