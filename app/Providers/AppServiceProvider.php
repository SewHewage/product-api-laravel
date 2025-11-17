<?php

namespace App\Providers;

use App\Repositories\All\Product\ProductInterface;
use App\Repositories\All\Product\ProductRepository;
use App\Repositories\All\User\UserInterface;
use App\Repositories\All\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
    }
}
