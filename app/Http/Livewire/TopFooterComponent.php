<?php

namespace App\Http\Livewire;

use App\Models\Info;
use Livewire\Component;

class TopFooterComponent extends Component
{
    public function render()
    {
        $infoo = Info::where('name','socialy')->first();
        return view('livewire.top-footer-component',['infoo'=>$infoo]);
    }
}
