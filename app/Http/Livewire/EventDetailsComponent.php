<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Speaker;
use App\Models\Sponsership;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\CalendarLinks\Link;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;

class EventDetailsComponent extends Component
{
    public $slug;
    public $eventname;

    public function mount($slug)
    {
       $this->slug = $slug;
    }
    use WithPagination;

    public function store($event_id,$event_eventname,$event_max_pass)
    {
        Cart::instance('cart')->add($event_id,$event_eventname,1,$event_max_pass)->associate('App\Models\Event');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Ticket has been booked in cart');
        return redirect()->route('event.product');
    }


    public function render()
    {   
        $event = Event::where('slug',$this->slug)->first();
        $start=$event->startdate;
        $from =  DateTime::createFromFormat('Y-m-d',$start);
        $to = DateTime::createFromFormat('Y-m-d', ($event->enddate));
        $name = $event->eventname;
        $venue = $event->venue;
        $city = $event->city;
        $country = $event->country;
       

        $link = Link::create($name, $from , $to)
            ->description($name)
            ->address($venue, $city, $country);
    
        //dd($link);
        
        $franchises = Franchise::get();
        $awarde = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();
        $speaker = Speaker::where('admstatus','0')->where('status','1')->where('entity','speaker')->get();
        $sponSer = Sponsership::where('admstatus','0')->where('status','1')->get();
        $premium = Franchise::where('status', 'active')->where('featured','premium')->limit(1);

        return view('livewire.event-details-component',['link'=>$link,'premium'=>$premium,'event'=>$event,'sponSer'=>$sponSer,'speaker'=>$speaker,'awarde'=>$awarde,'franchises'=>$franchises]);
    }
}
