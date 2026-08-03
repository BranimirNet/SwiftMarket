<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])
    ->name('home');


Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');


Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.show');


Route::get('/category/{category:slug}', [ProductController::class, 'category'])
    ->name('products.category');


Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');


Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->name('cart.add');


Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');


Route::post('/cart/increase/{id}', [CartController::class, 'increase'])
    ->name('cart.increase');


Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])
    ->name('cart.decrease');


Route::view('/about', 'products.about')
    ->name('about');


Route::get('/products/search', [ProductController::class, 'search'])
    ->name('products.search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


require __DIR__.'/auth.php';