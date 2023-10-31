<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */


    /*firt time request occure but not loaded so request is register here like call early*/
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    /*request occure and already booted then serve here like call late...*/
    public function boot(): void
    {

    }
}
