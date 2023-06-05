<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Seller\HastagComponent;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Hashtag;
use App\Models\Pavillion;
use App\Models\Speaker;
use App\Models\Sponsership;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class AdminDetailComponent extends Component
{   public $slug;
    public $category_id;
    public $webo;
    public $link;
    public $formm;
    public $eventname;

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

    public function updateIDstatus($id) 
    {
      $eVent = Event::find($id);
      $eVent->reference = Str::uuid()->toString();
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

        $speaker = Speaker::where('event_id',  $event)->get();
        $pavillion = Pavillion::where('event_id',  $event)->get();
        $sponsership = Sponsership::where('event_id' , $event)->get();
        $participants = Brand::where('event_id' , $event)->get();
        $hastag = Hashtag::where('event_id' , $event)->get();
        //dd($hastag);
        
        return view('livewire.admin.admin-detail-component',['hastag'=>$hastag,'participants'=>$participants,'speaker'=>$speaker,'sponsership'=>$sponsership,'pavillion'=>$pavillion,'category'=>$category,'catevent'=>$catevent,'pendingDetails'=>$pendingDetails,'evento' => $evento])->layout('layouts.admin');
    }
}
