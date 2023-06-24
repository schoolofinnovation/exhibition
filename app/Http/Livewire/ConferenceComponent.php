<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Livewire\Component;

class ConferenceComponent extends Component
{
    public $board;
    public function render()
    {
        $mytime = Carbon::today()->format("Y-m-d");
        $conference = Event::where('admstatus','1')->where('status','1')->where('eventype','conference')->orWhere('eventype','summit')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        $finder = Expo::where('admstatus','1')->where('status','1')->get();

        return view('livewire.conference-component',['conference'=>$conference, 'finder'=>$finder]);
    }
}
