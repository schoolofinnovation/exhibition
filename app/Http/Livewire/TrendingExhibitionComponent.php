<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Viewso;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrendingExhibitionComponent extends Component
{
    public $board;

    public function insertEventToSess($id)
    {
      $event = Expo::where('id', $id)->first();
      $evento = new Viewso();
      if (Auth::check()) 
        { $evento->user_id = Auth::user()->id; }
      else
      { $evento->user_id = 'NULL' ; }

      $evento->view_count = '1';
      $evento->requestedPage = url()->route('coi.exhibitioncategory',['eventype' => 'expo', 'categry' => $event->slug]);
      $evento->redirecTlink = url()->current();
      $evento->save();
      return redirect()->route ('coi.exhibitioncategory',['eventype' => 'expo', 'categry' => $event->slug]);
    } 

    public function render()
    {
     
        $mytime = Carbon::today()->format ("Y-m-d");
        //$lasttime = Carbon::today()->addDays(90)->format ("Y-m-d");
        //dd($lasttime);
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
       
        //$finder = Denco::where('admstatus','1')->where('status','1')->select('expo_id')->groupBy('expo_id')->get();
        
        $finder = Expo::where('admstatus','1')->where('status','1')->get();
  
        return view('livewire.trending-exhibition-component',['evento'=>$evento, 'finder'=>$finder]);
    }
}
