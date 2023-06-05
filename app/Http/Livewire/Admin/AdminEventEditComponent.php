<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Pavillion;
use App\Models\Sector;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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

    public $organizer;
    public $edition;
    public $startdate;
    public $enddate;
    public $event_id;
    public $link;

    public $eventype;
    public $city;
    public $venue;

    public $board;
    public $status;
    public $slyug;
    public $admstatus;
    public $user_id;
    public $reference;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    public function mount($event_id)
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
        $this->reference = $fattribute->reference;
        $this->status = '1';     
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

    public function updateBasicEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->eventname =  $this->eventname;
        $fattribute->slug = $this->slug;
        $fattribute->eventype =  $this->eventype;
      
        $fattribute->city =  $this->city;
        $fattribute->venue =  $this->venue;
       
        $fattribute->exhibitors =  $this->exhibitors;
        $fattribute->auidence =  $this->auidence;
      
        $fattribute->edition =  $this->edition;
        $fattribute->startdate =  $this->startdate;
        $fattribute->enddate =  $this->enddate;
       
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }

    public function doubleing()
    {
      
      $rti = Str::replace('  ',' ', $this->eventname);
      $ret = explode(",", $rti);
    
      foreach($ret as $tre)
        {
          $doublse = new Event();
          $doublse->eventype = $this->eventype;
          $doublse->eventname = $tre;
          $doublse->slug = Str::slug ($tre,'-');

          $doublse->city =  $this->city;
          $doublse->country =  'india';
          $doublse->venue =  $this->venue;
          $doublse->exhibitors =  $this->exhibitors;
          $doublse->auidence =  $this->auidence;
          $doublse->edition =  $this->edition;
          $doublse->startdate =  $this->startdate;
          $doublse->enddate =  $this->enddate;

            $doublse->organizer = $this->organizer;
            $doublse->shtdesc =  $this->shtdesc;
            $doublse->tagline =  $this->tagline;
            $doublse->desc =  $this->desc;

            $doublse->email =  $this->email;
            $doublse->phone =  $this->phone;
            $doublse->link =  $this->link;
          
          $doublse->status = $this->status;
          $doublse->admstatus = '0';
          $doublse->user_id = Auth::user()->id;
          $doublse->reference = $this->reference;
          $doublse->save();
          return redirect()->route('adminevent.detail', ['slug' => $this->slug]);
        }
        
        dd($rti);
    }

    
    

    public function render()
    {
        $evento = Event::find($this->event_id);
        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::get();
        $searchtag = Expo::get();

        
        return view('livewire.admin.admin-event-edit-component',['evento'=>$evento, 'searchtag'=>$searchtag,'pavillion'=>$pavillion,'sec'=>$sec,'cat'=>$cat])->layout('layouts.admin');
    }
}
