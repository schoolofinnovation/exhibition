<?php

namespace App\Http\Livewire\Seller;

use App\Models\Cag;
use App\Models\Category;
use App\Models\Mag;
use App\Models\Sector;
use Carbon\Carbon;
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
    
        $this->validate([
            'tittle'=>'required | max:255', 
            'image'=>'required',
            'desc'=> 'required',
            's_desc' => 'required',
            'cag_id' => 'required',
            'tag' => 'required',
        ]);

        $blog = new Mag();
        $blog->tittle = $this->tittle;
        $blog->slug = $this->slug;

        //$blog->image = $this->image;
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $blog->image = $newimage;

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
        $category = Category::get();
        $subcategory = Sector::get();
        $category_type = Cag::get();


        return view('livewire.seller.seller-blog-component',['subcategory'=> $subcategory, 'category_type' => $category_type ,'category'=> $category])->layout('layouts.admin');
    }
}
