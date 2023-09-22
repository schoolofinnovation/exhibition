<?php

namespace App\Http\Livewire\User;

use App\Models\Contractio;
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
    
    public $owner;
    public $organisation;
    public $brand_name;
    public $GST;
    public $industry;
    public $product;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $country;
    public $hall;
    public $stall;
    public $size;

    public $status;
    public $admstatus;

    public $formm;
    

    public function mount()
    {
        $this->status = '1';
        $this->admstatus = '1';
    }

    public function contractForm()
    {
        $contractformi = new Contractio();

        $contractformi->owner = $this->owner;
        $contractformi->organisation = $this->organisation;
        $contractformi->brand_name = $this->brand_name;
        $contractformi->GST = $this->GST;
        $contractformi->industry = $this->industry;
        $contractformi->product = $this->product;
        $contractformi->email = $this->email;
        $contractformi->phone = $this->phone;
        $contractformi->address = $this->address;
        $contractformi->city = $this->city;
        $contractformi->state = $this->state;
        $contractformi->country = $this->country;
        $contractformi->hall = $this->hall;
        $contractformi->stall = $this->stall;
        $contractformi->size = $this->size;

        $contractformi->status = $this->status;
        $contractformi->admstatus = $this->admstatus;
        
        //$contractformi->brand_id = '1';
        $contractformi->user_id = Auth::user()->id;
        //$contractformi->event_id = '2';

        $contractformi->save();

        $contractformio = Contractio::find($contractformi->id);
        $contractformio->featureID = $contractformio->id;
        $contractformio->save();

        return redirect()->route('space.booking', ['brand_id' => $contractformio->featureID, 'formm' => 'basic' ]);
        //$this->reset(); /form/{event_slug}/space/{brand_id}/expand-your-business/{formm}
    }

    public function delete($id)
    {
        $contractformio = Contractio::find($id);
        $contractformio->featureID = $contractformio->id;
        $contractformio->delete();
    }

    public function render()
    {
        $userorders = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        //ebdd($userorders);
        return view('livewire.user.user-orders-component',['userorders' => $userorders])->layout('layouts.eblog');
    }
}
