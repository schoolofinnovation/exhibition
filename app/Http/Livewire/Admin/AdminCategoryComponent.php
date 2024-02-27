<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Expo;
use App\Models\Indsec;
use App\Models\Sector;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    public $board;
    public $category;

    public $category_id;
    public $subtag_id;
    public $user_id;
    public $status;
    public $admstatus;
    
    use WithPagination;

    public function mount($board = null , $category = null)
    {
          $this->board = $board;
          $this->category = $category;
          $this->status = '1';
          $this->admstatus = '1';
    }

    public function categoryaddedtoheadcategory($id)
    {   //$jobo = Expo::find($id);
        $job = new Indsec();
        $job->category_id = Category:: where('slug', $this->category)->value('id');
        $job->subtag_id = $id;
        $job->user_id = Auth::user()->id;
        $job->status = $this->status;
        $job->admstatus = $this->admstatus;
        //dd($job);
        $job->save();
        session()->flash('message','info has been deleted Successfully');
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


       $industryhead = Category::get();
       $subcategory = Indsec::get();
       $resultAdded = Expo::where('admstatus','1')->get();
        return view('livewire.admin.admin-category-component',['resultAdded' => $resultAdded,'subcategory' => $subcategory,'industryhead' => $industryhead,'categories'=>$categories,'service'=>$service,'category'=>$category,'sectorr'=>$sectorr,'business'=>$business,'sector'=>$sector,'categ'=>$categ,'catcount'=>$catcount])->layout('layouts.eblog');
       
    }
}
