<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Gaming Mouse',
            'slug' => 'gaming-mouse',
        ]);

        Category::create([
            'name' => 'Keyboards',
            'slug' => 'keyboards',
        ]);

        Category::create([
            'name' => 'Headsets',
            'slug' => 'headsets',
        ]);

        Category::create([
            'name' => 'Monitors',
            'slug' => 'monitors',
        ]);

        Category::create([
            'name' => 'Gaming Chairs',
            'slug' => 'gaming-chairs',
        ]);
    }
}