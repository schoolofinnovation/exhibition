<?php

namespace App\Http\Livewire\Admin;

use App\Mail\MonthlyEvent;
use App\Models\Event;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AdminClientComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $month;
    public $tyevent;
    public $user_id;
    public $pincode;


    public function sharetoCleint(){   
        $event = new Lead();
        $event->name = $this->name;
        $event->email = $this->email;
        $event->phone = $this->phone;
        $event->pincode = $this->pincode;
        //$event->tyevent = $this->tyevent;
        $event->user_id = Auth::user()->id;
        $event->save();

        $xyz = Event::whereYear('startdate', 2023)->where('status', 1)->where('admstatus', 1)->whereMonth('startdate', $event->pincode)->get();
        $this->emailSend($xyz, $event);
        session()->flash('message','Thanks, We are sending an email!! '); 
    }

    public function emailSend($xyz, $event)
    { 
      Mail::to($event->email)->bcc('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($xyz, $event) );
    }


    public function render()
    {
        return view('livewire.admin.admin-client-component')->layout('layouts.eblog');
    }
}
