<?php

namespace App\Http\Livewire\Admin;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Str;

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

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title,'-');
        $this->status = '1' ;
    }
    
    public function add() {
    
        $jobs = new Job() ;
        
          $jobs->title = $this->title;
          $jobs->slug = $this->slug;
          
          $blogdesc = explode(",,", $this->description);
          $jobs->description = json_encode($blogdesc);

          $blogReq = explode(",,", $this->requirement);
          $jobs->requirement = json_encode($blogReq);   
          
          $blogSki = explode(",,", $this->skills);
          $jobs->skills = json_encode($blogSki); 

          $jobs->level = $this->level;
          $jobs->qualification = $this->qualification;
          $jobs->department = $this->department;
          $jobs->location_state = $this->location_state;
          $jobs->location_country = $this->location_country;
          $jobs->experience = $this->experience;
          $jobs->status = $this->status;
          $jobs->type = $this->type;

          $jobs->save();
          session()->flash('message','Job has been posted Successfully.'); 
          return redirect()->route('admin.dashboard',['board' => 'job']);
      }


    public function render()
    {
        $jobs = Job::all();   
        return view('livewire.admin.admin-career-add-component',['jobs'=>$jobs])->layout('layouts.admin');
    }
}
