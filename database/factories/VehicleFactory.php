<?php

namespace Database\Factories;

use App\Models\VehicleOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vC = $this->faker->numberBetween(1, 5);
        return [
            'vehicle_category_id' => $vC,
            'plate_number' => strtoupper($this->faker->bothify('? #### ???')),
            // 'plate_number' => $this->faker->policeNumber(),
            'description' => $this->faker->sentence(),
            'image' => 'v' . $vC . '.jpg',
            'vehicle_owner_id' => VehicleOwner::factory()
        ];
    }
}
