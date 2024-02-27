<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Sector;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    public $board = 'testing';
    use WithPagination;

    public function mount($board = null)
    {
        if(!$board)
        {
        $this->board = $board;
        }
        else
        {
            $this->board = $board;
        }
       
    }

    public function render()
    {
        //dd($this->board);
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
