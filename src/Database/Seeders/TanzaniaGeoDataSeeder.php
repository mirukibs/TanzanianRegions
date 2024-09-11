<?php

namespace TanzanianRegions\Database\Seeders;

use Illuminate\Database\Seeder;
use TanzanianRegions\Models\Region;
use TanzanianRegions\Models\District;

class TanzaniaGeoDataSeeder extends Seeder
{
    public function run()
    {
        $regions = config('tanzania.regions');

        foreach ($regions as $regionName => $districts) {
            $region = Region::create(['name' => $regionName]);

            foreach ($districts as $districtName) {
                $region->districts()->create(['name' => $districtName]);
            }
        }
    }
}
