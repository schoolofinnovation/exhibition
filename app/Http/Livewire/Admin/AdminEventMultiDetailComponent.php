<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Pavillion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminEventMultiDetailComponent extends Component
{
    public $event_id;
    public $brand_name;
    
    public $board;
    public $month;
    public $emailClient;
    public $emaill;
    public $searchTerm;
    public $findIDs = null;
    //public $shtdesc;

    public $name;
    public $contact;
    public $designation;
    public $email;

    public $country;
    public $link;
    
    public $visited;
    public $statement;

    public $businessstatement;
 
    public $frequency;
    public $subscriber;
    public $desc;
    public $type;
    public $utype;

    public $status;
    public $admstatus;

    public $hastag;

    public $formm;

    public $did;
    
    public $business;
    public $nostall;
    public $startdate;
    public $enddate;


    public function mount($event_id, $did)
    {
        $this->event_id = $event_id;
        //$this->month = Carbon::today()->format("m");
        //$this->visited = '1';
        $this->did = $did;
    }

    //need to be delete shifted to admin-event-multi-particiapants
    public function AddBrandAttend()
    {
       $brandAttend = new Brand();
       $brandAttend->brand_name = trim($this->brand_name);
       $brandAttend->event_id = $this->event_id;
       $brandAttend->official_website = $this->link;
       $brandAttend->save();

       $ContactDetail = new Contact();
       $ContactDetail->brand_id = $brandAttend->id;
       $ContactDetail->email = $this->email;
       $ContactDetail->name = trim($this->name); 
       $ContactDetail->phone = $this->contact;
       $ContactDetail->designation = trim($this->designation);
       $ContactDetail->save();

       

       return redirect()->route('admin.dashboard', ['board' => 'client']);
    }


    public function updatePavillion( )
    {
        $abc = Pavillion::find($this->did);

            $edc = Event::find($this->event_id)->first();
            $abc->business = $this->business;
            $abc->nostall = $this->nostall;
            $abc->desc = $this->desc;
            $abc->startdate = $edc->startdate;
            $abc->enddate =  $edc->enddate;

        $abc->status = '1';
        $abc->admstatus = '1';
        $abc->user_id = Auth::user()->id;
        $abc->save();
    }

    public function render()
    {
        $event = Event::find($this->event_id);
        return view('livewire.admin.admin-event-multi-detail-component',['event' => $event]);
    }
}
