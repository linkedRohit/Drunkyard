<?php namespace Repositories\User;

/**
 * A simple interface to set the methods in our User repository, nothing much happening here
 */
interface UserInterface
{
    public function getUserById($userId);
}