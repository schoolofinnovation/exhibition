@section('page_title', 'The Exhibtion Network - Connecting the World of Exhibitions & Conferences')
@section('page_description', 'Join the Swiss-based Exhibition Network and connect with the world of exhibitions and conferences. Stay up to date with the latest updates and news, and be a part of the dynamic exhibition industry')
@section('page_keywords', 'World largest business event platform, find all upcoming events, business conferences, exhibition2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')


<main>    
          <section class="container bg-faded-info mt-1">
            <div class=" rounded-3 py-4" >
              <div class="row align-items-center ">

                <div class="col-md-4">
                  <div class="row my-Slider4">
                      <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                        <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                        <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                        <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                        <a class="btn btn-accent" href="">Get Free Consultant <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                        
                      </div>

                      <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get Certify</span>
                        <h5 class="mt-4 mb-1 text-body fw-light">Best Place to Exhbit</h5>
                        <h2 class="mb-1"> Brands More <br> Prospects & Leads</h2>
                        <p class=" fw-light">Share your unique business, vistors, experience <br> with your competitors</p>
                        <a class="btn btn-accent" href="">Join The exhibition Network <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                      </div>

                      <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                        <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                        <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                        <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                        <a class="btn btn-accent" href="">Get Free COI Page <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                      </div>
                  </div>
                </div>
                
                <div class=" col-md-8 d-none d-sm-block pr-5">
                  <div class="d-flex my-Slider1">
                        <!-- Product-->
                      @foreach ($evento as $franchise)
                        <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-1">
                          <div class="card product-card">
                            <div class="card-body py-1">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                <span class="text-bolder">
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                    @endif 
                                </span>
                              </a>
                              <div class="d-flex justify-content-between">
                                <div class="product-price">
                                  <div class="product-title h3 fs-sm mb-0">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">
                                      {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a> </div>
                                  </div>
                              </div>
                            </div>

                          </div>
                          <!--<hr class="d-sm-none">-->
                        </div>
                      @endforeach
                  </div>

                  <div class="d-flex my-Slider2">
                    <!-- Product-->
                    @foreach ($evento as $franchise)
                      <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-4">
                        <div class="card product-card">
                          <div class="card-body py-2">
                            <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                              <span class="text-bolder">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                  @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                  @endif 
                              </span>
                            </a>
                            <div class="d-flex justify-content-between">
                              <div class="product-price">
                                <div class="product-title h3 fs-sm mb-0">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                </div>
                                <span class=" fs-sm fw-light">{{ucfirst(trans($franchise -> venue))}}</span>
                                <div class=" fs-sm fw-light">{{ucfirst(trans($franchise -> city))}}</div>
                                </div>
                            </div>
                          </div>
                          <div class="card-body card-body-hidden">
                            <div class="mb-2">
                              <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                            </div>
                          </div>
                        </div>
                        <!--<hr class="d-sm-none">-->
                      </div>
                    @endforeach
                  </div>
                  
                </div>

              </div>
            </div>
          </section>

        <!--list-->
          <section class="d-sm-none">
            <div class="d-flex  align-items-center my-Slider9">
              <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
                <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                  <div class="py-4 pr-4">
                    <h5 class="mb-2"><span class="fw-light">Gift World</span><br>Expo <span class="fw-light"></span><br>2023</h5>
                      <div class="text-info fs-sm">Register Now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                  </div>
              </a>
              <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
                <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                  <div class="py-4 pr-4">
                    <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span class="fw-light">with</span><br>360 Cam</h5>
                      <div class="text-info fs-sm">Shop now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                  </div>
              </a>
              <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
                <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                  <div class="py-4 pr-4">
                    <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span class="fw-light">with</span><br>360 Cam</h5>
                      <div class="text-info fs-sm">Shop now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                  </div>
              </a>
            </div>
          </section>

        <!--Trending Exhibition-->
          <section class="container pt-2" id="exhibit"> 
          <div class="list-unstyled py-2 px-0 pl-0">
                    <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm"> Trending<br><span class="fw-medium h5">Exhibition</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                    <ul class="dropdown-menu" width="auto">
                    <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                    <li><a class="dropdown-item" href="#">Exhibit</a></li>
                    <li><a class="dropdown-item" href="#">Add Event</a></li>        
                  </ul>
                    
                    </span></div>
              </div>

            <div >
              @foreach( $finder as $categ) 
               <span class="badge bg-secondary">{{ucwords(trans($categ->expoindustry))}}</span>
              @endforeach
            </div>


            <!-- Grid-->
            <div class="row pt-2 mx-n2 my-Slider3"> 
              @foreach($evento as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                      <img src="{{url('public/exhibition/'.$eventoi->image)}}" alt="{{$eventoi->eventname}}"></a>

                    <div class="card-body p-1">
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
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
                      </small>
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

        <!--COI Awards-->
          <section class="container pt-2" id="awards"> 
                <div class="list-unstyled border-bottom pt-2 pb-1 px-0 pl-0">
                    <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm"> Trending<br><span class="fw-medium h5">Awards</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                    <ul class="dropdown-menu" width="auto">
                    <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'award'])}}">More</a></li>
                      <li><a class="dropdown-item" href="#">Nominate</a></li>
                      <li><a class="dropdown-item" href="#">Attend</a></li>   
                  </ul>
                    
                    </span></div>
                </div>
            <!--Award-->
            <div class="row pt-2 mx-n2 my-Slider5">
              @foreach($awardo as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                      <img src="{{url('exhibition/'.$eventoi->image)}}" alt="{{$eventoi -> eventname}}"></a>

                    <div class="card-body p-1">
                      <!--<h3 class="product-title fs-sm"><a href="#">in asperiores quod nam</a></h3>-->
                     
                      
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
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
                      <small> <i class="bi bi-calendar3"></i></small>
                      <small class="text-bolder">
                        @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                        @else
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                        @endif 
                      </small><br>
                      <small><i class="bi bi-geo-alt-fill fs-sm"></i> </small> <small>{{ucwords(trans($eventoi -> venue))}}, {{ucwords(trans($eventoi -> city))}}</small><!--ucfirst-->

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
                  <!--<hr class="d-sm-none">-->
                </div>
              @endforeach 
            </div>
          </section>

        <!-- Promo banner-->
          <section class="container mt-4 mb-grid-gutter">
            <div class="bg-faded-info rounded-3 py-2">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Limited Offer</span>
                    <h3 class="mt-3 mb-1 text-body fw-light">All new</h3>
                    <h2 class="mb-1">Turn your Ideas,<br> into a <span class="text-primary">Startup.</span> </h2>
                    <p class="h5 text-body fw-light">at discounted price. Hurry up!</p>
                    <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                      <div class="countdown-days"><span class="countdown-value">43</span><span class="countdown-label text-muted">d</span></div>
                      <div class="countdown-hours"><span class="countdown-value">00</span><span class="countdown-label text-muted">h</span></div>
                      <div class="countdown-minutes"><span class="countdown-value">19</span><span class="countdown-label text-muted">m</span></div>
                      <div class="countdown-seconds"><span class="countdown-value">33</span><span class="countdown-label text-muted">s</span></div>
                    </div><a class="btn btn-accent mr-3" href="{{route('login')}}">Get Started </a> Learn More <i class=" bi bi-chevron-right fs-ms ms-1"></i>
                  </div>
                </div>
                
                <!--<div class="col-md-7 d-none d-sm-block">
                  <img src="{{asset ('images/7.jpg')}}" alt="iPad Pro Offer"></div>-->
                <div class="col-md-8 d-none d-sm-block">
                  <div class="d-flex my-Slider7">
                      <!-- Product-->
                      @foreach ($evento as $franchise)
                        <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <div class="card product-card">
                            <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                <span class="text-bolder">
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                    @endif 
                                </span>
                              </a>
                              <div class="d-flex justify-content-between">
                                <div class="product-price">
                                  <div class="product-title h3 fs-sm mb-0">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                    <span class="fs-xs fw-light">{{$franchise -> venue}}, {{$franchise -> city}}</span>
                                  </div>
                              </div>
                            </div>

                          </div>
                         
                        </div>
                      @endforeach
                  </div>

                  <div class="d-flex my-Slider8">
                    <!-- Product-->
                    @foreach ($evento as $franchise)
                      <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-4">
                        <div class="card product-card">
                          <div class="card-body py-2">
                            <a class="product-meta d-block fs-xs pb-1" href="#">
                              <span class="text-bolder">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                  @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                  @endif 
                              </span>
                            </a>
                            <div class="d-flex justify-content-between">
                              <div class="product-price">
                                <div class="product-title h3 fs-sm mb-0">
                                  <a href="#" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                
                                </div>
                            </div>
                          </div>
                          <div class="card-body card-body-hidden">
                            <div class="mb-2">
                              <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="" href=""><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                    @endforeach
                  </div>
                </div>
              
              </div>
            </div>
          </section>

        <!--Trending conference-->
          <section class="container pt-2" id="conference"> 
                <div class="list-unstyled border-bottom pt-2 pb-1 px-0 pl-0">
                    <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm"> Trending<br><span class="fw-medium h5">Conference</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                    <ul class="dropdown-menu" width="auto">
                      <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'conference'])}}">More</a></li>
                      <li><a class="dropdown-item" href="#">Attend</a></li>
                      <li><a class="dropdown-item" href="#">Speaker</a></li>  
                  </ul>
                    
                    </span></div>
                </div>
            <div class="row pt-2 mx-n2 my-Slider6"> 
              @foreach($evento as $eventoi)
              <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                      <img src="{{url('public/exhibition/'.$eventoi->image)}}" alt="{{$eventoi->eventname}}"></a>

                    <div class="card-body p-1">
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
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
                      <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue))}}, {{ucwords(trans($eventoi -> city))}}</small>

                      <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                        @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                        @else
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                        @endif 
                      </small>
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

        <!--Trending Magazine-->
          <section class="container pt-2" id="exhibit"> 
           <div class="list-unstyled border-bottom pt-2 pb-1 px-0 pl-0">
                <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm"> Trending Business<br><span class="fw-medium h5">Magazine</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                     <ul class="dropdown-menu" width="auto">
                      <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'magazine'])}}">More</a></li>
                      <li><a class="dropdown-item" href="#">Advertise</a></li>
                      <li><a class="dropdown-item" href="#">Subscribe</a></li>  
                    </ul>
                    </span>
                </div>
            </div>
              
            <!-- Grid-->
            <div class="row mx-n2 my-Slider10 g-0 py-0"> 
              <!-- magazine-->
              @foreach($magazine as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="">
                      <img src="{{url('magazine/'.$eventoi->image)}}" class="img-thumbnail" alt="">
                    </a>
                  </div>
                </div>
              @endforeach  
            </div>

            
          </section>
       
        <!-- Creators-->
          <section class="container py-3 pb-md-3">
            <!--<h2 class="h3 mb-4 pb-2">Top Creators</h2>-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-1 mb-1">  
                  <div class="fs-sm" >Business Community
                  
                      <h4 class="mb-0 me-2">Speaker</h4>
                      
                  </div>
                    <!--<div class="pt-3">
                      <a class="btn btn-outline-primary btn-sm" href="#listexpo"> 
                        Connect <i class="bi bi-caret-down-fill ms-1 me-n1"></i></a>
                    </div>-->

                      <div class="pt-3">
                        <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          All
                        </a>

                        <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                          <li><a class="dropdown-item" href="#">Speaker</a></li>
                          <li><a class="dropdown-item" href="#">Subscribe</a></li>
                        </ul>
                      </div>
                      
                  </div>
              <div class="row my-Slider23">

                <!-- Bestsellers-->
                <div class="col-md-4 col-sm-6 mb-2 py-1">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Network</h3>-->
                  
                    @foreach ($network as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}"  width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                          <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

                <!-- New arrivals-->
                <div class="col-md-4 col-sm-6 mb-2 py-3">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Speaker</h3>-->
                    @foreach ($speaker as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                            <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

                <!-- Top rated-->
                <div class="col-md-4 col-sm-6 mb-2 py-3">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Social</h3>-->
                    @foreach ($social as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                            <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

              </div>
          </section>
        
        <!--contact-->        
          <div class="container-fluid px-0 d-none" id="listexpo">
            <div class="row g-0">
              <div class="col-lg-6 iframe-full-height-wrap">
                <div class="mx-auto py-lg-5 my-5 text-dark text-center" style="max-width: 35rem;">
                    <p>BE SEEN</p>
                    <h2 class="display-5 text-dark mb-2 ">
                  Business profile
                    </h2>
                    <p class="fw-light  mx-auto lead text-dark pb-2">Create a business profile with helpful information for your business auidence like your Business Model, business description, email address, and website.
                    </p>
                    <a href="#opening" class="btn btn-lg  btn-outline-primary fw-bolder my-2">Learn more about</a>
                </div>
              </div>
            
              @livewire('event-form-component')
            </div>
          </div>

</main>

@push('scripts')
    <script>
      var slider = tns({
        "container": '.my-Slider4',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": false,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 1,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":false,
            "autoplayButtonOutput":false
          },
          
        },
        
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider1',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider2',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider3',          
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider5',            
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider6',            
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider7',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider8',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider9',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider10',            
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 7,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>
    
    <script>
      var slider = tns({
        "container": '.my-Slider23',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": false,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 3,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":false,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.tagse',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 1,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.badgese',            
        "responsive": {
          "300": {
            "items": 3,
            "controls": false,
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
            "autoplayButtonOutput": false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>
@endpush