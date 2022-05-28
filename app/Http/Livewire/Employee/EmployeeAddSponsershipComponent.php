<?php

namespace App\Http\Livewire\Employee;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use App\Models\Sponsership;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EmployeeAddSponsershipComponent extends Component
{
    public $event_id;
    public $plan;
    public $auidence;
    public $mediacoverage;
    public $startdate;
    public $enddate;
    public $stdcost;
    public $extcost;
    public $image;
    public $sponsercoverage;
    public $required_sponser_booklet;
    public $termsconditions;
    public $terms;
    public $status;
    public $admstatus;

    use WithFileUploads;
    public function generateSlug()
    {
        $this->slug = Str::slug($this->plan,'-');
    }

    public function newSponser(){

        $sponserShip = New Sponsership();
        $sponserShip->event_id = $this->event_id;
        $sponserShip->plan = $this->plan;
        $sponserShip->slug = $this->slug;
        $sponserShip->auidence = $this->auidence;
        $sponserShip->mediacoverage = $this->mediacoverage;
        $sponserShip->startdate = $this->startdate;
        $sponserShip->enddate = $this->enddate;
        $sponserShip->stdcost = $this->stdcost;
        $sponserShip->extcost = $this->extcost;
        $sponserShip->sponsercoverage = $this->sponsercoverage;
        $sponserShip->image = $this->image->store('sponSer','public');
        $sponserShip->required_sponser_booklet = $this->required_sponser_booklet;
        $sponserShip->termsconditions = 0;
        $sponserShip->terms = $this->terms;
        $sponserShip->status = 1;
        $sponserShip->user_id = Auth::user()->id;
        $sponserShip->admstatus = 0;
        $sponserShip->save();
       
    }

    public function render()
    {
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        $exhibition_id = Event::where('user_id', Auth::user()->id)->get();

        return view('livewire.employee.employee-add-sponsership-component',['exhibition_id' => $exhibition_id,'abc' => $abc, 'jkl' => $jkl, 'ghi' => $ghi, 'def' => $def]);
    }
}
