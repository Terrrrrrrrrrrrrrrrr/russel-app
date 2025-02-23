<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\UserService;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

//Service Container
Route::get('/waffle', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

//Service Providers
Route::get('/meet', function(UserService $userService) {
    return $userService->listUsers();
});

//Service Providers
Route::get('/poop', [UserController::class, 'index']);

//Facades
Route::get('/koko', function (UserService $userService) {
    return Response::json($userService->listUsers());
});


