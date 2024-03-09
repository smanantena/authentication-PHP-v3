<?php

namespace Tests;

use App\Authentication\Authentication;
use App\Database\Models\User;
use App\Database\Querries\UsersQuerries;
use ArgumentCountError;
use PDO;
use PHPUnit\Framework\TestCase;
use TypeError;

class AuthenticationTest extends TestCase
{
    private Authentication $auth;

    /**
     * Set the value of auth
     *
     * @before
     * @return  self
     */ 
    public function setAuth()
    {
        $this->auth = new Authentication(new UsersQuerries());

        return $this;
    }

    public function test_if_user_does_exist ()
    {
       
       $user = $this->auth->authenticateUser('dady', 'dady', [1, 2]);
       $this->assertNull($user);
    }

    public function test_if_only_username_true ()
    {
        
        $user = $this->auth->authenticateUser('admin', 'a', ['user', 'user']);
        $this->assertNull($user);
    }

    public function test_if_user_info_true ()
    {
        $user = $this->auth->authenticateUser('admin', 'admin', ['admin', 'user']);
        $this->assertInstanceOf(User::class, $user);
    }

    public function test_if_user_id_does_not_exist ()
    {
        
        $user = $this->auth->userAlreadyExist(5);
        $this->assertNull($user);
    }

    public function test_if_user_id_exist ()
    {
        
        $adminuser = $this->auth->userAlreadyExist(1);
        $simpleuser = $this->auth->userAlreadyExist(2);
        $this->assertInstanceOf(User::class, $adminuser);
        $this->assertInstanceOf(User::class, $simpleuser);
    }

    
}
