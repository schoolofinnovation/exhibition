<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class UserOrdersComponent extends Component
{

    use WithPagination;

    public function oDelete($id)
    {   $job = Order::find($id);
        $job->delete();
        session()->flash('message','Order has been deleted Successfully');
    }

    public function cancelOrder($order_id)
    {
      $order = Order::find($order_id);
      $order->status = "canceled";
      $order->canceled_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }
    
    public $company;
    public $brand;
    public $pan;
    public $email;
    public $contact;
    public $address;
    public $city;
    public $state;
    public $country;
    public $hall;
    public $stall;
    public $size;
    public $TDS;
    public $total;

    public function contractForm()
    {
        $contractformi = new Contractio();
        $contractformi->company = $this->company;
        $contractformi->brand = $this->brand;
        $contractformi->pan = $this->pan;
        $contractformi->email = $this->email;
        $contractformi->contact = $this->contact;

        $contractformi->address = $this->address;
        $contractformi->city = $this->city;
        $contractformi->state = $this->state;
        $contractformi->country = $this->country;

        $contractformi->hall = $this->hall;
        $contractformi->stall = $this->stall;
        $contractformi->size = $this->size;
        $contractformi->TDS = $this->TDS;
        $contractformi->total = $this->total;
        
        $contractformi->save();
    }

    public function render()
    {
        $userorders = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        //ebdd($userorders);
        return view('livewire.user.user-orders-component',['userorders' => $userorders])->layout('layouts.eblog');
    }
}
