<?php

namespace App\Http\Livewire;

use App\Models\Franchise;
use App\Models\Sector;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class SectorComponent extends Component
{
    public  $pagesize;
    public  $sorting;
    public  $sector_slug;
    use WithPagination;

    public function mount($sector_slug)
    {
        $this->sorting="default";
        $this->pagesize=9;
        $this->sector_slug = $sector_slug;
    }

    public function addtoWishlist($franchise_id,$franchise_brand_name,$franchise_max_investment)
    {
        Cart::instance('wishlist')->add($franchise_id,$franchise_brand_name,1,$franchise_max_investment)->associate('App\Models\Franchise');
        $this->emitTo('wishlist-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }
    
    public function removefromWishlist($franchise_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) 
        {
            if($witem->id == $franchise_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $category = Sector::where('slug', $this->sector_slug)->first();
        $category_id = $category->id;
        $category_industry = $category->sector;

        if($this->sorting=='date'){
            $franchises = Franchise::where('sector_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="investment"){
            $franchises = Franchise::where('sector_id',$category_id)->orderBy('max_investment','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="investment-asc"){
            $franchises = Franchise::where('sector_id',$category_id)->orderBy('max_investment','ASC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="area"){
            $franchises = Franchise::where('sector_id',$category_id)->orderBy('max_area','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="area-asc"){
            $franchises = Franchise::where('sector_id',$category_id)->orderBy('max_area','ASC')->paginate($this->pagesize); 
        }
        else{
            $franchises = Franchise::where('sector_id',$category_id)->paginate($this->pagesize); 
        }

        return view('livewire.sector-component',['franchises'=> $franchises, 'category_industry' => $category_industry])->layout('layouts.eblog');
    }
}
