<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Franchise;
use App\Models\Info;
use App\Models\Look;
use App\Models\Order;
use App\Models\Sector;
use App\Models\Service;
use App\Models\Shop;
use App\Models\Usage;
use App\Models\Want;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class UserDashboardComponent extends Component
{   public $haveCouponCode;
    public $couponCode;
    public $applyCouponCode;
    public $business;
    public $doing;
    public $category;
    public $sector;
    public $service;
    public $pincode;
    public $shtype;
    public $shopstatus;
    public $shoptype;
    public $area;
    public $mininvestment;
    public $maxinvestment;
    public $level = [];
    public $user_id;
    public $category_id;
    public $sector_id;
    public $service_id;

    public $step;
    public $totalSteps = 5;
    public $currentStep = 1;
    public $sendEmail;

    public $businessExpand;
    public $earn;
    public $approach;
    public $haveshop;
    public $industry;
    public $Category= null;
    public $def = null;
    public $ghi = null;
    public $Sector=null;
    public $Service=null;

    public function mount()
    {   $this->currentStep = 1;
        //'user_id'=>'required'
    }

    public function increaseStep()
    {   $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
       if($this->currentStep > $this->totalSteps) {$this->currentStep = $this->totalSteps;}
    }

    public function decreaseStep()
    {   $this->resetErrorBag();
        $this->currentStep--;
     if($this->currentStep < 1) { $this->currentStep = 1;}
    }

    

    public function updatedCategory($category_id){
        $this->def = Sector::where('category_id', $category_id)->get();
    }

    public function updatedSector($sector_id){
        $this->ghi = Service::where('sector_id', $sector_id)->get();
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'business'=> 'required',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'doing'=> 'required',
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'category'=> 'required',
                'sector'=> 'required',
                'service'=> 'required',
            ]);
        }
        elseif($this->currentStep == 4){
            $this->validate([
                'shoptype'=> 'required',
            ]);
        }        
    }


    public function add(){
        $this->resetErrorBag();
        if($this->currentStep == 5){
              $this->validate([
                //'pincode'=> 'required|digits:6',
                //'shopstatus' => 'required',
                //'shoptype'=> 'required',
                //'area'=> 'required',
                //'mininvestment'=> 'required',
                'maxinvestment'=> 'required',
                //'level'=> 'required',
                
            ]);
        }

         //$logo_name = 'logo_'.$this->co_logo->getClientOriginalName();
         //$upload_logo = $this->co_logo->storeAs('Storage/profile_logo', $logo_name);
         $maxinvestment = $this->maxinvestment;

         if($maxinvestment){
            $values = array(
                "business"=> $this->business,
                "doing"=> $this->doing,
                "category_id"=> $this->category ,
                "sector_id"=> $this->sector ,
                "service_id"=> $this->service,
                //"pincode"=> $this->pincode,
                //"shopstatus"=> $this->shopstatus,
                "shoptype"=> $this->shoptype,
                //"area"=> $this->area,
                //"mininvestment"=> $this->mininvestment,
                "maxinvestment"=> $this->maxinvestment,
                //"level"=> $this->level,
                "user_id" => Auth::user()->id,
            );
            Want::insert($values);
            $this->reset();
            $this->currentStep = 1;
            //$data = ['co_name' => $this->co_name, 'email' => $this->email];
            //$this-> sendEmail($values);
            return redirect()->route('user.dashboard',$values);
         }
    }
    
    public function addShop(){   
        $shop = new Shop();
        $shop->pincode = $this->pincode;
        $shop->shtype = $this->shtype;
        $shop->user_id = Auth::user()->id;
        $shop->save();
        $this-> sendEmail($shop);
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        return redirect()->route('user.dashboard');
    }


    public function addLevel(){   
        $shop = new Want();
        $shop->level = $this->level;
        $shop->user_id = Auth::user()->id;
        $shop->save();
        $this-> sendEmail($shop);
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        return redirect()->route('user.dashboard');
    }

    //mailing function
    public function sendEmail($values){
        $data = ['email' => $this->email,'title' => 'contact us ', 'body' => 'thanks for doing' ];
        Mail::to('laravel8coi@gmail.com')
            ->cc('laravel8coi@gmail.com')
            ->bcc('laravel8coi@gmail.com')
            ->send(new CareerMail($values));
    }

    public function applyCouponCode()
    {
       $coupon = Coupon::where('code', $this->couponCode)->where('expiry_date','>=',Carbon::today())->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
       if(!$coupon)
       {
         session()->flash('coupon_message','Coupon code is invalid!');
         return;
       }

       session()->put('coupon',[
           'code' => $coupon->code,
           'type' => $coupon->type,
           'value' => $coupon->value,
           'cart' => $coupon->cart_value
       ]);
    }


    public function render()
    {
        $appliedapplication = Order::where('user_id', Auth::user()->id)->count();
        $infos = Info::where('name','socialy')->first();   
        $abc = Category::with('sector')->orderBy('industry','Asc')->get();
        $newuser = Want::where('user_id', Auth::user()->id)->get();

        return view('livewire.user.user-dashboard-component',['appliedapplication' => $appliedapplication, 'infos' => $infos,'newuser' => $newuser,'abc' => $abc])->layout('layouts.eblog');
        //dd($expadnuser);
    }
}
