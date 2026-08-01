<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Gaming Mouse',
                'slug' => 'gaming-mouse',
            ],
            [
                'name' => 'Gaming Keyboard',
                'slug' => 'gaming-keyboard',
            ],
            [
                'name' => 'Gaming Headset',
                'slug' => 'gaming-headset',
            ],
            [
                'name' => 'Gaming Monitor',
                'slug' => 'gaming-monitor',
            ],
            [
                'name' => 'Gaming Chair',
                'slug' => 'gaming-chair',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name']]
            );
        }
    }
}