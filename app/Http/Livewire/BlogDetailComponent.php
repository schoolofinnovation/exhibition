<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use App\Models\Mag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogDetailComponent extends Component
{
    public $slug;
    

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function likePost($mag)
    {
        $user = Auth::user();
        $likePost = $user->likedMags()->where('mag_id', $mag)->count();
        if($likePost == 0){
            $user->likedMags()->attach($mag);
        }else{
            $user->likedMags()->detach($mag);
        }
        return redirect()->back();
    }

    public function post( Request $request, $slug)
    {
      $post = Mag::where('slug',$slug)->published()->first();
      $postKey = 'post_'.$post->id;
      if($request->session()->has($postKey)){
          $post->increment('views_count' , $incrementBy = 10);
          $request->session()->put ($postKey,1);
      }
    
      return view('post', compact('post'));
    }

    public function render()
    {   
        $mag = Mag::with('review')->where('slug',$this->slug)->orderBy('created_at','desc')->first();
        $postKey = 'post_'.$mag->id;
        if(!Session()->has($postKey)){
            $mag->increment('views_count');
            Session()->put ($postKey,1);}
       


        $relatedpost = Mag::where('cag_id',$mag->cag_id)->inRandomOrder()->get();
        $relpost = Mag::where('cag_id',$mag->cag_id)->inRandomOrder()->get();
        $cagg = Cag::orderBy('category','ASC')->paginate(10);
        return view('livewire.blog-detail-component',['relpost'=>$relpost, 'mag'=>$mag,'cagg'=> $cagg, 'relatedpost'=>$relatedpost])->layout('layouts.mag');
        
    }
}
