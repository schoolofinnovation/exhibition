<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EmployeeAsideComponent extends Component
{
    public function render()
    {
        $speaker = Speaker::get();
        $sponsership = Sponsership::get();
        $exhibition = Event::where('user_id', Auth::user()->id)->get();
        return view('livewire.employee.employee-aside-component',[ 'exhibition'=> $exhibition,'speaker' => $speaker,'sponsership' => $sponsership]);
    }
}
