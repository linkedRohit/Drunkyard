<?php namespace Services\Story;

use Repositories\Story\StoryInterface;

/**
* Our StoryService, containing all useful methods for business logic around Story
*/
class StoryService
{
    // Containing our storyRepository to make all our database calls to
    protected $storyRepo;
    
    /**
    * Loads our $storyRepo with the actual Repo associated with our storyInterface
    * 
    * @param storyInterface $storyRepo
    * @return StoryService
    */
    public function __construct(StoryInterface $storyRepo)
    {
        $this->storyRepo = $storyRepo;
    }

    /**
    * Method to get story based either on name or ID
    * 
    * @param mixed $story
    * @return string
    */
    public function saveStory($story)
    {
        // If story variable is numeric, assume ID
        if (is_array($story))
        {
            // Get story based on ID
            $storyStatus = $this->storyRepo->saveStory($story);
            return $storyStatus;
        }

        // If nothing found, return false
        return false;
    }

    /**
    * Method to get story based either on name or ID
    * 
    * @param mixed $story
    * @return string
    */
    public function getStory($story)
    {
        // If story variable is numeric, assume ID
        if (is_numeric($story))
        {
            // Get story based on ID
            $story = $this->storyRepo->getStoryById($story);
        
            // If Eloquent Object returned (rather than null) return the name of the story
            if ($story != null)
            {
                return $story->name;
            }
        }

        // If nothing found, return this simple string
        return 'Story Not Found';
    }

    public function parseDescriptionForImages($description) {
        
    }

    public function getStoriesByUser($userId) {
        return $this->storyRepo->getStoriesByUser($userId);
    }
}