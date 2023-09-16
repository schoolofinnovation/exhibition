<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBrandComponent extends Component
{
    use WithPagination;

    public $brand_id;
    
    public function mount($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function render()
    {
        $legandary = Brand::find($this->brand_id);

        //$brands = Brand::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.admin-brand-component',['legandary'=>$legandary])->layout('layouts.eblog');
    }
}
