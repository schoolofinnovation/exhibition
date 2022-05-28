<?php

namespace App\Http\Livewire;

use App\Models\Cag;
use Livewire\Component;

class BlogFooterComponent extends Component
{
    public function render()
    {
        $cag = Cag::paginate(21);
        return view('livewire.blog-footer-component',['cag'=> $cag])->layout('layouts.mag');   
     }
}
