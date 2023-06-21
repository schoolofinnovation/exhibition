<?php

namespace App\Http\Livewire\Admin;

use App\Models\Magazine;
use Carbon\Carbon;
use Livewire\Component;

class MagazineUpgradingComponent extends Component
{

    public $slug;

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


    public function render()
    {

        return view('livewire.admin.magazine-upgrading-component');
    }
}
