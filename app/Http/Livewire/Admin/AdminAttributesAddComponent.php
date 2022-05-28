<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesAddComponent extends Component
{
    public $name;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            "name" => "required"
        ]);
    }
    
    public function add() 
    {
        $this->validate([
            "name" => "required"
        ]);

        $info = new ProductAttribute(); 
          $info->name = $this->name;
          $info->save();
          session()->flash('message','Opportunity Attribute has been Created Successfully.'); 
          return redirect()->route('admin.dashboard');
    }
 

    public function render()
    {
        return view('livewire.admin.admin-attributes-add-component')->layout('layouts.eblog');
    }
}
