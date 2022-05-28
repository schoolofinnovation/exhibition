<?php

namespace App\Http\Livewire\Employee;

use App\Models\Category;
use App\Models\Expo;
use App\Models\Sector;
use Livewire\Component;

class EmployeeAddExhibitorComponent extends Component
{
    public $option;

    public function render()
    {
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        return view('livewire.employee.employee-add-exhibitor-component',['abc' => $abc, 'jkl' => $jkl, 'ghi' => $ghi, 'def' => $def])->layout('layouts.exhibitor');
    }
}
