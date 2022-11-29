<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;


class CartComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function destroy($rowId)
    {
       $product = Cart::instance('cart')->get($rowId,);
       $qty = $product->qty - 1;
       Cart::instance('cart')->remove($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
    }

    public function render()
    {
        $tick = Ticket::get();
        //$sale = Sale::find(1);
       // return view('livewire.cartzilla-count-cart-component'
        return view('livewire.cart-component',['tick' => $tick]);
    }
}
