<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    public function index(UserService $userService) 
    {
        return $userService->listUsers();
    }
}
