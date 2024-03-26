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
        'quantity' => $faker->numberBetween(1, 100),
        'total_cost' => $faker->randomFloat(2, 10, 1000), 
        'order_date' => $faker->dateTimeBetween('-1 year', 'now'),
        'delivery_date' => $faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
