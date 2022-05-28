<?php

namespace App\Http\Livewire\User;

use App\Models\Franchise;
use App\Models\Mag;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MybrandComponent extends Component
{
    
    public function removefromWishlist($franchise_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) 
        {
            if($witem->id == $franchise_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-component','refreshComponent');
                return;
            }
        }
    }

    
    public function render()
    {

        $user = Auth::user();

        $franchise = Franchise::where('user_id', $user->id)->get();
        $blog = Mag::where('user_id', $user->id)->get();

        if(Auth::check())
        {
               Cart::instance('wishlist')->store(Auth::user()->email);
        }
        return view('livewire.user.mybrand-component', ['user' => $user,'franchise' => $franchise, 'blog' => $blog ])->layout('layouts.eblog');
        
      
    }
}
