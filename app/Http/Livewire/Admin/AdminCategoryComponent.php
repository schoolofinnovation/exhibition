<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Expo;
use App\Models\Indsec;
use App\Models\Sector;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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

    public $industryo;
    public $industry;
    public $slug;
    
    use WithPagination;

    public function mount($board = null , $category = null)
    {
          $this->board = $board;
          $this->category = $category;
          $industrydefinio = Category:: where('slug', $this->category)->get();
          $this->industry = $industrydefinio->industry;
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

    public function eventdelete($id)
    { 
        $job = Indsec::find($id);
        $job->delete();
    }

    public function newcategory()
    {
      $updatecategory = new Category();
      $updatecategory->industry = $this->industryo;
      $updatecategory->slug = Str::slug($updatecategory->industry,'-');
      $updatecategory->save();
      return redirect()->route('all.category');
    }

    public function updatecategory()
    {
      //$updatecategory = Category::get();
      $updatecategory = Category::find($this->industry);
      $updatecategory->industry = $this->industry;
      $updatecategory->slug = Str::slug($updatecategory->industry,'-');
      $updatecategory->save();
      return redirect()->route('all.category');
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
