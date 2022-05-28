<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use App\Models\Mag;
use Livewire\Component;

class BlogHeaderComponent extends Component
{
    public function render()
    {
        $cage = Cag::with('mag')->paginate(7);
        //$check = Mag::where('cag_id', Cag::value('id'))->paginate(3);
        $tag = Cag::paginate(9);
         return view('livewire.blog-header-component',['cage'=> $cage,'tag'=> $tag ])->layout('layouts.mag');
      
    }
}
