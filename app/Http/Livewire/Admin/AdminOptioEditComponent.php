<?php

namespace App\Http\Livewire\Admin;

use App\Models\Optio;
use Livewire\Component;

class AdminOptioEditComponent extends Component
{
    public $name;
    public $content;
    public $status = '1';
    public $optio_id;

    public function mount($optio_id)
    {
           $optio = Optio::find($optio_id);
           $this->name = $optio->name;
           $this->content = $optio->content;
           $this->status = $optio->status;
           $this->optio_id = $optio->id;
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|unique:optios',
        ]);
    }

    public function editOptio() 
    {
        $this->validate([
            'name' => 'required|unique:optios',
        ]);

        $optios = Optio::find($this->optio_id);
        $optios->name = $this->name;
        $optios->content = $this->content;
        $optios->status = $this->status;
        $optios->save();
        session()->flash('message',' Congrats, we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard');
    }
    public function render()
    {
        return view('livewire.admin.admin-optio-edit-component');
    }
}
