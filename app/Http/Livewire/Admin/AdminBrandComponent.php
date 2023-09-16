<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Bcontact;
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

        $brando = Bcontact::whereNull('brand_id')->orderBy('id','DESC')->get();
        return view('livewire.admin.admin-brand-component',['legandary'=>$legandary,  'brando' => $brando])->layout('layouts.eblog');
    }
}
