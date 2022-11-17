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
    public $auidence;
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
    public $category_id;
    public $exhibitors;
    public $sector_id;
    public $expo_id;
    public $search_id;
    public $max_pass;
    public $min_pass;
    public $desc;
    public $tagline;
    
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
        $newEvent = new Event();
        $newEvent->edition = $this->edition;
        $newEvent->eventype = $this->eventype;
        //$newEvent->desc = $this->desc;
        //$newEvent->tagline = $this->tagline;
        $newEvent->eventname = $this->eventname;
        $newEvent->auidence = $this->auidence;
        $newimage = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $newEvent->image = $newimage;

        $newEvent->slug = $this->slug;
        $newEvent->venue = $this->venue;
        $newEvent->city = $this->city;

        $newEvent->country = $this->country;
        //$newEvent->organizer = $this->organizer;
        //$newEvent->email = $this->email;
        //$newEvent->phone = $this->phone;

        $newEvent->level = $this->level;
        $newEvent->startdate = $this->startdate;
        $newEvent->enddate = $this->enddate;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->user_id = Auth::user()->id;

        //$newEvent->category_id = $this->category_id;
        //$newEvent->exhibitors = $this->exhibitors;
        //$newEvent->sector_id = $this->sector_id;
        //$newEvent->expo_id = $this->expo_id;
        //$newEvent->search_id = $this->search_id;
        //$newEvent->max_pass = $this->max_pass;
        //$newEvent->min_pass = $this->min_pass; 
        $newEvent->save();
        return redirect()->route('seller.dashboard');
        session()->flash('message','Thanks for sharing your review.');

    }

    public function render()
    {
        $category = Category::get();

        return view('livewire.seller.seller-event-component',['category'=> $category])->layout('layouts.admin');
    }
}
