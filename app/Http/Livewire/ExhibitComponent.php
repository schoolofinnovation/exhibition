<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    public $name;

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
            'name'=>'required', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'business';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        //return redirect()->route('coicart');thankyou
        return redirect()->route('event.exhibit', ['board' => 'thankyou']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
        
    }


    //for visitor
    public function addTicket()
    {
        $this->validate([
            'email'=>'required',
            'phone'=>'required',
            'name'=>'required', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'ticket';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        return redirect()->route('coicart');
        session()->flash('message','Thanks for sharing your review.');
        
    }


    public function render()
    {
    //     $data = session()->all();
    //    dd($data);

       $findID = session()->get('eventID');
       $findevent = Event::where('id', $findID)->first();
       
        return view('livewire.exhibit-component', ['findevent' => $findevent]);
    }
}
