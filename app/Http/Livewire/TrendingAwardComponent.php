<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Livewire\Component;

class TrendingAwardComponent extends Component
{
    public $board;

    public function render()
    {
        $mytime = Carbon::today()->format("Y-m-d");
        $finder = Expo::where('admstatus','1')->where('status','1')->get();
        
        $awardo = Event::where('admstatus','1')->where('status','1')->where('eventype','award')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        return view('livewire.trending-award-component',['finder'=>$finder,'awardo'=>$awardo]);
    }
}
