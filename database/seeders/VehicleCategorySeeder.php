<?php

namespace Database\Seeders;

use App\Models\VehicleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_categories')->insert([
            ['category_name' => 'Car'],
            ['category_name' => 'Motorcycle'],
            ['category_name' => 'Bicycle'],
            ['category_name' => 'Truck'],
            ['category_name' => 'Bus'],
        ]);
    }
}
