<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Inventory;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        Product::factory()->create([
            'name' => 'Dairy',
            'vat_rate' => 23,


        ]);

        Product::factory()->create([
            'name' => 'Fruit',
            'vat_rate' => 10,


        ]);

        Product::factory()->create([
            'name' => 'Vegetables',
            'vat_rate' => 50,


        ]);
        Product::factory()->create([
            'name' => 'Meat',
            'vat_rate' => 23,


        ]);

        Product::factory()->create([
            'name' => 'Fish',
            'vat_rate' => 23,


        ]);
    }

}
