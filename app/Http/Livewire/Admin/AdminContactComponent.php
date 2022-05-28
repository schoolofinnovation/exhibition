<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{
    use WithPagination;

    public function deleteContact($id)
    {   $contact = Contact::find($id);
        $contact->delete();
        session()->flash('message','contact has been deleted Successfully');
    }

    public function render()
    {
        $contacts = Contact::orderBy('id','DESC')->paginate(5);        
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('layouts.admin');
    }
}
