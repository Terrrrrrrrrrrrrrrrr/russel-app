<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app){
            $users = [
                [
                    'name' => 'Waffle',
                    'gender' => 'Male'
                ],
                [
                    'name' => 'Kage',
                    'gender' => 'Male'
                ]
                ];
                return new UserService($users);
        });
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
