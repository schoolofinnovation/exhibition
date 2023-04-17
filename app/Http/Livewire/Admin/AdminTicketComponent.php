<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTicketComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    use WithPagination;
    public function render()
    {
        $tickets = Ticket::orderBy('id','DESC')->paginate(5);
        $event = Event::where('slug', $this->slug)->first();
        return view('livewire.admin.admin-ticket-component',['tickets'=>$tickets, 'event'=>$event])->layout('layouts.eblog');
    }
}
