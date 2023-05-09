<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pavillion;
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
    public $status;
    public $admstatus;
    
    Use WithFileUploads;

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


    public function render()
    {
        return view('livewire.admin.admin-event-multi-participants-component');
    }
}
