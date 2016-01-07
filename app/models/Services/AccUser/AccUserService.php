<?php namespace Services\AccUser;

use Repositories\AccUser\AccUserInterface;

/**
* Our UserService, containing all useful methods for business logic around User
*/
class AccUserService
{
    // Containing our userRepository to make all our database calls to
    protected $userRepo;
    
    /**
    * Loads our $userRepo with the actual Repo associated with our userInterface
    * 
    * @param userInterface $userRepo
    * @return UserService
    */
    public function __construct(AccUserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
    * Method to get user based either on name or ID
    * 
    * @param mixed $user
    * @return string
    */
    public function getUserById($user)
    {
        // If user variable is numeric, assume ID
        if (is_numeric($user))
        {
            // Get user based on ID
            $user = $this->userRepo->getUserById($user);
        
            // If Eloquent Object returned (rather than null) return the name of the user
            if ($user != null)
            {
                return $user->name;
            }
        }

        // If nothing found, return this simple string
        return 'User Not Found';
    }

    public function save($user) {
        $this->userRepo->save($user);
    }
}