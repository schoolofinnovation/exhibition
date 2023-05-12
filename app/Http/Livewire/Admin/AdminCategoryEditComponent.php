<?php

namespace App\Http\Livewire\Admin;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\support\Squish;


class AdminCategoryEditComponent extends Component
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

    
    public function mount($event_id)
    {
        $fattribute = Event::find($event_id);
        //dd($fattribute);
        $this->event_id = $fattribute->id;
        $this->expo_id = $fattribute->expo_id;
        $this->type = 'tag';
        $this->status = '1';
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

    public function render()
    {
        $evento = Event::find($this->event_id);
        $selectedcategory = Denco::where('event_id', $evento->id)->get();
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();
         $expoon = Expo::where('type','tag')->get();


        return view('livewire.admin.admin-category-edit-component',['selectedcategory' => $selectedcategory, 'evento' => $evento,'expoon' => $expoon, 'searchcat' => $searchcat])->layout('layouts.eblog');
    }
}
