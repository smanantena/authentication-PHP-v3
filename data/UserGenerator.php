<?php

namespace Data;

class UserGenerator
{
    public static function hashPassword (string $password) : string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verifyHashPassword (string $password, string $hash) : string
    {
        return (password_verify($password, $hash)) ? ("Password match !") : ("Password don't match.");
    }
}
