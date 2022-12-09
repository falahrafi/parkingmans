<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\VehicleOwner;
use Illuminate\Database\Seeder;

class VehicleOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleOwner::factory()
            ->count(15)
            ->hasVehicles(1)
            ->create();

        VehicleOwner::factory()
            ->count(5)
            ->hasVehicles(2)
            ->create();

        VehicleOwner::factory()
            ->count(2)
            ->hasVehicles(3)
            ->create();
    }
}
