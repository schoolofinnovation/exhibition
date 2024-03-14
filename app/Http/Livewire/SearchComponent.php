<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Viewso;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchComponent extends Component
{
    public $searchTerm;

    public function searchbackup()
    {
        $saveSearchTerm = new Viewso();
        $saveSearchTerm->search = $this->searchTerm;
        if (Auth::check()) 
        { $saveSearchTerm->user_id = Auth::user()->id; }
        else
        { $saveSearchTerm->user_id = NULL ; }

       
        $saveSearchTerm->save();
    }
    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';

        


        $searchcat = Expo::where('tag','LIKE', $searchTerm)
        ->where('status','1')->where('type','tag')->orderBy('tag','ASC')->get();

        $allcategory = Category::get();
        $searchCat = Event::Where('eventname','LIKE', $searchTerm)->where('status','1')->orderBy('eventname','ASC')->get();
        return view('livewire.search-component',['searchCat' => $searchCat ,'searchcat' => $searchcat , 'allcategory' => $allcategory]);
    }
}