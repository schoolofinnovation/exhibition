<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Ticket;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductReviewComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function destroy($rowId)
    {
       $product = Cart::instance('cart')->get($rowId,);
        $qty = $product->qty - 1;
       Cart::instance('cart')->remove($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
    }

    public function destroyAll()
    {
       Cart::instance('cart')->destroy();
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','All Items has been removed');
    }

    public function increaseQuantity($rowId)
    {
       $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
       Cart::instance('cart')->update($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
       $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
       Cart::instance('cart')->update($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
    }

    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();
        $test= $event->id;
        $previous = url()->previous();
        $ticke = Ticket::where('admstatus','0')->where('status','1')->where('event_id', $test)->get();
        return view('livewire.product-review-component',['previous'=> $previous , 'event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
