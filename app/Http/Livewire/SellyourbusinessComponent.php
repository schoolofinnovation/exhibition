<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use PDF;

class SellyourbusinessComponent extends Component
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
        ];
      
      $pdf = PDF::loadView('livewire.document.expand-component', $data);
      return $pdf -> download('Sell_your_Business.pdf');
    }


    public function render()
    {
       
        return view('livewire.sellyourbusiness-component');
    }
}
