<?php

namespace App\Http\Livewire\Employee;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EmployeeDashboardComponent extends Component
{
    public $edition;
    public $eventname;
    public $startdate;
    public $enddate;
    public $venue;
    public $city;
    public $organizer;
    public $email;
    public $phone;
    public $eventype;
    public $slug;
    public $image;
    public $extprice;
    public $stdprice;

    public $catgeory_id;
    public $sector_id;
    public $expo_id;
    public $search_id;

    public $option;

    use WithFileUploads;
    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }
    
    public function mount()
    {
        
        $this->level = 3;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function newlist(){   
        $event = new Event();
        $event->eventname = $this->eventname;
        $event->slug = $this->slug;
        $event->enddate = $this->enddate;
        $event->startdate = $this->startdate;
        $event->venue = $this->venue;
        $event->city = $this->city;
        $event->image = $this->image;
        $event->edition  = $this->edition;
        $event->eventype = $this->eventype;
        $event->category_id = $this->category_id;
        $event->sector_id  = $this->sector_id;
        $event->expo_id = $this->expo_id;
        $event->search_id = $this->search_id;
        $event->level  = 3;
        $event->status  = 1;
        $event->admstatus  = 0;
        $event->save();

        dd($event);
       
    }

    public function render()
    {
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        return view('livewire.employee.employee-dashboard-component',['abc' => $abc, 'jkl' => $jkl, 'ghi' => $ghi, 'def' => $def])->layout('layouts.exhibitor');
    }
}
