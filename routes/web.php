<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminProductAddComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminProductEditComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;


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

// Show search results
Route::get('/search', SearchComponent::class)->name('search');

// For Normal User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{slug}', AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminProductAddComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_slug}', AdminProductEditComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.slider.home');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.slider.add');
    Route::get('/admin/slider/edit/{slider_id}', AdminEditHomeSliderComponent::class)->name('admin.slider.edit');
});
