<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;

class AdminCareerAddComponent extends Component
{
    public $title;
    public $slug;
    public $description;
    public $skills;
    public $level;
    public $requirement;
    public $qualification;
    public $department;
    public $location_state;
    public $location_country;
    public $experience;
    public $status;
    public $type;


    
    public function add() {
    
        $jobs = new Job() ;
        
          $jobs->title = $this->title;
          $jobs->slug = $this->slug;
          $jobs->description = $this->description;
          $jobs->skills = $this->skills;
          $jobs->level = $this->level;
          $jobs->requirement = $this->requirement;
          $jobs->qualification = $this->qualification;
          $jobs->department = $this->department;
          $jobs->location_state = $this->location_state;
          $jobs->location_country = $this->location_country;
          $jobs->experience = $this->experience;
          $jobs->status = $this->status;
          $jobs->type = $this->type;

          $jobs->save();
          session()->flash('message','Job has been posted Successfully.'); 
          return redirect()->route('admin.job');
      }


    public function render()
    {
        $jobs = Job::all();   
        return view('livewire.admin.admin-career-add-component',['jobs'=>$jobs])->layout('layouts.admin');
    }
}
