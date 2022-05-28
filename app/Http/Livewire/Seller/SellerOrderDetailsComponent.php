<?php

namespace App\Http\Livewire\Seller;

use App\Models\Franchise;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id)
    {
       $this->$order_id = $order_id;
    }

    public function render()
    {
        
        $order = Order::find($this->order_id)->first();
        return view('livewire.seller.seller-order-details-component', ['order' => $order])->layout('layouts.eblog');
    }
}
