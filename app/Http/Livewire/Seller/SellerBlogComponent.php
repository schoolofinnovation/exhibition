<?php

namespace App\Http\Livewire\Seller;

use App\Models\Cag;
use App\Models\Mag;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SellerBlogComponent extends Component
{
    public $slug;
    public $tittle;
    public $desc;
    public $s_desc;
    public $tag;
    public $cag_id;
    public $status;
    public $type;
    public $image;
    public $user_id;

    public function mount()
    {
        $this->type="f";  
        $this->status = "0"; 
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->tittle,'-');
    }

    Use WithFileUploads;
    public function add() {
    
        $blog = new Mag();
        $blog->tittle = $this->tittle;
        $blog->slug = $this->slug;
        //$blog->image = $this->image;
        $blog->desc = $this->desc;
        $blog->s_desc = $this->s_desc;
        $blog->cag_id = $this->cag_id;
        $blog->tag = $this->tag;
        $blog->user_id = Auth::user()->id;
        $blog->type = $this->type;
        $blog->status = $this->status;

        $blog->save();
        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('seller.dashboard');
        
    }


    public function render()
    {
        $category = Sector::get();
        return view('livewire.seller.seller-blog-component',['category'=> $category])->layout('layouts.admin');
    }
}
