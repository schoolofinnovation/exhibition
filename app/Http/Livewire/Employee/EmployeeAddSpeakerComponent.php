<?php

namespace App\Http\Livewire\Employee;

use App\Models\Businessteam;
use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use App\Models\Social;
use App\Models\Speaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EmployeeAddSpeakerComponent extends Component
{
    public $option;
    public $name;
    public $slug;
    public $designation;
    public $channel;
    public $organisation;
    public $website;
    public $not_website;
    public $contact;
    public $email;
    public $link;
    public $image;
    public $terms;
    public $eventype;
    public $event_id;

    use WithFileUploads;
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function newSpeaker()
    {
        $businessTeam = new Businessteam();
        $businessTeam->event_id = $this->event_id;
        $businessTeam->user_id = Auth::user()->id;
        $businessTeam->name = $this->name;
        $businessTeam->slug = $this->slug;
        $businessTeam->designation = $this->designation;
        $businessTeam->contact = $this->contact;
        $businessTeam->channel = $this->channel;
        $businessTeam->email = $this->email;
        $businessTeam->link  = $this->link;
        //$businessTeam->image = $this->image;
        $businessTeam->not_active = 0;
        $businessTeam->status  = 1;
        $businessTeam->admstatus  = 0;
        $businessTeam->save();

        $socio = new Social();
        //$socio->designation = $this->designation;
        $socio->channel = $this->channel;
        $socio->link  = $this->link;
        $socio->user_id = Auth::user()->id;
        $socio->event_id = $this->event_id;
        $socio->status  = 1;
        $socio->admstatus  = 0;
        $socio->save();

        $speaKer = new Speaker();
        $speaKer->social_id = $socio->id;
        $speaKer->name = $this->name;
        $speaKer->slug = $this->slug;
        $speaKer->businessTeam_id = $businessTeam->id;
        $speaKer->image = $this->image->store('speaKer','public');
        $speaKer->user_id = Auth::user()->id;
        $speaKer->event_id = $this->event_id;
        $speaKer->organisation = $this->organisation;
        $speaKer->website = $this->website;
        $speaKer->not_website  = $this->not_website ? 1:0;
        $speaKer->terms = $this->terms;
        $speaKer->status = 1;
        $speaKer->admstatus = 0;
        $speaKer->save();
    }
        
    
    public function render()
    {
        $abc = Expo::where('status', 1)->where('type','expo')->orderBy('expoindustry','asc')->get();
        $def = Expo::where('status', 1)->where('type','tag')->orderBy('tag','asc')->get();
        $ghi = Sector::get();
        $jkl = Category::get();
        $exhibition_id = Event::where('user_id',Auth::user()->id)->get();
        return view('livewire.employee.employee-add-speaker-component',['exhibition_id' => $exhibition_id,'abc' => $abc, 'jkl' => $jkl, 'ghi' => $ghi, 'def' => $def])->layout('layouts.exhibitor');
    }
}
