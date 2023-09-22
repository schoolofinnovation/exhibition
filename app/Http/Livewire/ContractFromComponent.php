<?php

namespace App\Http\Livewire;

use App\Models\Contractio;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContractFromComponent extends Component
{
    public $owner;
    public $organisation;
    public $brand_name;
    public $GST;
    public $industry;
    public $product;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $country;
    public $hall;
    public $stall;
    public $size;

    public $formm;
    public $brand_id;


    public function mount($brand_id)
    {
       $finder = Contractio::find($brand_id);
       $this->brand_id = $finder->id;
       $this->owner = $finder->owner; 
      
       
        $this->organisation = $finder->organisation;
        $this->brand_name = $finder->brand_name;
        $this->GST = $finder->GST;
        $this->industry = $finder->industry;
        $this->product = $finder->product;
        $this->email = $finder->email;
        $this->phone = $finder->phone;
        $this->address = $finder->address;
        $this->city = $finder->city;
        $this->state = $finder->state;
        $this->country = $finder->country;
        $this->hall = $finder->hall;
        $this->stall = $finder->stall;
        $this->size = $finder->size;
    }
    
   

    public function contractForm()
    {
        $contractformi = Contractio::find($this->brand_id);

        $contractformi->owner = $this->owner;
        $contractformi->organisation = $this->organisation;
        $contractformi->brand_name = $this->brand_name;
        $contractformi->GST = $this->GST;
        $contractformi->industry = $this->industry;
        $contractformi->product = $this->product;
        $contractformi->email = $this->email;
        $contractformi->phone = $this->phone;
        $contractformi->address = $this->address;
        $contractformi->city = $this->city;
        $contractformi->state = $this->state;
        $contractformi->country = $this->country;
        $contractformi->hall = $this->hall;
        $contractformi->stall = $this->stall;
        $contractformi->size = $this->size;
        
        //$contractformi->brand_id = '1';
        //$contractformi->event_id = '2';
        $contractformi->save();
    }

    public function render()
    {
        return view ('livewire.contract-from-component');
    }
}


