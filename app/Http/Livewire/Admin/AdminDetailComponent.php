<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Pavillion;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDetailComponent extends Component
{   public $slug;
    public $category_id;
    public $webo;
    public $link;


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

    public function EventLink($id, $webo) 
    {
      $eVent = Event::find($id);
      $eVent->link = $webo;

      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    use WithPagination;
    public function render()
    {
        $evento = Event::where('slug', $this->slug)->first();
        $pendingDetails = $evento;
        $catevent = Category::get();
        $category = Denco::where('event_id', $evento->id)->get();
        $event = Event::where('slug', $this->slug)->value('id');
        $pavillion = Pavillion::where('event_id',  $event)->get();
        return view('livewire.admin.admin-detail-component',['pavillion'=>$pavillion,'category'=>$category,'catevent'=>$catevent,'pendingDetails'=>$pendingDetails,'evento' => $evento])->layout('layouts.admin');
    }
}
