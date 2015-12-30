<?php namespace Repositories\User;

use Illuminate\Database\Eloquent\Model;
use \stdClass;

/**
* Our user repository, containing commonly used queries
*/
class UserRepository implements UserInterface
{
    // Our Eloquent user model
    protected $userModel;
    
    /**
    * Setting our class $userModel to the injected model
    * 
    * @param Model $user
    * @return UserRepository
    */
    public function __construct(Model $user)
    {
        $this->userModel = $user;
    }

    /**
    * Returns the user object associated with the passed id
    * 
    * @param mixed $userId
    * @return Model
    */
    public function getUserById($userId)
    {
        return $this->convertFormat($this->userModel->find($userId));
    }

    /**
    * Converting the Eloquent object to a standard format
    * 
    * @param mixed $user
    * @return stdClass
    */
    protected function convertFormat($user)
    {
        if ($user == null)
        {
            return null;
        }
        
        $object = new stdClass();
        $object->id = $user->id;
        $object->name = $user->name;
        
        return $object;
    }
}