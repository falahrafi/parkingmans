<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;
use App\Models\VehicleOwner;
use App\Models\ParkingSlot;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => Vehicle::all()->random()->id,
            'vehicle_owner_id' => function (array $attributes) {
                return Vehicle::find($attributes['vehicle_id'])->vehicle_owner_id;
            },
            'parking_slot_id' => ParkingSlot::all()->random()->id,
            'duration' => $this->faker->randomElement([2,4,8,24,48,72]),
            'status_id' => $this->faker->numberBetween(0, 4),
            'notes' => $this->faker->sentence(),
            'booked_date' => $this->faker->dateTimeThisYear()
        ];
    }
}
