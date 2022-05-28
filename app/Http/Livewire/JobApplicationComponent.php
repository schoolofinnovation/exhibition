<?php

namespace App\Http\Livewire;

use App\Mail\CareerMail;
use App\Models\Appliedjob;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobApplicationComponent extends Component
{
    public $name;
    public $email;
    public $message;
    public $resume;
    public $comments;
    
    //step function
    public $step;
    public $totalSteps = 2;
    public $currentStep = 1;
    public $terms;

    use WithFileUploads;
    public function mount()
    {
      $this->comments = 'new apply';
      $this->currentStep = 1;
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
       $this->currentStep++;
       if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
       $this->currentStep--;
       if($this->currentStep < 1){
        $this->currentStep = 1;
       }
    }


    public function sendEmail($appliedjobs){
        $details = [
        'title' => 'contact us ',
        'body' => 'thanks for doing'
        ];
        Mail::to($appliedjobs->email)
            ->send(new CareerMail($appliedjobs));
        //use to third panel to get backup
        Mail::to('laravel8coi@gmail.com')
            ->cc('laravel8coi@gmail.com')
            ->bcc('laravel8coi@gmail.com')
            ->send(new CareerMail($appliedjobs));
   }

  

      public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'name'=> 'required|string',
                'email'=> 'required',
                'message'=> 'required',
                'resume' => 'required|mimes:docx,pdf|max:1024',
                'terms' => 'accepted'
            ]);
        }
    }

     public function add(){
        $this->resetErrorBag();
        
         $resumeName = 'resume_'.$this->resume->getClientOriginalName();
         $upload_resume = $this->resume->storeAs('resumes', $resumeName);

         if($upload_resume){
            $values = array(
                "name" => $this->name,
                "email" => $this->email,
                "resume" => $resumeName,
                "message" => $this->message,
                "comments" => $this->comments,             
            );
            
            Appliedjob::insert($values);
            $this->reset();
            $this->currentStep = 2;
            
            //$this->sendEmail($values);
         };
    }



    public function render()
    { 

        return view('livewire.job-application-component');
    }
}
