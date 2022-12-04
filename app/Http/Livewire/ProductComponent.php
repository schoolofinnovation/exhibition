<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Ticket;
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
        $ticke = Ticket::where('admstatus','0')->where('status','1')->where('event_id', $test)->get();
        
        return view('livewire.product-component',['previous'=> $previous , 'event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
