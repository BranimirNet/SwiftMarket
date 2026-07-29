<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'stock',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function image()
    {
        return $this->hasOne(Image::class, 'product_id');
    }
}