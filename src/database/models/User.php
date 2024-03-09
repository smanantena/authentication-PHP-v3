<?php

namespace App\Database\Models;

class User
{
    private int $user_id;
    private string $username;
    private string $user_password;
    private string|int $user_role;

    public function __construct()
    {
        $role = [1 => 'admin', 2 => 'user'];
        if (isset($this->user_role)) {
            if (intval($this->user_role)) {
                $this->user_role = (array_key_exists($this->user_role, $role)) ? $role[$this->user_role] : 'user';
            }
        }
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id() : ?int
    {
        return ($this->user_id) ?? null;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername() : ?string
    {
        return ($this->username) ?? null;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of user_password
     */ 
    public function getUser_password() : ?string
    {
        return ($this->user_password) ?? null;
    }

    /**
     * Set the value of user_password
     *
     * @return  self
     */ 
    public function setUser_password($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    /**
     * Get the value of user_role
     */ 
    public function getUser_role() : ?string
    {
        return ($this->user_role) ?? null;
    }

    /**
     * Set the value of user_role
     *
     * @return  self
     */ 
    public function setUser_role($user_role)
    {
        $this->user_role = $user_role;

        return $this;
    }
}
