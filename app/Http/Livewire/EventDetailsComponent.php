<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Speaker;
use App\Models\Sponsership;
use Livewire\Component;
use Livewire\WithPagination;

class EventDetailsComponent extends Component
{
    
    use WithPagination;
    public function render()
    {   
        $franchises = Franchise::get();
        $awarde = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();
        //$event = Event::where('slug',$this->slug)->first();
        $speaker = Speaker::where('admstatus','0')->where('status','1')->get();
        $sponSer = Sponsership::where('admstatus','0')->where('status','1')->get();
        return view('livewire.event-details-component',['sponSer'=>$sponSer,'speaker'=>$speaker,'awarde'=>$awarde,'franchises'=>$franchises]);
    }
}
