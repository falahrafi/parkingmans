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
        return [
            'vehicle_category_id' => $this->faker->numberBetween(1, 5),
            'plate_number' => strtoupper($this->faker->bothify('? #### ???')),
            // 'plate_number' => $this->faker->policeNumber(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->numerify('images/vehicles/######.jpg'),
            'vehicle_owner_id' => VehicleOwner::factory()
        ];
    }
}
