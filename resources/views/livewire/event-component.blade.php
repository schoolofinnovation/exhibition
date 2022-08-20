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

       
      <!-- Product widgets-->
      <section class="container pb-2 pb-md-3">
      <h2 class="h3 mb-4 pb-2">Top Creators</h2>
        
          <div class="row my-Slider8">
            <!-- Bestsellers-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">Network</h3>
              
                @foreach ($network as $franchise)
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center position-relative">
                      
                      <img class="rounded-circle ms-2" src="{{url('storage/brands/'.$franchise->image)}}" width="48" alt="Avatar">
                      <div class="ms-2">
                        <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                        <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->businessteam->designation}} {{$franchise->organisation}}</a></h5>
                        <span class="fs-xs text-muted">730 followers</span>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                  </div>
                  <hr class="my-4">
                @endforeach
                <!--<p class="mb-0">...</p>-->
                <a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

            <!-- New arrivals-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">Speaker</h3>
                @foreach ($network as $franchise)
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center position-relative">
                      
                      <img class="rounded-circle ms-2" src="{{url('storage/brands/'.$franchise->image)}}" width="48" alt="Avatar">
                      <div class="ms-2">
                        <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                        <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->businessteam->designation}} {{$franchise->organisation}}</a></h5>
                        <span class="fs-xs text-muted">730 followers</span>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                  </div>
                  <hr class="my-4">
                @endforeach
                <!--<p class="mb-0">...</p>--><a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

            <!-- Top rated-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">Social</h3>
                @foreach ($network as $franchise)
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center position-relative">
                      
                      <img class="rounded-circle ms-2" src="{{url('storage/brands/'.$franchise->image)}}" width="48" alt="Avatar">
                      <div class="ms-2">
                        <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                        <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->businessteam->designation}} {{$franchise->organisation}}</a></h5>
                        <span class="fs-xs text-muted">730 followers</span>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                  </div>
                  <hr class="my-4">
                @endforeach
                <!--<p class="mb-0">...</p>--> <a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

          </div>
        </section>
<!--contact-->        
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