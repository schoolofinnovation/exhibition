<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishlistComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function destroy($rowId)
    {
       $franchise = Cart::instance('wishlist')->get($rowId,);
        $qty = $franchise->qty - 1;
       Cart::instance('wishlist')->remove($rowId , $qty);
       $this->emitTo('wishlist-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
    }

    public function render()
    {
        if(Auth::check())
        {
               Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        
        return view('livewire.wishlist-component');
    }
}
