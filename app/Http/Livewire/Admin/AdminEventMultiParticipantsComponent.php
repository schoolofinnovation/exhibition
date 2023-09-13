<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Contact;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Hashtag;
use App\Models\Participant;
use App\Models\Partner;
use App\Models\Pavillion;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\Bcontact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEventMultiParticipantsComponent extends Component
{
    public $pavillion_name;
    public $business;
    public $slug;
    public $nostall;
    public $desc;
    public $image;
    public $startdate;
    public $lastdate;
    public $event_id;
    public $user_id;
    //public $status;
    public $admstatus;
    public $formm;
    public $eventname;
    public $eventype;
    public $status;
    public $brand_name;
    public $plan;
    public $name;
    public $searchTerm;
    public $checkvalue = [];
    
    public $hastag;
    public $hasttag;

    public $pavill_id = null;
    public $sponser_id = null;
    public $partner_id = null;

    public $partner;
    public $lookingAddImage;
    public $lookingAddParticipants;
    public $lookingAddorganisation;
    public $lookingAddFromIMage;

    public $organisation;
    
   
    Use WithFileUploads;



    public function mount($event_id, $formm )
    {
        $fattribute = Event::find($event_id);
        $this->event_id = $fattribute->id;
        $this->eventname = $fattribute->eventname;
        $this->slug = $fattribute->slug;
        $this->eventype = $fattribute->eventype;
        $this->formm = $formm;
        $this->status = '1';
        $this->admstatus = '0';
       
    }

    public function business()
    {
        //   ($this->checkvalue, $brandAtt;
          $brandAttend = new Brand();
          $brandAttend->brand_name = trim($this->brand_name);
          $brandAttend->event_id = $this->event_id;
          $brandAttend->official_website = $this->link;
          $brandAttend->save();
    }
    
    public function dateImage()
    {
        $fattribute = Event::find($this->event_id);
       
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $fattribute->image = $newimage;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }


    public function generateSlug()
    {
        $this->slug = Str::slug($this->pavillion_name,'-');
    }
    public function add()
    {
        $this->validate([
            'pavillion_name'=>'required',
            'business'=>'required',
            'nostall'=>'required',
            'desc'=>'required',
            //'image'=>'required',
            'startdate'=>'required',
            'lastdate'=>'required',
        ]);

        $newEvent = new Pavillion();
        $newEvent->pavillion_name = $this->pavillion_name;
        $newEvent->business = $this->business;
        $newEvent->slug = $this->slug;
        $newEvent->nostall = $this->nostall;
        $newEvent->desc = $this->desc;
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $newEvent->image = $newimage;
        $newEvent->startdate = $this->startdate;
        $newEvent->lastdate = $this->lastdate;
        $newEvent->event_id = $this->event_id;
        $newEvent->user_id = Auth::user()->id;
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();
        //return redirect()->route('seller.dashboard');
        session()->flash('message','Thanks for sharing your review.');
    }

    public function updateBrand()
    {
        $rti = Str::replace('  ',' ',$this->brand_name);
        $ret = explode(",", $rti);

        foreach($ret as $tre)
        {
            $brand = new Brand();
            $bran = Event::find($this->event_id);
            $brand->event_id = $bran->id;
            $brand->brand_name = trim($tre);
            $brand->slug = str::slug($tre,'-');
            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
            $this->reset();
        }

    }

    public function updateOrganisation()
    {
        $rti = Str::replace('  ',' ',$this->brand_name);
        $ret = explode(",", $rti);

        foreach($ret as $tre)
        {
            $brand = new Brand();
            $bran = Event::find($this->event_id);
            $brand->event_id = $bran->id;
            $brand->organisation = trim($tre);
            $brand->slug = str::slug($tre,'-');
            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
            $this->reset();
        }

    }

    public $brand_logo = [];
    public function multiImage()
    {
        $multiimage = $this->brand_logo;

        foreach($multiimage as $key => $imageso)
        {
            $brand = new Brand();
            $bran = Event::find($this ->event_id);
            $brand->event_id = $bran->id;

            $newimage = Carbon::now()->timestamp. $key. '.'. $multiimage[$key]->extension();
            $multiimage[$key]->storeAs('exhibition', $newimage);
            $brand->brand_logo = $newimage;

            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
        }

    }

    public function updatePavillion()
    {
        $rti = Str::replace('  ',' ',$this->pavillion_name);
        $ret = explode(",", $rti);

        foreach($ret as $tre)
        {
            $brand = new Pavillion();
            $bran = Event::find($this->event_id);
            $brand->event_id = $bran->id;
            $brand->pavillion_name = trim($tre);
            $brand->slug = str::slug($tre,'-');
            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
        }

    }

    public function updateSponsership()
    {
        $rti = Str::replace('  ',' ',$this->plan);
        $ret = explode(",", $rti);

        foreach($ret as $tre)
        {
            $brand = new Sponsership();
            $bran = Event::find($this->event_id);
            $brand->event_id = $bran->id;
            $brand->plan = trim($tre);
            $brand->slug = str::slug($tre,'-');
            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
        }

    }

    public function updateSpeaker()
    {
        $rti = Str::replace('  ',' ',$this->name);
        $ret = explode(",", $rti);

        foreach($ret as $tre)
        {
            $brand = new Speaker();
            $bran = Event::find($this->event_id);
            $brand->event_id = $bran->id;
            $brand->name = $tre;
            $brand->slug = str::slug($tre,'-');
            $brand->status = $this->status;
            $brand->user_id = Auth::user()->id;
            $brand->save();
        }

    }

    public function updateEvent()
    {
        $sectry = json_encode($this->checkvalue);
        $tryi = json_decode($sectry);
        //$expoo = explode("," , $sectry );
        foreach($tryi as $trey)
        {
            $fattribute = new Denco();
            $fattribut = Event::find($this->event_id);
            $fattribute->expo_id = $trey;
            $fattribute->event_id = $fattribut->id;
            $fattribute->save();
        }
        
        //dd($sectry, $expoo, $tryi);
       
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->event->slug]);
    }

    //$previous = url()->previous();

    public function updatetag()
    {   $rti = Str::replace('  ',' ',$this->tag);
        $ret = explode(",", $rti);
       
        foreach($ret as $tre)
        {
            $fattribute = new Expo();
            $fattribute->tag =    trim($tre);
            $fattribute->slug =   Str::slug($tre,'-');
            $fattribute->type =  $this->type;
            $fattribute->status =  $this->status;
            $fattribute->save();
        }
        //dd($fattribute);
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->back();
    }


    public function addHastag()
    {
        $rti = Str::replace(' ','', $this->hastag);
        $rtoi = Str::replace('#',',',$rti);
        $ret = explode("," , $rtoi);
        foreach($ret as $tre)
        {
            $newEvent = new Hashtag();
            $newEvent->hastag = trim($tre);
            //doubt check again
            //$newEvent->hasttag = $this->hashag;
            $newEvent->event_id = $this->event_id;
            $newEvent->user_id = Auth::user()->id;
            $newEvent->status = $this->status;
            $newEvent->admstatus = $this->admstatus;
            $newEvent->save();

        }
        $this->reset();
        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }




    public function participantToAdd()
    {
        $sectry = json_encode($this->checkvalue);
        $tryi = json_decode($sectry);
        //$expoo = explode("," , $sectry );
        $sponso = $this->sponser_id;
        $pavillo = $this->pavill_id;
        $partne = $this->partner_id;

        foreach($tryi as $trey)
        {
            $fattribute = new Participant();

            $fattribut = Event::find($this->event_id);
            $fattribute->event_id = $fattribut->id;
            $fattribute->brand_id = $trey;
            //$fattribute->expo_id = $trey;
            $fattribute->sponsership_id = $sponso;
            $fattribute->pavillion_id = $pavillo;
            $fattribute->partner_id = $partne;
            $fattribute->save();
        }
        
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribut->slug]);
    }

    public function Imagedelete($id)
    {   $job = Brand::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function SponserDelete($id)
    {   $job = Sponsership::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function Hashdelete($id)
    {   $job = Hashtag::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    //client

    public $country;
    public $contact;
    public $email;
    public $designation;
    public $link;
    

    public function AddBrandAttend()
    {
       if(is_null($this->checkvalue))
       {
        $brandAttend = new Brand ();
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
       }
       else
       {
        $brandAtt = Brand::find($this->checkvalue)->first();
        $brandAtt->brand_name = trim($this->brand_name);
        $brandAtt->slug = Str::slug($this->brand_name,'-');
        $brandAtt->official_website = $this->link;
        $brandAtt->save();

        $ContactDetail = new Contact();
        $ContactDetail->brand_id = $brandAtt->id;
        
        $ContactDetail->email = $this->email;
        $ContactDetail->name = trim($this->name); 
        $ContactDetail->phone = $this->contact;
        $ContactDetail->designation = trim($this->designation);
        $ContactDetail->save();
       }

     
       return redirect()->route('admin.dashboard', ['board' => 'client']);
    }


public function directbrandBcontact()
    {
       $uptedetail = new Brand();
       $uptedetail->brand_name = $this->brand_name;
       $uptedetail->brand_logo = $this->brand_logo;

       $uptedetail->organisation = $this->organisation;

       $uptedetail->industry = $this->industry;
       $uptedetail->user_id = Auth::user()->id;
       $uptedetail->status = $this->status;
       $uptedetail->save();


       $upted = new Bcontact();
       $upted->name = $this->name;
       $upted->designation = $this->designation;
       $upted->email = $this->email;
       $upted->phone = $this->phone;
       $upted->user_id = Auth::user()->id;

       $upted->brand_id = $uptedetail->brand_id;

       $upted->status = $this->status;
       $upted->admstatus = $this->admstatus;
       $upted->save();
        
       //return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
      // return redirect()->url()->previous();

    }
   

    public function render()
    {
        $evento = Event::find($this->event_id);
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

        $pavillion = Pavillion::where('event_id', $evento->id)->get();

        $sponser = Sponsership::where('event_id', $evento->id)->get();

        $speaker = Speaker::where('event_id', $evento->id)->get();
        $suggestedSpeaker = Speaker::get();
        $hastago = Hashtag::where('event_id', $evento->id)->get();
        $participants = Brand::where('event_id', $evento->id)->get();
        
        $partners = Partner::where('event_id', $evento->id)->get();

        $findListedTag = Denco::where('event_id', $evento->id)->get();
        //dd($hastag);

        $findreferenceBrand = Brand::where('event_id', $this->event_id )->get();
       
        //$getReferenceBrands = DB::table('participants')->where('event_id' , $this->event_id)->where('pavillion_id' , $pavillion->id)->get();

        return view('livewire.admin.admin-event-multi-participants-component',['findreferenceBrand'=>$findreferenceBrand, 'suggestedSpeaker'=>$suggestedSpeaker,'partners'=>$partners,'findListedTag'=>$findListedTag, 'participants' => $participants,'hastago' => $hastago,'speaker' => $speaker,'sponser' => $sponser, 'searchcat' => $searchcat,'evento'=>$evento, 'pavillion'=>$pavillion])->layout('layouts.eblog');
    }
}
