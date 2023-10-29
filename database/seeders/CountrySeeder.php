<?php

namespace Database\Seeders;

use App\Models\country;
use App\Models\User;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory([
            'name'=> 'Mushtaq'
        ])->create();

        country::factory()
            ->for($user)
            ->count(20)->create();

//        country::create([
//            'name'=> fake()->unique()->country,
//            'code'=> fake()->unique()->countryCode
//        ]);
    }
}
