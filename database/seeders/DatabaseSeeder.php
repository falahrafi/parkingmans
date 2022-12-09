<?php

namespace Database\Seeders;

use App\Models\ParkingSlotStatus;
use App\Models\VehicleOwner;
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
            VehicleOwnerSeeder::class,
            // VehicleSeeder::class,
            ParkingSlotStatusSeeder::class,
            ParkingSlotSeeder::class,
            BookingStatusSeeder::class,
            // BookingSeeder::class,
            PaymentStatusSeeder::class,
            PaymentSeeder::class,
            UserSeeder::class
        ]);
    }
}
