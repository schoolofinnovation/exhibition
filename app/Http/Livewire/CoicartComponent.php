<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CoicartComponent extends Component
{
    public $ship_to_different;
    public $choose_PaymentMethod;
    public $thankyou;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $company;
    public $province;
    public $country;
    public $zipcode;
    //public $code;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_line2;
    public $s_city;
    public $s_province;
    public $s_country;
    public $s_zipcode;

    public $paymentmode;
    //public $payment_process;

    public $card_no;
    public $card_name;
    public $card_month;
    public $card_year;
    public $card_cvc;
    public $checkfee;
    public $basePrice;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'line1' => 'required',
            'company' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'paymentmode' => 'required'
        ]);
        
        if($this->ship_to_different)
        {
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',
                's_line1' => 'required',
                's_city' => 'required',
                's_province' => 'required',
                's_country' => 'required',
                's_zipcode' => 'required'
            ]);
        }

        if($this->paymentmode == 'card')
        {
            $this->validateOnly($fields,[
                'card_no' => 'required|numeric',
                //'card_name' => 'required',
                'card_month' => 'required|numeric',
                'card_year' => 'required|numeric',
                'card_cvc' => 'required|numeric'
            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'line1' => 'required',
            'city' => 'required',
            'company' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'paymentmode' => 'required'
        ]);

        if($this->paymentmode == 'card')
        {
            $this->validate([
                'card_no' => 'required|numeric',
                //'card_name' => 'required',
                'card_month' => 'required|numeric',
                'card_year' => 'required|numeric',
                'card_cvc' => 'required|numeric'
            ]);
        }
    
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->code = session()->get('coupon')['code'];

        $order->firstname = $this-> firstname;
        $order->lastname = $this-> lastname;
        $order->email = $this-> email;
        $order->mobile = $this-> mobile;
        $order->line1 = $this-> line1;
        $order->line2 = $this-> line2;
        $order->city = $this-> city;
        $order->company = $this-> company;
        $order->province = $this-> province;
        $order->country = $this-> country;
        $order->zipcode = $this-> zipcode;
        $order->status = 'ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();


        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->franchise_id = $item->id;
            $orderItem->event_id = '1';
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        if($this->ship_to_different)
        {
            $this->validate([
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',
                's_line1' => 'required',
                's_city' => 'required',
                's_province' => 'required',
                's_country' => 'required',
                's_zipcode' => 'required'
            ]);

            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->firstname = $this-> s_firstname;
            $shipping->lastname = $this-> s_lastname;
            $shipping->email = $this-> s_email;
            $shipping->mobile = $this-> s_mobile;
            $shipping->line1 = $this-> s_line1;
            //$shipping->line2 = $this-> s_line2;
            //$shipping->company = $this-> s_company;
            $shipping->city = $this-> s_city;
            $shipping->province = $this-> s_province;
            $shipping->country = $this-> s_country;
            $shipping->zipcode = $this-> s_zipcode;
            $shipping->save();
        }
        
        if ($this->paymentmode == 'cod')
        {
            $this->makeTransaction($order->id,'pending');
            $this->resetCart();
        }
        elseif ($this->paymentmode == 'card')
        {
            $stripe = Stripe::make(env('STRIPE_KEY'));
            try{
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $this->card_no,
                        'exp_month' => $this->card_month,
                        'exp_year' => $this->card_year,
                        'cvc' => $this->card_cvc
                    ]
                ]);

                if(!isset($token['id']))
                {
                    session()->flash('stripe_error','The stripe token was not generated Correctly');
                    $this->thankyou = 0;
                }

                $customer = $stripe->customers()->create([
                    'name' => $this->firstname . ' ' . $this->lastname,
                    'email' => $this->email,
                    'phone' => $this->mobile,
                    'address' => [
                        'line1' => $this->line1,
                        'postal_code' => $this->zipcode,
                        'city' =>$this->city,
                        'state' =>$this->province,
                        'country' =>$this->country
                    ],

                    'shipping' => [
                        'name' => $this->firstname . ' ' . $this->lastname,
                        'address' =>[
                            'line1' => $this->line1,
                            'postal_code' => $this->zipcode,
                            'city' =>$this->city,
                            'state' =>$this->province,
                            'country' =>$this->country
                        ],
                    ],
                    'source' => $token['id']
                ]);

                $charge = $stripe->charges()->create([
                 'customer' => $customer['id'],
                 'currency' => 'INR',
                 'amount'  => session()->get('checkout')['total'],
                 'description' => 'Payment for order no' . $order->id
                ]);

                if($charge['status'] == 'succeeded')
                {
                    $this->makeTransaction($order->id,'approved');
                    $this->resetCart();
                }
                else
                {
                    session()->flash('stripe_error', 'Error in Transaction!');
                    $this->thankyou = 0;
                }
            } catch(Exception $e){
                session()->flash('stripe_error',$e->getMessage());
                $this->thankyou = 0;
            }
        }
    }

    public function resetCart()
    {
        $this->thankyou = 1 ;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function makeTransaction($order_id, $status)
    {
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order_id;
        $transaction->mode = $this->paymentmode;
        $transaction->status = $status;
        $transaction->save();
    }

    public function verifyForCheckout()
    {
        // if(!Auth::check())
        // {
        //     return redirect()->route('login');
        // }
        // else
        
        if ($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
        elseif (!session()->get('checkout'))
        {
            return redirect()->route('business.exhibition');
        }
    }
     

    public function render()
    {
        //$data = session()->all();
        //dd($data);
        $this->verifyForCheckout();
        return view('livewire.coicart-component')->layout('layouts.eblog');
    }
}
