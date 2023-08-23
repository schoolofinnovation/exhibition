<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public $board;
    public $data;

    public function mount()
    {
        $this->admstatus= '0';  
        $this->status = '1'; 
        //$this->type = 'exhibit';
        
        //$findevent = DB::table('events')->where('id', $data)->first();

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
        $newEvent->type = 'business';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }


    
    public function addTicket()
    {
        $this->validate([
            'email'=>'required',
            'phone'=>'required', 
        ]);

        $newEvent = new Lead();
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'ticket';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        return redirect()->route('coicart');
        session()->flash('message','Thanks for sharing your review.');
        
    }


    public function render()
    {
    //     $data = session()->all();
    //    dd($data);
        return view('livewire.exhibit-component');
    }
}
