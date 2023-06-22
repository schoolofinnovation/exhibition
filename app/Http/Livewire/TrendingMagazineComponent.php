<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use App\Models\Mag;
use App\Models\Magazine;
use Carbon\Carbon;
use Livewire\Component;

class TrendingMagazineComponent extends Component
{

    public $board;
    public function render()
    {
        //$mytime = Carbon::today()->format("Y-m-d");
        $finder = Expo::where('admstatus','1')->where('status','1')->get();
        $magazine = Magazine::get();
        return view('livewire.trending-magazine-component',['finder'=>$finder,'magazine'=>$magazine]);
    }
}
