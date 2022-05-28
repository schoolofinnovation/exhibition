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


    public function render()
    {
        $userorders = Order::where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        //ebdd($userorders);
        return view('livewire.user.user-orders-component',['userorders' => $userorders])->layout('layouts.eblog');
    }
}
