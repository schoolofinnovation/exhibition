<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDetailComponent extends Component
{   public $slug;
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    use WithPagination;
    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();
        return view('livewire.admin.admin-detail-component',['event'=>$event])->layout('layouts.eblog');
    }
}
