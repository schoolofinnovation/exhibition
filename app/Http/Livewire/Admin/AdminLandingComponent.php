<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class AdminLandingComponent extends Component
{
    public function render()
    {

        $event = Event::get();
        $mytime = now()->format('Y-m-d');
        $evento = Event::where('status','1')->where('admstatus','1')->get();
        $eventd = Event::where('enddate', '<' , $mytime)->get();
        // dd($event->count(), $evento->count(), $eventd, count($eventd) );
        return view('livewire.admin.admin-landing-component',['event'=>$event,'evento'=>$evento,'eventd'=>$eventd,]);
    }
}
