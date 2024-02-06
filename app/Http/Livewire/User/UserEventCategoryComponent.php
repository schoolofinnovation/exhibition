<?php

namespace App\Http\Livewire\User;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Usage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class UserEventCategoryComponent extends Component
{
    public $searchTerm;
    public $expo_id ;
    public $event_id;
    public $checkvalue = [];
    public $eventoiid;
    public $tag;
    public $type;
    public $slug;
    public $status;
    public $trends;


    // public function mount($event_id)
    // {
    //     $fattribute = Event::find($event_id);
    //     //dd($fattribute);
    //     $this->event_id = $fattribute->id;
    //     $this->expo_id = $fattribute->expo_id;
    //     $this->type = 'tag';
    //     $this->status = '1';
    // }


    public function updateEvent()
    {
        $sectry = json_encode($this->checkvalue);
        $tryi = json_decode($sectry);
        //$expoo = explode("," , $sectry );
        foreach($tryi as $trey)
        {
            $fattribute = new Denco();
            $fattribut = Auth::user()->id;
            $fattribute->expo_id = trim($trey);
            $fattribute->user_id = $fattribut;
            $fattribute->save();
        }
        
        //dd($sectry, $expoo, $tryi);
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('user.dashboard');
    }

    //$previous = url()->previous();

    public function generateSlug()
    {
        $this->slug = Str::slug($this->tag,'-');
    }

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

    public function eventdelete($id)
    {   $job = Denco::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    //choose event to plan visit/exhibit
    public function claimer($id)
    {
        $claiming = New Usage();
        $claiming->user_id = Auth::user()->id;
        $claiming->event_id =  $id;
        $claiming->status = '1';
        $claiming->admstatus = '0';
        $claiming->type = 'event';
        $claiming->save();
    }


    public function render()
    {
        $evento = Auth::user()->id;
        $selectedcategory = Denco::where('user_id', Auth::user()->id)->get();
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();
        $expoon = Expo::where('type','tag')->get();

        $findAdminStatus = Expo::where('admstatus','1')->get();
        $nowdate = Carbon::now()->format('Y-M-d');
        $blogfindo = Event::where('enddate','>', $nowdate)->where('status','1')->where('admstatus','1')->get();

        return view('livewire.user.user-event-category-component', ['blogfindo' => $blogfindo,'findAdminStatus' => $findAdminStatus, 'selectedcategory' => $selectedcategory, 'evento' => $evento,'expoon' => $expoon, 'searchcat' => $searchcat])->layout('layouts.eblog');
    }
}
