<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Ticket;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Expr\FuncCall;

class ProductComponent extends Component
{
    public $slug;
    public $eventname;
    public $item;
    public $step;
    public $totalSteps = 2;
    public $currentStep = 1;
    public $attributes_id = [];
    public $qqty = 0;
    
    public function increment()
    {
        $this->qqty++;
    }

    public function decrement()
    {
        $this->qqty--;
    }

    use WithPagination;
    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function destroyAll()
    {
       Cart::instance('cart')->destroy();
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','All Items has been removed');
    }

    public function increase($qqty)
    {
        $product = Cart::get($qqty);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($qqty, $qty);
    }

    public function decrease($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId , $qty);
    }

    public function destroy($rowId)
    {
       $product = Cart::instance('cart')->get($rowId,);
        $qty = $product->qty - 1;
       Cart::instance('cart')->remove($rowId , $qty);
       $this->emitTo('cart-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
    }


    public function store($edy_id,$edy_code,$edy_price)
    {
        Cart::instance('cart')->add($edy_id, $edy_code, 1, $edy_price)->associate('App\Models\Ticket');
        $this->emitTo('cart-component','refreshComponent');
        session()->flash('success_message','Item has been added in cart');
        //return redirect()->route('checkout');       
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
    

    public function nexttab(){
        $url = URL::route('route',['#reviews']);
        Redirect::to($url);

        redirect::to(route('event.product').'#reviews');
        //redirect()->route('event.product',['$slug']).'#reviews')
    }

    public function render()
    {
        $event = Event::where('slug', $this->slug)->first();
        $test= $event->id;
        $previous = url()->previous();
        $ticke = Ticket::where('admstatus','0')->where('status','1')->where('event_id', $test)->get();
        
        return view('livewire.product-component',['previous'=> $previous , 'event'=>$event,'ticke'=>$ticke])->layout('layouts.eblog');
    }
}
