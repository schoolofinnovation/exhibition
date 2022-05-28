<?php

namespace App\Http\Livewire\Employee;

use App\Models\Category;
use App\Models\Expo;
use App\Models\Sector;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployeeAddPartnerComponent extends Component
{
    public $event_id;
    public $user_id;
    public $sponsership_id;
    public $social_id;

    public $image;
    public $brand_name;
    public $status = 1;
    public $admstatus = 0;
    public $terms;

    //social
    //public $website;
    public $channel;
    public $link;

    //businessteam
    public $designation;
    public $website;
    public $founder;
    public $name;
    public $email;
    public $contact;


    

    public function render()
    {
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        $exhibition_id = Event::where('user_id', Auth::user()->id)->get();

        return view('livewire.employee.employee-add-partner-component', ['exhibition_id' => $exhibition_id,
                                                                                  'abc' => $abc, 
                                                                                  'jkl' => $jkl, 
                                                                                  'ghi' => $ghi, 
                                                                                  'def' => $def])->layout('layouts.exhibitor');
    }
}
