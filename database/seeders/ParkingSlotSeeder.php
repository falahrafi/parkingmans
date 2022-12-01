<?php

namespace Database\Seeders;

use App\Models\ParkingSlot;
use Illuminate\Database\Seeder;

class ParkingSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParkingSlot::factory()
            ->count(15)
            ->create();
    }
}
