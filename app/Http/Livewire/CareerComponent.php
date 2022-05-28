<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class CareerComponent extends Component
{
    public function render()
    
    {
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.career-component',['jobs'=> $jobs])->layout('layouts.eblog');
    }
}
