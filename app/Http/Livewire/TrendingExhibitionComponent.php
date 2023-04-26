<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Livewire\Component;

class TrendingExhibitionComponent extends Component
{
    public function render()
    {
        $mytime = Carbon::today()->format("Y-m-d");
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        $finder = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();

        return view('livewire.trending-exhibition-component',['evento'=>$evento, 'finder'=>$finder]);
    }
}
