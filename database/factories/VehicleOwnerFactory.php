<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleOwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'fullname' => $this->faker->name(),
            'avatar' => $this->faker->numerify('images/avatar/######.jpg'),
            'contact' => $this->faker->numerify('08##########'),
            'email' => $this->faker->freeEmail()
        ];
    }
}
