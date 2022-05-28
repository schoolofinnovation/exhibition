<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;
use Livewire\WithPagination;

class AdminAttributesComponent extends Component
{
    public function delete($id)
    {   $job = ProductAttribute::find($id);
        $job->delete();
        session()->flash('message','Product Attribute has been deleted Successfully');
    }

    use WithPagination;
    public function render()
    {
        $fattributes = ProductAttribute::paginate(10);
        return view('livewire.admin.admin-attributes-component',['fattributes'=>$fattributes])->layout('layouts.admin');
    }
}
