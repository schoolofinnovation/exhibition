<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PDF;

class UserOrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
       $this->order_id = $order_id;
    }

    public function index($order_id)
    { 
      //$order = $this->order_id;
      //$shipping = Shipping::find($this->order_id);
      //$data = compact['order' => $order,'orderItem' => $orderItem,'shipping' => $shipping];
      //$orders = Order::find($order_id);
      //$order = Order::where('id',$orders->id)->get();
      $order = $order_id->orderItems->get();

      $pdf = PDF::loadView('livewire.user.user-order-details-component', compact($order));
      return $pdf -> download('COI_Buy_a_Business_License.pdf');   
    }
    
    public function cancelOrder()
    {
      $order = Order::find($this->order_id);
      $order->status = "canceled";
      $order->canceled_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }

    public function render()
    {
        $order = Order::where('user_id' , Auth::user()->id)->where('id', $this->order_id)->first();
        return view('livewire.user.user-order-details-component', ['order'=>$order])->layout('layouts.eblog');
        //dd($order);
    }
}