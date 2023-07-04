<?php

namespace App\Http\Livewire;

use App\Models\Magazine;
use Livewire\Component;

class MagazineComponent extends Component
{
   public $slug;

   public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function render()
    {
        $magazine = Magazine::where('slug', $this->slug)->first();
        return view('livewire.magazine-component',['magazine' => $magazine]);
    }
}
