<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        country::create([
            'name'=> fake()->unique()->country,
            'code'=> fake()->unique()->countryCode
        ]);
    }
}
