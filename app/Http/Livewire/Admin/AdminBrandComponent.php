<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBrandComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(5);
        
        return view('livewire.admin.admin-brand-component',['brands'=>$brands])->layout('layouts.eblog');
    }
}
