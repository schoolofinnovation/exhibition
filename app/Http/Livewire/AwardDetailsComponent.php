<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Brand;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Pavillion;
use App\Models\Ticket;
use App\Models\Viewso;
use Spatie\CalendarLinks\Link;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Speaker;
use App\Models\Sponsership;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class AwardDetailsComponent extends Component
{
    public $slug;
    public $eventname;
    public $event_id;
    public $avgrating;
    public $productExpiryDate;
    public $tabi; 
    public $type_event;
    
    public function mount($slug, $tabi = null)
    {
       $this->slug = $slug;
       $this->tabi = $tabi;
    }

    public function post( Request $request, $slug)
    {
      $post = Event::where('slug',$slug)->published()->first();
      $postKey = 'post_'.$post->id;
      if($request->session()->has($postKey))
      {
          $post->increment('view_count');
          $request->session()->put ($postKey,1);
      }
    
      return view ('post', compact('post'));
    }


    public function insertEventToSess($id)
    {
      $event = Event::where('id', $id)->first();
      $poostKey = 'eventID';
      $eid = $event->id;
      Session()->put ($poostKey , $eid);
      return redirect()->route('event.product', ['slug' => $event->slug]);
    } 


    use WithPagination;

    public function render()
    {
        //$check = Cart::get();
        $event = Event::where('slug', $this->slug)->first();

        $poostKey = 'eventID';
        $eid = $event->id;
        Session()->put ($poostKey , $eid);

        $postKey = 'post_'.$event->id;
        if(!Session()->has($postKey))
        {
            $event->increment('view_count' , 10);
            Session()->put ($postKey , 1);
        }

        $graphic = new Viewso();
        $graphic->view_count = '1';
        $graphic->event_id = $event->id;
          if (Auth::check()) 
          { $graphic->user_id = Auth::user()->id; }
          //else
          //{ $graphic->user_id = '0' ; }
        $graphic->save();

      // $data = session()->all();
       //dd($data);
      
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

        //$franchises = Franchise::paginate(4);
        $awarde = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('event_id',$event->id)->where('entity','speaker')->get();
        $sponSer = Sponsership::where('admstatus','0')->where('status','1')->get();
        $premium = Franchise::where('status', 'active')->where('featured','premium')->limit(1);
        $pavillion = Pavillion::where('event_id',$event->id)->get();

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

         $eventbrand = Brand::where('event_id', $event->id)->limit('25')->get();
         $sponserbrand = Brand::where('event_id', $event->id)->limit('4')->get();

         $current = strtotime(Carbon::now());
         $to = strtotime($event->startdate);
         $from= strtotime($event->enddate);

        return view('livewire.award-details-component',['sponserbrand'=> $sponserbrand, 'to'=> $to, 'from'=> $from,'current'=> $current, 'eventbrand'=>$eventbrand, 'findEvent'=>$findEvent,'rateRating' => $rateRating,
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
        'ticketOrExhibit' => $ticketOrExhibit]);
    }
}
