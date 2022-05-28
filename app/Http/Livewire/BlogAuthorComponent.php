<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use App\Models\Mag;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogAuthorComponent extends Component
{
    public $slug;
   
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $mag = Mag::with('review')->where('slug',$this->slug)->first();
        $user = Auth::user();
        $author = User::where('slug',$this->slug)->first();
        $rank = Mag::withcount('review')->where('user_id', $author->id)->orwhere('status','1')->orderBy('review_count','desc')->paginate(2);
        $cag = Cag::paginate(5);
        $likecoun = Mag::where('user_id',$user->id)->count();
       
       
       return view('livewire.blog-author-component',['likecoun'=>$likecoun,'user'=> $user,'mag'=> $mag,'rank'=> $rank,'author'=> $author,'cag'=> $cag])->layout('layouts.mag');
    
    
    }
}
