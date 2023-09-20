<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthDataProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Getting auth details
        $this->app->bind('auth_data', function () {
            // Get the authenticated user or any authentication data
            return auth()->user();
            // return "senor";
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
