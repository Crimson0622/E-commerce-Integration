<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/customer-orders', [PageController::class, 'customerOrders'])->name('customer-orders');
Route::get('/orders', [PageController::class, 'orders'])->name('orders');
Route::get('/inventory', [PageController::class, 'inventory'])->name('inventory');
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/category/{id}', [PageController::class, 'shop'])->name('category.show');
Route::get('/product/{id}', [PageController::class, 'products'])->name('product.show');
Route::post('/cart/add/{id}', fn () => redirect()->route('cart'))->name('cart.add');
