<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ProductController::class, 'index']);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->name('cart.add');

Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::post('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');

Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';
