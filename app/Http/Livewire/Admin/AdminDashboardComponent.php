<?php

namespace App\Http\Livewire\Admin;

use App\Mail\EventToClient;
use App\Mail\MonthlyEvent;
use App\Models\Appliedjob;
use App\Models\Brand;
use App\Models\BusinessCalledo;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Coupon;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Franchise;
use App\Models\Hashtag;
use App\Models\Job;
use App\Models\Lead;
use App\Models\Mag;
use App\Models\Magazine;
use App\Models\Optio;
use App\Models\Order;
use App\Models\ProductAttribute;
use App\Models\Sector;
use App\Models\Service;
use App\Models\User;
use App\Models\Want;
use App\Models\Rate;
use App\Models\Usage;
use Carbon\Carbon;
use Cartalyst\Stripe\Api\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Bcontact;


class AdminDashboardComponent extends Component
{
  public $board;
  public $month;
  public $emailClient;
  public $emaill;
  public $searchTerm;
  public $findIDs = null;
  //public $shtdesc;

  public $name;
  public $contact;
  public $designation;
  public $email;

  public $brand_name;
  public $country;
  public $link;
  public $event_id;
  public $visited;
  public $statement;

  public $businessstatement;
 
  
public $frequency;
public $subscriber;
public $desc;
public $type;
public $utype;

public $status;
public $admstatus;

public $hastag;

public $rate;
public $hasttag;
public $monthly;
public $howMany;

public $brand_id;
    
    //career
    use WithPagination;

    public function mount($board)
    {
        $this->board = $board;
        $this->month = Carbon::today()->format("m");
        $this->monthly = Carbon::today()->format("m");
        $this->visited = '1';
    }
    
    public function bulkReview()
    {
      

       $monthwise = Event::whereYear('startdate','>=','2023' )->where('status','1')->where('admstatus','1')->whereMonth('startdate', $this->monthly)->orderBy('startdate','ASC')->get();

       foreach ($monthwise as $evnto)
       {
          $eventreview = $evnto->slug;
          $this->tryingfaker($eventreview);
       }

     
    }

 

    public function tryingfaker($eventreview)
    {

      for($i = 0; $i < $this->howMany; $i++)
      {
        $indoyui = Event::where('slug', $eventreview)->first();
        $trynigtocreate = collect([4,5,6,7,8,9]);
        $findhastag = Hashtag::where('admstatus','0')->where('status','1')->get();
        $findhastagID = $findhastag->random();
        $findComment = Comment::where('admstatus','1')->where('status','1')->get();
        $findCommentID = $findComment->random();
        $uertyui = User::where('utype', 'USR')->get();
        $useroID = $uertyui->random();
        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);
        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);
        $getmid = rand($currento, $Subtracttimeo);
        $finall = date('Y/m/d h:i:s', $getmid);

        $usero = new Rate();
       
