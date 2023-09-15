<?php

namespace App\Http\Livewire\Admin;

use App\Mail\MonthlyEvent;
use App\Models\Event;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use App\Models\Bcontact;
use App\Models\User;

class AdminClientComponent extends Component
{
    public $name;
    public $email = 'callslot250@gmail.com';
    public $phone;
    public $month;
    public $tyevent;
    public $user_id;
    public $pincode = '05';

    public $emailData;

    public $data;

    public function sharetoCleint(){   
        // $event = Event::whereYear('startdate', 2023)->where('status', 1)->where('admstatus', 1)->whereMonth('startdate', $this->pincode)->get();
        // //$event->name = $this->name;
        // $event->email = $this->email;
        // //$event->phone = $this->phone;
        // //$event->pincode = $this->pincode;
        // //$event->tyevent = $this->tyevent;
        // //$event->user_id = Auth::user()->id;
        // //$event->save();

        // //$xyz = Event::whereYear('startdate', 2023)->where('status', 1)->where('admstatus', 1)->whereMonth('startdate', $event->pincode)->get();
        // $this->emailSend($event);
        // session()->flash('message','Thanks, We are sending an email!! '); 
    }

    public function emailSend()
    { 
      $event = User::limit(5)->get();
      foreach($event as $evento)
      {
        Mail::to('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($evento) );
      }
      

      
     
    }


    public function render()
    {
        $evento = User::limit(5)->get();
        foreach($evento as $event)
        {
          Mail::to('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($event) );
        }
        
        //Mail::to($event->email)->bcc('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($event) );

        return view('livewire.admin.admin-client-component')->layout('layouts.eblog');
    }
}
