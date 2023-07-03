<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MagazineComponent extends Component
{
   public $haveCouponCode;

    public function render()
    {
        return view('livewire.magazine-component');
    }
}
