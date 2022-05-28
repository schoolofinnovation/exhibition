<?php

namespace App\Http\Livewire\Seller;

use App\Models\Brand;
use App\Models\Coupon;
use App\Models\Franchise;
use App\Models\Info;
use App\Models\Mag;
use App\Models\Order;
use App\Models\Review;
use App\Models\Sprofile;
use App\Models\User;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SellerDashboardComponent extends Component
{
  public $haveCouponCode;


    public function delete($id)
    { $franchise = Franchise::find($id);
      $franchise->delete();
      session()->flash('message','Franchise  has been  deleted successfully');
    }

    public function deletePost($id)
    { $new = Mag::find($id);
      $new->delete();
      session()->flash('message','Post  has been  deleted successfully');
    }

    public function applyCouponCode()
    {
       $coupon = Coupon::where('code',$this->couponCode)->where('expiry_date','>=',Carbon::today())->where('cart_value','<=', Cart::instance('cart')->subtotal())->first();
       if(!$coupon)
       {
          session()->flash('coupon_message','Coupon Code is Invalid!!');
          return;
       } 
       
       session()->put('coupon',[
          'code'=> $coupon->code,
          'type'=> $coupon->type,
          'value'=> $coupon->value,
          'cart_value'=> $coupon->cart_value
       ]);
       session()->flash('coupon_message','Congrats, your are applicable for this coupon!!');
    }

    public function updatestatus($franchise_id, $status){
      $franchise = Franchise::find($franchise_id);
      $franchise->status = $status;
      if($status == "active"){
        $franchise->active_date = DB::raw('CURRENT_DATE');
      }elseif($status == "deactive"){
        $franchise->deactive_date = DB::raw('CURRENT_DATE');
      }
       $franchise->save();
       session()->flash('update_message','Congrats, your are entity has been processed!!');
    }

    public function updateMagStatus($mag_id, $status){
      $mag = Franchise::find($mag_id);
      $mag->status = $status;
      if($status == "active"){
        $mag->active_date = DB::raw('CURRENT_DATE');
      }elseif($status == "deactive"){
        $mag->deactive_date = DB::raw('CURRENT_DATE');
      }
       $mag->save();
       session()->flash('update_message','Congrats, your are entity has been processed!!');
    }

    public function render()
    {

      //$orders = Order:: orderBy('created_at', 'DESC')->get()->take(10);
      $totalsales = Order::where('status','delivered')->count();
      $totalrevenue = Order:: where('status','delivered')->sum('total');
      $todaysales = Order:: where('status','delivered')->whereDate('created_at',carbon::today())->count();
      $todayrevenue = Order:: where('status','delivered')->whereDate('created_at',carbon::today())->sum('total');

        $franchises = Franchise::where('user_id', Auth::user()->id)->orderBy('created_at','ASC')->paginate(6);
        $brands = Brand::where('user_id', Auth::user()->id)->get();
        $about = Sprofile::where('user_id', Auth::user()->id)->first();
        $new = Mag::where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->paginate(4);
        $franchise = Franchise::with('review')->where('user_id', Auth::user()->id)->get();
        $review = Review::where('user_id', Auth::user()->id)->get();
        $user = Auth::user();
        $likecoun = Mag::where('user_id',$user->id)->count();
        //$likecount = Mag::where('user_id',$user->id)->count();
        $franch = Franchise::withcount('review')->where('user_id', Auth::user()->id)->orderBy('review_count','DESC')->paginate(6);
      
        //social link
        $infos = Info::get();
       return view('livewire.seller.seller-dashboard-component',['infos'=> $infos,
                                                                'brands'=> $brands,
                                                                'likecoun'=> $likecoun,
                                                                'user'=> $user,
                                                                'franch'=> $franch,
                                                                'review'=> $review,
                                                                'franchise'=> $franchise,
                                                                'new'=> $new,
                                                                'franchises'=> $franchises,
                                                                'about'=> $about,
                                                                'totalsales'=> $totalsales,
                                                                'totalrevenue'=> $totalrevenue,
                                                                'todaysales'=> $todaysales,
                                                                'todayrevenue'=> $todayrevenue ])->layout('layouts.eblog');
   
      }
}
