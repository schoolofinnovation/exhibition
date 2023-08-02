<?php

namespace App\Http\Livewire;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
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

    public function mount($eventype, $categry)
    {
       $this->categry = $categry;
       $this->eventype = $eventype;
       $this->sorting="default";
       $this->pagesize= 24;
       //$this->categ= $categ;
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
        
        $findcategryIDfromExpos = Expo::where('slug', $this->categry)->first();
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
            $exhibition = Denco :: where('expo_id', $findcategryIDfromExpos->id)->get(); 
          // $exhibition = Event::where('id', $exhibit)->orderBy('startdate','ASC')->get();
           // $exhibitionfinder = Event::where('id', [$seco->event_id])->where('eventype', $this->eventype)->paginate($this->pagesize); 
             
           //$find//upcomingexpo = $exhibition->get; 

        //dd($exhibit, $exhibition);
        }
        
        if(Auth::check())
        {
               Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $previous = url()->previous();
        return view('livewire.exhibition-category-component' ,['mytime'=>$mytime,'previous'=>$previous ,'exhibition'=>$exhibition ,'catego'=>$catego])->layout('layouts.eblog');
    }
}
