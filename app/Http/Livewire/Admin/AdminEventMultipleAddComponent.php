<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Hashtag;
use App\Models\Sector;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEventMultipleAddComponent extends Component
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

    public $organizer;
    public $edition;
    public $startdate;
    public $enddate;
    public $event_id;
    public $link;

    public $eventype;
    public $city;
    public $venue;

    public $formm;
    public $image;
    public $status;
    public $admstatus;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    Use WithFileUploads;

    public function mount($event_id, $formm )
    {
        $fattribute = Event::find($event_id);
        $this->event_id = $fattribute->id;
        $this->eventname = $fattribute->eventname;
        $this->slug = $fattribute->slug;
        $this->eventype = $fattribute->eventype;
       
        $this->city = $fattribute->city;
        $this->venue = $fattribute->venue;

        $this->startdate = $fattribute->startdate;
        $this->enddate = $fattribute->enddate;        

        $this->shtdesc = $fattribute->shtdesc;
        $this->tagline = $fattribute->tagline;
        $this->organizer = $fattribute->organizer;

        $this->exhibitors = $fattribute->exhibitors;
        $this->desc = $fattribute->desc;
        $this->email = $fattribute->email;
        $this->phone = $fattribute->phone;
        $this->auidence = $fattribute->auidence;
        $this->edition = $fattribute->edition;
        $this->link = $fattribute->link;

        $this->image = $fattribute->image;

        $this->formm = $formm;
        $this->status = '1';
        $this->admstatus = '0';
        
    }


    public function updateEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->eventname =  $this->eventname;
        $fattribute->slug = $this->slug;
        $fattribute->eventype =  $this->eventype;
      
        $fattribute->city =  $this->city;
        $fattribute->venue =  $this->venue;
        $fattribute->organizer = $this->organizer;

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
        $fattribute->link =  $this->link;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function dateImage()
    {
        $fattribute = Event::find($this->event_id);
       
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $fattribute->image = $newimage;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    

    public function updateWeb()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->link =  $this->link;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function updateDesc()
    {
        $fattribute = Event::find($this->event_id);
       
        $fattribute->desc =  $this->desc;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function updateTagline()
    {
        $fattribute = Event::find($this->event_id);
       
        $fattribute->tagline =  $this->tagline;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function updateShtdesc()
    {
        $fattribute = Event::find($this->event_id);
        
        $fattribute->shtdesc =  $this->shtdesc;
        
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function updateOrganiser()
    {
        $fattribute = Event::find($this->event_id);
        
        $fattribute->organizer = $this->organizer;

        $fattribute->email =  $this->email;
        $fattribute->phone =  $this->phone;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }


    public function render()
    {
        $evento = Event::find($this->event_id);

        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::get();
        $searchtag = Expo::get();
        return view('livewire.admin.admin-event-multiple-add-component',['evento'=>$evento, 'searchtag'=>$searchtag,'pavillion'=>$pavillion,'sec'=>$sec,'cat'=>$cat])->layout('layouts.admin');
        
    }
}
