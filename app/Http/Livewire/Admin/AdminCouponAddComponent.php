<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminCouponAddComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $package;
    public $status = '1';

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',
            'package' => 'required',
        ]);
    }

    public function add() {
    
        $this->validate([
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',
            'package' => 'required',
        ]);

        $couPon = new Coupon();
        $couPon->code = $this->code;
        $couPon->type = $this->type;
        $couPon->value = $this->value;
        $couPon->cart_value = $this->cart_value;
        $couPon->expiry_date = $this->expiry_date;
        $couPon->package = $this->package;
        $couPon->status = $this->status;
        $couPon->save();
        session()->flash('message',' Congrats, we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-coupon-add-component')->layout('layouts.eblog');
    }
}
