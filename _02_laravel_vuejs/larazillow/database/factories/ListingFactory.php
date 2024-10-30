<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'beds' => $this->faker->numberBetween(1, 7),
            'baths' => $this->faker->numberBetween(1, 7),
            'area' => $this->faker->numberBetween(30, 400),
            'city' => $this->faker->city(),
            'code' => $this->faker->postcode(),
            'street' => $this->faker->streetName(),
            'street_nr' => $this->faker->numberBetween(10, 200),
            'price' => $this->faker->numberBetween(50_000, 2_000_000),
        ];
    }
}
