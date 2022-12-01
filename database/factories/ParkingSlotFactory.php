<?php

namespace Database\Factories;

use App\Models\ParkingSlot;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public $slotNum = 0;

    public function definition()
    {
        $this->slotNum++;
        
        return [
            'slot_number' => $this->slotNum,
            'status_id' => $this->faker->numberBetween(0, 2)
        ];
    }
}
