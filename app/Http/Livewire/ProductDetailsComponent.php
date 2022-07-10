<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public $slug;
        
        public function mount($slug)
        {
            $this->slug = $slug;
        }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $products_popular = Product::inRandomOrder()->limit(4)->get();
        $products_related = Product::where('category_id', $product->id)->inRandomOrder()->limit(5)->get();
        return view('livewire.product-details-component', [
            'product' => $product,
            'products_popular' => $products_popular,
            'products_related' => $products_related,
            ])->layout('layouts.base');
    }
}
