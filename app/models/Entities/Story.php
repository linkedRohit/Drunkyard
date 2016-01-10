<?php namespace Entities;
use Eloquent;

/**
* Register our Repository with Laravel
*/
class Story extends Eloquent
{
    // Our table name
    protected $table = "story";
    // Our primary key
    protected $primaryKey = "id";
    //The fillable property specifies which attributes should be mass-assignable.
    //This can be set at the class or instance level.
    protected $fillable = array('author', 'title', 'description', 'tags', 'status', 'visible', 'genre');
	protected $guarded = ['id'];
}