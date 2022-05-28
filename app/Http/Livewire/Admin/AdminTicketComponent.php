<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class AdminTicketComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $tickets = Ticket::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.admin-ticket-component',['tickets'=>$tickets])->layout('layouts.eblog');
    }
}
