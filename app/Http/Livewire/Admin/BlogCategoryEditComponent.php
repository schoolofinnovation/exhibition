<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cag;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class BlogCategoryEditComponent extends Component
{
    public $sector; 
    public $slug;
    public $desc;
    public $image;
    public $status;
    public $category_id;

    public $category; 
    public $tag;
    public $c_desc;
    public $icon;
   

    public function mount()
    {     
        $this->status = "1"; 
    }

  
    public function magcategorySlug()
    {
        $this->slug = Str::slug($this->category,'-');
      
    }

    Use WithFileUploads;

    public function Magadd() {
    
        $magaddcat = new Cag();
        $magaddcat->category = $this->category;
        $magaddcat->slug = $this->slug;
        $magaddcat->tag = $this->category;
        $magaddcat->c_desc = $this->c_desc;
        //$magaddcat->image = $this->image;
        //$magaddcat->icon = $this->icon;
        $magaddcat->status = $this->status;
       
        $magaddcat->save();
        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard');
    }
    public function render()
    {
        return view('livewire.admin.blog-category-edit-component')->layout('layouts.admin');
    }
}
