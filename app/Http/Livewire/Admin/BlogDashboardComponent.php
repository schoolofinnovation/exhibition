<?php

namespace App\Http\Livewire\Admin;

use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Mag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class BlogDashboardComponent extends Component
{
    public $slug;
    public $tittle;
    public $desc;
    public $s_desc;
    public $tag;
    public $cag_id;
    public $status;
    public $type;
    public $image;
    public $user_id;
    public $board;
    public $blog_id;
    public $searchTerm;
    public $checkvalue;

    public function mount($board, $blog_id)
    {
        $findoblog = Mag::find($blog_id);
          $this->tittle = $findoblog->tittle;
          $this->slug = $findoblog->slug;
          $this->desc = $findoblog->desc;
          $this->s_desc = $findoblog->s_desc; 
          $this->type = $findoblog->type;
          $this->status = $findoblog->status;

        $this->blog_id = $blog_id;
        $this->board = $board;
        $this->type = "e";  
        $this->status = "1"; 
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->tittle,'-');
    }

    Use WithFileUploads;
    public function edit() {
    
        $blog = new Mag();
        $blog->tittle = $this->tittle;
        $blog->slug = $this->slug;
        $blogdesc = explode(",,",$this->desc);
        $blog->desc = json_encode($blogdesc);
        $blog->s_desc = $this->s_desc;
        $blog->user_id = Auth::user()->id;
        $blog->type = $this->type;
        $blog->status = $this->status;
        //dd($blog);
        $blog->save();
        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard',['board' => 'blog']);
    }

    public function dateImage()
    {
        $fattribute = Mag::find($this->blog_id);
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $fattribute->image = $newimage;
        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('admin.dashboard',['board' => 'blog']);
    }

//category
    public function updateEvent()
    {
        $sectry = json_encode($this->checkvalue);
        $tryi = json_decode($sectry);
        //$expoo = explode("," , $sectry );
        foreach($tryi as $trey)
        {
            $fattribute = new Denco();
            $fattribut = Mag::find($this->blog_id);
            $fattribute->expo_id = $trey;
            $fattribute->event_id = $fattribut->id;
            $fattribute->save();
        }
        
        //dd($sectry, $expoo, $tryi);
       
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('adminevent.detail', ['slug' => $fattribute->event->slug]);
    }

    public function generateSslug()
    {
        $this->slug = Str::slug($this->tag,'-');
    }

    public function updatetag()
    {   $rti = Str::replace('  ',' ',$this->tag);
        $ret = explode(",", $rti);
    
        foreach($ret as $tre)
        {
            $fattribute = new Expo();
            $fattribute->tag =    $tre;
            $fattribute->slug =   Str::slug($tre,'-');
            $fattribute->type =  $this->type;
            $fattribute->status =  $this->status;
            $fattribute->save();
        }
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->back();
    }



    public function render()
    {
        $findblog = Mag::find($this->blog_id);
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
                    ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

        return view('livewire.admin.blog-dashboard-component',['findblog' => $findblog ,'searchcat' => $searchcat])->layout('layouts.admin');
    }
}
