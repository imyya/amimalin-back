<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Providers\Sha512Hasher;
use Illuminate\Hashing\HashManager;
use Illuminate\Hashing\HashServiceProvider;

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
        Hash::extend('sha512', function () {
            return new Sha512Hasher();
        });

    }
}

// $this->app->extend(HashManager::class, function () {
//     return new Sha512Hasher();
// });

// $this->app['hash']->extend('sha512', function(){
//     return new Sha512Hasher();
// });