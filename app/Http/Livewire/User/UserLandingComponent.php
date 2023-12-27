<?php

namespace App\Http\Livewire\User;

use App\Models\bcontact;
use App\Models\Expo;
use App\Models\Magazine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Stringable;

class UserLandingComponent extends Component
{
    public $trackcustomer;
    public $board;

    public $name;
    public $slug;
    public $type;
    public $subscriber;
    public $desc;
    public $frequency;
    public $status;
    public $admstatus;
    public $user_id;


    public $released;
    public $updated;
    public $version;
    public $category;


    public $phone;
    public $email;


    public function mount($trackcustomer)
    {
      $this->trackcustomer = $trackcustomer;
        $fattribute = Auth::user();
        $this->name = $fattribute->name;
        $this->email = $fattribute->email;
        $this->phone = $fattribute->phone;
    }



    public function added()
    {
       $magazineDetails = new Magazine();
       $magazineDetails->name = $this->name;
       $magazineDetails->slug = Str::slug($this->name,'-');
       $magazineDetails->type = $this->type;
       $magazineDetails->subscriber = $this->subscriber;
       $magazineDetails->desc = $this->desc;
       $magazineDetails->frequency = $this->frequency;
       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';

       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save(); 

    }


    public function printedfacts()
    {
      $magazineDetails = new Magazine();
       $magazineDetails->released = $this->released;
       $magazineDetails->updated = $this->updated;
       $magazineDetails->version = $this->version;
       $magazineDetails->category = $this->category;

       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';

       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save();
    }



    public function updatecontact()
    {
       $magazineDetails = new bcontact();
       $magazineDetails->name = $this->name;
       $magazineDetails->designation = $this->designation;
       $magazineDetails->phone = $this->phone;
       $magazineDetails->email = $this->email;
       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';
       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save();
    }




    public function render()
    {
        $magazine = Magazine::where('user_id', Auth::user()->id)->get();

        $updatephone = Auth::user()->phone;
        $updateemail = Auth::user()->email;
        $updatename = Auth::user()->name;

        $tryin = Expo::where('type','expo')->where('admstatus',1)->get();
        
        return view('livewire.user.user-landing-component', ['tryin' => $tryin,'updatephone' => $updatephone,'updateemail' => $updateemail,'updatename' => $updatename,'magazine' => $magazine]);
    }
}
