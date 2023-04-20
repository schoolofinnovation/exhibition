<?php

namespace App\Http\Livewire\Admin;

use App\Mail\MonthlyEvent;
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
        $this->emailSend($event);
        session()->flash('message','Thanks, We are sending an email!! '); 
    }

    public function emailSend($event)
    { 
      Mail::to($event->email)->bcc('exhibitionnetwork@gmail.com')->send(new MonthlyEvent($event));
    }


    public function render()
    {
        return view('livewire.admin.admin-client-component');
    }
}
