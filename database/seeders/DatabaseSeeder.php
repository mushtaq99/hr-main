<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\country;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        User::factory()->count(10)->create();
        country::factory()->count(10)->create();
        $this->call([RolesAndPermissionsSeeder::class]);
//        country::factory()->count(20)->create();
//        $this->call([
//            CountrySeeder::class
//        ]);
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
