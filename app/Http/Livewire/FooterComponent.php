<?php

namespace App\Http\Livewire;

use App\Models\Info;
use Livewire\Component;


class FooterComponent extends Component
{
    public function render()
    {
        $infos = Info::where('name','socialy')->first();
        return view('livewire.footer-component',['infos'=>$infos]);
    }
}
