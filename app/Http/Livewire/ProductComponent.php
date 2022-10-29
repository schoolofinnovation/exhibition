<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ProductComponent extends Component
{
    public $slug;
    public $eventname;
    public $item;
    public $step;
    public $totalSteps = 3;
    public $currentStep = 1;
    public $attributes_id = [];
    
    
    use WithPagination;
    public function mount($slug)
    {
       $this->slug = $slug;
    }


    public function increase($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decrease($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function store($event_id,$event_eventname,$event_max_pass)
    {
        Cart::instance('cart')->add($event_id,$event_eventname, 1, $event_max_pass)->associate('App\Models\Event');
        
        $this->resetErrorBag();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }

    }

    public function second($rowId, $event_dateTime)
    {
        //Cart::instance('cart')->add($event_id,$event_eventname,1,$event_max_pass)->associate('App\Models\Event');
        $product = Cart::instance('cart')->get($rowId,);
        
        $qty = $product->$event_dateTime;
        Cart::instance('cart')->add($rowId , $qty);
        $this->resetErrorBag();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }

    }


    public function increaseStep(){
        $this->resetErrorBag();
        //$this->validateData();
        $this->currentStep++;
     if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }}


    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
      if($this->currentStep < 1){
        $this->currentStep = 1;
       }}

    public function generateSlug(){
        $this->slug = Str::slug($this->brand_name,'-');
    }
    

    
    public function render()
    {
        
        $event = Event::where('slug',$this->slug)->first();

      
        return view('livewire.product-component',['event'=>$event])->layout('layouts.eblog');
    }
}
