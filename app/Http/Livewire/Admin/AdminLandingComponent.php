<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminLandingComponent extends Component
{

    public function updatedShortDescription() 
    {

        $eventsht = Event::where('status','1')->where('admstatus','1')->where('eventype', 'expo')->where('shtdesc', NULL)->get();

        foreach ($eventsht as $eventdesc)
        {
            $eventde =  Event::find($eventdesc->id);
            $findDataName = $eventde->eventname;
            $findDataEdition = $eventde->edition;
            $findDataAuidence = $eventde->auidence;
            $findDataExhibitors = $eventde->exhibitors;
            $findDataVenue = $eventde->venue;
            $findDataCity = $eventde->city;
            $findDataCountry = $eventde->country;
            $findDataTagline = $eventde->tagline;

            $findDatostartdate = $eventde->startdate;
            //$findDatoenddate = $eventde->enddate;
            //$findDatoMonth = date('d', $eventde->enddate);

                $subContent = 'Join over findDataExhibitors exhibitors and findDataAuidence + verified buyers on the 15th and 16th of July at hall no.5, findDataVenue , findDataCity , findDataCountry .
                For two days on 15-16 July 2023, findDataName will be home to exhibitors, visitors and the startup community. 
                Business buyers from Asia-Pacific, and from over 100 cities of India will be visiting the show to buy and sell business ideas. 
                2 days massive expo with unlimited franchise opportunities from various sectors and industries. 
                Come, be a part of this findDataTagline 2023.';

                $replacedfindDataName = str::replace('findDataName', $findDataName , $subContent );
                $replacedfindDataEdition = str::replace('findDataEdition', $findDataEdition ,$replacedfindDataName );
                $replacedfindDataAuidence = str::replace('findDataAuidence', $findDataAuidence ,$replacedfindDataEdition );
                $replacedfindDataExhibitors = str::replace('findDataExhibitors', $findDataExhibitors ,$replacedfindDataAuidence );
                $replacedfindDataVenue = str::replace('findDataVenue', $findDataVenue ,$replacedfindDataExhibitors );
                $replacedfindDataCity = str::replace('findDataCity', $findDataCity ,$replacedfindDataVenue );
                $replacedfindDataCountry = str::replace('findDataCountry', $findDataCountry ,$replacedfindDataCity );
                $replacedfindDataTagline = str::replace('findDataTagline', $findDataTagline ,$replacedfindDataCountry );
                $replacedfindDatostartdate = str::replace('findDatostartdate', $findDatostartdate ,$replacedfindDataTagline );
                //$replacedfindDatoenddate = str::replace('', $findDatoenddate ,$replacedfindDatostartdate );

                //dd($replacedfindDataTagline);
            $eventde->save();
        }
           
    }

    public function render()
    {
        $event = Event::get();
        $mytime = now()->format('Y-m-d');
        $evento = Event::where('status','1')->where('admstatus','1')->get();
        $eventd = Event::where('enddate', '<' , $mytime)->get();

        
        $eventsht = Event::where('status','1')->where('admstatus','1')->where('eventype', 'expo')->where('shtdesc', NULL)->get();
        //dd( $evento, $evento->count() );
        return view('livewire.admin.admin-landing-component',['eventsht'=>$eventsht,'event'=>$event,'evento'=>$evento,'eventd'=>$eventd,]);
    }
}
