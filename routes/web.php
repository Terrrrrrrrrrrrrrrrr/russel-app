<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\UserService;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Response;

//Parameter
Route::get('/post/{post}/comment/{comment}', function (string $postId, string $comment) { 
    return "Post ID: " . $postId. " - Comment: " . $comment;
});

Route::get('/post/{id}', function (string $id) { 
    return $id;
})->where('id', '[0-9]+');

Route::get('/search/{search}', function (string $search) { 
    return $search;
})->where('search', '.*');

//Named Route or Route Alias
Route::get('/test/route', function () { 
    return route('test-route');
})->name('test-route');

Route::middleware(['user-middleware']) -> group(function () { 
    Route::get('route-middleware-group/first', function (Request $request) {
        echo 'first';
    });

    Route::get('route-middleware-group/second', function (Request $request) { 
        echo 'second';
    });

});

//Route ->Controller
Route::controller(UserController::class)->group(function() {
    Route::get('/users', 'index');
    Route::get('/users/first', 'first');
    Route::get('/users/{id}', 'show');
});

// CSRF
route::get('/token', function (Request $request){
    return view('token');
});

route::post('/token', function (Request $request){
    return $request->all();
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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


