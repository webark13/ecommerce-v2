<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\SearchComponent;

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

// Show Product Details Page
Route::get('/product/{slug}', ProductDetailsComponent::class)->name('product.details');

// Show Products according to Category
Route::get('/category/{slug}', CategoryComponent::class)->name('category');

Route::get('/search', SearchComponent::class)->name('search');

/*
 * Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 

*/

// For Normal User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
