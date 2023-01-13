<?php

namespace App\Http\Livewire\Seller;

use App\Models\Event;
use App\Models\Hashtag;
use App\Models\Lead;
use App\Models\Partner;
use App\Models\Pavillion;
use App\Models\Rate;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\Ticket;
use Livewire\Component;

class SellerEventIdeComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();
        $ticket = Ticket::where('user_id', $event->user_id)->where('event_id', $event->id)->get();
        $sponsership = Sponsership::where('user_id', $event->user_id)->where('event_id', $event->id)->get();
        $speaker = Speaker::where('user_id', $event->user_id)->where('event_id', $event->id)->get();
        $hashtag = Hashtag::where('user_id', $event->user_id)->where('event_id', $event->id)->get();

        $award = Rate::where('event_id', $event->id)->select('hasttag')->selectRaw('count(hasttag) as tryu')->groupBy('hasttag')->orderBy('tryu','DESC')->get();
        $tryc = $award->collect('hasttag');
        //$award = Rate::where('event_id', $event->id)->select('hasttag')->groupBy('hasttag');


        
        $pavillion = Pavillion::where('user_id', $event->user_id)->where('event_id', $event->id)->get();
        $partner = Partner:: where('user_id', $event->user_id)->where('event_id', $event->id)->get();
        
        $lead = Lead::where('event_id', $event->id)->get();
        
        $rate = Rate::where('event_id', $event->id)->get();

        return view('livewire.seller.seller-event-ide-component',['ticket' => $ticket, 
                                                                  'sponsership' => $sponsership,  
                                                                  'speaker' => $speaker,
                                                                  'rate' => $rate,
                                                                  'pavillion' => $pavillion,
                                                                  'partner' => $partner,
                                                                  'lead' => $lead,
                                                                  'hashtag' => $hashtag,
                                                                  'event' => $event,
                                                                  'award' => $award,'tryc' => $tryc
                                                                ])->layout('layouts.admin');
    }
}
