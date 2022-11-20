<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Expo;
use Livewire\Component;

class AsideComponent extends Component
{
    
    public function render()
    {
        $brand = Brand::orderBy('brand_name','asc')->get();
        $categories = Category::with('sector','franchise')->orderBy('industry','asc')->paginate(15);
        $expo = Expo::where('type','expo')->get();
        return view('livewire.aside-component',['expo'=> $expo,'categories'=> $categories, 'brand'=> $brand]);
          
    }
}
