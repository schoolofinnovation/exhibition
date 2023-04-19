<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Expo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\ContactMail;
use App\Mail\EventToClient;
use Illuminate\Support\Facades\Mail;

class AwardsComponent extends Component
{
    public $eventname;
    public $startdate;
    public $enddate;
    public $venue;
    public $city;
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
       
    }

    public function newlist(){   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->startdate = $this->startdate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->eventype = $this->eventype;
        $event->level  = 3;
        $event->email = $this->email;
        $event->phone = $this->phone;
        $event->save();

        $this-> sendEmail($event);
        $this->reset();
        session()->flash('message','Thanks, We are sending an email!! '); 
        //return back()->withinput();
    }


    public function sendEmail($event)
    {
       Mail::to($event->email)->send(new EventToClient ($event));
    }

    public function render()
    {
      
            $searchTerm = '%'.$this->searchTerm. '%';
            $monthwise = Event::where('eventname','LIKE', $searchTerm)
                        ->where('status','1')->orderBy('startdate','ASC')->get();
               
        return view('livewire.awards-component',['monthwise' => $monthwise])->layout('layouts.eblog');
    }
}
