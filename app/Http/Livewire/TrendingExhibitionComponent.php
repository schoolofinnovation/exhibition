<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Livewire\Component;

class TrendingExhibitionComponent extends Component
{
    public function render()
    {
        $mytime = Carbon::today()->format ("Y-m-d");
        //$lasttime = Carbon::today()->addDays(90)->format ("Y-m-d");
        //dd($lasttime);
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10);
       
        $finder = Denco::select('expo_id')->groupBy('expo_id')->get();

        return view('livewire.trending-exhibition-component',['evento'=>$evento, 'finder'=>$finder]);
    }
}
