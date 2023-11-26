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

    public function mount($venue)
    {
        $this->venue = $venue;
        $this->city = 'delhi';
        $this->country = 'india';
    }


   

    public function render()
    {
        $mytime = Carbon::now();
        $searchVenue = Event::where('enddate', '<', $mytime)->where('city', $this->venue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();

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
        //dd($mytime);
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
