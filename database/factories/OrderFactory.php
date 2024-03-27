<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'quantity' => $this->faker->numberBetween(1, 100),
        'total_cost' => $this->faker->randomFloat(2, 10, 1000),
        'order_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        'delivery_date' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
