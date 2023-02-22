<?php

namespace App\Http\Livewire\Seller;

use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SellerEventComponent extends Component
{
    public $edition;
    public $eventype;
    public $eventname;
    
    public $image;
    public $slug;
    public $venue;
    public $city;
    public $country;
    public $organizer;
    public $email;
    public $phone;
    public $level;
    public $startdate; 
    public $enddate;
    public $status;
    public $admstatus;
    public $user_id;

    
    
    //public $abbrevation, $tag(Short desc),
    
    Use WithFileUploads;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    public function mount()
    {
        $this->admstatus= 0;  
        $this->status = 1; 
        $this->country = 'india';
        $this->level = 4;
    }

    public function add()
    {
        $this->validate([

            'edition'=>'required', 
            'eventype'=>'required',
            'eventname'=>'required',
            //'auidence'=>'required',
            'image'=>'required',
            'slug'=>'required',
            'venue'=>'required',
            'city'=>'required',
            'country'=>'required',
            'level'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
            'status'=>'required',
            'admstatus'=>'required',
        ]);

        
        $newEvent = new Event();
        $newEvent->edition = $this->edition;
        $newEvent->eventype = $this->eventype;
        $newEvent->eventname = $this->eventname;
        //$newEvent->auidence = $this->auidence;
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $newEvent->image = $newimage;
        $newEvent->slug = $this->slug;
        $newEvent->venue = $this->venue;
        $newEvent->city = $this->city;
        $newEvent->country = $this->country;
        $newEvent->level = $this->level;
        $newEvent->startdate = $this->startdate;
        $newEvent->enddate = $this->enddate;
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->user_id = Auth::user()->id;
        $newEvent->save();
        $event_id = $newEvent->id;
        return redirect()->route('seller.event.attribute', [ $event_id]);
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function render()
    {
        $category = Category::get();

        return view('livewire.seller.seller-event-component',['category'=> $category])->layout('layouts.admin');
    }
}
