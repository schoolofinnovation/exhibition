<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeComponent extends Component
{
    public function likePost($mag)
    {
        $user = Auth::user();
        $likePost = $user->likedMags()->where('mag_id','$mag')->count();
        if($likePost == 0){
            $user->likedMags()->attach($mag);
        }else{
            $user->likedMags()->detach($mag);
        }
        $this->emitTo('like-component','refreshComponent');
        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.like-component');
    }
}
