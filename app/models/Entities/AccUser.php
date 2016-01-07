<?php namespace Entities;
use Eloquent;
/**
 * An Eloquent class to tell Laravel about our Pokemon table. To add this table 
 * make sure you have a valid database connection and run:
 * php artisan migrate
 * php artisan db:seed 
 */
class AccUser extends Eloquent
{
    // Our table name
    protected $table = "users";
    // Our primary key
    protected $primaryKey = "id";
    //The fillable property specifies which attributes should be mass-assignable.
    //This can be set at the class or instance level.
    protected $fillable = array('name', 'username', 'email', 'avatar', 'password', 'provider', 'provider_id', 'remember_token', 'authToken');

}