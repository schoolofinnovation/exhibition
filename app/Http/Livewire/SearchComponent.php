<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Expo;
use App\Models\Viewso;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchComponent extends Component
{
    public $searchTerm;

    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';

        $saveSearchTerm = new Viewso();
        $saveSearchTerm->search = $searchTerm;
        if (Auth::check()) 
        { $saveSearchTerm->user_id = Auth::user()->id; }
        else
        { $saveSearchTerm->user_id = NULL ; }
        $saveSearchTerm->save();


        $searchcat = Expo::where('tag','LIKE', $searchTerm)
        ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

        $allcategory = Category::get();
        return view('livewire.search-component',['searchcat' => $searchcat , 'allcategory' => $allcategory]);
    }
}
