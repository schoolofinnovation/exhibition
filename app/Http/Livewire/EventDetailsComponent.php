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
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Days;

class EventDetailsComponent extends Component
{
    public $slug;
    public $eventname;
    public $event_id;
    public $avgrating;
    public $productExpiryDate;
    
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    use WithPagination;
    public function render()
    {   
        $event = Event::where('slug', $this->slug)->first();
        $findEvent = $event->id;
        $from = DateTime::createFromFormat('Y-m-d', ($event->startdate));
        $to = DateTime::createFromFormat('Y-m-d', ($event->enddate));
        $name = $event->eventname;
        $venue = $event->venue;
        $city = $event->city;
        $country = $event->country;
        $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);


        // $finrty = $detailProductprice->count();
        $currentTime = now()->format( 'H:m:s');
        $currentDate = now()->format( 'Y-m-d'); 

        //ticket
        $detailProductprice = Ticket::where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->where('expiry_date', '>=' , $currentDate)->where('expiry_time', '>=' , $currentTime)->get();
        $ticketOrExhibit = $detailProductprice->count();
        
        if($ticketOrExhibit == '0')
        {
          $productPrice = Ticket::where('admstatus','1')->where('status','0')->where('event_id', NULL)->min('price');
        }
        else
        {
          $productPrice = Ticket::where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->where('expiry_date', '>=' , $currentDate)->where('expiry_time', '>=' , $currentTime)->min('price');
        }
        

        $franchises = Franchise::paginate(4);
        $awarde = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('event_id',$event->id)->where('entity','speaker')->get();
        $sponSer = Sponsership::where('admstatus','0')->where('status','1')->get();
        $premium = Franchise::where('status', 'active')->where('featured','premium')->limit(1);
        $pavillion = Pavillion::where('admstatus','0')->where('status','1')->where('event_id',$event->id)->get();

        


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

         $commentedRates = Rate::where('admstatus','1')->where('status','1')->where('event_id', $event->id)->get();
         $rateRating = $commentedRates->pluck('rate');

         //$checkCommentop = Carbon::now();
        // $startdate = Carbon::createFromFormat('Y-m-d H:s:i', '2023-07-27 00:00:00');
         //$fromdate = strtotime($event->startdate);

         //$enddate = Carbon::createFromFormat('Y-m-d H:s:i', '2023-07-29 00:00:00');
         //$todate= strtotime($event->enddate);
         

         //$subtract = ( $todate - $fromdate);
         //$diffinhours = $enddate ->diffInHours($startdate);
         //$getodata = abs($subtract/3600);
         
         //$testi = strtotime($checkCommentop);

         //dd($testi, $checkCommentop, $startdate, $fromdate, $enddate,  $todate, $subtract, $diffinhours, $getodata );

        return view('livewire.event-details-component',['findEvent'=>$findEvent,'rateRating' => $rateRating,
                                                        'commentedRates' => $commentedRates,
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