        $usero->rate = $trynigtocreate->random();
        $usero->hasttag = $findhastagID->hastag; 
        $usero->opinion =  $findCommentID->statement;
        $usero->event_id = $indoyui->id;
        $usero->user_id = $useroID->id;
        $usero->status = '1'; 
        $usero->admstatus = '1';
        $usero->created_at = $finall;
        $usero->updated_at = $finall;
        $usero->save();
      }
      
    }


    public function updateJobstatus($id, $status) 
    {
      $order = Job::find($id);
      $order->status = $status;
      $order->save();
      session()->flash('message','info has been deleted Successfully');
     
    }  
    
    public function updatefranchisestatus($id, $status) 
    {
      $franchise = Franchise::find($id);
      $franchise->status = $status;
      $franchise->save();
      session()->flash('message','info has been deleted Successfully');
    }  

    public function updateCouponstatus($id, $status) 
    {
      $couPon = Coupon::find($id);
      $couPon->status = $status;
      $couPon->save();
      session()->flash('message',' Status Successfully Changed');
    } 
    
    public function updateOptiostatus($id, $status) 
    {
      $opTios = Optio::find($id);
      $opTios->status = $status;
      $opTios->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function optioDelete($id)
    {   $opTio = Optio::find($id);
        $opTio->delete();
        session()->flash('message','Response has been deleted Successfully');
    }


    public function couponDelete($id)
    {   $couPon = Coupon::find($id);
        $couPon->delete();
        session()->flash('message','Coupon has been deleted Successfully');
    }

    public function deliveredOrder()
    {
      $order = Order::find($this->order_id);
      $order->status = "canceled";
      $order->delivered_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }

    public function cancelOrder()
    {
      $order = Order::find($this->order_id);
      $order->status = "canceled";
      $order->canceled_date = DB::raw('CURRENT_DATE');
      $order->save();
      session()->flash('order_message','Order has been canceled');
    }
    
    public function Fdelete($id)
    {   $franchise = Franchise::find($id);
        $franchise ->delete();
        session()->flash('message','Opportunity has been deleted Successfully');
    }
    
    public function oDelete($id)
    {   $job = Order::find($id);
        $job->delete();
        session()->flash('message','Order has been deleted Successfully');
    }

    public function delete($id)
    {   $job = Job::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function eventdelete($id)
    {   $job = Event::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }


    public function bloGdelete($id)
    {   $job = Mag::find($id);
        $job->delete();
        session()->flash('message','info has been deleted Successfully');
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      session()->flash('message',' Status Successfully Changed');
    } 

    public function delet($id)
    { $user = User::find($id);
      $user->delete();
      session()->flash('message','User  has been  deleted successfully');
    }

    public function Reviewdelet($id)
    { $user = Comment::find($id);
      $user->delete();
      session()->flash('message','User  has been  deleted successfully');
    }

    public function AddBrandAttend()
    {
       $brandAttend = new Brand();
       $brandAttend->brand_name = trim($this->brand_name);
       $brandAttend->event_id = $this->event_id;
       $brandAttend->official_website = $this->link;
       $brandAttend->save();

       $ContactDetail = new Contact();
       $ContactDetail->brand_id = $brandAttend->id;
       $ContactDetail->email = $this->email;
       $ContactDetail->name = trim($this->name); 
       $ContactDetail->phone = $this->contact;
       $ContactDetail->designation = trim($this->designation);
       $ContactDetail->save();

       return redirect()->route('admin.dashboard', ['board' => 'client']);
    }

    public function updateInspectionStatus($id, $status) 
    {
      $visited = Event::find($id);
      $visited->inspection = $status;
      $visited->save();
      session()->flash('message','info has been deleted Successfully');
      return redirect()->route('admin.dashboard', ['board' => 'client']);
    }  

    public function createStatement()
    {
      //$rti = Str::replace('"',',', $this->businessstatement );
      //$ret = explode(",", $rti);

        //$string = '9. "xyz" 8."ert" ';
        $testing = trim(preg_replace_array ( '/[0-9._]+/', [] , $this->businessstatement));
        $rti = Str::replace('"-"',',', $testing );
        //$rti = Str::replace('" "',',', $testing );
        //$rti = Str::replace('" "',',', $testing );
        $rtis = Str::replace('""',',', $rti );
        $rtii = Str::replace('"','**', $rtis );
        $erto = trim($rtii);
        $ret = explode("-", $erto);

      foreach($ret as $tre)
      {
        $visited =  new Comment();
        $visited->statement = $tre;
        $visited->status = '1';
        $visited->admstatus = '1';
        $visited->user_id = Auth::user()->id;
        $visited->save();
      }

      session()->flash('message','info has been deleted Successfully');
      return redirect()->back();
    }

  

    public function added()
    {
       $addmagazine = new Magazine();
       $addmagazine -> name  = trim($this->name); 
       $addmagazine -> slug = Str::slug ($this->name,'-');
       $addmagazine -> frequency = $this->frequency;
       $addmagazine -> subscriber  = $this->subscriber; 
       $addmagazine -> desc = trim($this->desc); 
       $addmagazine -> type = $this->type;
       $addmagazine -> status = '1';
       $addmagazine -> admstatus = '1';
       $addmagazine -> user_id = Auth::user()->id;
       //$addmagazine -> event_id = $this->event_id;
       //$addmagazine -> expo_id = $this->expo_id; 

       //dd($addmagazine);
       $addmagazine ->save();
       session()->flash('message','info has been deleted Successfully');
       return redirect()->route('admin.dashboard', ['board' => 'magazine']);
    }


    public function addHastag()
    {
        $rti = Str::replace(' ','', $this->hastag);
        $rtoi = Str::replace('#',',',$rti);
        $ret = explode("," , $rtoi);
        foreach($ret as $tre)
        {
            $newEvent = new Hashtag();
            $newEvent->hastag = $tre;
            //$newEvent->event_id = $this->event_id;
            $newEvent->user_id = Auth::user()->id;
            $newEvent->status = $this->status;
            $newEvent->admstatus = $this->admstatus;
            $newEvent->save();
        }
        return redirect()->back();
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function updateVisitorStatus($id, $utype) 
    {
      $visited = User::find($id);
      $visited->utype = $utype;
      $visited->save();
      session()->flash('message','info has been deleted Successfully');
      return redirect()->route('admin.dashboard', ['board' => 'visitor']);
    } 
    
    public function updateCallingStatus($id, $response) 
    {
      $visited = New BusinessCalledo();
      $visited->lead_id = $id;
      $visited->user_id = Auth::user()->id;
      $visited->response = $response;
     // $visited->comment = $utype;
      $visited->status = '1';
      $visited->admstatus = '0';
      $visited->save();
      session()->flash('message','info has been deleted Successfully');
      return redirect()->back();
      //return redirect()->route('admin.dashboard', ['board' => 'visitor']);
    } 

    public function Magazinedelete($id)
    {
      $user = Magazine::find($id);
      $user->delete();
      session()->flash('message','User  has been  deleted successfully');
    }
 
    public function eventodelete($id)
    {   //$job = Expo::find($id);
        
        $finder = Denco::where('expo_id', $id)->get();
        $result =  $finder->pluck('event_id');
        //$eventShtdesc = Event::where('status','1')->where('admstatus','1')->orderBy('startdate','asc')->get();
        foreach($result as $errorimprove)
        {
        $statementID = Event::find($errorimprove);
        
        $statementEventName = trim($statementID->eventname); 
        $statementEventSlug = trim($statementID->slug); 
        $statementEventVenue = trim($statementID->venue); 
        $statementEventCity = trim($statementID->city); 
        $statementEventStartDate = trim(Carbon::parse ($statementID->startdate)->format('Y-m-d')); 
        $statementEventEndDate = trim(Carbon::parse ($statementID->enddate)->format('Y-m-d'));

        
        $statementID = Event::find($errorimprove);

        $statementID->eventname =  $statementEventName;
        $statementID->slug =  $statementEventSlug;
        $statementID->venue =  $statementEventVenue;
        $statementID->city = $statementEventCity;
        $statementID->startdate = $statementEventStartDate;
        $statementID->enddate = $statementEventEndDate;

        $statementID->save();
        }
        
    }

    //need to upgrade with category
    public function Upgrade()
    {  

       $eventShtdesc = Event::where('status','1')->where('admstatus','1')->orderBy('startdate','asc')->get();
       foreach($eventShtdesc as $errorimprove)
       {
        $statementID = Event::find($errorimprove->id);
        
        $statementEventName = trim($statementID->eventname); 
        $statementEventSlug = trim($statementID->slug); 
        $statementEventVenue = trim($statementID->venue); 
        $statementEventCity = trim($statementID->city); 
        $statementEventStartDate = trim(Carbon::parse ($statementID->startdate)->format('Y-m-d')); 
        $statementEventEndDate = trim(Carbon::parse ($statementID->enddate)->format('Y-m-d'));

        
        $statementID = Event::find($errorimprove->id);

        $statementID->eventname =  $statementEventName;
        $statementID->slug =  $statementEventSlug;
        $statementID->venue =  $statementEventVenue;
        $statementID->city = $statementEventCity;
        $statementID->startdate = $statementEventStartDate;
        $statementID->enddate = $statementEventEndDate;

        $statementID->save();
       }
    }

    //dd($rti);

    public function del($id)
    {
       $delee = Bcontact::find($id);
       $delee->delete();
    }

    public $phone;
    public $industry;
    public $brand_logo; 
    public $organisation;
    public $lookingAddFromIMage;

    public function directbrandBcontact()
    {
       $uptedetail = new Brand();
       $uptedetail->brand_name = trim($this->brand_name);
       $uptedetail->brand_logo = $this->brand_logo;

       $uptedetail->organisation = trim($this->organisation);

       $uptedetail->industry = trim($this->industry);
       $uptedetail->user_id = Auth::user()->id;
       $uptedetail->status = '1';
       $uptedetail->save();


       $upted = new Bcontact();
       $upted->name = trim($this->name);
       $upted->designation = trim($this->designation);
       $upted->email = trim($this->email);
       $upted->phone = $this->phone;
       $upted->user_id = Auth::user()->id;

       $upted->brand_id = $this->brand_id;

       $upted->status ='1';
       $upted->admstatus = '1';
       $upted->save();
       
       $this->reset();
       return redirect()->back();
      
    }

    public function render()
    {
      //current Event
      $mytime = Carbon::today()->format("Y-m-d");
      $mytomorrow = Carbon::tomorrow()->format("Y-m-d");
      $myweek = Carbon::now()->addDays(7)->format("Y-m-d");
      $mymonth = Carbon::now()->addDays(30)->format("m");

      //order
      
      $optios = Optio:: get();
      $orders = Order::orderBy('created_at','DESC')->paginate(9);
      $franchises = Franchise::with('sector')->orderBy('id','DESC')->paginate(7);
      $jobs = Job::orderBy('id','DESC')->paginate(5);
      $resume = Appliedjob::orderBy('id','DESC')->paginate(7);
      $users = User::orderBy('id','DESC')->paginate(5);
      $coupons = Coupon::orderBy('id','DESC')->paginate(5);

      //category_dashborad
      //$categ = Category::orderBy('industry','DESC')->paginate(5);

      $catcount = Category::withcount('sector')->get();
      
      $sector = Sector::get();
      $categories = Category::get();
      $service = Service::get();

      $category = Category::orderBy('industry','DESC')->paginate(5);
      $sectorr = Sector::paginate(5);
      $business = Service::paginate(5);
      $fattributes = ProductAttribute::paginate(10);

      $expoaward = Event::where('status','1')->where('admstatus','0')->orderBy('created_at','ASC')->get();
      $expireplan = Event::whereDate('enddate','<=',  $mytime)->where('status','1')->where('admstatus','1')->orderBy('enddate','DESC')->get();
      
      //total event
      $events = Event::count();
  
      $monthwise = Event::whereYear('startdate', '2023' )->where('status','1')->where('admstatus','1')->whereMonth('startdate', $this->month)->orderBy('startdate','ASC')->get();
      
      $mythreemonth = Carbon::now()->addDays(90)->format("Y-m-d");

      $evento = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->get();
      $eventomorrow = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>=' , $mytomorrow)->orderBy('startdate','ASC')->get();
      $eventweek = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $myweek)->orderBy('startdate','ASC')->get();
      $eventmonth = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $mymonth)->orderBy('startdate','ASC')->get();
      $eventthreemonth = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $mythreemonth)->orderBy('startdate','ASC')->get();

      $searchTerm = '%'.$this->searchTerm. '%';
      $findID =   '%'.$this->findIDs. '%';

      $searchCat = Event::Where('eventname','LIKE', $searchTerm)->where('status','1')->orderBy('eventname','ASC')->get();
      $searchId = Event::Where('id','LIKE', $findID)->where('status','1')->orderBy('eventname','ASC')->get();
     
      $blogfindo = Mag::orderBy('created_at','desc')->get();

      $findInspection = Event::where('inspection','1')->get();

      //category_dashboard

      $categ = Expo::where('admstatus', '1')->paginate(5);

      $nEwComment = Comment::orderBy('created_at', 'desc')->get();

      //magazine
      $magazine = Magazine::get();
      $visitors = User::orderBy('created_at', 'desc')->get();

      $hastago = Hashtag::get();
      $descRankingViews = Event::where('view_count','>','0')->orderBy('view_count','desc')->get();

      
      $current = strtotime(Carbon::now());
      
      $mytime = Carbon::now()->format("H:i:s");
     
      if($mytime == "23:59:00")
      {
        $savedata = new Want();
        $savedata->business = $descRankingViews->pluck('view_count')->sum();
        $savedata->save();
      }
    

      $mytime = Carbon::now()->format("Y-m-d");

      $upcomingViews = Event::where('view_count','>','0')->whereDate('startdate','>', $mytime)->whereDate('enddate','>', $mytime)->orderBy('updated_at','desc')->get();
      
      //dd($mytime , $ongoingViews);
      
      $eventShtdesc = Event::where('status','1')->where('admstatus','1')->where('eventype', 'expo')->where('shtdesc', NULL)->orderBy('startdate','asc')->get();
      foreach($eventShtdesc as $updatco)
      {

        $statementID = Event::find($updatco->id);
        
        $statementEventName = trim($statementID->eventname); 
        $statementEventVenue = trim($statementID->venue); 
        $statementEventCity = trim($statementID->city); 
        $statementEventType= trim($statementID->eventype); 
        $statementEventTagline = trim($statementID->tagline); 
        $statementEventStartDate = trim(Carbon::parse ($statementID->startdate)->format('D,d M Y')); 
        $statementEventEndDate = trim(Carbon::parse ($statementID->enddate)->format('D,d M Y'));
        

        $mytime = Carbon::today()->format("Y-m-d");
        $mymonth = Carbon::now()->addDays(30)->format("m");

         //three months prior
         //$during =  'Join us at upcoming [exhibtion_type] [Exhibition Title], held from [Exhibtion start date] to [Exhibition End Date] at [Exhibtiion Venue]. Get your ticket now and be a part of the [tag] industry event.';

         //post Expo timer with dates
         //$end =  'Download business directory exhibition and find reference for expand your business. Share your reviews and rate your experience.';

         //post Expo timer with dates $statementEventName.''.$statementEventName 'public/exhibition/'.$eventoi->image
         $start = 'The '. $statementEventTagline. 'premier business event for industry professionals, entrepreneurs, and companies. Join us at upcoming ' .$statementEventType.' '.$statementEventName. ' held from ' .$statementEventStartDate. ' to '. $statementEventEndDate. ' at ' .$statementEventVenue.' '. $statementEventCity.' India. Discover new opportunities for collaboration, showcase your products or services and network with key players in your sector. Get your ticket now and be a part of the industry event.';
         
         //$visited = User::find($id);
          $statementID = Event::find($updatco->id);
          $statementID->shtdesc = $start;
          $statementID->save();

     //  if($mytime < $statementEventStartDate )
     //   {
     //     $rti = Str::replace('exhibtion_type','$statementEventType', $start);
     //   }
     //   elseif ($mytime < $statementEventStartDate )
     //   {
     //     $rti = Str::replace(' ','', $during);
     //   }
     //   elseif ($mytime > $statementEventEndDate )
     //   {
     //     $rti = Str::replace(' ','', $end);
     //   }
      
      }
      $getContact = Bcontact::where('brand_id', $this->brand_id)->orderBy('created_by','desc')->get();

      $checkSelected = Usage::get();
      $businessOrder = Lead::orderBy('updated_at','DESC')->get();

      $searchTerm = '%'.$this->searchTerm. '%';
              $searchcat = Expo::where('tag','LIKE', $searchTerm)
                          ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

      $searchBrandTerm = '%'.$this->searchBrandTerm. '%';
      $searchcat = Expo::where('brand_name','LIKE', $searchBrandTerm)
                  ->where('status','1')->where('type','brand_name')->orderBy('brand_name','ASC')->get();

      
      $resultAdded = Expo::where('admstatus','1')->get();
      //$EventcountWithTag = Denco::
      $counteventWithCategory = Denco::where('expo_id', '$resultAdded->id')->count();

        return view('livewire.admin.admin-dashboard-component',['getContact'=> $getContact,'checkSelected'=> $checkSelected, 'counteventWithCategory'=> $counteventWithCategory,'resultAdded'=> $resultAdded, 'searchcat'=> $searchcat,'businessOrder' => $businessOrder,'upcomingViews' => $upcomingViews, 'current'=>$current, 'mytime' => $mytime,'descRankingViews' => $descRankingViews,'eventShtdesc' => $eventShtdesc, 'hastago' => $hastago, 'visitors' => $visitors,'magazine' => $magazine, 'nEwComment' => $nEwComment,'findInspection' => $findInspection,'blogfindo' => $blogfindo,'searchId' => $searchId,'expireplan' => $expireplan,'searchCat' => $searchCat,'mymonth' => $mymonth,'monthwise' => $monthwise,'eventthreemonth' => $eventthreemonth,'eventmonth' => $eventmonth,'eventweek' => $eventweek, 'eventomorrow'=>$eventomorrow, 'evento'=>$evento,'optios'=>$optios,'orders'=>$orders,'coupons'=>$coupons,'events'=>$events,'expoaward'=>$expoaward,'fattributes'=>$fattributes,'jobs'=>$jobs,'franchises'=>$franchises,'resume'=>$resume,'users'=>$users,
        'categories'=>$categories,'service'=>$service,'category'=>$category,'sectorr'=>$sectorr,'business'=>$business,'sector'=>$sector,'categ'=>$categ,'catcount'=>$catcount,
        ])->layout('layouts.admin');
        
    }
}
