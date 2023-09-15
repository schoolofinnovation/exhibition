<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exhibition Network</title>
</head>

    <body>

    <div class="row mb-5 pb-2">
                        
                        @foreach ($resulto as $business)
                          @php
                              $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                            
                          @endphp

                          @foreach ($franchiso as $franchise)
                          @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                                  <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                            $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                            $name = $franchise->eventname;
                                            $venue = $franchise->venue;
                                            $city = $franchise->city;
                                            $country = $franchise->country;
                                            $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                            
                                          @endphp
                                            
                                              <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate) 
                                  <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                            $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                            $name = $franchise->eventname;
                                            $venue = $franchise->venue;
                                            $city = $franchise->city;
                                            $country = $franchise->country;
                                            $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                            
                                          @endphp
                                            
                                              <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate) 
                                  <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                            $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                            $name = $franchise->eventname;
                                            $venue = $franchise->venue;
                                            $city = $franchise->city;
                                            $country = $franchise->country;
                                            $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                            
                                          @endphp
                                            
                                              <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate) 
                                  <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                            $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                            $name = $franchise->eventname;
                                            $venue = $franchise->venue;
                                            $city = $franchise->city;
                                            $country = $franchise->country;
                                            $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                            
                                          @endphp
                                            
                                              <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div> 
                              @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                                  <!-- <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                            $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                            $name = $franchise->eventname;
                                            $venue = $franchise->venue;
                                            $city = $franchise->city;
                                            $country = $franchise->country;
                                            $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                            
                                          @endphp
                                            
                                              <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div> -->
                            @endif

                          @endforeach
                        @endforeach

                      </div>
        
    </body>
</html>