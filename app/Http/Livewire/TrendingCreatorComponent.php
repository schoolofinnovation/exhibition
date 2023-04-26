<?php

namespace App\Http\Livewire;

use App\Models\Speaker;
use Livewire\Component;

class TrendingCreatorComponent extends Component
{
    public function render()
    {
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('entity','speaker')->get();
        $network = Speaker::where('admstatus','1')->where('status','1')->where('entity','network')->get();
        $social = Speaker::where('admstatus','1')->where('status','1')->where('entity','social')->get();
        return view('livewire.trending-creator-component',['speaker'=> $speaker,'network'=> $network,'social'=> $social]);
    }
}
