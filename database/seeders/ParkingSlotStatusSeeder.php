<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkingSlotStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parking_slot_statuses')->insert([
            ['id' => 0, 'status_name' => 'Available'],
            ['id' => 1, 'status_name' => 'Occupied'],
            ['id' => 2, 'status_name' => 'Reserved']
        ]);
    }
}
