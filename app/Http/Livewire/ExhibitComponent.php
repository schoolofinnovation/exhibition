<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExhibitComponent extends Component
{

    public $admstatus;
    public $status;
    public $event_id;
    public $user_id;
    public $type;
    public $email;
    public $phone;

    public function mount()
    {
        $this->admstatus= '0';  
        $this->status = '1'; 
        $this->type = 'exhibit';
    }

    public function add()
    {
        $this->validate([
            'email'=>'required',
            'phone'=>'required', 
        ]);

        $newEvent = new Lead();
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = $this->type;
        //$newEvent->event_id = $this->event_id;
        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }


    public function render()
    {
        return view('livewire.exhibit-component');
    }
}
