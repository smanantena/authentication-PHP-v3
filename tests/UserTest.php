<?php

namespace Tests;

use App\Database\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_user_null ()
    {
        $user = new User();
        $this->assertNull($user->getUser_id());
        $this->assertNull($user->getUser_password());
        $this->assertNull($user->getUser_role());
        $this->assertNull($user->getUsername());
    }

    public function test_if_role_convesion_run ()
    {
        $this->expectNotToPerformAssertions();
    }
    
}
