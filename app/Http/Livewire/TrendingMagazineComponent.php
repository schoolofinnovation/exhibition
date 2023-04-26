<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use App\Models\Mag;
use Carbon\Carbon;
use Livewire\Component;

class TrendingMagazineComponent extends Component
{
    public function render()
    {
        //$mytime = Carbon::today()->format("Y-m-d");
        $finder = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();
        $magazine = Mag::where('type','b')->where('status','1')->paginate(8);
        return view('livewire.trending-magazine-component',['finder'=>$finder,'magazine'=>$magazine]);
    }
}
