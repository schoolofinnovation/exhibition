<?php

namespace App\Http\Livewire\Admin;

use App\Models\Appliedjob;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Job;
use App\Models\Optio;
use App\Models\Order;
use App\Models\ProductAttribute;
use App\Models\Sector;
use App\Models\Service;
use App\Models\User;
use Cartalyst\Stripe\Api\Orders;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
  public $board;
    
    //career
    use WithPagination;

    public function mount()
    {
        $this->board="order";
    }
    
    public function updateJobstatus($id, $status) 
    {
      $order = Job::find($id);
      $order->status = $status;
      $order->save();
      session()->flash('message','info has been deleted Successfully');
     
    }  
    
    public function updatefranchisestatus($id, $status) 
    {
      $franchise = Franchise::find($id);
      $franchise->status = $status;
      $franchise->save();
      session()->flash('message','info has been deleted Successfully');
     
    }  

    public function updateCouponstatus($id, $status) 
    {
      $couPon = Coupon::find($id);
      $couPon->status = $status;
      $couPon->save();
      session()->flash('message',' Status Successfully Changed');
    } 
    
    public function updateOptiostatus($id, $status) 
    {
      $opTios = Optio::find($id);
      $opTios->status = $status;
      $opTios->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function optioDelete($id)
    {   $opTio = Optio::find($id);
        $opTio->delete();
        session()->flash('message','Response has been deleted Successfully');
    }


    public function couponDelete($id)
    {   $couPon = Coupon::find($id);
        $couPon->delete();
        session()->flash('message','Coupon has been deleted Successfully');
    }

    public function deliveredOrder()
    {
      $order = Order::find($this->order_id);
      $order->status = "canceled";
      $order->delivered_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }

    public function cancelOrder()
    {
      $order = Order::find($this->order_id);
      $order->status = "canceled";
      $order->canceled_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }
    

    public function Fdelete($id)
    {   $franchise = Franchise::find($id);
        $franchise ->delete();
        session()->flash('message','Opportunity has been deleted Successfully');
    }
    
    public function oDelete($id)
    {   $job = Order::find($id);
        $job->delete();
        session()->flash('message','Order has been deleted Successfully');
    }

    public function delete($id)
    {   $job = Job::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function delet($id)
    { $user = User::find($id);
      $user->delete();
      session()->flash('message','User  has been  deleted successfully');
    }
    
    public function render()
    {
      //order
      $optios = Optio:: get();
      $orders = Order::orderBy('created_at','DESC')->paginate(12);
      $franchises = Franchise::with('sector')->orderBy('id','DESC')->paginate(7);
      $jobs = Job::orderBy('id','DESC')->paginate(5);
      $resume = Appliedjob::orderBy('id','DESC')->paginate(7);
      $users = User::orderBy('id','DESC')->paginate(5);
      $coupons = Coupon::orderBy('id','DESC')->paginate(5);

      //category_dashborad
      $categ = Category::orderBy('industry','DESC')->paginate(5);
      $catcount = Category::withcount('sector')->get();
      $sector = Sector::get();
      $categories = Category::get();
      $service = Service::get();

      $category = Category::orderBy('industry','DESC')->paginate(5);
      $sectorr = Sector::paginate(5);
      $business = Service::paginate(5);
      $fattributes = ProductAttribute::paginate(10);
      $expoaward = Event::orderBy('updated_at','DESC')->paginate(6);
      $events = Event::count();
     
        return view('livewire.admin.admin-dashboard-component',['optios'=>$optios,'orders'=>$orders,'coupons'=>$coupons,'events'=>$events,'expoaward'=>$expoaward,'fattributes'=>$fattributes,'jobs'=>$jobs,'franchises'=>$franchises,'resume'=>$resume,'users'=>$users,
        'categories'=>$categories,'service'=>$service,'category'=>$category,'sectorr'=>$sectorr,'business'=>$business,'sector'=>$sector,'categ'=>$categ,'catcount'=>$catcount,
        ])->layout('layouts.eblog');
        
    }
}
