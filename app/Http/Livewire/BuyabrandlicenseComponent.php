<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDF;

class BuyabrandlicenseComponent extends Component
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
      $pdf = PDF::loadView('livewire.document.expand-component', $data);
      return $pdf-> download('Buy_a_Brand_License.pdf');
    }

   

    public function render()
    {
        return view('livewire.buyabrandlicense-component');
    }
}
