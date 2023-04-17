<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Franchise;
use App\Models\Mag;
use App\Models\Speaker;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EventComponent extends Component
{
    public function store($event_id,$event_eventname,$event_eventype)
    {
        Cart::instance ('cart')-> add($event_id,$event_eventname,18000,$event_eventype)->associate('App\Models\Event');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        return redirect()->route('checkout');
    }

    public function render()

    {   $industry = Category::get();
        $mytime = Carbon::today()->format("Y-m-d");
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        $awardo = Event::where('admstatus','1')->where('status','1')->where('eventype','award')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        $conference = Event::where('admstatus','1')->where('status','1')->where('eventype','conference','summit')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
        
        $newlead = Event::where('admstatus','1')->where('status','1')->where('eventype','award')->latest()->paginate(1);

        //Network & Social & Speakers   
        //$mytime = Carbon::tomorrow()->format("Y-m-d");
        //where('admstatus','0')->where('status','1')->where('entity','speaker')
             
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('entity','speaker')->get();
        $network = Speaker::where('admstatus','1')->where('status','1')->where('entity','network')->get();
        $social = Speaker::where('admstatus','1')->where('status','1')->where('entity','social')->get();
        $magazine = Mag::where('type','b')->where('status','1')->paginate(8);

        //$test = Franchise::where('id', '202')->get();
        //dd($awardo);
        //DB::table('cags')->insert([
        //['admstatus' => '1','user_id' =>'1','status' =>'1','name' =>'expo', 'organisation' => 'Buildings India' , 'slug' => 'buildingsindia.png', 'image' => 'Exhibitions India Group' ],
    
        $finder = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();

       
        return view('livewire.event-component', ['conference' => $conference ,'finder' => $finder,'magazine'=>$magazine, 'speaker'=>$speaker,'network'=>$network,'social'=>$social,'newlead'=>$newlead,'awardo'=>$awardo,'industry'=>$industry,'evento'=>$evento])->layout('layouts.eblog');
    }
}
