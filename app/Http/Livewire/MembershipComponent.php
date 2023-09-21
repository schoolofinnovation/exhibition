<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class MembershipComponent extends Component
{
    public function render()
    {
        $brand = Brand::whereNotNull('brand_logo')->get();
        return view('livewire.membership-component',['brand'=>$brand]);
    }
}
