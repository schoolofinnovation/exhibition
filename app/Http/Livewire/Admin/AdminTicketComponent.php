<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;
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
    public $packagge;
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
        $this->code = Str::random(12);

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

        $newTicket->packagge = $this->packagge;
        $newTicket->package = '1';
        $newTicket->slug = Str::slug($this->packagge,'-');
        $newTicket->desc = explode ("-", $this->desc);
        
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
         
        dd($newTicket->desc);
        
        $newTicket->save();
        
       return redirect()->route('admincheck.ticket',['event_id' => $this->event_id, 'board' => 'dashboard']);
        session()->flash('message','Thanks for sharing your review.');
    }

   
    public function tivateBusinessPlan ($id, $status, $event_id)
    {
       $ActivateBusinessPlan = new Ticket();
       
       $copyingTicket= Ticket::find($id);
       //$ActivateBusinessPlan = $copyingTicket->id;


       $ActivateBusinessPlan->code = $this->code;

        $ActivateBusinessPlan->packagge = $copyingTicket->packagge;
        $ActivateBusinessPlan->package = '1';
        $ActivateBusinessPlan->slug = Str::slug($copyingTicket->packagge,'-');
        $ActivateBusinessPlan->desc = $copyingTicket->desc;
        
        $ActivateBusinessPlan->type = $copyingTicket->type;

        $ActivateBusinessPlan->event_id = $event_id;

        $ActivateBusinessPlan->price = $copyingTicket->price;
        $ActivateBusinessPlan->saleprice = $copyingTicket->saleprice;

        $ActivateBusinessPlan->cart_value = $copyingTicket->cart_value;

        $ActivateBusinessPlan->expiry_date = $copyingTicket->expiry_date;
        $ActivateBusinessPlan->expiry_time = $copyingTicket->expiry_time;
        $ActivateBusinessPlan->validity = $copyingTicket->validity;

        $ActivateBusinessPlan->start_date = $copyingTicket->start_date;
        $ActivateBusinessPlan->start_time = $copyingTicket->start_time;
        
        
        $ActivateBusinessPlan->number = $copyingTicket->number;

        $ActivateBusinessPlan->user_id = Auth::user()->id;
        
        $ActivateBusinessPlan->terms = $copyingTicket->terms;
        $ActivateBusinessPlan->status = $status;
        $ActivateBusinessPlan->admstatus = $copyingTicket->admstatus;


       $ActivateBusinessPlan -> save();
    }


    public function testingChecking ()
    {
        $string = ' xyz ';
        $testing = Str ::trim ($string);
        dd($testing);
    }


    use WithPagination;
    public function render()
    {
        //$string = '19. "xyz" 28."ert" ';
        //$testing = trim(preg_replace_array ( '/[0-9._]+/', [] , $string));
        //$rti = Str::replace('" "',',', $testing );
        //$rtii = Str::replace('"','', $rti );
        //$erto = trim($rtii);
        //$ret = explode(",", $erto);
        
        //$tstring = ' xyz business  testing        ';
        //$testing = preg_replace_array ( '/[0-9._]+/', [] , $string);
        //$newtest = trim($tstring);
        
        //dd($string, $testing ,$erto, $ret);



        $evento = Event::where('id', $this->event_id)->first();
        $todaydate = Carbon::now()->format('Y-m-d');
        $timerty = Carbon::now()->format('H:i:s');

        $ticketsfeatured = Ticket::where('admstatus','1')->where('status','0')->where('type','featured')->orderBy('updated_at','DESC')->get();
        $ticketssponsored = Ticket::where('admstatus','1')->where('status','0')->where('type','sponsored')->orderBy('updated_at','DESC')->get();
       
        $ticketsBasic = Ticket::where('admstatus','1')->where('status','0')->where('type','basic')->orderBy('id','DESC')->get();
        $ticketsActive = Ticket::where('admstatus','1')->where('status','1')->where('event_id', $evento->id)->orderBy('saleprice','DESC')->get();
        
        $ticketsDeactive = Ticket::where('admstatus','1')->where('status','1')->where('event_id', $evento->id)->where('expiry_date', $todaydate)->where('expiry_time', $timerty)->get();

        
        return view('livewire.admin.admin-ticket-component',['ticketsfeatured' => $ticketsfeatured, 'ticketssponsored'=>$ticketssponsored, 'ticketsBasic'=>$ticketsBasic, 'ticketsActive'=>$ticketsActive, 'ticketsDeactive'=>$ticketsDeactive, 'evento'=>$evento])->layout('layouts.eblog');
    }
}
