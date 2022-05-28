<?php

namespace App\Http\Livewire;

use App\Models\Franchise;
use App\Models\Want;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RecommendComponent extends Component
{
    public function render()
    {
        $category = Want::where('user_id', Auth::user()->id)->first();
        $newuser = Want::where('user_id', Auth::user()->id)->get();
        
        
            $expadnuser = $category->doing;
            $category_id = $category->category_id;
            $sector_id = $category->sector_id;
            $service_id = $category->service_id;
            $location_id = $category->zone;
            $state_id = $category->state;
            $maxinvestment = $category->maxinvestment;

            $brand = Franchise::where('category_id',$category_id)->get();
            $bsector = Franchise::where('sector_id',$sector_id)->get();
            $bservice = Franchise::where('service_id',$service_id)->get();
            $blocation = Franchise::where('location',$location_id)->get();
            $bstate = Franchise::where('state',$state_id)->get();
            $maxinves = Franchise::where('max_investment',$maxinvestment)->get();
        return view('livewire.recommend-component',['expadnuser' => $expadnuser, 
                                                      'maxinves' => $maxinves, 
                                                         'brand' => $brand,
                                                       'newuser' => $newuser,
                                                      'category' => $category])->layout('layouts.eblog');
    }
}
