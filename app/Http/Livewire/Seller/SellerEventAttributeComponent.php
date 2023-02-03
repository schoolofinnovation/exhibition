<?php

namespace App\Http\Livewire\Seller;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerEventAttributeComponent extends Component
{
    public $category_id;
    public $auidence;
    public $exhibitors;
    public $sector_id;
    public $expo_id;
    public $search_id;
    public $max_pass;
    public $min_pass;
    public $desc;
    public $tagline;
    public $shtdesc;
    public $eventna_id;


    public function mount($event_id)
    {
        $fattribute = Event::find($event_id);
        //$this->eventna_id = $fattribute->id;
        $this->category_id = $fattribute->category_id;
        $this->auidence = $fattribute->auidence;
        $this->exhibitors = $fattribute->exhibitors;
        $this->sector_id = $fattribute->sector_id;
        $this->expo_id = $fattribute->expo_id;
        $this->search_id = $fattribute->search_id;
        $this->desc = $fattribute->desc;
        $this->tagline = $fattribute->tagline;
        $this->shtdesc = $fattribute->shtdesc;
        $this->eventna_id = $fattribute->eventna_id;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
         'category_id'=>'required',
            'auidence'=>'required',
            'exhibitors'=>'required',
            'sector_id'=>'required',
            'expo_id'=>'required',
            'search_id'=>'required',
            'desc'=>'required',
            'tagline'=>'required',
            'shtdesc'=>'required',
           // 'eventna_id' => 'required'
        ]);
    }

    public function updateAttribute()
    {
        $this->validate([
         'category_id'=>'required',
            'auidence'=>'required',
            'exhibitors'=>'required',
            'sector_id'=>'required',
            'expo_id'=>'required',
            'search_id'=>'required',
            'desc'=>'required',
            'tagline'=>'required',
            'shtdesc'=>'required',
            //'eventna_id'=>'required'
        ]);

        $fattribute = Event::find($this->attribute_id);
        $fattribute->id = $this->eventna_id ;
        $fattribute->category_id = $this->category_id ;
        $fattribute->auidence = $this->auidence ;
        $fattribute->exhibitors = $this->exhibitors ;
        $fattribute->sector_id = $this->sector_id ;
        $fattribute->expo_id = $this->expo_id ;
        $fattribute->search_id = $this->search_id ;
        $fattribute->desc = $this->desc ;
        $fattribute->tagline = $this->tagline ;
        $fattribute->shtdesc = $this->shtdesc ;
        $fattribute->eventna_id = $this->eventna_id ;
        dd($fattribute);
        $fattribute->save();
        session()->flash('message','Attribute has been updated succesfully!!');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        $event = Event::where('id', $this->event)->first();
        //$event = Event::where('user_id', Auth::user()->id)->where('status','1')->get();
        $expo = Expo::where('status','1')->where('type','expo')->get();
        $search = Expo::where('status','1')->where('type','tag')->get();
        $sector = Sector::get(); 
        $category = Category::where('status','active')->get();
        return view('livewire.seller.seller-event-attribute-component',[ 'event' => $event, 'expo' => $expo, 'search' => $search, 'sector' => $sector, 'category' => $category]);
    }
}
