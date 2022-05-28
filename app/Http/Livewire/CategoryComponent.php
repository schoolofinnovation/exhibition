<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Franchise;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public  $pagesize;
    public  $sorting;
    public  $category_slug;

    use WithPagination;

    public function mount($category_slug)
    {
        $this->sorting="default";
        $this->pagesize=9;
        $this->category_slug = $category_slug;
    }

    public function store($franchise_id,$franchise_brand_name,$franchise_max_investment)
    {
        Cart::instance('cart')->add($franchise_id,$franchise_brand_name,1,$franchise_max_investment)->associate('App\Models\Franchise');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
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
        $category = Category::where('slug',$this->category_slug)->first();
        $category_id = $category->id;
        $category_industry = $category->industry;

        if($this->sorting=='date'){
            $franchises = Franchise::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="investment"){
            $franchises = Franchise::where('category_id',$category_id)->orderBy('max_investment','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="investment-asc"){
            $franchises = Franchise::where('category_id',$category_id)->orderBy('max_investment','ASC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="area"){
            $franchises = Franchise::where('category_id',$category_id)->orderBy('max_area','DESC')->paginate($this->pagesize); 
        }
        else if ($this->sorting=="area-asc"){
            $franchises = Franchise::where('category_id',$category_id)->orderBy('max_area','ASC')->paginate($this->pagesize); 
        }
        else{
            $franchises = Franchise::where('category_id',$category_id)->paginate($this->pagesize); 
        }

        if(Auth::check())
        {
               Cart::instance('wishlist')->store(Auth::user()->email);
        }
        $categories = Category::get();
        //$categories = Category::limit(10)->orderBy('industry', 'asc')->get();
        return view('livewire.category-component',['franchises'=> $franchises, 'category_industry'=> $category_industry , 'categories'=> $categories ])->layout('layouts.eblog');
    }
}
