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
            'name' => 'Gaming Mice',
            'slug' => 'gaming-mice',
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