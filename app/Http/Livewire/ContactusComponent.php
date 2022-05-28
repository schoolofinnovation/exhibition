<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Category;
use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ContactusComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $industry;
    public $checkbox;
    public $seniority;
    public $no_employee;
    public $department;
    public $details;

    public function updated($fields){ 
         $this->validateOnly($fields,[
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required',
        'industry' => 'required',
        'department' => 'required',
        //'no_employee' => 'required',
        'seniority' => 'required'
         ]);
    }

    public function sendEmail($contact){
         $details = [
            'title' => 'contact us ',
            'body' => 'thanks for doing'
         ];
     Mail::to($contact->email)
          ->cc('laravel8coi@gmail.com')
          ->bcc('laravel8coi@gmail.com')
          ->send(new ContactMail($contact));
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
            'industry' => 'required',
            'department' => 'required',
            //'no_employee' => 'required',
            'seniority' => 'required'
        ]);

        $contact = new Contact();
        $contact -> name = $this->name;
        //$contact -> slug = $this->slug;
        $contact -> email = $this -> email;
        $contact -> phone = $this -> phone;
        $contact -> message = $this -> message;
        $contact -> industry = $this -> industry;
        $contact -> department = $this -> department;
        //$contact -> no_employee = $this -> no_employee;
        $contact -> seniority = $this -> seniority;
        $contact -> save();
        session()->flash('message', 'Thank you for getting in touch !!!' );
        $this->sendEmail($contact);
        $this->reset();
        return back()->withinput();
    }

    public function render()
    {
        $indusi = Category::where('status','active')->orderBy('industry', 'ASC')->get();
        return view('livewire.contactus-component',['indusi'=>$indusi]);
    }
}
