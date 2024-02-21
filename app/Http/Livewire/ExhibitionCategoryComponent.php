<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ExhibitionCategoryComponent extends Component
{
    public $categ;
    public $categry;
    public $eventype;
    use WithPagination;
    public  $pagesize;
    public  $sorting;
    //public  $category_slug;
    public $board;
    public $time;
    

    public function mount($eventype, $categry,$time)
    {
       $this->categry = $categry;
       $this->eventype = $eventype;
       $this->sorting="default";
       $this->pagesize= 24;
       //$this->categ= $categ;
       $this->time = $time;
    }

    public function store($event_id,$event_eventname,$event_eventype)
    {
        Cart::instance('cart')->add($event_id,$event_eventname,18000,$event_eventype)->associate('App\Models\Event');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        return redirect()->route('checkout');
    }

    public function addtoWishlist($event_id,$event_brand_name,$event_max_investment)
    {
        Cart::instance('wishlist')->add($event_id,$event_brand_name,1,$event_max_investment)->associate('App\Models\event');
        $this->emitTo('wishlist-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }

    public function removefromWishlist($event_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) 
        {
            if($witem->id == $event_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        
        $findcategryIDfromExpos = Expo::where('slug', $this->categry)->value('id');
        //dd( $this->categry, $findcategryIDfromExpos->id );

        $catego = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();
        $mytime = Carbon::now()->format('Y-m-d');

        if($this->sorting == 'date'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->where('category_id', $this->categ)->orderBy('created_at','DESC')->paginate($this->pagesize); 
        }
        elseif ($this->sorting =='investment'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->where('category_id', $this->categ)->orderBy('startdate','DESC')->paginate($this->pagesize); 
        }
        elseif ($this->sorting =='area'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->where('category_id', $this->categ)->orderBy('startdate','ASC')->paginate($this->pagesize); 
        }
        else{
           // $exhibition = Denco :: where('expo_id', $findcategryIDfromExpos->id)->get(); 
            //$findsqnc = $exhibition->event()->orderBy('startdate','ASC')->get();
           // $collection = collect($exhibition);
            //$finer = $collection->event()->get();
           
            $exhibition = DB::table('events')
           ->join('dencos','dencos.event_id','=','events.id')
           ->join('expos','expos.id' ,'=','dencos.expo_id')
           ->select('events.id as EventName','expos.id as Category','events.startdate as EventDate')->where('expos.id', $findcategryIDfromExpos)
           ->orderBy('events.startdate','ASC')
           ->get();

          


        //    $result = DB::table('events')
        //    ->join('dencos','dencos.event_id','=','events.id')
        //    ->join('expos','expos.id' ,'=','dencos.expo_id')
        //    ->select('events.eventname as EventName','expos.tag as Category','events.startdate as EventDate')
        //    ->orderBy('events.startdate','ASC')
        //    ->get();

           

        //    $categoryresult = DB::table('events')
        //    ->join('dencos','dencos.event_id','=','events.id')
        //    ->join('expos','expos.id' ,'=','dencos.expo_id')
        //    ->select('expos.id as Category', DB::raw('count(events.id) as total'))
        //    ->orderBy('total','desc')
        //    ->groupBy('expos.id')
        //    ->get();

        //    $getnamecategoryresult = DB::table('events')
        //    ->join('dencos','dencos.event_id','=','events.id')
        //    ->join('expos','expos.id' ,'=','dencos.expo_id')
        //    ->select('expos.id as Category', DB::raw('count(events.id) as total'), DB::raw('GROUP_CONCAT(events.eventname) as Eventlo'),DB::raw('GROUP_CONCAT(events.startdate) as Evento'))
        //    ->orderBy('total','desc')
        //    ->groupBy('expos.id')
        //    ->get();

        //    $singlecategoryresult = DB::table('events')
        //    ->join('dencos','dencos.event_id','=','events.id')
        //    ->join('expos','expos.id' ,'=','dencos.expo_id')
        //    ->select('expos.id as Category', DB::raw('count(events.id) as total'), DB::raw('GROUP_CONCAT(events.startdate) as Evento'))
        //    ->orderBy('Evento','asc')
        //    ->groupBy('expos.id')
        //    ->having('expos.id','=',588)
        //    ->get();


           //dd($singlecategorywithdateresult, $result,  $categoryresult , $getnamecategoryresult, $singlecategoryresult);
           
        }
        
        if(Auth::check())
        {
               Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $previous = url()->previous();
        return view('livewire.exhibition-category-component' ,['mytime'=>$mytime,'previous'=>$previous ,'exhibition'=>$exhibition ,'catego'=>$catego])->layout('layouts.eblog');
    }
}
