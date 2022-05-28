<?php

namespace App\Http\Livewire\Seller;

use App\Models\Businessteam;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerPostOpportunityComponent extends Component
{
    public $user_id;
    public $channel;
    public $link;
    public $status;
    public $admstatus = "1";
    public $not_active = "0";
    public $designation;
    public $name;
    public $contact;
    public $email;

    public $pincode;
    public $province;
    public $city;
    public $line1;
    


    public function add()
    {
        $order = new Social(); 
        $order->channel = $this->channel;
        $order->link = $this->link;
        $order->not_active = $this->not_active;
        $order->status = "active";
        $order->adm_status = $this->admstatuss;
        $order->user_id = Auth::user()->id;
        $order->save(); 

        $order = new Businessteam(); 
        $order->designation = $this->designation;
        $order->contact = $this->contact;
        $order->name = $this->name;
        $order->link = $this->link;
        $order->email = $this->email;
        $order->not_active = $this->not_active;
        $order->status = "active";
        $order->admstatus = $this->admstatus;
        $order->user_id = Auth::user()->id;
        $order->save(); 
    }

    
    public function render()
    {
        return view('livewire.seller.seller-post-opportunity-component')->layout('layouts.eblog');
    }
}