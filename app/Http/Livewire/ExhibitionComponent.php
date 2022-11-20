<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ExhibitionComponent extends Component
{
    use WithPagination;
    public  $pagesize;
    public  $sorting;
    //public  $category_slug;
    public $eventype;
    public $categ;
    
    public function mount($eventype)
    {
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
        $catego = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();
        $mytime = Carbon::now();

        if($this->sorting == 'date'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->orderBy('created_at','DESC')->paginate($this->pagesize); 
        }
        elseif ($this->sorting =='investment'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->orderBy('startdate','DESC')->paginate($this->pagesize); 
        }
        elseif ($this->sorting =='area'){
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->orderBy('startdate','ASC')->paginate($this->pagesize); 
        }
        else{
            $exhibition = Event ::where('eventype', $this->eventype)->whereDate('enddate', '>=',$mytime)->where('admstatus','1')->where('status','1')->paginate($this->pagesize); 
        }
        
       

        if(Auth::check())
        {
               Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return view('livewire.exhibition-component',['exhibition'=>$exhibition ,'catego'=>$catego])->layout('layouts.eblog');
    }
}
