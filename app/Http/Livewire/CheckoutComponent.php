<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutComponent extends Component
{
    
   public $haveCouponCode;
   public $couponCode;
   public $discount;
   public $subtotalAfterDiscount;
   public $taxAfterDiscount;
   public $totalAfterDiscount;
   public $basePrice;
   public $bookingFee;
   public $checkfee;
   

    public function destroy($rowId)
    {
       $product = Cart::instance('cart')->get($rowId,);
        $qty = $product->qty - 1;
       Cart::instance('cart')->remove($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
    }

    public function destroyAll()
    {
       Cart::instance('cart')->destroy();
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','All Items has been removed');
    }

    public function increaseQuantity($rowId)
    {
       $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
       Cart::instance('cart')->update($rowId , $qty);
       $this->emitTo('cartzilla-count-cart-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
       $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
       Cart::instance('cart')->update($rowId , $qty);
       $this->emitTo('cartzilla-count-cart-component','refreshComponent');
    }

    public function checkout()
    {
      if(Auth::check())
        { return redirect()->route('coicart'); }
      else
        { return redirect()->route('login'); }
    }

    public function setAmountForCheckout()
    {
       if(!Cart::instance('cart')->count() > 0)
       {
          session()->forget('checkout');
          return;
       }

       if(session()->has('coupon'))
       {
          session()->put('checkout',[
             'discount' => $this->discount,
             'subtotal' => $this->subtotalAfterDiscount,
             'basePrice' => $this->basePrice,
             'bookingFee' => $this->bookingFee,
             'tax' => $this->taxAfterDiscount,
             'total' => $this->totalAfterDiscount
          ]);
       }
       else
       {
         session()->put('checkout',[
            'discount' => 0,
            'subtotal' => $this->subtotal = Cart::instance('cart')->subtotal(),
            'basePrice' => $this->basePrice = ($this->subtotal * 7)/100,
            'tax' => $this->tax = ($this->basePrice * config('cart.tax'))/100,
            'bookingFee' => $this->bookingFee = $this->basePrice + $this->tax,
            'total' => $this->total = $this->subtotal + $this->bookingFee
         ]);
       }
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

    public function calculateDiscounts()
    {
       if(session()->has('coupon'))
       {
          if(session()->get('coupon')['type'] == 'fixed')
            {
               $this->discount = session()->get('coupon')['value'];
            }
          else
            {
               $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;  
            }
          $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
          $this->basePrice = ($this->subtotalAfterDiscount * 7)/100;
          $this->taxAfterDiscount = ($this->basePrice * config('cart.tax'))/100;
          $this->bookingFee = $this->basePrice + $this->taxAfterDiscount;
          $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
       }
       
    }

    public function removeCoupon()
    {
       session()->forget('coupon');
    }

    public function render()
    {
      
      if(session()->has('coupon'))
      {
         if ( Cart::instance('cart')->subtotal() < session()->get('coupon')['cart'])
            {
               session()->forget('coupon');
            }
         else
            {
               $this->calculateDiscounts();
            }
      }     

      $this->setAmountForCheckout(); 
      return view('livewire.checkout-component')->layout('layouts.eblog');
    }
}
