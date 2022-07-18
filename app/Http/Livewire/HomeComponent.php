<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();
        $latest_products = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $sale_products = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category);
        $categories = Category::whereIn('id', $cats)->get();
        $numberOfProducts = $category->no_of_products;
        $sale_timer = Sale::find(1);
        return view('livewire.home-component', [
            'sliders'=>$sliders,
            'latest_products' => $latest_products,
            'categories' => $categories,
            'numberOfProducts' => $numberOfProducts,
            'sale_products' => $sale_products, 
            'sale_timer' => $sale_timer,   
            ])->layout('layouts.base');
    }
}
