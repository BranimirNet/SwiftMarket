<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
        [
            'product_id' => 1,
            'image' => 'logitech-g-pro-x-superlight.jpg',
        ],
        [
            'product_id' => 2,
            'image' => 'razer-deathadder-v3.jpg',
        ],
        [
            'product_id' => 3,
            'image' => 'razer-blackwidow-v4.jpg',
        ],
        [
            'product_id' => 4,
            'image' => 'hyperx-cloud-iii.jpeg',
        ],
    ];

    foreach ($images as $image) {
        Image::create($image);
    }
    }
}