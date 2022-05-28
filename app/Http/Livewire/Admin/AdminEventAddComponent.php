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
    public $organizer;
    public $slug;
    public $eventype;
    public $eventname;
    public $edition;
    public $enddate;
    public $startdate;
    public $venue;
    public $city;
    //public $industry;
    //public $sector;
    public $expo_id;
    public $search_id;
    public $category_id;
    public $sector_id;
    public $user_id;
    public $auidence;
    public $exhibitors;
    public $email;
    public $phone;
    public $image;
    

    Use WithFileUploads;

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

    public function mount()
    {
        $this->level = 4;
        $this->status = 1;
        $this->admstatus = 1;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
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
        $event->auidence = $this->auidence;
        $event->exhibitors = $this->exhibitors;    
        $event->category_id = $this->category_id;
        $event->sector_id = $this->sector_id;
        $event->search_id = $this->search_id;
        $event->expo_id = json_encode ($this->expo_id);
        $event->edition  = $this->edition;
        $event->eventype = $this->eventype;
        $event->user_id = Auth::user()->id;
        $event->level  = 3;
        $event->status  = 1;
        $event->admstatus  = 1;
        $event->save();
        $this->sendEmail($event);
        //$this-> sendEmail($shop);
        $this->reset();
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        return redirect()->route('admin.dashboard');
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
