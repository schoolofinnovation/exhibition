<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCareerComponent extends Component
{
    public $slug;
    use WithPagination;

    
    public function delete($id)
    {   $job = Job::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function mount($slug)
    {
       $this->slug = $slug;
    }


    public function render()
    {
        $findo = Job::where('slug', $this->slug)->first();
        $jobs = Job::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.admin-career-component',['findo'=>$findo,'jobs'=>$jobs])->layout('layouts.admin');
    }
}
