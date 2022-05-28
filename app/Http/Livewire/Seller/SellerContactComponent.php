<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;

class SellerContactComponent extends Component
{
    public $company;
    public $official_email;
    public $board_contact;
    public $year;
    public $address;
    public $corporate_office;
    public $head_office;

    public $owner_name;

    public $ceo;
    public $c_email;
    public $c_contact;
    public $brand_head_name;
    public $bh_email;
    public $bh_contact;
    public $franchise_head_name;
    public $fh_email;
    public $fh_contact;
    public $sale_head_name;
    public $sh_email;
    public $sh_contact;

    public $master_email;
    public $master_contact;
    
    
    public $user_id;
    public $brand_id;

    public $franchise_id;

    public function render()
    {
        return view('livewire.seller.seller-contact-component')->layout('layouts.admin');
    }
}
