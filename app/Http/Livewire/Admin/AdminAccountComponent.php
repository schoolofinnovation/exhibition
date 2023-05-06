<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAccountComponent extends Component
{
    public $formm;

    public function mount($formm)
    {
       $this->formm = $formm;
    }


    public function render()
    {
        return view('livewire.admin.admin-account-component')->layout('layouts.eblog');
    }
}
