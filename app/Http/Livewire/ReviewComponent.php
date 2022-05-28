<?php

namespace App\Http\Livewire;

use App\Models\Review;
use App\Models\Franchise;
use Livewire\Component;

class ReviewComponent extends Component
{
    

    public function render()
    {
        $review = Review::orderby('created_at','desc')->limit(3)->get();

        return view('livewire.review-component',['review'=> $review]);

    }
}
