<?php namespace Repositories\AccUser;

/**
 * A simple interface to set the methods in our User repository, nothing much happening here
 */
interface AccUserInterface
{
    public function getUserById($userId);
    public function save($user);
}