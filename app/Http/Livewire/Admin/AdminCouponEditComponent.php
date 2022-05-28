<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminCouponEditComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $package;
    public $status = '1';
    public $coupon_id;

    public function mount($coupon_id)
    {
           $couPon = Coupon::find($coupon_id);
           $this->code = $couPon->code;
           $this->type = $couPon->type;
           $this->value = $couPon->value;
           $this->cart_value = $couPon->cart_value;
           $this->expiry_date = $couPon->expiry_date;
           $this->package = $couPon->package;
           $this->status = $couPon->status;
           $this->coupon_id = $couPon->id;
    }

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


    public function editCouPon() 
    {
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',
            'package' => 'required',
        ]);

        $couPon = Coupon::find($this->coupon_id);
        $couPon->code = $this->code;
        $couPon->type = $this->type;
        $couPon->value = $this->value;
        $couPon->cart_value = $this->cart_value;
        $couPon->expiry_date = $this->expiry_date;
        $couPon->package = $this->package;
        $couPon->status = $this->status;
        $couPon->save();
        session()->flash('message',' Congrats, Coupons has been  updated'); 
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin.admin-coupon-edit-component');
    }
}
