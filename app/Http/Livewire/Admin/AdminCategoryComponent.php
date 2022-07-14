<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\withPagination;

class AdminCategoryComponent extends Component
{
    use withPagination;
    public function render()
    {
        $categories = Category::paginate(3);
        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.base');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully');
    }
}
