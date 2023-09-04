<main>
    <section class="container pt-2" id="exhibit"> 
      <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
        <div class="d-flex justify-content-between px-0 m-0 lh-1">
          <span class="fs-sm"> Explore<br><span class="fw-medium h5">Exhibition</span></span>
         

          <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
            <ul class="dropdown-menu" width="auto">
              <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
              <li><a class="dropdown-item" href="#">Exhibit</a></li>
              <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
            </ul>
          </span>

        </div>
      </div>

      <div class="d-flex badgese">
       

        @foreach( $getnamecategoryresult as $categ) 
          @php
            $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
          @endphp
       
        
        @foreach($findcountevent as $finderlo)
            <a class="badge  border-1 text-right border-dark text-dark mr-1" href="#" wire:click.prevent="insertEventToSess({{$categ->Category}})">
            {{ucwords(trans($finderlo->tag))}}  {{$categ->total}}</a>
        @endforeach

        
        
        @endforeach
      </div>
      
      
      <div class="row g-0 py-0 mx-n2 my-Slider3"> 
        {{-- px-2 mb-1 --}}
        @foreach($evento as $eventoi)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
            <div class="card product-card">
              
              <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
              <img src="{{url('public/exhibition/'.$eventoi->image)}}" alt=""> 
              </a>

              <div class="card-body p-1">
                <div class="d-flex justify-content-between">
                    <div class="product-price"><small>{{$eventoi -> edition}}  
                      <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                          <span class="fs-xs">
                            @php
                                $to = strtotime($eventoi->startdate);
                                $from= strtotime($eventoi->enddate);
                            @endphp
                            

                            @if ($current < $to && $current < $from)
                                Upcom
                              @elseif ($current == $to && $current < $from) 
                                First
                              @elseif ($current > $to && $current < $from) 
                                Ongoi
                              @elseif ($current > $to && $current == $from) 
                                Last 
                              @elseif ($current > $to && $current > $from)
                                Ended
                            @endif
                          </span>
                        <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                      <div class="product-title fs-sm h3 mb-0">
                      <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}
                        </a></div>
                    </div>

                    <div class="star-rating d-none d-sm-block"> 
                      <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Visitor</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
                      <div class=" align-center fs-sm py-1"> 
                        <small class="mx-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Visitor" aria-label="Visitor"> + {{$eventoi -> auidence}} <i class="bi bi-people-fill"></i></small> 
                        <small class="mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Exhibitor" aria-label="Exhibior">+ {{$eventoi -> exhibitors}}K <i class="bi bi-person-workspace"></i></small>
                      </div>
                    </div>
                </div>
                <!--<small>World's best demanding business</small><br>-->
                <small class="text-bolder d-none d-sm-block"> <i class="bi bi-calendar3"></i>
                  @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                  @else
                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                  @endif 

                </small>
                <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue))}}, <br> {{ucwords(trans($eventoi -> city))}}</small>

                <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                  @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                  @else
                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                  @endif 
                </small><br>
                <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city))}}</small> 
                <!--ucfirst-->
              </div>

              
              
              <div class="card-body card-body-hidden">
                <div class="d-flex justify-content-between mb-2">
                  <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                  <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                </div>
              
                <div class="text-center">
                  @guest<a class="nav-link-style fs-ms" href="#" data-bs-toggle="modal">
                  <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                  @endguest
                </div>
              </div>
            
            </div>
          </div>
        @endforeach
      </div>

      
    </section>
</main>

@push('scripts')
    <script>
      var slider = tns({
        "container": '.badgese',   
        
        "responsive": {
          "300": {
            "items": 3,
            "controls": false,
            "fixedWidth": 100,
            "mouseDrag": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 1,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
            "fixedWidth": 100,
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>11
      var slider = tns({
        "container": '.my-Slider3',          
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": false,
            "fixedWidth": 150,
            "autoplayButtonOutput": false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay": false,
             "fixedWidth": 300,
            "autoplayButtonOutput": false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>
@endpush