<?php

namespace App\Http\Livewire\Admin;

use App\Models\Optio;
use Livewire\Component;

class AdminOptioAddComponent extends Component
{
    public $name;
    public $content;
    public $status = '1';
   
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|unique:optios',
        ]);
    }

    public function add() 
    {
        $this->validate([
            'name' => 'required|unique:optios',
        ]);

        $optios = new Optio();
        $optios->name = $this->name;
        $optios->content = $this->content;
        $optios->status = $this->status;
        $optios->save();
        session()->flash('message',' Congrats, we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin.admin-optio-add-component')->layout('layouts.eblog');
    }
}
