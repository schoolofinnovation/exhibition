<?php

namespace App\Http\Livewire\Admin;

use App\Models\Appliedjob;
use Livewire\Component;
use Livewire\WithPagination;

class AdminJobApplicationComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $jobs = Appliedjob::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.admin-job-application-component',['jobs'=>$jobs])->layout('layouts.admin');
    }
}
