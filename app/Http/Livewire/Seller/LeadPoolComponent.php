<?php

namespace App\Http\Livewire\Seller;

use App\Models\Event;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class LeadPoolComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $event = Event::where('user_id', Auth::user()->id)->pluck('id')->all();
        $lead = Lead::whereIn('event_id', $event)->orderBy('id','desc')->paginate(10);
        return view('livewire.seller.lead-pool-component',['lead' => $lead ])->layout('layouts.admin');
    }
}
