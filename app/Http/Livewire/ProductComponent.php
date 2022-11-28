<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Tickets;
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

    

    public function store($edy_id,$edy_code,$edy_price)
    {
        Cart::instance('cart')->add($edy_id, $edy_code, 1, $edy_price)->associate('App\Models\Ticket');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        return redirect()->route('checkout');
       
    }

    public function second($rowId, $event_dateTime)
    {
        Cart::instance('cart')->associate('App\Models\Event');
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
        
        $event = Event::where('slug', $this->slug)->first();
        $test= $event->id;
        
        $ticke = Tickets::where('admstatus','0')->where('status','1')->where('event_id', $test)->get();
        
        return view('livewire.product-component',['event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
