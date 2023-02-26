<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'duration' => $this->faker->time(),
            'service' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomDigit()
        ];
    }
}
