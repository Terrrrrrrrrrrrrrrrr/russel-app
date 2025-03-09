<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;
use App\Services\UserService;

class ProductServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
            [    
                'id' => 1,
                'name' => 'Apple',
                'category' => 'Fruits'
            ],
            [
                'id' => 2,
                'name' => 'Table',
                'category' => 'Furniture'
            ],
            [
                'id' => 3,
                'name' => 'Head',
                'category' => 'Human part'
            ]
            ];
            return new ProductService($products);
        });
        
    }

    
    public function boot(): void
    {
        view()->share('productKey', 'abc123');
    }
}
