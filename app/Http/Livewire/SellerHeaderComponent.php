<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Lead;
use App\Models\Mag;
use App\Models\Rate;
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

        $event = Event::where('user_id', Auth::user()->id)->get();
        $rating = Rate::where('user_id', Auth::user()->id)->get();
        $evont = Event::where('user_id', Auth::user()->id)->pluck('id')->all();
        $lead = Lead::whereIn('event_id', $evont)->orderBy('id','desc')->get();

        return view('livewire.seller-header-component',['lead'=> $lead,'rating'=> $rating,'event'=> $event,'franchise'=> $franchise,'review'=> $review,'likecoun'=> $likecoun,'brands'=> $brands,'user'=> $user]);
    }
}
