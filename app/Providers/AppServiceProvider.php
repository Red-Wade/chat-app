<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        if (env('APP_ENV') === 'staging') {
            URL::forceScheme('https');
        }

        if (env('APP_ENV') === 'development') {
            URL::forceScheme('https');
        }

        if (env('APP_ENV') === 'testing') {
            URL::forceScheme('https');
        }

        if (env('APP_ENV') === 'local') {
            URL::forceScheme('https');
        }
    }
}
