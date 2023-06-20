<?php

namespace App\Http\Livewire\Admin;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEventAddComponent extends Component
{
    public $slug;
    public $eventype;
    public $eventname;
    public $edition;
    public $enddate;
    public $startdate;
    public $venue;
    public $city;
    public $country;
    public $user_id;
    public $auidence;
    public $exhibitors;
    public $email;
    public $phone;
    public $level;
    public $status;
    public $admstatus;
    public $details;
    public $link;

    public $organizer;
    public $desc;
    public $shtdesc;
    public $tagline;
    

    Use WithFileUploads;
    public function mount()
    {
        $this->level = 4;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    
    public function newlist(){   
        $event = new Event();
        $event->eventname = trim($this->eventname);
        $event->slug = $this->slug;
        $event->startdate = $this->startdate;
        $event->enddate = $this->enddate;
        $event->venue = trim($this->venue);
        $event->city = trim($this->city);
        $event->country =  'india';
        $event->organizer = $this->organizer;
        $event->email = $this->email;
        $event->phone = $this->phone;

        $event->auidence = $this->auidence;
        $event->exhibitors = $this->exhibitors; 

        $event->tagline = trim($this->tagline);
        $event->shtdesc = trim($this->shtdesc);
        $event->desc = trim($this->desc);

        $event->edition  = $this->edition;
        $event->eventype = $this->eventype;
        $event->user_id = Auth::user()->id;
        $event->level  = $this->level;
        $event->status  = $this->status;
        $event->link  = $this->link;
        $event->admstatus  =  $this->admstatus;
        $event->reference = Str::uuid()->toString();
        $event->save();

        //$this->sendEmail($event);
        $this->reset();
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        return redirect()->route('admin.dashboard', ['board' => 'event']);
    }

    public function sendEmail($contact){
        $details = [
            'title' => 'contact us ',
            'body' => 'thanks for doing'
        ];
        Mail::to($contact->email)
             ->cc('laravel8coi@gmail.com')
             ->bcc('laravel8coi@gmail.com')
             ->send(new ContactMail($contact));
        }

    public function render()
    {
        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::where('type','expo')->get();
        $searchtag = Expo::where('type','tag')->get();
        return view('livewire.admin.admin-event-add-component',['searchtag'=>$searchtag,'pavillion'=>$pavillion,'cat'=>$cat,'sec'=>$sec])->layout('layouts.admin');
    }
}
