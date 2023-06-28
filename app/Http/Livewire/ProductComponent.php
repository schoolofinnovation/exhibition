<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Expr\FuncCall;

class ProductComponent extends Component
{
    public $slug;
    public $eventname;
    public $item;
    
    use WithPagination;
    
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function store($edy_id,$edy_code,$edy_price)
    {
        Cart::instance('cart')->add($edy_id, $edy_code, 1, $edy_price)->associate('App\Models\Ticket');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
    }

    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();
        $test= $event->id;
        $previous = url()->previous();

        $currentTime = now()->format( 'H:m:s');
        $currentDate = now()->format( 'Y-m-d');
       
        

        $ticke = Ticket::where('admstatus','1')->where('status','1')->where('event_id', $test)->where('expiry_date', '>=' , $currentDate)->where('expiry_time', '>=' , $currentTime)->get();
        //dd($currentTime,$currentDate, $ticke);
        $tickeo = Ticket::where('admstatus','1')->where('status','0')->where('event_id', NULL)->get();
        
        return view('livewire.product-component', ['tickeo'=> $tickeo ,'previous'=> $previous , 'event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
