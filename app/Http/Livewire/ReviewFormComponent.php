<?php

namespace App\Http\Livewire;

use App\Models\Franchise;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReviewFormComponent extends Component
{
    public $franchise_id;
    public $rating;
    public $comment;
    public $pros;
    public $cons;
    public $status;
    public $name;
    public $email;
    public $user_id;
    public $user_utype;

    public function mount()
    {
        $this->status="1";
    }

    public function franchise()
    {
    return $this->belongsto(Franchise::class,'franchise_id');
    }

    public function updated($fields)
    {
    $this->validateOnly($fields,[
        
        'rating' => 'required',
        'comment' => 'required',
        'pros' => 'required',
        'cons' => 'required',
         ]);
    }


    public function add() 
    { 
        $this->validate([            
            'rating' => 'required',
            'comment' => 'required',
            'pros' => 'required',
            'cons' => 'required',
        ]);

          $review = new Review();        
          $review->comment = $this->comment;
          $review->pros = $this->pros; 
          $review->cons = $this->cons;
          $review->rating = $this->rating;
          $review->status = $this->status;
          $review->franchise_id = $franchise->id;
          $review->user_id = Auth::user()->id;
          
          //$resumeName = Carbon::now()->timestamp. '.' . $this->resume->extension();
          //$this->resume->storeAs('resumes',$resumeName);
          //$review->resume = $resumeName;

          $review->save();
          session()->flash('message','Thanks for sharing your value review.'); 
          //return redirect()->route('admin.job');
      }


    public function render()
    {
        return view('livewire.review-form-component');
    }
}
