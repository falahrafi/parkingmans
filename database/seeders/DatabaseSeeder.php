<?php

namespace Database\Seeders;

use App\Models\ParkingSlotStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VehicleCategorySeeder::class,
            VehicleSeeder::class,
            ParkingSlotStatusSeeder::class,
            ParkingSlotSeeder::class
        ]);
    }
}
