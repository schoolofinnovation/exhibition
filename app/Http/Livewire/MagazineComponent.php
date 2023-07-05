<?php

namespace App\Http\Livewire;

use App\Models\Magazine;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Replace;

class MagazineComponent extends Component
{
   public $slug;

   public function mount($slug)
    {
       $this->slug = $slug;
    }

    public function addtime ()
    {
        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);

        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);

        $getmid = rand($currento, $Subtracttimeo);

        $finall = date('d/M/Y h:i:s', $getmid);
       //$selectanytime = strtotime($getmid ->random());

        dd($currenttime, $currento, $Subtracttime, $Subtracttimeo,$getmid, $finall );
    }
    public function render()
    {
       
        //$content = 'Welcome to Franchise India 2023';
        $subContent = 'Join over 500 Franchisors and 50,000+ verified buyers on the 15th and 16th of July at hall no.5, pragati Maidan, Delhi, India.
         For two days on 15-16 July 2023, Franchise India 2023 will be home to franchisors, franchisees and the startup community. 
         Business buyers from Asia-Pacific, and from over 100 cities of India will be visiting the show to buy an dsell franchises. 
         2 days massive expo with unlimited franchise opportunities from various sectors and industris. 
         Come, be a part of this mega franchise expo 2023.';
         
         $location = 'mmmm';
 
         $replaced = Str::Replace('India', $location, $subContent);
         dd($replaced);
 
        $magazine = Magazine::where('slug', $this->slug)->first();
        return view('livewire.magazine-component',['magazine' => $magazine]);
    }
}
