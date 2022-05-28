<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Category;
use App\Models\Event;
use App\Models\Franchise;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EventComponent extends Component
{
    public function store($event_id,$event_eventname,$event_eventype)
    {
        Cart::instance('cart')->add($event_id,$event_eventname,18000,$event_eventype)->associate('App\Models\Event');
        //$this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        //return redirect()->route('checkout');
    }

    public function render()
    {   $industry = Category::get();
        $evento = Event::where('eventype','expo')->paginate(4);
        $awardo = Event::where('eventype','award')->get();
        $newlead = Event::where('eventype','award')->latest()->paginate(1);
                
        //$test = Franchise::where('id', '202')->get();
        //dd($evento);
        //DB::table('events')->insert([
        //['admstatus' => '1', 'user_id' =>'1', 'status' =>'1', 'eventype' =>'expo', 'eventname' => 'Toy Fair - New York' , 'slug' => 'toy-fair-new-york' , 'city' => 'New York' , 'country' => ' USA' , 'enddate' => '0000-00-00' , 'startdate' => '0000-00-00' ],
       

        return view('livewire.event-component',['newlead'=>$newlead,'awardo'=>$awardo,'industry'=>$industry,'evento'=>$evento]);
    }
}
