<?php

namespace App\Http\Livewire;

use App\Models\Knotes;
use Livewire\Component;

class GiftDateComponent extends Component
{

    public $Bdate;
    public $Adate;
    public $id;

    public function mount ($id)
    {
       $this->id = $id;
    }

    public function birthdadd($id)
    {
        $openknots = Knotes::find($id);
        $openknots->Bdate = $this->Bdate;
        $openknots->save();
        return redirect()->route('date.business', ['id' => $openknots->id,'board' => 'birthday']);
    }

    public function anydadd($id)
    {
        $openknots = Knotes::find($id);
        $openknots->Bdate = $this->Adate;
        $openknots->save();
        return redirect()->route('date.business', ['id' => $openknots->id,'board' => 'aniversary']);
    }

    public function render()
    {
        return view('livewire.gift-date-component');
    }
}
