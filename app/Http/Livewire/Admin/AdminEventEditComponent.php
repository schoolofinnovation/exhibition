<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Pavillion;
use App\Models\Sector;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEventEditComponent extends Component
{
    public $eventname;
    public $slug ;
   


    public $category_id;
    public $sector_id;
    public $expo_id;
    public $search_id;

    public $shtdesc;
    public $tagline;
    
    public $desc;
    public $email;
    public $phone;
    
    public $auidence;
    public $exhibitors;

    public $edition;
    public $startdate;
    public $enddate;
    public $event_id;

    public $eventype;
    public $city;
    public $venue;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    public function mount($event_id)
    {
        $fattribute = Event::find($event_id);
        $this->event_id = $fattribute->id;
        $this->eventname = $fattribute->eventname;
        $this->eventype = $fattribute->eventype;
       
        $this->city = $fattribute->city;
        $this->venue = $fattribute->venue;

        $this->startdate = $fattribute->startdate;
        $this->enddate = $fattribute->enddate;

        $this->category_id = $fattribute->category_id;
        $this->sector_id = $fattribute->sector_id;
        $this->expo_id = $fattribute->expo_id;
        $this->search_id = $fattribute->search_id;

        $this->shtdesc = $fattribute->shtdesc;
        $this->tagline = $fattribute->tagline;
        $this->exhibitors = $fattribute->exhibitors;
        $this->desc = $fattribute->desc;
        $this->email = $fattribute->email;
        $this->phone = $fattribute->phone;
        $this->auidence = $fattribute->auidence;
        $this->edition = $fattribute->edition;
        
    }

    

    public function updateEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->eventname =  $this->eventname;
        $fattribute->eventype =  $this->eventype;
      
        $fattribute->city =  $this->city;
        $fattribute->venue =  $this->venue;

        $fattribute->category_id =  $this->category_id;
        $fattribute->sector_id=  $this->sector_id;
        $fattribute->expo_id =  $this->expo_id;
        $fattribute->search_id =  $this->search_id;

        $fattribute->shtdesc =  $this->shtdesc;
        $fattribute->tagline =  $this->tagline;
        $fattribute->desc =  $this->desc;

        $fattribute->exhibitors =  $this->exhibitors;
        $fattribute->auidence =  $this->auidence;
      
        $fattribute->email =  $this->email;
        $fattribute->phone =  $this->phone;

        $fattribute->edition =  $this->edition;
        $fattribute->startdate =  $this->startdate;
        $fattribute->enddate =  $this->enddate;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        //return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::get();
        $searchtag = Expo::get();
        return view('livewire.admin.admin-event-edit-component',['searchtag'=>$searchtag,'pavillion'=>$pavillion,'sec'=>$sec,'cat'=>$cat]);
    }
}
