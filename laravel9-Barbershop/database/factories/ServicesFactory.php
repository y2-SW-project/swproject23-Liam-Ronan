<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class servicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'haircut_title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(10, 20),
            'duration' => $this->faker->time()
        ];
    }
}
