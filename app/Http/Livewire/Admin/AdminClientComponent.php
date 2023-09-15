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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminClientComponent extends Component
{
    public $purposeo;

    public $name;
    public $email;
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

    public function emailSend($email)
    { 
        if( $this->purposeo == 'all')
        
        {
            $listoi = Bcontact::whereNotNull('email')->limt(2)->get();
            
            $mytime = Carbon::today()->format ("Y-m-d");
            $resulto = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
            
            dd('don');
            foreach($listoi as $emailio)
            {
              Mail::to($emailio->email)->bcc('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($resulto) );
            }
        }

        elseif ($this->purposeo == 'single')
        {
            $listoi = $email;
            $mytime = Carbon::today()->format ("Y-m-d");
            $resulto = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
            dd('chota don');
            Mail::to($listoi->email)->bcc('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($resulto) );
        }

          

        
    }
    

    public function render()
    {
        //$findcategryIDfromExpos = Expo::where('slug', $this->categry)->value('id');
       
        $resulto = Event::limit(5)->get();
       
        Mail::to('exhibitionnetwork@gmail.com')->send(new MonthlyEvent ($resulto) );

        return view('livewire.admin.admin-client-component')->layout('layouts.eblog');
    }
}
