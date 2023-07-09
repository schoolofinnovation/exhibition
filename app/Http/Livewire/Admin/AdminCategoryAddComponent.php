<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cag;
use App\Models\Category;
use App\Models\Denco;
use App\Models\Expo;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminCategoryAddComponent extends Component
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
    public $searchTerm;

    public function mount()
    {
        $this->status = "1"; 
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->sector,'-');
    }

    public function magcategorySlug()
    {
        $this->slug = Str::slug($this->category,'-');
        $this->tag = Str::tag($this->category);
    }

    Use WithFileUploads;
    public function add() {
    
        $categ = new Sector();
        $categ->sector = $this->sector;
        $categ->slug = $this->slug;
        $categ->desc = $this->desc;
        //$categ->image = $this->image;
        $categ->status = $this->status;
        $categ->category_id = $this->category_id;
        $categ->save();
        session()->flash('message',' Congrats, Has been uploaded'); 
        return redirect()->route('admin.dashboard');
    }

    public function Magadd() {
    
        $magaddcat = new Cag();
        $magaddcat->category = $this->category;
        $magaddcat->slug = $this->slug;
        $magaddcat->tag = $this->tag;
        $magaddcat->c_desc = $this->c_desc;
        //$magaddcat->image = $this->image;
        //$magaddcat->icon = $this->icon;
        $magaddcat->status = $this->status;
       
        $magaddcat->save();
        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard');
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Expo::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function eventdelete($id)
    {   $job = Expo::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }


    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();


        $categor = Category::orderBy('industry','ASC')->get();

        $resultAdded = Expo::where('admstatus','1')->get();
        //$EventcountWithTag = Denco::
        $counteventWithCategory = Denco::where('expo_id', '$resultAdded->id')->count();

        return view('livewire.admin.admin-category-add-component', ['counteventWithCategory' => $counteventWithCategory, 'resultAdded' => $resultAdded, 'searchcat'=> $searchcat,'categor'=> $categor])->layout('layouts.admin');
    }
}
