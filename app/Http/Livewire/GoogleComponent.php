<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;


class GoogleComponent extends Component
{


    public function loginwithGoogle()
    {
         return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
            try {

                    $user = Socialite::driver('google')->user();
                        $is_user = user::where('email', $user->getEmail())->first();

                        if(!$is_user)
                            {
                                $saveUser = User::updateOrCreate
                                (
                                    [
                                        'google_id' => $user->getId()
                                    ],
                                    [
                                        'name' => $user->getName(),
                                        'email' => $user->getEmail(),
                                        'password' => Hash:: make ($user->getName().'@'.$user -> getId())
                                    ]
                                );

                            }
                        else
                            {
                                $saveUser = User::where('email',$user->getEmail())->update(['google_id' => $user->getId()]);
                                $saveUser = user::where('email', $user->getEmail())->first();
                            }

                Auth::loginUsingId($saveUser->id);
                return redirect()->route('business.exhibition');
             }
             catch(\Throwable $th){
                throw $th;
             }
    }

    public function render()
    {
        
        return view('livewire.google-component');
    }
}
