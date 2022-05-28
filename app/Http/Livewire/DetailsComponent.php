<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Franchise;
use App\Models\Review;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;
    public $contacct;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($franchise_id,$franchise_brand_name,$franchise_max_investment)
    {
        Cart::instance('cart')->add($franchise_id,$franchise_brand_name,1,$franchise_max_investment)->associate('App\Models\Franchise');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        return redirect()->route('checkout');
    }

    
    public function likePost($franchise)
    {
        $user = Auth::user();
        $likePost = $user->likedFranchises()->where('franchise_id', $franchise)->count();
        if($likePost == 0){
            $user->likedFranchises()->attach($franchise);
        }else{
            $user->likedFranchises()->detach($franchise);
        }
        return redirect()->back();
    }

    public function export()
    {
        return Storage::disk('exports')->download('export.csv');
    }

    public function render()
    {
        $franchise = Franchise::with('brand')->where('slug',$this->slug)->first();
        $postKey = 'post_'.$franchise->id;
        if(!Session()->has($postKey)){
            $franchise->increment('review_status');
            Session()->put ($postKey,1);}

        $related_franchise = Franchise::where('category_id', $franchise->category_id)->inRandomOrder()->get();
        $categories = Category::get();
        $brand = brand::get();
        
        if(Auth::check())
        {
          Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        
        return view('livewire.details-component',['brand'=>$brand,
                                                  'franchise'=>$franchise, 
                                                  'categories' => $categories, 
                                                  'related_franchise' => $related_franchise])->layout('layouts.eblog');
        
    }
}
