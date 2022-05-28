<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SellerAccountComponent extends Component
{
    public function render()
    {
        return view('livewire.seller.seller-account-component')->layout('layouts.admin');
    }
}
