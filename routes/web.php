<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

// Shop + Product routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/category/{slug}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Checkout routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

// Orders (for logged-in users)
Route::middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});

Route::get('/commercial', function () {
    return view('commercial');
})->name('commercial');

Route::get('/residential', function () {
    return view('residential');
})->name('residential');

Route::get('/retail', function () {
    return view('retail');
})->name('retail');

Route::view('/projects/factories',  'projects.factories')->name('projects.factories');
Route::view('/projects/workspace',  'projects.workspace')->name('projects.workspace');
Route::view('/projects/showroom',   'projects.showroom')->name('projects.showroom');
Route::view('/projects/apartments', 'projects.apartments')->name('projects.apartments');
Route::view('/projects/homes',      'projects.homes')->name('projects.homes');


Route::get('/subcategories/{category}', function ($category) {
    return \App\Models\Subcategory::where('category_id', $category)->get();
});

Route::get('/products/{subcategory}', function ($subcategory) {
    return \App\Models\Product::where('subcategory_id', $subcategory)->get();
});
Route::view('/contact', 'contact')->name('contact');

