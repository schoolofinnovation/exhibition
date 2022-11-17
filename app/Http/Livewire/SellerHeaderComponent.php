<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Franchise;
use App\Models\Mag;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerHeaderComponent extends Component
{
    public function render()
    {
        $franchise = Franchise::with('review')->where('user_id', Auth::user()->id)->get();
        $review = Review::where('user_id', Auth::user()->id)->get();
        $user = Auth::user();
        $likecoun = Mag::where('user_id',$user->id)->count();
        $brands = Brand::where('user_id', Auth::user()->id)->get();

        return view('livewire.seller-header-component',['franchise'=> $franchise,'review'=> $review,'likecoun'=> $likecoun,'brands'=> $brands,'user'=> $user]);
    }
}
