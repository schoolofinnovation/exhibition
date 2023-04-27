<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Expo;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminCategoryEditComponent extends Component
{

    public $searchTerm;
    public $expo_id ;
    public $event_id;
    public $checkvalue = [];

    public $tag;
    public $type;
    public $slug;

    
    public function mount($event_id)
    {
        $fattribute = Event::find($event_id);
        //dd($fattribute);
        $this->event_id = $fattribute->id;
        $this->expo_id = $fattribute->expo_id;
        $this->type = 'tag';
    }


    public function updateEvent()
    {
        $fattribute = Event::find($this->event_id);
        $fattribute->shtdesc =  json_encode($this->checkvalue);
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('admin.dashboard', ['board' => 'event']);
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->tag,'-');
    }

    public function updatetag()
    {
        $fattribute = new Expo();
        $fattribute->tag =  $this->tag;
        $fattribute->slug =  $this->slug;
        $fattribute->type =  $this->type;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('admin.dashboard', ['board' => 'event']);
    }

    public function render()
    {
        $evento = Event::find($this->event_id);
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();
         $expoon = Expo::where('type','tag')->get();


        return view('livewire.admin.admin-category-edit-component',['evento' => $evento,'expoon' => $expoon, 'searchcat' => $searchcat]);
    }
}
