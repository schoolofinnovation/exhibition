<?php

namespace App\Http\Livewire;

use App\Models\Info;
use Livewire\Component;

class ContactComponent extends Component
{
    //orderBy('id','DESC')->get();
    public function render()
    {
        $infos = Info::find(1);
        $corporate = Info::where('name','corporate')->first();
        $head = Info::where('name','head')->first();
        $branch = Info::where('name','branch')->first();
        $email = Info::where('name','email')->first();
        $toll = Info::where('name','toll')->first();
        return view('livewire.contact-component',['infos'=>$infos,
                                                  'corporate'=>$corporate,
                                                  'email'=>$email,
                                                  'toll'=>$toll,
                                                  'head'=>$head,
                                                  'branch'=>$branch ])->layout('layouts.eblog');
    }
}
