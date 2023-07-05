<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Seller\HastagComponent;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Hashtag;
use App\Models\Pavillion;
use App\Models\Rate;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;


class AdminDetailComponent extends Component
{   public $slug;
    public $category_id;
    public $webo;
    public $link;
    public $formm;
    public $eventname;

    public $rate;
    public $hasttag;
    public $status;
    public $admstatus;
    public $event_id;
    public $opinion;

    public $howMany;
    

    public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function catUpdate($id, $category_id)
    {
        $updateDetials = Event::where('slug', $this->slug)->first();
        $updateDetials = $updateDetials->find($id);
        $updateDetials->category_id = $category_id; 
         dd($updateDetials);   
        $updateDetials->save();
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function updateIDstatus($id) 
    {
      $eVent = Event::find($id);
      $eVent->reference = Str::uuid()->toString();
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function EventLink($id, $webo) 
    {
      $eVent = Event::find($id);
      $eVent->link = $webo;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    //@for($i = 0; $i < 10; $i++) @endfor

    public function tryingfaker()
    {
      //$findComment = Comment::where('admstatus','1')->where('status','1')->get();
        
      //$usero->opinion =  $findComment->random();
      
      for($i = 0; $i < $this->howMany; $i++)
      {
        $indoyui = Event::where('slug', $this->slug)->first();
        $usero =  new Rate ();
        $trynigtocreate = collect([1,2,3,4,5,6,7,8,9]);
        $usero->rate = $trynigtocreate->random();

        $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
        $findhastagID = $findhastag->random();
        $usero->hasttag = $findhastagID->hastag; 
        
        $findComment = Comment::where('admstatus','1')->where('status','1')->get();
        $findCommentID = $findComment->random();
        $usero->opinion =  $findCommentID->statement;
       
        $usero->event_id = $indoyui->id;

        $uertyui = User::where('utype', 'USR')->get();
        $useroID = $uertyui->random();
        $usero->user_id = $useroID->id;
        $usero->status = '1'; 
        $usero->admstatus = '1';

        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);
        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);
        $getmid = rand($currento, $Subtracttimeo);
        $finall = date('Y/m/d h:i:s', $getmid);
        $usero->created_at = $finall;
        $usero->updated_at = $finall;
        $usero->save();
      }
      
    }

    use WithPagination;
    public function render()
    {
        $evento = Event::where('slug', $this->slug)->first();
        $pendingDetails = $evento;
        $catevent = Category::get();
        $category = Denco::where('event_id', $evento->id)->get();
        $event = Event::where('slug', $this->slug)->value('id');

        $speaker = Speaker::where('event_id',  $event)->get();
        $pavillion = Pavillion::where('event_id',  $event)->get();
        $sponsership = Sponsership::where('event_id' , $event)->get();
        $participants = Brand::where('event_id' , $event)->get();
        $hastag = Hashtag::where('event_id' , $event)->get();
        //dd($hastag);
        
        return view('livewire.admin.admin-detail-component',['hastag'=>$hastag,'participants'=>$participants,'speaker'=>$speaker,'sponsership'=>$sponsership,'pavillion'=>$pavillion,'category'=>$category,'catevent'=>$catevent,'pendingDetails'=>$pendingDetails,'evento' => $evento])->layout('layouts.admin');
    }
}
