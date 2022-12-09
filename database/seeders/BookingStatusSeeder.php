<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking_statuses')->insert([
            ['id' => 0, 'status_name' => 'Processing'],
            ['id' => 1, 'status_name' => 'Approved'],
            ['id' => 2, 'status_name' => 'Rejected'],
            ['id' => 3, 'status_name' => 'Cancelled'],
            ['id' => 4, 'status_name' => 'Completed']
        ]);
    }
}
