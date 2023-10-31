<?php

namespace App\Providers;

use App\Models\country;
use App\Models\User;
use App\Policies\CountryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use phpDocumentor\Reflection\Types\True_;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        country::class => CountryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        // super admin here first call this one if true skip the other one
       /* Gate::before(function (User $user){
            if($user->id == 3){
                return true;
            }
            return  null;

        });*/
        Gate::define('update_post', function (User $user, country $country) {

            if ($user->id === $country->user_id) {
                return true;
            }

            return false;

        });
    }
}
