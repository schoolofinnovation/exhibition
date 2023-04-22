<?php

namespace App\Http\Livewire\Admin;

use App\Mail\EventToClient;
use App\Mail\MonthlyEvent;
use App\Models\Appliedjob;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Franchise;
use App\Models\Job;
use App\Models\Lead;
use App\Models\Optio;
use App\Models\Order;
use App\Models\ProductAttribute;
use App\Models\Sector;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Cartalyst\Stripe\Api\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
  public $board;
  public $month;
  public $emailClient;
  public $emaill;
    
    //career
    use WithPagination;

    public function mount($board)
    {
        $this->board = $board;
        $this->month = Carbon::today()->format("m");
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

    public function eventdelete($id)
    {   $job = Event::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
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
      $orders = Order::orderBy('created_at','DESC')->paginate(9);
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

      $expoaward = Event::whereYear('startdate', '2023' )->where('status','1')->where('admstatus','0')->orderBy('created_at','ASC')->paginate(10);
     
      
      //total event
      $events = Event::count();
     
      //current Event
      $mytime = Carbon::today()->format("Y-m-d");
      $mytomorrow = Carbon::tomorrow()->format("Y-m-d");
      $myweek = Carbon::now()->addDays(7)->format("Y-m-d");
      $mymonth = Carbon::now()->addDays(30)->format("m");

      $monthwise = Event::whereYear('startdate', '2023' )->where('status','1')->where('admstatus','1')->whereMonth('startdate', $this->month)->orderBy('startdate','ASC')->get();
      
      $mythreemonth = Carbon::now()->addDays(90)->format("Y-m-d");

      $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
      $eventomorrow = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytomorrow)->orderBy('startdate','ASC')->get();
      $eventweek = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $myweek)->orderBy('startdate','ASC')->get();
      $eventmonth = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $mymonth)->orderBy('startdate','ASC')->get();
      $eventthreemonth = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $mythreemonth)->orderBy('startdate','ASC')->get();

        return view('livewire.admin.admin-dashboard-component',['mymonth' => $mymonth,'monthwise' => $monthwise,'eventthreemonth' => $eventthreemonth,'eventmonth' => $eventmonth,'eventweek' => $eventweek, 'eventomorrow'=>$eventomorrow, 'evento'=>$evento,'optios'=>$optios,'orders'=>$orders,'coupons'=>$coupons,'events'=>$events,'expoaward'=>$expoaward,'fattributes'=>$fattributes,'jobs'=>$jobs,'franchises'=>$franchises,'resume'=>$resume,'users'=>$users,
        'categories'=>$categories,'service'=>$service,'category'=>$category,'sectorr'=>$sectorr,'business'=>$business,'sector'=>$sector,'categ'=>$categ,'catcount'=>$catcount,
        ])->layout('layouts.admin');
        
    }
}
