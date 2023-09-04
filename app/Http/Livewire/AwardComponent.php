<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Rate;
use Livewire\Component;

class AwardComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function render()
    {
        $eventID = Event::where('slug', $this->slug)->first();
        $getIDEvent = $eventID->id;
        $eventrate = Rate::where('event_id', $getIDEvent)->order('updated_at', 'desc')->get();

        return view('livewire.award-component', ['eventrate' => $eventrate]);
    }
}
