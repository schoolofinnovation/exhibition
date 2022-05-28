<?php

namespace App\Http\Livewire;

use App\Models\Franchise;
use Livewire\Component;

class MembershipComponent extends Component
{
    public function render()
    {
        $brand = Franchise::get();
        return view('livewire.membership-component',['brand'=>$brand]);
    }
}
