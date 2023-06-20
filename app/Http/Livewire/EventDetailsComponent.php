<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Pavillion;
use App\Models\Rate;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\Ticket;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\CalendarLinks\Link;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventDetailsComponent extends Component
{
    public $slug;
    public $eventname;
    public $event_id;
    public $avgrating;
    //public $producStartdate;
    public $productExpiryDate;

    
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    use WithPagination;
    public function render()
    {   
        $event = Event::where('slug', $this->slug)->first();
        //$start = $event->startdate;
        
        $from = DateTime::createFromFormat('Y-m-d', ($event->startdate));
        $to = DateTime::createFromFormat('Y-m-d', ($event->enddate));
        $name = $event->eventname;
        $venue = $event->venue;
        $city = $event->city;
        $country = $event->country;
       // dd($from);
        //dd($to);

        $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);

        $detailProductprice = Ticket::where('event_id', $event->id)->get();
        $productPrice = $detailProductprice->min('price');
       
        
        $franchises = Franchise::paginate(4);
        $awarde = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('event_id',$event->id)->where('entity','speaker')->get();
        $sponSer = Sponsership::where('admstatus','0')->where('status','1')->get();
        $premium = Franchise::where('status', 'active')->where('featured','premium')->limit(1);
        $pavillion = Pavillion::where('admstatus','0')->where('status','1')->where('event_id',$event->id)->get();

        $ticketOrExhibit = Ticket::where('event_id', $event -> id)->count();
//dd($ticketOrExhibit);

          if (Auth::check()) 
        {
            $rating = Rate::where('user_id', Auth::user()->id)->value('rate');
            $rate = Rate::where('user_id', Auth::user()->id)->value('event_id');
        }
          else
        {   
          $rate = Rate::get();
          $rating = Rate::get();
        }

        //dd($rating);
        $category = Denco::where('event_id', $event->id)->get();
         //dd($event);
        return view('livewire.event-details-component',[
                                                        'detailProductprice' => $detailProductprice,
                                                        'pavillion'=>$pavillion,'category'=>$category,
                                                        'rating'=> $rating,
                                                        'rate'=> $rate,
                                                        'productPrice' => $productPrice,
                                                        'link' => $link,
                                                        'premium'=> $premium,
                                                        'event' => $event,
                                                        'sponSer' => $sponSer,
                                                        'speaker' => $speaker,
                                                        'awarde' => $awarde,
                                                        'franchises' => $franchises,'ticketOrExhibit' => $ticketOrExhibit
                                                      ])->layout('layouts.eblog');
    }
}
