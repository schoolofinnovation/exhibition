<?php

namespace App\Http\Livewire\Seller;

use App\Models\Event;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
Use Illuminate\Support\Str;

class SellerEventTicketComponent extends Component
{
    public $code;
    public $package;
    public $desc;
    public $type;
    public $price;
    public $saleprice;
    public $cart_value;
    public $expiry_date;
    public $start_date;
    public $start_time;
    public $expiry_time;
    public $validity;
    public $number;
    public $user_id;
    public $event_id;
    public $terms;
    public $status;
    public $admstatus;
    public $slug;
    
    public function mount()
    {
        $this->admstatus= '0';  
        $this->status = 1; 
        $this->cart_value = 100;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->package,'-');
    }
    public function add()
    {
        $this->validate([

            'code'=>'required', 
            'package'=>'required', 
            'desc'=>'required', 
            'type'=>'required', 
            'price'=>'required', 
            'saleprice'=>'required', 
            'cart_value'=>'required', 
            'expiry_date'=>'required', 
            'start_date'=>'required', 
            'start_time'=>'required', 
            'expiry_time'=>'required', 
            'validity'=>'required', 
            'number'=>'required', 
            'terms'=>'required'
        ]);

        $newTicket = new Tickets();
        $newTicket->code = $this->code;
        $newTicket->package = $this->package;
        $newTicket->desc = $this->desc;
        $newTicket->type = $this->type;
        $newTicket->price = $this->price;
        $newTicket->saleprice = $this->saleprice;
        $newTicket->cart_value = $this->cart_value;
        $newTicket->expiry_date = $this->expiry_date;
        $newTicket->start_date = $this->start_date;
        $newTicket->start_time = $this->start_time;
        $newTicket->expiry_time = $this->expiry_time;
        $newTicket->validity = $this->validity;
        $newTicket->number = $this->number;
        $newTicket->user_id = Auth::user()->id;
        $newTicket->event_id = $this->event_id;
        $newTicket->terms = $this->terms;
        $newTicket->status = $this->status;
        $newTicket->admstatus = $this->admstatus;
        $newTicket->save();
        
        return redirect()->route('seller.dashboard');
        session()->flash('message','Thanks for sharing your review.');

    }

    public function render()
    {
        $event= Event:: where('user_id', Auth::user()->id)->get();
        
        return view('livewire.seller.seller-event-ticket-component',['event' => $event])->layout('layouts.admin');
    }
}
