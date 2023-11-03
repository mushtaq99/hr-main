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

        // bellow for is for create all country info only for uers with name mention above
        country::factory()
            ->for($user)
            ->count(1)->create();

//        country::create([
//            'name'=> fake()->unique()->country,
//            'code'=> fake()->unique()->countryCode
//        ]);
    }
}
