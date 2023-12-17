<?php

namespace App\Http\Livewire\User;

use App\Models\Magazine;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserLandingComponent extends Component
{
    public $trackcustomer;


    public function mount($trackcustomer)
    {
      $this->trackcustomer = $trackcustomer;
    }


    public function render()
    {
        $magazine = Magazine::where('user_id', Auth::user()->id)->get();
        
        return view('livewire.user.user-landing-component', ['magazine' => $magazine]);
    }
}
