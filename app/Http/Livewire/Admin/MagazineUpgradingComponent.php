<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Event;
use App\Models\Magazine;
use App\Models\Photo;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class MagazineUpgradingComponent extends Component
{

    public $slug;
    public $formm;
    public $image;

     use WithFileUploads; 

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function dateImage()
    {
        $fattribute = Magazine::where('slug', $this->slug)->first();
       
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $fattribute->image = $newimage;

        $fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
        return redirect()->route('admin.dashboard', ['board' => 'magazine']);
    }

    public function createOrganiser()
    {
        $eventorganiser = new Brand();
        $eventorganiser->brand_name = trim($this->brand_name);
        $eventorganiser->organisation = trim($this->brand_name);
        $eventorganiser->slug =  Str::slug ($this->brand_name,'-');
        $eventorganiser->dtype = 'magazine'; 
        $eventorganiser->save();
        return redirect()->route('admin.dashboard', ['board' => 'magazine']);
    }

    public function delphoto($id)
      {
        $delee = Photo::find($id);
        $delee->delete();
      }

    public function adDphoto($id)
    { 
        $findphoto = Photo::find($id);
        $updatephoto = Magazine::where('slug', $this->slug)->first();
        $updatephoto->image = $findphoto->brand_lgo;
        $updatephoto->save();
        return redirect()->route('admin.dashboard', ['board' => 'magazine']);
    }


    public function render()
    {
        $photos = Photo::get();
        return view('livewire.admin.magazine-upgrading-component',['photos'=> $photos]);
    }
}
