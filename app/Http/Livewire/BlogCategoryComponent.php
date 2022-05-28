<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use App\Models\Mag;
use Livewire\Component;
use Livewire\WithPagination;

class BlogCategoryComponent extends Component
{
    //public  $pagesize;
    //public  $sorting;
    public  $category_slug;

    use WithPagination;

    public function mount($category_slug)
    {
        //$this->sorting="default";
        //$this->pagesize=9;
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $cagg = Cag::where('slug',$this->category_slug)->first();
        $category_id = $cagg->id;
        $mat = Mag::where('cag_id',$category_id)->get();
       
       

        //$cagg = Cag::get();
        //$category_industry = $category->industry;

        //$cat = Cag::paginate(7);
        //$mat = Mag::get();
        return view('livewire.blog-category-component', ['mat' =>$mat, 'cagg'=> $cagg])->layout('layouts.mag');
        
    }
}
