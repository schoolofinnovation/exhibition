<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Livewire\Component;

class ConferenceComponent extends Component
{
    public function render()
    {
        $mytime = Carbon::today()->format("Y-m-d");
        $conference = Event::where('admstatus','1')->where('status','1')->where('eventype','conference','summit')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        $finder = Denco::select('expo_id')->groupBy('expo_id')->get();

        return view('livewire.conference-component',['conference'=>$conference, 'finder'=>$finder]);
    }
}
