<?php namespace Repositories\Story;

/**
 * A simple interface to set the methods in our Story repository, nothing much happening here
 */
//will contain all the functions that we want to be implemented by the classes that implement this interface.
interface StoryInterface
{
    public function getStoryById($storyId);
    public function saveStory($story);
}