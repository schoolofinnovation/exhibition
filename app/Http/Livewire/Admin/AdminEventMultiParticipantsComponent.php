<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Hashtag;
use App\Models\Pavillion;
use App\Models\Speaker;
use App\Models\Sponsership;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
    public $checkvalue;
    public $hastag;
    
    
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
            'image'=>'required',
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
        return redirect()->route('seller.dashboard');
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
            $brand->brand_name = $tre;
            $brand->slug = str::slug($tre,'-');
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
            $brand->pavillion_name = $tre;
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
            $brand->plan = $tre;
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
            $fattribute->tag =    $tre;
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
        $rti = Str::replace('  ',' ',$this->hastag);
        $ret = explode(",", $rti);
        foreach($ret as $tre)
        {
            $newEvent = new Hashtag();
            $newEvent->hastag = $tre;
            $newEvent->event_id = $this->event_id;
            $newEvent->user_id = Auth::user()->id;
            $newEvent->status = $this->status;
            $newEvent->admstatus = $this->admstatus;
            $newEvent->save();
        }
        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function Hashdelete($id)
    {   $job = Hashtag::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
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
        $hastago = Hashtag::where('event_id', $evento->id)->get();
        //dd($hastag);
        return view('livewire.admin.admin-event-multi-participants-component',['hastago' => $hastago,'speaker' => $speaker,'sponser' => $sponser, 'searchcat' => $searchcat,'evento'=>$evento, 'pavillion'=>$pavillion])->layout('layouts.eblog');
    }
}
