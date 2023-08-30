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
    public $lastdate;


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

           // $edc = Event::find($this->event_id)->first();
           // $start = $edc->startdate;
            //$last = $edc->enddate;
            $abc->business = $this->business;
            $abc->nostall = $this->nostall;
            $abc->desc = $this->desc;
            $abc->startdate = $this->startdate;
            $abc->lastdate =  $this->lastdate;
        $abc->event_id = Event::find($this->event_id)->first();
        $abc->status = '1';
        $abc->admstatus = '1';
        $abc->user_id = Auth::user()->id;
        $abc->save();
        $this->reset();
        return redirect()->route('admin.multipartners', ['event_id' =>  $this->event_id , 'formm' => 'addPavillion']);
       // Route::get('/admin/participants/{event_id}/add/{formm}', AdminEventMultiParticipantsComponent::class)->name('admin.multipartners');
    }

    public $howMany;
    public $slug;
    public $category_id;
    public $webo;
    public $eventname;
    public $opinion;
    

    public function tryingfaker()
    {

       $monthwise = Event::whereYear('startdate', '2023' )->where('status','1')->where('admstatus','1')->whereMonth('startdate', $this->month)->orderBy('startdate','ASC')->get();
      

          foreach($monthwise as $evnto)
          {
              
          }

          
      
    }
   
public function createBulk ()
{

  for($i = 0; $i < $this->howMany; $i++)
              {
                
                //$indoyui = Event::where('slug', $evnto->slug)->first();
              
                  $usero =  new Rate();
                  $trynigtocreate = collect([4,5,6,7,8,9]);
                $usero->rate = $trynigtocreate->random();

                  $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
                  $findhastagID = $findhastag->random();
                $usero->hasttag = $findhastagID->hastag; 
                
                  $findComment = Comment::where('admstatus','1')->where('status','1')->get();
                  $findCommentID = $findComment->random();
                $usero->opinion =  $findCommentID->statement;
              
                $usero->event_id = $indoyui->id;

                  $uertyui = User::where('utype', 'USR')->get();
                  $useroID = $uertyui->random();
                $usero->user_id = $useroID->id;

                $usero->status = '1'; 
                $usero->admstatus = '1';

                $currenttime = Carbon::now();
                $currento =  strtotime($currenttime);
                $Subtracttime =  Carbon::now()->subHours(24);
                $Subtracttimeo = strtotime($Subtracttime);
                $getmid = rand($currento, $Subtracttimeo);
                $finall = date('Y/m/d h:i:s', $getmid);
                
                $usero->created_at = $finall;
                $usero->updated_at = $finall;
                $usero->save();
              }
}

    public function render()
    {
        $event = Event::find($this->event_id);
        return view('livewire.admin.admin-event-multi-detail-component',['event' => $event]);
    }
}
