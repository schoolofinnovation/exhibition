<?php

namespace App\Http\Livewire;

use App\Models\Expo;
use Livewire\Component;

class SearchComponent extends Component
{
     public $searchTerm;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchcat = Expo::where('tag','LIKE', $searchTerm)
        ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

        return view('livewire.search-component',['searchcat' => $searchcat]);
    }
}
