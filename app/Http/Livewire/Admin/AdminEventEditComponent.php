<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;

class AdminEventEditComponent extends Component
{
    public $eventname;
    public $slug;
    public $industry;
    public $category_id;
    public $sector_id;
    public $expo_id;
    public $search_id;
    public $shtdesc;
    public $tagline;
    public $exhibitors;
    public $desc;
    public $email;
    public $auidence;
    public $edition;
    public $startdate;
    public $enddate;

    public function mount($slug)
    {
        $fattribute = Event::find($slug);
        $this->slug = $fattribute->id;
        $this->eventname = $fattribute->eventname;
        $this->industry = $fattribute->industry;
        $this->category_id = $fattribute->category_id;
        $this->sector_id = $fattribute->sector_id;
        $this->expo_id = $fattribute->expo_id;
        $this->search_id = $fattribute->search_id;
        $this->shtdesc = $fattribute->shtdesc;
        $this->tagline = $fattribute->tagline;
        $this->exhibitors = $fattribute->exhibitors;
        $this->desc = $fattribute->desc;
        $this->email = $fattribute->email;
        $this->auidence = $fattribute->auidence;
        $this->edition = $fattribute->edition;
        $this->startdate = $fattribute->startdate;
        $this->enddate = $fattribute->enddate;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            "$this->eventname" => "required",
            "$this->industry" => "required",
            "$this->category_id" => "required",
            "$this->sector_id" => "required",
            "$this->expo_id" => "required",
            "$this->search_id" => "required",
            "$this->shtdesc" => "required",
            "$this->tagline" => "required",
            "$this->exhibitors" => "reuqired",
            "$this->desc" => "required",
            "$this->email" => "required",
            "$this->auidence" => "required",
            "$this->edition" => "required",
            "$this->startdate" => "required",
            "$this->enddate" => "required",
        ]);
    }

    public function updateAttribute()
    {
        $this->validate([
           
        "eventname" => "required",
        "industry" => "required",
        "category_id" => "required",
        "sector_id" => "required",
        "expo_id" => "required",
        "search_id" => "required",
        "shtdesc" => "required",
        "tagline" => "required",
        "exhibitors" => "reuqired",
        "desc" => "required",
        "email" => "required",
        "auidence" => "required",
        "edition" => "required",
        "startdate" => "required",
        "enddate" => "required",
        ]);

        $fattribute = Event::find($this->slug);
        $fattribute->eventname =  $this->eventname;
        $fattribute->industry =  $this->industry;
        $fattribute->category_id =  $this->category_id;
        $fattribute->sector_id =  $this->sector_id;
        $fattribute->expo_id =  $this->expo_id;
        $fattribute->search_id =  $this->search_id;
        $fattribute->shtdesc =  $this->shtdesc;
        $fattribute->tagline =  $this->tagline;
        $fattribute->exhibitors =  $this->exhibitors;
        $fattribute->desc =  $this->desc;
        $fattribute->email =  $this->email;
        $fattribute->auidence =  $this->auidence;
        $fattribute->edition =  $this->edition;
        $fattribute->startdate =  $this->startdate;
        $fattribute->enddate =  $this->enddate;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin.admin-event-edit-component');
    }
}
