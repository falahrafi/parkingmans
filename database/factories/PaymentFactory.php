<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_id' => Booking::factory(),
            'amount' => $this->faker->randomElement([10000.00, 50000.00, 100000.00, 150000.00, 200000.00]),
            'method' => $this->faker->randomElement(['Credit Card', 'Bank Transfers', 'Cash']),
            'status_id' => $this->faker->numberBetween(0, 3),
            'notes' => $this->faker->sentence(),
            'paid_by' => $this->faker->name(),
            'paid_date' => $this->faker->dateTimeThisYear()
        ];
    }
}
