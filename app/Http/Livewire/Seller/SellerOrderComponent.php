<?php

namespace App\Http\Livewire\Seller;

use App\Models\Franchise;
use App\Models\Optio;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Response;
use Google\Service\CloudLifeSciences\Mount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class SellerOrderComponent extends Component
{
    use WithPagination;

    public $action_date;
    public $action_time;
    public $user_id;
    public $optio_id;
    public $status = 1;
    public $adm_status = 1;
    public $order_id ;

    public function mount(){
      $this->profile_type="SLR";  
      //$this->optio_id = optio->id;  
      $this->currentStep = 1;

  }

    public function rEsPonse($order_id, $optio_id)
    {
      $order = new Response(); 
      $order->order_id = $order_id;
      $order->optio_id = $optio_id;
      //$order->identifier = $optio->name;
      $order->action_date = DB::raw('CURRENT_DATE');
      $order->action_time = DB::raw('CURRENT_TIME');
      $order->status = $this->status;
      $order->adm_status = $this->adm_status;
      $order->user_id = Auth::user()->id;
      $order->save();

      if($optio_id == '3')
      {
        $this->cncelOrder($order->id,'cancelled');
      }
      session()->flash('message','Order has been cancealed');
    }

    public function cncelOrder($order_id, $status)
    {
      $order = Order::find($order_id);
      //$order->order_id = $order->id;
      $order->status = $status;
      $order->canceled_date = DB::raw('CURRENT_DATE');
      dd($order);
      //$order->save();
      session()->flash('order_message','Order has been canceled');
    }


    public function updateOrdrStatus($order_id, $status)
    {
      $order = Order::find($order_id);
      $order->status = $status;
      if($status == "delivered")
      {
        $order->delivered_date = DB::raw('CURRENT_DATE');
      }
      elseif ($status == "canceled")
      {
        $order->canceled_date = DB::raw('CURRENT_DATE');
      }
      $order->save();
      session()->flash('order_message','Order has been updated Successfully');
    }

    public function render()
    {   $optio = Optio::get();
        $order = Franchise::where('user_id' , Auth::user()->id)->pluck('id');
        $short = OrderItem::whereIn('franchise_id', $order)->orderBy('created_at','desc')->paginate(10);
        return view('livewire.seller.seller-order-component',['optio'=>$optio,'short'=>$short])->layout('layouts.eblog');
    }
}
