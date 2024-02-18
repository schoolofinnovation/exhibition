<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Category;
use App\Models\Denco;
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
    public $board;
    
    public function store($event_id,$event_eventname,$event_eventype)
    {
        Cart::instance ('cart')-> add($event_id,$event_eventname,18000,$event_eventype)->associate('App\Models\Event');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        return redirect()->route('checkout');
    }

    public function render()
    {   
        $industry = Category::get();
        $mytime = Carbon::today()->format("Y-m-d");
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
        
        $newlead = Event::where('admstatus','1')->where('status','1')->where('eventype','award')->latest()->paginate(1);

        //$test = Franchise::where('id', '202')->get();
        //dd($awardo);
        //DB::table('cags')->insert([
        //['admstatus' => '1','user_id' =>'1','status' =>'1','name' =>'expo', 'organisation' => 'Buildings India' , 'slug' => 'buildingsindia.png', 'image' => 'Exhibitions India Group' ],
    
        //$finder = Denco::select('expo_id')->groupBy('expo_id')->get();
        //$categoryo = Denco::select('expo_id')->groupBy('expo_id')->get();
        //$categoryo = Denco::all()->groupBy('expo_id')->count('expo_id');
        //$cate = $categoryo->count();
        //dd($categoryo);
       
        $finder = Expo::where('admstatus','1')->where('status','1')->get();

        
        return view('livewire.event-component', ['finder' => $finder, 'newlead'=>$newlead,'industry'=>$industry,'evento'=>$evento])->layout('layouts.eblog');
    }
}
