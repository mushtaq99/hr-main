<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get("database/data/district.json");
        $disrticts = json_decode($json);
        foreach ($disrticts as $key => $value) {
            District::create([
                "name" => $value->name,
                "operational" => $value->operational,
                "code" => $value->code,
                "operational_district_id" => $value->operational_district_id,
                "division" => $value->division,

            ]);
        }
    }
}
