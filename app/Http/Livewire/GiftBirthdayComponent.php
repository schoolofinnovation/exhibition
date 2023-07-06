<?php

namespace App\Http\Livewire;

use App\Models\Knotes;
use Livewire\Component;

class GiftBirthdayComponent extends Component
{
    public $name;
    public $phone;
    public $status;
    public $Atype;
    public $Adate;
    public $Btype;
    public $Bdate;
    public $board;


    public function jollyknotes()
    {
        $jollyknot = new Knotes();
        $jollyknot->name = $this->name;
        $jollyknot->phone = $this->phone;
        $jollyknot->status = $this->status;
        return redirect()->route('date.business', ['id' => $jollyknot->id,'board' => 'birthday']);
    }

    public function render()
    {
        return view('livewire.gift-birthday-component');
    }
}
