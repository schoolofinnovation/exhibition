<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LeadComponent extends Component
{
    public $name;
    public $email;
    public $city;
    public $phone;
    public $user_id;
    public $event_id;
    public $type;
    public $admstatus;
    public $status;

    public function mount($slug , $type)
    {
       $this->slug = $slug;
       $this->type = $type;
       $def= Event::where('slug', $this->slug)->first();
       $this->event_id = $def->id;
       $this->admstatus= '0';  
        $this->status = 1; 
        $this->user_id = null; 
    }

    public function add(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'city'=>'required',
            'phone'=>'required',
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->city = $this->city;
        $newEvent->phone = $this->phone;
        $newEvent->type = $this->type;
        $newEvent->event_id = $this->event_id;
        $newEvent->type = $this->type;
        if (Auth::check()) 
        {
            $newEvent->user_id = Auth::user()->id;
        }   
            else
        {
            $newEvent->user_id = $this->user_id;
        }
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();
        session()->flash('message','Thanks for sharing your review.');
        return back()->withinput();
    }

    public function render()
    {
        
        return view('livewire.lead-component');
    }
}
