<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'post_code' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'birthday' => $this->faker->dateTimeBetween('-80 years', '-20years')->format('Y-m-d'),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'store_id' => rand(1, 3)
        ];
    }
}
