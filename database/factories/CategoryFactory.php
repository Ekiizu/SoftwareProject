<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'category_id' => $faker->numberBetween(1, 100),
            'category_name' => $faker->unique()->word,
            'vat_rate' => $faker->randomFloat(2, 0, 25),
        ];
    }
}
