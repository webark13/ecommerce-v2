<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sort;
    public $pageSize;

    public function mount()
    {
        $this->sort = 'default';
        $this->pageSize = 12;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('cart');
    }

    use WithPagination;

    public function render()
    {
        if ($this->sort == 'date') {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else if ($this->sort == 'price') {
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        } else if ($this->sort == 'price-desc') {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        } else {
            $products = Product::paginate($this->pageSize);
        }

        $categories = Category::all();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
