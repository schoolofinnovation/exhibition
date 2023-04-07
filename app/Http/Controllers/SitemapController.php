<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\SitemapController;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(Request $r)
    {   $mytime = Carbon::today()->format("Y-m-d");
        $postie = Event::where('admstatus','1')->where('status','1')->where('eventype','expo')->where('startdate', '>' , $mytime)->get();

        return response()->view('sitemap',compact('postie'))->header('Content-Type','text/xml');
    }
}
