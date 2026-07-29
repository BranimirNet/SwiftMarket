<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Logitech G Pro X Superlight',
            'slug' => 'logitech-g-pro-x-superlight',
            'description' => 'Professional wireless gaming mouse.',
            'price' => 129.99,
            'stock' => 15,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Razer DeathAdder V3',
            'slug' => 'razer-deathadder-v3',
            'description' => 'Ergonomic esports gaming mouse.',
            'price' => 79.99,
            'stock' => 20,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Razer BlackWidow V4',
            'slug' => 'razer-blackwidow-v4',
            'description' => 'Mechanical gaming keyboard.',
            'price' => 149.99,
            'stock' => 10,
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'HyperX Cloud III',
            'slug' => 'hyperx-cloud-iii',
            'description' => 'High quality gaming headset.',
            'price' => 99.99,
            'stock' => 25,
        ]);
    }
}