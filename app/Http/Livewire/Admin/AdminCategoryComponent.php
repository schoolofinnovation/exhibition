<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Sector;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        //group
       $categ = Category::orderBy('updated_at','DESC')->paginate(10); 
       $catcount = Category::withcount('sector')->get();
       $sector = Sector::get();
       $categories = Category::get();
       $service = Service::get();

       $category = Category::orderBy('industry','DESC')->paginate(5);
       $sectorr = Sector::orderBy('sector','asc')->paginate(5);
       $business = Service::paginate(5);

        return view('livewire.admin.admin-category-component',['categories'=>$categories,'service'=>$service,'category'=>$category,'sectorr'=>$sectorr,'business'=>$business,'sector'=>$sector,'categ'=>$categ,'catcount'=>$catcount])->layout('layouts.eblog');
       
    }
}
