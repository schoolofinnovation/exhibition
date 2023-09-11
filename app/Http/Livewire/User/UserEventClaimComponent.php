<?php

namespace App\Http\Livewire\User;

use App\Models\Event;
use App\Models\Usage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class UserEventClaimComponent extends Component
{   public $eventname;
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
    public $searchTerm;
    public $moreUsers;
    public $EvenmoreUsers;
    public $board;
    public $country;

    public $opertingstatus = 'claimed';

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }
    
    public function mount()
    {
       
    }

    public function claimer($id)
    {
       
        $findEvent = Event::find($id)->value ('id');
        $claiming = New Usage();
        $claiming->user_id = Auth::user()->id;
        $claiming->event_id =  $findEvent;
        $claiming->status = '1';
        $claiming->admstatus = '0';
       
        $claiming->save();
    }

    public function newlist()
    {   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->startdate = $this->startdate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->country = 'india';
        $event->eventype = $this->eventype;
        $event->level  = 3;
        $event->email = $this->email;
        $event->phone = $this->phone;
        $event->save();
        //$this-> sendEmail($event);
        //$this->reset();
        session()->flash('message','Thanks, We are sending an email!! '); 
        return redirect()->route('coievent.add', ['board' => 'thank-you']);
    }

   
    
    // public function sendEmail($event)
    // {
    //    //Mail::to($event->email)->bcc('exhibitionnetwork@gmail.com')->send(new EventToClient ($event));
    // }

    public function render()
    {
            $searchTerm = '%'.$this->searchTerm. '%';
            $monthwise = Event::where('eventname','LIKE', $searchTerm)
                        ->where('status','1')->orderBy('startdate','ASC')->get();

        return view('livewire.user.user-event-claim-component',['monthwise' => $monthwise])->layout('layouts.eblog');
    }
}
