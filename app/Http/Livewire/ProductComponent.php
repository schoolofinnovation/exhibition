<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Ticket;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ProductComponent extends Component
{
    public $slug;
    public $eventname;
    public $item;
    public $step;
    public $totalSteps = 1;
    public $currentStep = 1;
    public $attributes_id = [];
    public $show = false;
    
    use WithPagination;
    public function mount($slug)
    {
       $this->slug = $slug;
    }


    public function increase($totalSteps)
    {
        $product = Cart::get($totalSteps);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($totalSteps , $qty);
    }

    public function decrease($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        
        Cart::instance('cart')->update($rowId , $qty);
    }

    public function store($edy_id,$edy_code,$edy_price)
    {
        Cart::instance('cart')->add($edy_id, $edy_code, 1, $edy_price)->associate('App\Models\Ticket');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        //return redirect()->route('checkout');       
    }

    
    
    public function render()
    {
        
        $event = Event::where('slug', $this->slug)->first();
        $test= $event->id;
        
        $ticke = Ticket::where('admstatus','0')->where('status','1')->where('event_id', $test)->get();
        
        return view('livewire.product-component',['event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
