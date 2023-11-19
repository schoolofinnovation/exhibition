<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use App\Models\Viewso;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TrendingDealerDistributionComponent extends Component
{
    public $board;

    public function insertEventToSess($id)
    {
      $event = Expo::where('id', $id)->first();
      $evento = new Viewso();
      if (Auth::check()) 
        { $evento->user_id = Auth::user()->id; }
      else
      { $evento->user_id = NULL ; }

      $evento->view_count = '1';
      $evento->requestedPage = url()->route('coi.exhibitioncategory',['eventype' => 'expo', 'categry' => $event->slug]);
      $evento->redirecTlink = url()->current();
      $evento->save();
      return redirect()->route ('coi.exhibitioncategory',['eventype' => 'expo', 'categry' => $event->slug]);
    } 


    public function render()
    {
        $current = strtotime(Carbon::today());
        $mytime = Carbon::today()->format ("Y-m-d");
        //$lasttime = Carbon::today()->addDays(90)->format ("Y-m-d");
        //dd($lasttime);
        $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
       
        //$finder = Denco::where('admstatus','1')->where('status','1')->select('expo_id')->groupBy('expo_id')->get();
        
        $finder = Expo::where('admstatus','1')->where('status','1')->get();

        
          //  $result = DB::table('events')
          //  ->join('dencos','dencos.event_id','=','events.id')
          //  ->join('expos','expos.id' ,'=','dencos.expo_id')
          //  ->select('events.eventname as EventName','expos.tag as Category','events.startdate as EventDate')
          //  ->orderBy('events.startdate','ASC')
          //  ->get();

          //  $categoryresult = DB::table('events')
          //  ->join('dencos','dencos.event_id','=','events.id')
          //  ->join('expos','expos.id' ,'=','dencos.expo_id')
          //  ->select('expos.tag as Category', DB::raw('count(events.id) as total'))
          //  ->orderBy('total','desc')
          //  ->groupBy('expos.tag')
          //  ->get();

           $getnamecategoryresult = DB::table('events')
           ->join('dencos','dencos.event_id','=','events.id')
           ->join('expos','expos.id' ,'=','dencos.expo_id')
           ->select('expos.id as Category', DB::raw('count(events.id) as total'), DB::raw('GROUP_CONCAT(events.eventname) as Eventlo'),DB::raw('GROUP_CONCAT(events.startdate) as Evento'))
           ->orderBy('total','desc')
           ->groupBy('expos.id')
           ->get();

          //  $singlecategoryresult = DB::table('events')
          //  ->join('dencos','dencos.event_id','=','events.id')
          //  ->join('expos','expos.id' ,'=','dencos.expo_id')
          //  ->select('expos.id as Category', DB::raw('count(events.id) as total'), DB::raw('GROUP_CONCAT(events.startdate) as Evento'))
          //  ->orderBy('Evento','asc')
          //  ->groupBy('expos.id')
          //  ->having('expos.id','=',588)
          //  ->get();


          //dd( $categoryresult, $getnamecategoryresult);
  
        return view('livewire.trending-dealer-distribution-component', ['getnamecategoryresult'=>$getnamecategoryresult,'current'=>$current,'evento'=>$evento, 'finder'=>$finder]);
    }
}