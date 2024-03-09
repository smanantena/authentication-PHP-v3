<?php

namespace Tests;

use App\Database\Models\User;
use App\Database\Querries\UsersQuerries;
use PHPUnit\Framework\TestCase;

class UsersQuerriesTest extends TestCase
{
    private UsersQuerries $userQuerries;

    /**
     * @before
     */
    public function setUserQuerries ()
    {
        $this->userQuerries = new UsersQuerries();
        return $this;
    }

    
    public function test_if_all_user_can_get ()
    {
        $userQuerries = new UsersQuerries();
        $this->assertContainsOnlyInstancesOf(User::class, $userQuerries->allUsers());
    }

    public function test_if_an_user_can_get_by_his_name ()
    {
        $userQuerries = new UsersQuerries();
        $this->assertInstanceOf(User::class, $userQuerries->userByUsername('user'));
        $this->assertEquals(2, $userQuerries->userByUsername('user')->getUser_id());

        $this->assertInstanceOf(User::class, $userQuerries->userByUsername('admin'));
        $this->assertEquals(1, $userQuerries->userByUsername('admin')->getUser_id());
    }

    public function test_if_an_username_does_not_exist ()
    {
        $userQuerries = new UsersQuerries();
        $this->assertNull($userQuerries->userByUsername('manantena'));
        $this->assertNull($userQuerries->userByUsername('solo'));
        $this->assertNull($userQuerries->userByUsername('Randriantsoa'));
    }

    public function test_if_an_user_id_exist ()
    {
        $userQuerries = new UsersQuerries();
        $this->assertInstanceOf(User::class, $userQuerries->userById(1));
        $this->assertEquals('admin', $userQuerries->userById(1)->getUsername());
        $this->assertEquals('admin', $userQuerries->userById(1)->getUser_role());
        $this->assertInstanceOf(User::class, $userQuerries->userById(2));
    }

    public function test_if_an_user_id_does_not_exist ()
    {
        $userQuerries = new UsersQuerries();
        $this->assertNull($userQuerries->userById(3));
        $this->assertNull($userQuerries->userById(100));
    }


}