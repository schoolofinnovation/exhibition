<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Category;
use App\Models\Franchise;
use App\Models\Sector;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class HeaderComponent extends Component
{
    public $searchTerm;
   
    public $searchoo;
    public $Industry = null;
    public $Sector = null;
    public $def = null;
    public $ghi = null;
    public $service;
    
    public function updatedIndustry($category_id){
        $this->def = Sector::where('category_id', $category_id)->get();
    }

    public function updatedSector($sector_id){
        $this->ghi = Service::where('sector_id', $sector_id)->get();
    }

    public function render(){
        $searchTerm = '%'.$this->searchTerm . '%';
        $franchise = Franchise::where('brand_name','like',$searchTerm)
                              ->orWhere('brand_name','like',$searchTerm)
                              ->orWhere('max_investment','like',$searchTerm)
                              ->orWhere('max_area','like',$searchTerm)
                              ->orderBy('id','DESC')->get();


        $categories = Category::with('sector')->orderBy('industry','Asc')->get();
        $secto = Sector::orderBy('sector','ASC')->get();

        $abc = Category::with('sector')->orderBy('industry','Asc')->get();
        $award = Award::select('type')->groupBy('type')->orderBy('type','asc')->get();

        if(Auth::check()){ Cart::instance('wishlist')->restore(Auth::user()->email);}
        return view('livewire.header-component', [ 'award'=> $award,'abc'=>$abc,'secto'=>$secto,'categories'=>$categories,'franchise'=>$franchise]);

    }
}
