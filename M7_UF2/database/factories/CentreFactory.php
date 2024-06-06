<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centres>
 */
class CentreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //
            'name' => fake()->text(30),
            'address' => fake()->text(50),
            'cp' => fake()->numberBetween(8010, 8020),
            'city' => fake()->name(15)
        ];
    }
}


