<?php

namespace App\Authentication;

use App\Database\Models\User;
use App\Database\Querries\UsersQuerries;
use Exception;

class Authentication
{
    private UsersQuerries $userQuerries;

    public function __construct(UsersQuerries $userQuerries)
    {
        $this->userQuerries = $userQuerries;
    }

    public function userAlreadyExist(int $id): ?User
    {
        
        return $this->userQuerries->userById($id);
    }

    public function authenticateUser(string $username, string $password, array $role) : ?User
    {
        try {
 
            $user = $this->userQuerries->userByUsername($username);
            if (!is_null($user)) {
                return (password_verify($password, $user->getUser_password()) && in_array($user->getUser_role(), $role)) ? ($user) : null;
            }
        } catch (Exception $e) {
            return null;
        }

        return null;
    }
}
