@section('page_title','Explore Exhibition')
@section('content_description','Find your Industry Exhibition ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')


<main>
          <!--<section class="container-fluid  bg-secondary py-lg-5">
            <div class="text-center mt-4 mb-3">
              <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger"> 
              </div>
                <h2 class="lead fw-lighter">Exhibition / Awards</h2>
              <p class="col-md-6 col-lg-8 mb-3 mx-auto display-5">Launching innovations battlegrounds, every year</p>
              <a href="#opening" class="  btn btn-md btn-outline-primary mb-3">How strategize Business expansion</a><br>
              <a href="#exhibit" class="  btn btn-md btn-outline-primary mb-3"><i class="mr-1 bi bi-plus"></i> Exhibit</a>
              <a href="#awards" class="  btn btn-md btn-outline-primary mb-3"><i class="mr-1 bi bi-plus"></i> Awards</a>
            </div>
          </section>-->

          <!--<section class="container mt-4 mb-grid-gutter">
            <div class="bg-faded-info rounded-3 py-4">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                    <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                    <h2 class="mb-1"> Identify More <br>
                      Prospects & Leads
                    </h2>
                    <p class="h5 text-body fw-light">Why do so many prestigious brands<br> choose to sponsor events with us? </p>
                    <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                      <div class="countdown-days"><span class="countdown-label text-muted">Contact us about partnership opportunities</span></div>
                      
                    </div>
                    <a class="btn btn-accent" href="">Get Plan<i class=" bi bi-arrow-right fs-ms ms-1"></i></a>
                  </div>
                </div>
                <div class=" col-md-8">
                  <div class="d-flex justify-content-evenly">
                    <div class="col-4 bg-light text-center ">
                      <h6 class="fw-bold">Event Partnerships</h6>
                      <p>If you would like to put forward a speaker for a specific FT Live event, please let us know and one of our content editors will be in touch soon</p>
                    </div>
                    <div class="col-4 bg-light text-center ">
                      <h6 class="fw-bold"> Speaking Opportunities</h6>
                      <p>If you would like to put forward a speaker for a specific FT Live event, please let us know and one of our content editors will be in touch soon</p>
                    </div>
                    <div class="col-4 bg-light text-center ">
                      <h6 class="fw-bold">Media partnerships</h6> 
                      <p>Boost the awareness of your association by discussing a mutually beneficial media agreement across one, or several, of our core conferences </p>
                  </div>
                </div>
                <div class="lead">
                Get in touch to discuss a partnership option that works for you and your business objectives and get in front of the most influential companies today.
                </div>
              </div>
            </div>
          </section>-->
          
          <section class="container bg-faded-info mt-4">
            <div class=" rounded-3 py-4" >
              <div class="row align-items-center ">

                <div class="col-md-4">
                  <div class="row my-Slider4">
                      <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                        <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                        <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                        <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                        <a class="btn btn-accent" href="">Get Free COI Page <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                      </div>

                      <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                        <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                        <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                        <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                        <a class="btn btn-accent" href="">Get Free COI Page <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
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
                                    <span class="fs-xs fw-light bg-secondary p-1"></span>
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
                                <span class=" fs-sm fw-light">{{$franchise -> venue}}, {{$franchise -> city}}</span>
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
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              
            <div class="h3 mb-0 pt-3 me-2" >Trending Exhibition
              <h2 class="fs-sm">Trending Exhibition</h2></div>

              <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="#listexpo"> <i class="mr-1  bi bi-plus"></i>
                Exhibit your Business<i class="bi bi-caret-down-fill ms-1 me-n1"></i></a></div>
            </div>
            <!-- Grid-->
            <div class="row pt-2 mx-n2 my-Slider3"> 
              <!--single lastest by new organiser contact-->
                    @guest
                      @else
                        @foreach($newlead as $eventoi)
                          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                            <div class="card product-card">
                              <!--<div class="product-card-actions d-flex align-items-center">
                                <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart"></i></a> 
                              </div>
                              
                              <a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                                <img src="http://127.0.0.1:8000/Storage/brands/digital_8.png" alt="in asperiores quod nam"></a>-->

                              <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"></a>
                                <!--<h3 class="product-title fs-sm"><a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">in asperiores quod nam</a></h3>-->
                                <small class="fw-bold">
                                  @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                                  @else
                                    {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                                  @endif 
                                </small>
                                
                                <div class="d-flex justify-content-between">
                                    <div class="product-price"><small>{{$eventoi -> edition}} Edition</small>
                                      <div class="product-title fs-sm h3 mb-0">
                                      <a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">{{ucwords(trans($eventoi -> eventname))}}
                                        </a></div>
                                    </div>

                                    <div class="star-rating align-center ">
                                      <small class="text-primary">Visitors | Exhibitors</small>
                                        <div class="my-1 align-center"> <small class="mx-2 fw-bold">{{$eventoi -> auidence}}</small> <small class="mx-2 fw-bold">+ {{$eventoi -> exhibitors}}</small></div>
                                          <!-- <i class="star-rating-icon bi bi-star-fill active"></i>
                                          <i class="star-rating-icon bi bi-star-fill active"></i>
                                          <i class="star-rating-icon bi bi-star-fill active"></i>
                                          <i class="star-rating-icon bi bi-star-fill active"></i>
                                          <i class="star-rating-icon bi bi-star-fill active"></i> -->
                                    </div>
                                </div> 
                                <small>{{ucwords(trans($eventoi->category->industry))}} <i class="bi bi-chevron-right"></i>  {{ucwords(trans($eventoi->sector->sector))}}</small>

                                <small>World's best demanding business</small><br><small>{{ucwords(trans($eventoi -> venue))}}, {{ucwords(trans($eventoi -> city))}}</small><!--ucfirst-->
                                <div class="d-flex justify-content-between">
                                  @if($eventoi -> search_id == null)
                                    
                                  @else
                                  <span class=" bg-primary" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                    {{$eventoi->search->tag}}</span>
                                  @endif
                                
                                  <!-- <div class=""><span class="badge bg-danger">Date</span></div> -->
                                  <!--<div class="star-rating align-center"> <small>Venue</small>
                                  </div>-->
                                </div>
                              </div>
                              
                              <div class="card-body card-body-hidden">
                              <div class="d-flex justify-content-between mb-2">
                                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-cart fs-sm me-1"></i>test Exhibit</a>
                                </div>
                              
                                <div class="text-center"> 
                                @guest<a class="nav-link-style fs-ms" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam" data-bs-toggle="modal">
                                <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                                @endguest
                              </div>
                              </div>
                            
                            </div>
                            <hr class="d-sm-none">
                          </div>
                        @endforeach
                    @endguest
              <!--single lastest by new organiser contact-->

              <!-- exhibition-->
              @foreach($evento as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2">
                  <div class="card product-card">
                    <div class="product-card-actions d-flex align-items-center">
                      <!--<a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                      <a class="btn-action nav-link-style me-2" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="exhibit" aria-label="exhibit"><i class="bi bi-shuffle me-1"></i>Exhibit</a>
                      <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class="bi bi-heart"></i></a>-->
                    </div>
                    <!--<a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                      <img src="http://127.0.0.1:8000/Storage/brands/digital_8.png" alt="in asperiores quod nam"></a>-->

                    <div class="card-body py-2">
                      <a class="product-meta d-block  pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        {{$eventoi->category->industry}} | {{$eventoi->sector->sector}}
                        <span class=" bg-primary opacity-75" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span></a>
                      <!--<h3 class="product-title fs-sm"><a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">in asperiores quod nam</a></h3>-->
                     
                      
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                              <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                            <div class="product-title fs-sm h3 mb-0">
                            <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}
                              </a></div>
                          </div>

                          <div class="star-rating">
                           <div class="badge bg-primary opacity-75 position-relative"> Pass</span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                              free
                              <span class="visually-hidden">unread messages</span>
                            </span></div>
                            
                            |
                            <div class="badge bg-primary opacity-75 position-relative"> Exhibit</span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                              Offer
                              <span class="visually-hidden">unread messages</span>
                            </span></div>
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
                        <small><i class="bi bi-geo-alt-fill fs-sm"></i> </small> <small>{{$eventoi -> venue}}, {{ucwords(trans($eventoi -> city))}}</small><!--ucfirst-->
                        
                      
                      <!--<div class="d-flex justify-content-between">
                          @if($eventoi -> search_id == null)            
                              @else
                              <span class=" bg-primary" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span>
                          @endif
                         <div class=""><span class="badge bg-danger">Date</span></div>
                        <div class="star-rating align-center"> <small>Venue</small>
                        </div>
                      </div>-->
                    </div>
                    
                    <div class="card-body card-body-hidden">
                      <div class="d-flex justify-content-between mb-2">
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                      </div>
                    
                      <div class="text-center">
                        @guest<a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal">
                        <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                        @endguest
                      </div>
                    </div>
                  
                  </div>
                  <hr class="d-sm-none">
                </div>
              @endforeach  
            </div>
          </section>

          <!--COI Awards-->
          <section class="container pt-4" id="awards"> 
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              <h2 class="h3 mb-0 pt-3 me-2">COI Awards</h2>
              <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="{{route('franchise.Coi')}}">
                Nominate your Brand<i class="bi bi-caret-down-fill ms-1 me-n1"></i></a></div>
            </div>
            <!--Award-->
            <div class="row pt-2 mx-n2 my-Slider5">
              @foreach($awardo as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <div class="product-card-actions d-flex align-items-center">
                      <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                      <a class="btn-action nav-link-style me-2" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="exhibit" aria-label="exhibit"><i class="bi bi-shuffle me-1"></i>Exhibit</a>
                      <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class="bi bi-heart"></i></a> 
                    </div>
                    <a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                      <img src="http://127.0.0.1:8000/Storage/brands/digital_8.png" alt="in asperiores quod nam"></a>

                    <div class="card-body py-2">
                      <a class="product-meta d-block  pb-1" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                        <!--{{$eventoi->category->industry}} | {{$eventoi->sector->sector}}-->
                        <span class=" bg-primary opacity-75" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span></a>
                      <!--<h3 class="product-title fs-sm"><a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">in asperiores quod nam</a></h3>-->
                     
                      
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                              <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                            <div class="product-title fs-sm h3 mb-0">
                            <a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">{{ucwords(trans($eventoi -> eventname))}}
                              </a></div>
                          </div>

                          <div class="star-rating">
                            <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Pass</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
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
                      
                      <div class="d-flex justify-content-between">
                          @if($eventoi -> search_id == null)            
                              @else
                              <span class=" bg-primary" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span>
                          @endif
                         <div class=""><span class="badge bg-danger">Date</span></div>
                        <div class="star-rating align-center"> <small>Venue</small>
                        </div>
                      </div>
                    </div>
                    
                    <div class="card-body card-body-hidden">
                      <div class="d-flex justify-content-between mb-2">
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                      </div>
                    
                      <div class="text-center">
                        @guest<a class="nav-link-style fs-ms" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam" data-bs-toggle="modal">
                        <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                        @endguest
                     </div>
                    </div>
                  
                  </div>
                  <hr class="d-sm-none">
                </div>
              @endforeach 
            </div>
          </section>

          <!--features-->
         <!-- Promo banner-->
          <section class="container mt-4 mb-grid-gutter">
            <div class="bg-faded-info rounded-3 py-4">
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
                        <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-1">
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
                                    <span class="fs-xs fw-light bg-secondary p-1">{{ucwords(trans($franchise->sector->sector))}}</span>
                                  </div>
                              </div>
                            </div>

                          </div>
                          <!--<hr class="d-sm-none">-->
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
                                <span class=" fs-sm fw-light">{{ucwords(trans($franchise -> venue))}}, {{ucwords(trans($franchise -> city))}}</span>
                                </div>
                            </div>
                          </div>
                          <div class="card-body card-body-hidden">
                            <div class="mb-2">
                              <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="" href=""><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
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

          <!--COI Communities Network-->
           <section class="container pt-5" id="awards"> 
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              <h2 class="h3 mb-0 pt-3 me-2">COI Communities Network <span class="fw-light text-small">to Connect</span></h2>
              <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="{{route('franchise.Coi')}}">
                Nominate your Brand<i class="bi bi-caret-down-fill ms-1 me-n1"></i></a></div>
            </div>
          
            <!-- Grid-->
            <div class="row pt-2 mx-n2 my-Slider6">
              @foreach($awardo as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <div class="product-card-actions d-flex align-items-center">
                      <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                      <a class="btn-action nav-link-style me-2" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="exhibit" aria-label="exhibit"><i class="bi bi-shuffle me-1"></i>Exhibit</a>
                      <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class="bi bi-heart"></i></a> 
                    </div>
                    <a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                      <img src="http://127.0.0.1:8000/Storage/brands/digital_8.png" alt="in asperiores quod nam"></a>

                    <div class="card-body py-2">
                      <a class="product-meta d-block  pb-1" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                        <!--{{$eventoi->category->industry}} | {{$eventoi->sector->sector}}-->
                        <span class=" bg-primary opacity-75" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span></a>
                      <!--<h3 class="product-title fs-sm"><a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">in asperiores quod nam</a></h3>-->
                     
                      
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}} Edition  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                              <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                            <div class="product-title fs-sm h3 mb-0">
                            <a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">{{ucwords(trans($eventoi -> eventname))}}
                              </a></div>
                          </div>

                          <div class="star-rating">
                            <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Pass</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
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
                      
                      <!--<div class="d-flex justify-content-between">
                          @if($eventoi -> search_id == null)            
                              @else
                              <span class=" bg-primary" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                                {{$eventoi->search->tag}}</span>
                          @endif
                         <div class=""><span class="badge bg-danger">Date</span></div>
                        <div class="star-rating align-center"> <small>Venue</small>
                        </div>
                      </div>-->
                    </div>
                    
                    <div class="card-body card-body-hidden">
                      <div class="d-flex justify-content-between mb-2">
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                      </div>
                    
                      <div class="text-center">
                      @guest<a class="nav-link-style fs-ms" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam" data-bs-toggle="modal">
                      <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                      @endguest
                    </div>
                    </div>
                  
                  </div>
                  <hr class="d-sm-none">
                </div>
              @endforeach 
            </div>
           </section>

          <section class="container py-3 py-lg-5 pt-5 mt-5 mb-3">
            <h5 class="text-center">Pre - Post market with us.</h5>
              <h2 class="display-3 text-center my-2">Our Escape Room</h2>
              <h3 class="text-center">The secret to better exhibition ROI</h3> 
                <h6 class="text-center">Connect with your business market.</h6>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">            
                  <div class="col col-md-4">
                    <div class="card h-100  border-0">
                        <div class="card-body text-center">
                          <h5 class="card-title" style="color:#ff0440;">
                          <span class="badge bg-primary">COI Expo</span>
                          Exhibit to your industry community</h5>
                          <p class="card-text m-2 p-2">Instantly Market to the world, share business Opportunity to the industry leaders ready to do business.</p>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col col-md-4">
                    <div class="card h-100  border-0">
                      <div class="card-body text-center">
                        <h5 class="card-title"  style="color:#ff0440;"><span class="badge bg-primary">COI Badge</span>
                        Sign up for business badge</h5>
                        <p class="card-text m-2 p-2"> Get ready to attract entrpreneur, Business Owner with years of business expertise</p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                    <div class="card h-100 border-0">        
                      <div class="card-body text-center">
                        <h5 class="card-title "  style="color:#ff0440;"><span class="badge bg-primary">COI Space</span>
                        Prestigious Business Address, Mails, Telephone </h5>
                          <p class="card-text m-2 p-2">
                          Flexible office, shows legitimacy, earn respect and loyalty by employee & cleints, helps
                          power-up your selling efforts.</p>
                      </div>
                    </div>
                  </div>

                  <!--<div class="col col-md-4">
                    <div class="card h-100 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title "  style="color:#ff0440;">Sign up business membership with yearly subscription</h5>
                        <p class="card-text">Develop talent and keep skill-up.</p>
                        <br> attend our all regional macro exhibition for year
                    </div>
                    </div>
                  </div>-->
                
                  <div class="col col-md-4">
                    <div class="card h-100 border-0">
                      <div class="card-body text-center">
                          <h5 class="card-title" style="color:#ff0440;">
                          <span class="badge bg-primary">COI Network</span> <!--Culture-->
                          Appreciated, time to relax and enjoy !
                          </h5>
                          <p class="card-text m-2 p-2">
                        Unlock corporate perks, Get social, making the right connections,
                          get access business discussion, business room with food music.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                    <div class="card h-100 border-0"> 
                      <div class="card-body text-center">
                      <h5 class="card-title" style="color:#ff0440;"><span class="badge bg-primary">COI Reward</span>Socialise business strength, thank with award</h5>
                      <p class="card-text m-2 p-2">Nominate achievement, build team as business celebrity. your business auidence start trust with result assurance </p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                      <div class="card h-100 border-0">
                        <div class="card-body text-center">
                        <h5 class="card-title" style="color:#ff0440;"><span class="badge bg-primary">COI Award</span>Nominate your skill to feel proud self.</h5>
                        <p class="card-text m-2 p-2">Socialize your achievement to your industry, get instant attention to recoginse for your speciaization.</p>
                        </div>
                      </div>
                  </div>

                </div>
          </section>

           <!--Images update Network-->
           <section class="container pt-5" id="awards"> 
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              <h2 class="h3 mb-0 pt-3 me-2">COI Magazine <span class="fw-light text-small">to Connect</span></h2>
              <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="{{route('franchise.Coi')}}">
                Nominate your Brand<i class="bi bi-caret-down-fill ms-1 me-n1"></i></a></div>
            </div>
          
            <!-- Grid-->
            <div class="row pt-2 mx-n2 my-Slider6">
              @foreach($awardo as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <!--<div class="product-card-actions d-flex align-items-center">
                      <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                      <a class="btn-action nav-link-style me-2" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="exhibit" aria-label="exhibit"><i class="bi bi-shuffle me-1"></i>Exhibit</a>
                      <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class="bi bi-heart"></i></a> 
                    </div>-->
                    <a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                    <img src="{{url('magazine/'.$eventoi->image)}}" alt="{{Str::limit($eventoi->eventname, 24)}}"></a>

                    
                  
                  </div>
                  
                </div>
              @endforeach 
            </div>
           </section>

          <section class="container py-3 py-lg-5 pt-5 mt-5 mb-3">
            <h5 class="text-center">Pre - Post market with us.</h5>
              <h2 class="display-3 text-center my-2">Our Escape Room</h2>
              <h3 class="text-center">The secret to better exhibition ROI</h3> 
                <h6 class="text-center">Connect with your business market.</h6>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">            
                  <div class="col col-md-4">
                    <div class="card h-100  border-0">
                        <div class="card-body text-center">
                          <h5 class="card-title" style="color:#ff0440;">
                          <span class="badge bg-primary">COI Expo</span>
                          Exhibit to your industry community</h5>
                          <p class="card-text m-2 p-2">Instantly Market to the world, share business Opportunity to the industry leaders ready to do business.</p>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col col-md-4">
                    <div class="card h-100  border-0">
                      <div class="card-body text-center">
                        <h5 class="card-title"  style="color:#ff0440;"><span class="badge bg-primary">COI Badge</span>
                        Sign up for business badge</h5>
                        <p class="card-text m-2 p-2"> Get ready to attract entrpreneur, Business Owner with years of business expertise</p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                    <div class="card h-100 border-0">        
                      <div class="card-body text-center">
                        <h5 class="card-title "  style="color:#ff0440;"><span class="badge bg-primary">COI Space</span>
                        Prestigious Business Address, Mails, Telephone </h5>
                          <p class="card-text m-2 p-2">
                          Flexible office, shows legitimacy, earn respect and loyalty by employee & cleints, helps
                          power-up your selling efforts.</p>
                      </div>
                    </div>
                  </div>

                  <!--<div class="col col-md-4">
                    <div class="card h-100 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title "  style="color:#ff0440;">Sign up business membership with yearly subscription</h5>
                        <p class="card-text">Develop talent and keep skill-up.</p>
                        <br> attend our all regional macro exhibition for year
                    </div>
                    </div>
                  </div>-->
                
                  <div class="col col-md-4">
                    <div class="card h-100 border-0">
                      <div class="card-body text-center">
                          <h5 class="card-title" style="color:#ff0440;">
                          <span class="badge bg-primary">COI Network</span> <!--Culture-->
                          Appreciated, time to relax and enjoy !
                          </h5>
                          <p class="card-text m-2 p-2">
                        Unlock corporate perks, Get social, making the right connections,
                          get access business discussion, business room with food music.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                    <div class="card h-100 border-0"> 
                      <div class="card-body text-center">
                      <h5 class="card-title" style="color:#ff0440;"><span class="badge bg-primary">COI Reward</span>Socialise business strength, thank with award</h5>
                      <p class="card-text m-2 p-2">Nominate achievement, build team as business celebrity. your business auidence start trust with result assurance </p>
                      </div>
                    </div>
                  </div>

                  <div class="col col-md-4">
                      <div class="card h-100 border-0">
                        <div class="card-body text-center">
                        <h5 class="card-title" style="color:#ff0440;"><span class="badge bg-primary">COI Award</span>Nominate your skill to feel proud self.</h5>
                        <p class="card-text m-2 p-2">Socialize your achievement to your industry, get instant attention to recoginse for your speciaization.</p>
                        </div>
                      </div>
                  </div>

                </div>
          </section>

          <section class="container">
                <div class="class">
                  <div class="row mx-n2">
                  @foreach($awardo as $eventoi)
                    <div class="col-lg-3 col-6 px-0 px-sm-2 mb-sm-4 px-1">
                      <div class="card product-card card-static">
                        <!--<button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" 
                        data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class="ci-heart"></i></button>-->
                        
                        <a class="card-img-top d-block overflow-hidden" href="#">
                          <img src="{{url('magazine/'.$eventoi->image)}}" alt="Product"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{$eventoi->sector->sector}}</a>
                          <h3 class="product-title fs-sm"><a href="#">{{$eventoi->eventname}}</a></h3>
                          <div class="d-flex justify-content-between">
                            <!--<div class="product-price"><span class="text-accent">$10.<small>99</small></span></div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i>
                            <i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                            <i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                            </div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  </div>
                </div>
          </section>


          

          <!--industry -->
          <section class="container py-3 py-lg-5 mt-4 mb-3">
            <div class="text-center">
              <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
                </div>
                <!--<p class="col-md-10 col-lg-8 mx-auto  display-6 fw-normal">
            </p>-->
                <h2 class="display-5 fw-normal">Trending Industry</h2>
              
              <p class="fs-sm text-center pb-1">When you market on COI, you reach customers ready to do business.</p>
              <!-- <a href="{{route('login')}}" class="btn btn-lg btn-outline-primary mb-3">Let's Connect!!</a> -->
            <div class="container py-4">
              <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
            
                @foreach($industry as $indust)
                <div class="col">
                    <div class="p-3 border rounded border-primary bg-light">
                      {{ucwords(trans($indust->industry))}}
                    </div>
                </div>
                @endforeach
              
              </div>
            </div>
            </div>        
          </section>






        <!--Our culture and values-->
          <section class="container py-3 py-lg-5 mt-4 mb-3">
            <div class="text-center mb-5">
              <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
                

              </div>
                <!--<h2 class="lead" id="opening">OUR MISSION</h2>-->
              <p class="col-md-10 col-lg-8 mx-auto  display-6 fw-normal">
              Reach your business goals with COI Marketing Solutions.</p>
              
            </div>
          
        
          </section>
        
        <!--vacancies-->
          <section class="row g-0" id="apply">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
            style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
            </div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">
              <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

                <h2 class="display-5 text-center mb-2 ">
                Reaching more people
                </h2>
                
                <p class="fs-sm  text-center pb-2">
                People come  to discover new business idea they search, including businesses like yours. 
                , you can reach people who aren’t following you and inspire them to become your next customer.
                <br>
                digitalize your business with us to reach  big set of customer,  to drive actions that are relevant to your business.<br> 
                Marketing on COI helps you engage a community of professionals to drive actions that are relevant to your business. 
                </p>
                <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
            </div>
            </div>
          </section> 

        <!--jobs apply form-->
          <section class="row g-0" id="apply">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
            style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
            </div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
              <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

                <h2 class="display-5 text-center mb-2 ">
                Listen to your customers
                </h2>
                <p class="fs-sm  text-center pb-2">
                  customer sends  business request to your COI business account,track by calling, mailing and follow them.
                  <br>
                  Attract business customer, innovators and build brand awareness by posting business opportunities on a free COI Page.
                </p>
                <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
            </div>
            </div>
          </section> 

        <!--jobs apply form-->
          <section class="row g-0" id="apply">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
            style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
            </div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">
              <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

                <h2 class="display-5 text-center mb-2 ">
                Building on market trends
                </h2>
                <p class="fs-sm  text-center pb-2">
                login with our print and digital magazine, keep posting to become sensation trend into your business community and customers.<br>   
                Marketing on COI helps you engage a community of professionals to drive actions that are relevant to your business. 
                </p>
                <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
            </div>
            </div>
          </section> 

        <!--jobs apply form-->
        <section class="row g-0" id="apply">
          <div class="col-md-6 bg-position-center bg-size-cover bg-dark order-md-1"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
           <div class="mx-auto py-lg-5 my-5 text-white text-center" style="max-width: 35rem;">
              <p>BE SEEN</p>
              <h2 class="display-3 text-light mb-2 ">
            MACRO EXPO
              </h2>
              <p class="fw-light  mx-auto lead text-primary ">
                Retail | Dealership | Distribution
              </p>
              <p class="fw-lighter  mx-auto lead text-light ">
              + 23 Cities | + 5000 Investor | 2 Business Days</p>
              
              <a href="" class="btn btn-lg  btn-outline-primary fw-bolder my-2">Exhibit your Brand</a>
          </div>
          </div>
          <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
            <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

              <h2 class="display-5 text-center mb-2 ">
             Go into new places
              </h2>
              <p class="fs-sm  text-center pb-2">
              list businss places with us, where  you want to get high voltage business spark.<br>  
              Attract business professionals, innovators and build brand awareness by posting business opportunities on a free COI Page. 
              </p>
              <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
          </div>
          </div>
        </section> 

        <!-- Why join-->
         <section class="container py-3 py-lg-5 mt-5 my-3">
            <h2 class="h1 text-center mt-5">Promote your business with COI </h2>
                <p class="fs-lg lead text-center col-md-10 col-lg-8 mx-auto  ">At COI, we are constantly iterating, solving problems and working together to connect people all over the world. 
                    That’s why it’s important that our workforce reflects the diversity of the people we serve. 
              </p>
            <div class="row row-cols-1 row-cols-md-3  pt-5 g-4">

                <div class="col col-md-4 col-lg-4">
                  <div class="card h-100  border-0">
                    <div class="card-body text-center">
                      <h5 class="card-title"  style="color:#ff0440;">Brand Search Campaigns</h5>
                      <p class="card-text"> Show-up when people search for what  you offer</p>
                    </div>
                  </div>
                </div>

                <div class="col col-md-3 col-lg-4">
                  <div class="card h-100 border-0">
                    <div class="card-body text-center">
                      <h5 class="card-title"  style="color:#ff0440;">Brand Display Campaigns</h5>
                      <p class="card-text">Capture attention with brands ads and images</p>
                    </div>
                  </div>
                </div>

                <div class="col col-md-3 col-lg-4">
                  <div class="card h-100 border-0">
                    <div class="card-body text-center">
                      <h5 class="card-title"  style="color:#ff0440;">Brand Jourey Campagins</h5>
                      <p class="card-text mb-0"> Bring your business's story to life</p><!-- with your journey story-->
                      <p class="card-text"> Help people express themselves and connect</p>
                    </div>
                  </div>
                </div>
 
            </div>
         </section>

        <section class="row g-0" id="apply">
          <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
          </div>
          <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
            <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

              <h2 class="display-5 text-center mb-2 ">
              Business Magazine
              </h2>
              <p class="fs-sm  text-center pb-2">COI Business is free to use and was built with the small business owner in mind. It makes it easy to personally connect with your business ownerss, innovators and ready to business, 
                highlight your business products and services, connect with answering their questions throughout their experience. 
                Create a business portfolio to showcase your achievement and future aspects growth and 
                use as special tools to automate interested business leads, sort and quickly respond to their interest.


              </p>
              <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Learn more about</a>
          </div>
          </div>
        </section> 

        <section class="row g-0" id="apply">
          <div class="col-md-6 bg-position-center bg-size-cover bg-dark order-md-1"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?business,interview);">
           <!--<div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?business,interview);">-->
           <div class="mx-auto py-lg-5 my-5 text-white text-center" style="max-width: 35rem;">
              <p>BE SEEN</p>
              <h2 class="display-5 text-light mb-2 ">
             Business profile
              </h2>
              <p class="fw-light  mx-auto lead text-light pb-2">Create a business profile with helpful information for your business auidence like your Business Model, business description, email address, and website.
              </p>
              <a href="#opening" class="btn btn-lg  btn-outline-primary fw-bolder my-2">Learn more about</a>
          </div>
          </div>
          <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
            <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">
           <p>Connect MORE, WORK LESS</p>
              <h2 class="display-5 text-center mb-2 ">
              
              Quick Community Connect  

              </h2>
              <p class="fs-sm  text-center pb-2">Quick replies let you connect with descision makers, effective selling leads to turn easily cold calling into warm conversations.
              </p>
              <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Learn more about</a>
          </div>
          </div>
        </section> 

        <section class="container-fluid  py-3 py-lg-5 mt-5 my-3">
            <h2 class="h1 text-center mt-5">Manage your business success with us</h2>
            <p class="fs-lg lead text-center col-md-10 col-lg-8 mx-auto">
            Create, measure and optimize your business success. COI is the business advertising platform that streamlines all marketing efforts.    
            </p>
            <div class="row row-cols-1 row-cols-md-3  pt-5 g-4">

                <!--<div class="col col-md-3 ">
                  <div class="card h-100 border-0">    
                    <div class="card-body">
                      <h5 class="card-title">Give People a Voice</h5>
                      <p class="card-text">
                             People deserve to be heard and to have a voice — even when that means defending the right of people we disagree with.
                            <br>
                            we a voice of entrpreneur — to advertise business thoughts with the best presentible way to explore new bright light to way up.
                            <br>
                            COI is a entrpreneur voice, be bold and strong to represent  business with confidence to  connect  right peaple to exapnd more. 
                          </p>
                      </div>
                      </div>
                      </div>-->

                <div class="col col-md-3">
                    <div class="card h-100 border-0">
                      <div class="card-body">
                        <h5 class="card-title">Build Connection and Community</h5>
                        <p class="card-text">
                           Our services help people connect, and when they’re at their best, they bring Community closer together.
                          </p>
                      </div>
                    </div>
                 </div>

                <div class="col col-md-3">
                    <div class="card h-100 border-0">
                      <div class="card-body">
                        <h5 class="card-title">Serve Everyone</h5>
                        <p class="card-text">
                          We work to make technology accessible to everyone, and our business model is advertise business so our services can be free.</p>
                  </div>
                 </div>
                </div>

                <div class="col col-md-3">
                    <div class="card h-100 border-0">
                      
                      <div class="card-body">
                        <h5 class="card-title">Keep Innovative Idea's Safe and Protect Privacy</h5>
                        <p class="card-text">
                We have a responsibility to promote the best of what people can do together by keeping Innovation safe and preventing harm.</p>
                                </div>
                                </div>
                </div>

                <div class="col col-md-3">
                    <div class="card h-100 border-0">
                      
                      <div class="card-body">
                        <h5 class="card-title">Promote Economic Opportunity</h5>
                        <p class="card-text">

                        
                Our tools level the playing field so businesses grow, create jobs and strengthen the economy.
                        </p>
                                </div>
                                </div>
                </div>
            </div>
            </div>
        </section>

        <section class="row g-0 mb-2" >
          <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" 
          style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?office,career);"></div>
          <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
            <div class="mx-auto py-lg-5" style="max-width: 35rem;">
            <div class="text-center">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              </div>
              <h2 class="display-6 fw-normal">Share your company story and attract  your target auidence</h2>
            <p class="col-md-10 pb-2 col-lg-8 mx-auto ">
            Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation. </p>
            <a href="{{asset('/contact-us#contact')}}" class="btn btn-lg btn-outline-primary mb-3" >Connect with us.</a>
            </div>

              <!--<h2 class="h3 mb-2">International top talent, valued for their getting-things-done-mentality.</h2>
              <p class="fs-sm text-muted pb-2">Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation.</p>-->
              
            </div>
          </div>
        </section> 

        <div class="container-fluid px-0" id="listexpo">
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


        <section class="container py-lg-5 py-4">
        <h2 class="h3 mb-4 pb-2">Top Creators</h2>
        <!-- Creators (carousel)-->
        <div class=" col-4">
              
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>7.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/07.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@42Labs</a></h4><span class="fs-xs text-muted">730 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>8.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/08.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@ZeniconStudio</a></h4><span class="fs-xs text-muted">299 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>9.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/09.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@MihailGreen</a></h4><span class="fs-xs text-muted">100 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
            
            
        </div>
        <div class=" col-4">
              
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>7.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/07.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@42Labs</a></h4><span class="fs-xs text-muted">730 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>8.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/08.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@ZeniconStudio</a></h4><span class="fs-xs text-muted">299 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>9.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/09.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@MihailGreen</a></h4><span class="fs-xs text-muted">100 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
            
            
        </div>

        <div class=" col-4">
              
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>7.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/07.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@42Labs</a></h4><span class="fs-xs text-muted">730 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>8.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/08.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@ZeniconStudio</a></h4><span class="fs-xs text-muted">299 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
              <hr class="my-4">
              <!-- Creator-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative"><span>9.</span><img class="rounded-circle ms-2" src="img/nft/home/creators/09.png" width="48" alt="Avatar">
                  <div class="ms-2">
                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">@MihailGreen</a></h4><span class="fs-xs text-muted">100 followers</span>
                  </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
              </div>
            
            
        </div>
      </section>
 
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
        "container": '.my-Slider6',            
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

    
@endpush