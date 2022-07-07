<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show Home Page
Route::get('/', HomeComponent::class)->name('home');

// Show Shop Page
Route::get('/shop', ShopComponent::class)->name('shop');

// Show Cart Page
Route::get('/cart', CartComponent::class)->name('cart');

// Show Checkout Page
Route::get('/checkout', CheckoutComponent::class)->name('checkout');