<?php

namespace App\Http\Livewire\Seller;

use App\Models\Event;
use App\Models\Sponsership;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
Use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class SellerSponsershipComponent extends Component
{
    public $user_id;
    public $event_id;
    public $plan;
    public $slug;
    public $auidence;
    public $mediacoverage;
    public $startdate;
    public $enddate;
    public $stdcost;
    public $extcost;
    public $sponsercoverage;
    public $image;
    public $required_sponser_booklet;
    public $termsconditions;
    public $terms;
    public $status;
    public $admstatus;

    Use WithFileUploads;

    public function mount()
    {
        $this->admstatus= '0';  
        $this->status = '1'; 
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->plan,'-');
    }

    public function sponseradd()
    {
        $this->validate([
            'event_id' => 'required',
            'plan' => 'required',
            'auidence' => 'required',
            'mediacoverage' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'stdcost' => 'required',
            'extcost' => 'required',
            'sponsercoverage' => 'required',
            'image' => 'required',
            'required_sponser_booklet' => 'required',
            'termsconditions' => 'required',
            'terms' => 'required',
        ]);

        $newsponser = new Sponsership();
        $newsponser->event_id = $this->event_id;
        $newsponser->plan = $this->plan;
        $newsponser->slug = $this->slug;
        $newsponser->auidence = $this->auidence;
        $newsponser->mediacoverage = $this->mediacoverage;
        $newsponser->startdate = $this->startdate;
        $newsponser->enddate = $this->enddate;
        $newsponser->stdcost = $this->stdcost;
        $newsponser->extcost = $this->extcost;
        $newsponser->sponsercoverage = $this->sponsercoverage;
        
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('sponsers', $newimage);
        $newsponser->image = $newimage;

        $newsponser->required_sponser_booklet = $this->required_sponser_booklet;
        $newsponser->termsconditions = $this->termsconditions;
        $newsponser->terms = $this->terms;
        $newsponser->user_id = Auth::user()->id;
        $newsponser->status = $this->status;
        $newsponser->admstatus = $this->admstatus;
        
        $newsponser->save();
        return redirect()->route('seller.dashboard');
        session()->flash('message','Thanks for sharing your review.');
 
    }

    public function render()
    {
        $event = Event::where('status','1')->where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->get();
        return view('livewire.seller.seller-sponsership-component',['event' => $event])->layout('layouts.admin');
    }
}
