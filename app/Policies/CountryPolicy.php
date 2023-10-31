<?php

namespace App\Policies;

use App\Models\country;
use App\Models\User;

class CountryPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, country $country)
    {
        if ($user->id === $country->user_id) {
            return true;
        }
        return false;

    }

}
