<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\ContactMail;

class AwardsComponent extends Component
{
    public $eventname;
    public $startdate;
    public $enddate;
    public $venue;
    public $city;
    public $organizer;
    public $email;
    public $phone;
    public $eventype;
    public $slug;
    public $edition;
    public $level;
    public $status;
    public $admstatus;
    public $searchTerm ;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }
    
    public function mount()
    {
        $this->edition = 1;
        $this->organizer = "lead";
        $this->level = 3;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function newlist(){   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->startdate = $this->startdate;
        $event->enddate = $this->enddate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->organizer = $this->organizer;
        $event->email = $this->email;
        $event->phone = $this->phone;
        $event->image = null;
        $event->edition  = null;
        $event->eventype = $this->eventype;
        $event->level  = 3;
        $event->status  = 1;
        $event->admstatus  = 0;
        $event->save();
        $this-> sendEmail($event->email);
        $this->reset();
        session()->flash('message','Thanks, We are sending an email!! '); 
        return back()->withinput();
    }


    

    public function render()
    {
      
            $searchTerm = '%'.$this->searchTerm. '%';
            $monthwise = Event::where('eventname','LIKE', $searchTerm)
                        ->where('status','1')->orderBy('startdate','ASC')->get();
               
        return view('livewire.awards-component',['monthwise' => $monthwise])->layout('layouts.eblog');
    }
}
