<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesEditComponent extends Component
{
    public $name;
    public $attribute_id;

    public function mount($attribute_id)
    {
        $fattribute = ProductAttribute::find($attribute_id);
        $this->attribute_id = $fattribute->id;
        $this->name = $fattribute->name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            "name" => "required"
        ]);
    }

    public function updateAttribute()
    {
        $this->validate([
            "name" => "required"
        ]);

        $fattribute = ProductAttribute::find($this->attribute_id);
        $fattribute->name =$this->name;
        $fattribute->save();
        session()->flash('message','Attribute has been updated succesfully!!');
        return redirect()->route('admin.dashboard');
    }
    public function render()
    {
        return view('livewire.admin.admin-attributes-edit-component')->layout('layouts.eblog');
        
    }
}
