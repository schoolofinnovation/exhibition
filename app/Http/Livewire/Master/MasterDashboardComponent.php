<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;

class MasterDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.master.master-dashboard-component')->layout("layouts.eblog");
    }
}
