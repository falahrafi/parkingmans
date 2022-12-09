<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_statuses')->insert([
            ['id' => 0, 'status_name' => 'Pending'],
            ['id' => 1, 'status_name' => 'Completed'],
            ['id' => 2, 'status_name' => 'Expired'],
            ['id' => 3, 'status_name' => 'Cancelled']
        ]);
    }
}
