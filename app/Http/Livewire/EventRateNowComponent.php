<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Hashtag;
use App\Models\Rate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EventRateNowComponent extends Component
{
    public $rate;
    public $opinion;
    public $hastag;
    public $hasttag = [];
    public $status;
    public $admstatus;
    public $slug;
    public $event_id;
    public $user_id;

    
    public function mount($slug)
    {
       $this->slug = $slug;
       $def= Event::where('slug', $this->slug)->value('id');
       $this->event_id = $def;
       $this->admstatus= '0';  
       $this->status = 1;  
    }
    
    public function add()
    {
        $this->validate([
            'rate'=>'required', 
            'opinion'=>'required',
            'hasttag'=>'required',
        ]);

        $newEvent = new Rate();
        $newEvent->rate = $this->rate;
        $newEvent->opinion = $this->opinion;
        $newEvent->hasttag = json_encode($this->hasttag);
        $newEvent->event_id = $this->event_id;
        $newEvent->user_id = Auth::user()->id;
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        return redirect()->route('event.details', ['slug' => $this->slug]);
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();  
        $hashtag = Hashtag:: where('status', '1')->where('event_id', $event->id)->orWhere('event_id', NULL)->get();
        $previous = url()->previous();

        return view('livewire.event-rate-now-component',['previous'=>$previous,'event'=>$event, 'hashtag'=>$hashtag])->layout('layouts.eblog');
    }
}
