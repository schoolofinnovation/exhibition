<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class AsideComponent extends Component
{
    
    public function render()
    {
        $brand = Brand::orderBy('brand_name','asc')->get();
        $categories = Category::with('sector','franchise')->orderBy('industry','asc')->paginate(15);
        return view('livewire.aside-component',['categories'=> $categories, 'brand'=> $brand]);
          
    }
}
