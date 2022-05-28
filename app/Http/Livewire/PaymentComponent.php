<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentComponent extends Component
{
    public $paymentmode;
    public function render()
    {
        return view('livewire.payment-component')->layout('layouts.eblog');
    }
}
