<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\SitemapController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitemapController extends Controller
{
    public function index(Request $r)
    {   //$mytime = Carbon::today()->format("Y-m-d");
        $postie = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->get();

        $categoryresult = DB::table('events')
           ->join('dencos','dencos.event_id','=','events.id')
           ->join('expos','expos.id' ,'=','dencos.expo_id')
           ->select('expos.tag as Category', DB::raw('count(events.id) as total'))
           ->orderBy('total','desc')
           ->groupBy('expos.tag')
           ->get();

        return response()->view('sitemap',compact('postie','categoryresult'))->header('Content-Type','text/xml');
    }
}
