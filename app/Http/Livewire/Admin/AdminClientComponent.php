<?php

namespace App\Http\Livewire\Admin;

use App\Mail\MonthlyEvent;
use App\Models\Event;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use App\Models\Bcontact;
use App\Models\Expo;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
      
        Mail::to('exhibitionnetwork@gmail.com')->send(new MonthlyEvent () );
         
    }
    public $categry= 'food';

    public function mount( $categry)
    {
       $this->categry = $categry;
    }

    public function render()
    {
        $findcategryIDfromExpos = Expo::where('slug', $this->categry)->value('id');
       
       // $resulto = Event::limit(5)->get();
        $resulto = DB::table('events')
           ->join('dencos','dencos.event_id','=','events.id')
           ->join('expos','expos.id' ,'=','dencos.expo_id')
           ->select('events.id as EventName','expos.id as Category','events.startdate as EventDate')->where('expos.id', $findcategryIDfromExpos)
           ->orderBy('events.startdate','ASC')
           ->get();

        Mail::to('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($resulto) );

        return view('livewire.admin.admin-client-component')->layout('layouts.eblog');
    }
}
