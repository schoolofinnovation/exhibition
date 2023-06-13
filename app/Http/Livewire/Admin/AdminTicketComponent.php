<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class AdminTicketComponent extends Component
{
    public $event_id;
    public $board;

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
   
    public $terms;
    public $status;
    public $admstatus;
    public $slug;

    
    public function mount($event_id, $board )
    {
        $fattribute = Event::find($event_id);
        $this->event_id = $fattribute->id;
        $this->type = $fattribute->eventype;
        
        $this->board = $board;
        $this->admstatus= '1';  
        $this->status = '0'; 
        $this->cart_value = '100';
        $this->code = Str::random(10);

        //$this->expiry_date = $fattribute->enddate;
        //$this->expiry_time = $fattribute->enddate;
    } 

    public function generateSlug(){
        $this->slug = Str::slug($this->package,'-');
    }


    public function ticketAdd()
    {
        $newTicket = new Ticket();

        $newTicket->code = $this->code;

        $newTicket->package = $this->package;
        $newTicket->slug = Str::slug($this->package,'-');
        $newTicket->desc = $this->desc;
        
        $newTicket->type = $this->type;

        $newTicket->event_id = $this->event_id;

        $newTicket->price = $this->price;
        $newTicket->saleprice = $this->saleprice;

        $newTicket->cart_value = $this->cart_value;

        $newTicket->expiry_date = $this->expiry_date;
        $newTicket->expiry_time = $this->expiry_time;
        $newTicket->validity = $this->validity;

        $newTicket->start_date = $this->start_date;
        $newTicket->start_time = $this->start_time;
        
        
        $newTicket->number = $this->number;

        $newTicket->user_id = Auth::user()->id;
        
        $newTicket->terms = $this->terms;
        $newTicket->status = $this->status;
        $newTicket->admstatus = $this->admstatus;
        $newTicket->save();
        
       return redirect()->route('admincheck.ticket',['event_id' => $this->event_id, 'board' => 'dashboard']);
        session()->flash('message','Thanks for sharing your review.');
    }


    use WithPagination;
    public function render()
    {
        $ticketsfeatured = Ticket::where('admstatus','1')->where('status','0')->where('type','featured')->orderBy('id','DESC')->get();
        $ticketssponsored = Ticket::where('admstatus','1')->where('status','0')->where('type','sponsored')->orderBy('id','DESC')->get();
        $ticketsBasic = Ticket::where('admstatus','1')->where('status','0')->where('type','basic')->orderBy('id','DESC')->get();
        $ticketsActive = Ticket::where('admstatus','1')->where('status','1')->where('type','active')->orderBy('id','DESC')->get();
        $ticketsDeactive = Ticket::where('admstatus','1')->where('status','0')->where('type','deactive')->orderBy('id','DESC')->get();

        $event = Event::where('id', $this->event_id)->first();
        return view('livewire.admin.admin-ticket-component',['ticketsfeatured' => $ticketsfeatured, 'ticketssponsored'=>$ticketssponsored, 'ticketsBasic'=>$ticketsBasic, 'ticketsActive'=>$ticketsActive, 'ticketsDeactive'=>$ticketsDeactive, 'event'=>$event])->layout('layouts.eblog');
    }
}
