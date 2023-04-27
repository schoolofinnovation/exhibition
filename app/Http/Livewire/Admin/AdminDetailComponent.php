<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDetailComponent extends Component
{   public $slug;
    public $category_id;


    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function catUpdate($id, $category_id)
    {
        $updateDetials = Event::where('slug', $this->slug)->first();
        $updateDetials = $updateDetials->find($id);
        $updateDetials->category_id = $category_id; 
         dd($updateDetials);   
        $updateDetials->save();
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    use WithPagination;
    public function render()
    {
        $evento = Event::where('slug', $this->slug)->first();
        $pendingDetails = $evento;
        $catevent = Category::get();
        return view('livewire.admin.admin-detail-component',['catevent'=>$catevent,'pendingDetails'=>$pendingDetails,'evento' => $evento])->layout('layouts.admin');
    }
}
