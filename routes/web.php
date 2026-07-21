<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//ADMIN
Route::get('/admins/dashboard', [PageController::class, 'adminsDashboard'])->name('admins.dashboard');
Route::get('/admins/inventory', [PageController::class, 'adminsInventory'])->name('admins.inventory');
Route::get('/admins/realtime', [PageController::class, 'adminsRealtime'])->name('admins.realtime');
Route::get('/admins/orders', [PageController::class, 'adminsOrders'])->name('admins.orders');



//CUSTOMER
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
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/category/{id}', [PageController::class, 'shop'])->name('category.show');
Route::get('/product/{id}', [PageController::class, 'products'])->name('product.show');
Route::post('/cart/add/{id}', fn () => redirect()->route('cart'))->name('cart.add');

    