<?php

namespace App\Http\Livewire\Admin;

use App\Models\Info;
use Livewire\Component;
use Livewire\WithPagination;

class AdminInfoComponent extends Component
{
    use WithPagination;
    
    public function delete($id)
    {   $info = Info::find($id);
        $info->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function render()
    {
        $infos = Info::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.admin-info-component',['infos'=>$infos])->layout('layouts.admin');
    }
}
