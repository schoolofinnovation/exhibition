<?php

namespace App\Http\Livewire\Seller;

use App\Models\Event;
use App\Models\Hashtag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HastagComponent extends Component
{
    public $hastag;
    public $event_id;

    public function mount()
    {
       //$this->slug = $slug;
       //$def= Event::where('slug',$this->slug)->first();
       //$this->event_id = $def->id;
       $this->admstatus= '0';  
        $this->status = 1; 
    }

    public function add()
    {
        $this->validate([

            'hastag'=>'required', 
        ]);

        $newEvent = new Hashtag();
        $newEvent->hastag = $this->hastag;
        $newEvent->event_id = $this->event_id;
        $newEvent->user_id = Auth::user()->id;
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();
        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function render()
    {
        $event = Event::where('user_id', Auth::user()->id )->get();
        return view('livewire.seller.hastag-component',['event' => $event])->layout('layouts.admin');
    }
}
