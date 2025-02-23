<?php

namespace App\Services;

class UserService
{
    protected $users;

    public function __construct($users)
    {
        $this->users = $users; // Fixed property name
    }

    public function listUsers()
    {
        return $this->users;
    }
};
