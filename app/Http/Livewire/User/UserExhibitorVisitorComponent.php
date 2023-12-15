<?php

namespace App\Http\Livewire\User;

use App\Models\bcontact;
use Livewire\Component;

class UserExhibitorVisitorComponent extends Component
{
    public $exhibitor;
    public $expo; 


    public function mount($exhibitor, $expo)
    {
        $this->exhibitor = $exhibitor;
        $this->expo = $expo;
    }

    public function directbrandBcontact()
    {
       $upted = new bcontact();
       $upted->expo_id = $uptedetail->id ;

       $upted->name = trim($this->name);
       $upted->email = trim($this->email);
       $upted->phone = $this->phone;
       
       //$upted->user_id = Auth::user()->id;
       
       $upted->status ='1';
       $upted->admstatus = '1';
       $upted->save();
       


       $uptedetail = new Brand();
      
       $uptedetail->organisation = trim($this->organisation);
       $uptedetail->designation = trim($this->designation);
       $uptedetail->industry = trim($this->industry);
       
       $uptedetail->save();


       return redirect()->back();
      
    }

    public function render()
    {
        return view('livewire.user.user-exhibitor-visitor-component');
    }
}
