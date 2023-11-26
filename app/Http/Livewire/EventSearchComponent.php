<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class EventSearchComponent extends Component
{
    public $venue;
    public $city;
    public $country;

    public function mount()
    {
        $this->venue = 'delhi';
        $this->city = 'delhi';
        $this->country = 'india';
    }

    public function render()
    {
        $searchVenue = Event::where('city', $this->venue)->get();

        $mytime = Carbon::now();
        // if($this->sorting =='date'){
        //     $franchises = Event::orderBy('created_at','DESC')->paginate($this->pagesize); 
        // }
        // elseif ($this->sorting =='investment'){
        //     $franchises = Event::orderBy('max_investment','DESC')->paginate($this->pagesize); 
        // }
        // elseif ($this->sorting =='area'){
        //     $franchises = Event::orderBy('max_area','DESC')->paginate($this->pagesize); 
        // }
        // else{
        //     $franchises = Event::paginate($this->pagesize); 
        // }
        //dd($searchVenue);
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
