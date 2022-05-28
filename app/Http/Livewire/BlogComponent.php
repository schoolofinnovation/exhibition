<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use App\Models\Mag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogComponent extends Component
{  

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

    public function post( Request $request,$slug)
    {
      $try = Mag::where('slug',$slug)->published()->first();
      $postKey = 'post_'.$try->id;
      if($request->session()->has($postKey))
      {
          $try->increment('views_count' , $incrementBy = 10);
          $request->session()->put ($postKey,1);
      }
    
      return view('post', compact('post'));
    }

    public function render()
    {
        $try = Mag::where('user_id','3')->get();
        

        $recent = Mag::orderBy('created_at','desc')->paginate(4);
        $posts = Mag::where('type','a')->paginate(6);
        $a = Mag::where('type','a')->paginate(1);
        $b = Mag::where('type','b')->paginate(1);
        $c = Mag::where('type','c')->paginate(2);
        $trending = Mag::where('type','a')->paginate(5);
        $poste = Mag::all();
        $cag = Cag::with('mag')->paginate(5);

        //new 
        $recomend = Mag::where('type','a')->paginate(3);
        $podcast = Mag::where('status','1')->paginate(3);
        $handpicked = Mag::where('status','1')->paginate(4);
        $handpick = Mag::where('status','1')->paginate(2);
        $highlight = Mag::where('status','1')->get();
        $latest = Mag::where('image','digital_4.jpg')->orderBy('created_at','DESC')->paginate(6);
        $slider = Mag::where('status','1')->paginate(4);
        $mostread = Mag::where('status','1')->paginate(4);
        $tittlemostread = Mag::where('status','1')->paginate(12);
        $oddsmall = Mag::where('status','1')->whereIn('id',[1,3,5,7,9,11])->paginate(4);
        $evensmall = Mag::where('status','1')->whereIn('id',[2,4,6,8,10,12])->paginate(4);
        //video section
        $video = Mag::where('status','1')->paginate(2);
        $videoo = Mag::where('status','1')->paginate(2);
        $videooo = Mag::where('status','1')->paginate(1);
      
        return view('livewire.blog-component',['try'=> $try,'videooo'=> $videooo,'video'=> $video,'videoo'=> $videoo,'oddsmall'=> $oddsmall,'evensmall'=> $evensmall,
                                               'tittlemostread'=> $tittlemostread,'mostread'=> $mostread,'slider'=> $slider,
                                               'latest'=> $latest,'highlight'=> $highlight,'handpick'=> $handpick,
                                               'handpicked'=> $handpicked,'podcast'=> $podcast,'recomend'=> $recomend,
                                               'cag'=> $cag,'poste'=> $poste,'posts'=> $posts,'recent'=> $recent,'a'=> $a,
                                               'b'=> $b,'c'=> $c,'trending'=> $trending])->layout('layouts.mag');
    }
}
