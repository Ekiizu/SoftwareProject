<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory;
use App\Models\Product;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $inventoryIds = Inventory::pluck('id')->toArray();

        return [
            'name' => $this->faker->sentence(6),
            'unit_price' => $this->faker->randomFloat(2, 1, 1000),
            // 'inventory_id' => $this->faker->randomElement($inventoryIds),
        ];
    }
}
