@section('page_title', ($event->eventname))
@section('page_description', ($event->description))
@section('page_keyword', '($event->eventname), The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')


<main>
    <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9" 
     style="background-image: url('{{('/image/test.jpg')}}');">
      
    <div class=" product-available   text-center bg-primary" style="right: 1.75rem; top: 7.25%; position: absolute;padding-top: 0.425rem; padding-left: 0.625rem; padding-right: 1rem;
      padding-bottom: 0.425rem;
      transform: translateY(-50%);
      border-radius: 0.3125rem;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      font-size: .8125rem;">
      <div class = "h1 pt-5 text-light pb-0 mb-0" style="font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;">COI</div>  
      <div class = "fw-bold text-dark pb-2 lh-1">Exhibition</div> 
    </div>
     
      <div class="container pt-4 mb-3 mb-lg-0 ">
          <div class="row gy-0 ">
          
            <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                    <img src="{{url('assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8  border border-white border-1 px-3 py-5 ">
              <div class="position-relative me-n4 mb-3 d-none d-sm-block">
              <div class="product-badge product-available  lh-1 fs-sm" style="right: 19.25rem;">
              <strong>Great <br>Place <br>To <br>Exhibit</strong></div>
              </div>
                <h5 class="text-light fw-normal pt-2 pb-0">
                    @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                    @else
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                    @endif 
                </h5>
                <h1 class="text-primary mb-3">{{$event->eventname}}</h1>
                <h5 class="text-light fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5>
                
                <span class="text-light fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                <div class="d-flex bg-transparent border-bottom"> 
                
                  @foreach($franchises as $franchise)
                      <img class="p-1" width="24%" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                  @endforeach
                </div>
                
                <h5 class="text-light fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                <ul class="list-unstyled text-light mb-0 mt-2">
                      <li class="d-flex">
                        @if( $ticketOrExhibit != 0 )
                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                        href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                        @else ( $ticketOrExhibit == 0 )
                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                        href="{{route('event.exhibit')}}">Exhibit</a>
                        @endif
                        <a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>
                      </li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-8  px-3 py-5 d-none d-sm-block">
                  <h5 class="text-light fw-normal fs-sm pt-2 pb-0">
                      Upcoming Expo
                  </h5>
                            
                <h2 class="text-primary mb-3 lh-1"> <span class="fw-light"> MAKING</span> <br>BIG GROWTH <br>
                <span class="fw-light">IN INDIA</span> <br>BUSINESS <br><span class="fw-light">A REALITY</span></h1>
                    <ul class="list-unstyled text-light mb-0 mt-0 border-top">
                          <li class="d-flex pt-1">
                            <a class="fs-xs  text-center border-end px-0" href="{{$link->google()}}"> <span class="fw-bold">100 +</span> <br>Thought Leadership</a>
                            <a class="fs-xs  text-center border-end px-2" href="{{$link->google()}}"><span class="fw-bold">> 800</span> <br>Business Matching Meetings</a>
                            <a class="fs-xs  text-center  px-0" href="{{$link->google()}}"><span class="fw-bold">300 +</span> <br>Business Ideas Opportunities</a>
                          </li>
                    </ul>
            </div>  
              
            <div class="col-lg-3 d-none d-sm-block">
            
            </div>
          </div>

          <div class="container d-none">
            <div class="row text-light mb-0 mt-0">
              <ul class="list-unstyled text-light mb-0 mt-5">
                    <li class="d-flex">
                      <a class="" href="{{$link->google()}}">4095+ <br>Exhibitors</a>
                      <a class="" href="{{$link->google()}}">5500+ <br>Brands on Display</a>
                      <a class="" href="{{$link->google()}}">4095+ <br>Exhibitors</a>
                    </li>
              </ul>
            </div>
          </div>

        </div>
    </section>

    <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');">
      <div class="container pt-4 mb-3 mb-lg-0">
        <div class="row gy-0">
        
         
          <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                    <img src="{{url('assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                </a>
          </div>
          <div class="col-lg-7 col-md-6 col-sm-8">
            <div class="col-lg-6 col-md-6 border border-white border-1 px-3 py-5">
                <h5 class="text-light fw-normal pt-2 pb-0">
                @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                    @else
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                    @endif 
                      
                </h5>
                
                <h1 class="text-primary mb-3">{{$event->eventname}}</h1>
                <h5 class="text-light fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5>

                <span class="text-light fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                <div class="d-flex bg-transparent border-bottom"> 
                
                  @foreach($franchises as $franchise)
                      <img class="p-1" width="24%" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                  @endforeach
                </div>
                
                <h5 class="text-light fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                
                

                <ul class="list-unstyled text-light mb-0 mt-2">
                      <li class="d-flex">
                      @if( $ticketOrExhibit != 0 )
                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                        href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                      @else( $ticketOrExhibit == 0 )
                      <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                        href="{{route('event.product',['slug' => $event->slug])}}">Exhibit</a>
                      @endif
                      <a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>
                      </li>
                </ul>


            </div>    
          </div>
        </div>
        <div class="container">
                    
        </div>
      </div>
    </section>

    <!-- slider at next header-->  
    <section class="container d-lg-none ">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link px-1 active" href="#details" data-bs-toggle="tab" role="tab">Exhibit</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#reviews" data-bs-toggle="tab" role="tab">Advertise</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Meet-up</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Start-up</a></li>
        </ul>
    </section>

      <div class="container d-lg-none">
              <!--<div class="col-lg-4 col-md-5 pt-2 pb-0">
                <div class="star-rating me-2"><i class="bi bi-star-filled text-accent me-1"></i>
                <span class="fs-md fw-bold">77% </span><span class="d-inline-block align-middle fs-sm"> 58K rating</span></div>        
              </div>-->
              <div class="col-lg-4 col-md-5 pt-2 pb-0">
                  <div class="star-rating me-2 pb-2"> <i class = "bi bi-star-filled text-accent me-1"></i>
                  <span class="fs-md fw-bold"> <i class="bi bi-star-fill text-primary me-1"></i> 7.1/10 </span><span class="d-inline-block align-middle fs-sm"> 34.7K votes</span> <i class="bi bi-chevron-right fs-xs text-primary me-1"></i> </div>        
                </div>

              <ul class="list-unstyled  bg-secondary py-2">
                      @php
                      $event->id = $avgrating;
                      @endphp

                @if( $rate == $avgrating)
                    <li class="d-flex justify-content-between px-2 m-0">
                    <span cass="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> {{$rating}} /10</a></span></li>
                    
                  @else
                    <li class="d-flex justify-content-between px-2 m-0 lh-1">
                    <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                    <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm bg-light"> Rate Now</a></span></li>
                @endif
              </ul>

              <span class="badge bg-secondary">{{ucwords(trans($event->shtdesc))}} </span>
              {{--<span class="badge bg-secondary"> {{ucwords(trans($event->sector->sector))}}</span>--}}
              <div class="fs-xs fw-normal">
                @if($event->exhibitors != null) + {{$event->exhibitors}} Exhibitors @endif . @if($event->exhibitors != null) + {{$event->auidence}} Visitors @endif
                {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}} days
              </div>
              <div class="fs-xs fw-normal pb-2 pt-2">
              {{Str::limit($event->desc,130)}}  
              </div> 
              <div>

              </div>

              
      </div>  

      <div class="container d-none d-sm-block">
        <ul class="list-unstyled fs-sm  py-4">     
          <li class="d-flex justify-content-between p-0 m-0">
          
              <span> <span class="badge bg-primary">{{$event->edition}}th</span>
                <span class="h3"> {{$event->eventname}}</span> <br>
                @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                  {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                @else
                  {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M, Y')}}
                @endif 
                
                <i class="bi bi-geo-alt-fill"></i> {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} 
              </span>
              

              <span>
              @if( $ticketOrExhibit != 0 )
                <a class="btn btn-primary btn-sm" type="button" href="{{route('event.product',['slug' => $event->slug])}}"> Book your Tickets </a>
                @elseif( $ticketOrExhibit == 0 )
                <a class="btn btn-primary btn-sm" type="button" href="{{route('event.exhibit')}}"> Book your space </a>
              @endif
          
          </span>
            
              
          </li>
          <li><hr class="mt-md-2 mb-2"></li>
          <li class="p1 fw-light">
            {{ucwords(trans($event->expo->tag))}} | @if($event->exhibitors != null)| + {{$event->exhibitors}} Exhibitors @endif | {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}} days @if($productPrice != null)| Rs. {{$productPrice}} Onwards @endif
          </li>
        </ul>
      </div> 

      <div class="container d-lg-none">
           <div class="text-dark fw-medium fs-sm">Applicable Offers</div> 
           
        <div class=" my-sliderOffers">
            <ul class="list-unstyled fs-sm  p-2">
                <li class="d-flex justify-content-between p-0 m-0">
                <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
            </ul>

            <ul class="list-unstyled fs-sm  p-2">
                <li class="d-flex justify-content-between p-0 m-0">
                <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
            </ul>
          
            <ul class="list-unstyled fs-sm  p-2">
              <li class="d-flex justify-content-between p-0 m-0">
              <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
              <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
            </ul>
        </div>

      </div>

      <hr class="mt-md-2 mb-2">

      <!-- for big screens Product description + Reviews + Comments-->  
      <section class="container py-4 py-md-5 my-2 d-none d-sm-block">
        <div class="row text-center text-sm-start">
          <div class="col-lg-3 col-md-4 col-sm-4 bg-secondary">
             <span class="badge bg-primary mt-3">Participate</span>
              <h5 class="mb-3">Nominate</h5>
              <div class="row">
                <div>
                  <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                    <li>Bespoke B2B forums that connect you with the people you really want to meet. </li>
                    <li>Our business partnered space events include participation in live Q&A and polls, plus access to the community where you can network with other attendees.</li>
                    <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'award' ])}}" class="btn btn-outline-primary btn-sm bg-light">Nominate a Speaker</a></li>
                  </ul>
                </div>
                  <div>
                    <h5 class="mb-3">Business Directory</h5>
                    <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                      <li>List business directory to educate with your business potential</li>
                      <li> <a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'directory' ])}}" class="btn btn-sm btn-primary">Expand your business</a> </li>
                    </ul>
                  </div>
              </div>
              <h5 class="mb-3">Attend a Space event</h5>
              
              <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                <li>Attend a Space event near you featuring live speakers and Talk business owners, sparking conversation and connections.</li>
                <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'find' ])}}" class="btn btn-outline-primary btn-sm bg-light">Find an event near you</a></li>
                
              </ul>
              <h5 class="mb-3">Share this event</h5>
              <!-- Wishlist + Sharing-->
                <div class="  d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
                  
                  <!--<div class="py-0"><i class="ci-share-alt fs-lg align-middle text-muted me-2"></i>
                    <a class="btn-social bs-outline bs-facebook bs-sm ms-2" href="#"><i class="ci-facebook"></i></a>
                    <a class="btn-social bs-outline bs-twitter bs-sm ms-2" href="#"><i class="ci-twitter"></i></a>
                    <a class="btn-social bs-outline bs-pinterest bs-sm ms-2" href="#"><i class="ci-pinterest"></i></a>
                    <a class="btn-social bs-outline bs-instagram bs-sm ms-2" href="#"><i class="ci-instagram"></i></a>
                  </div>-->

                  <div class="mb-1">
                      <a class="btn-social bs-dark bs-twitter ms-2 mb-2" target="_blank" href="https://twitter.com/coi_Innovation"><i class="bi bi-twitter"></i></a>
                      <a class="btn-social bs-dark bs-facebook ms-2 mb-2" target="_blank" href="www.facebook.com"><i class="bi bi-facebook"></i></a>
                      <a class="btn-social bs-dark bs-instagram ms-2 mb-2" target="_blank" href="https://in.pinterest.com/CouncilofInnovation/_saved/"><i class="bi bi-instagram"></i></a>
                      <a class="btn-social bs-dark bs-youtube ms-2 mb-2" target="_blank" href="https://www.youtube.com/channel/UCFq3khqbTIecQxeqj1GscFA"><i class=" bi bi-youtube"></i></a>
                      <a class="btn-social bs-dark bs-linkedin ms-2 mb-2" target="_blank" href=""><i class=" bi bi-linkedin"></i></a>
                  </div>
                </div>

                <h5 class="mb-3">Programme for People and Planet</h5>
                <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                  <li>Inspiring collective and meaningful action to address the world's most critical Challenges and opportunities.</li>
                <li>
                  <div class="card ">
                  <div class="expo_Initiat">
                      <div class="card-body ">
                        <h5 class="card-title">Sustainability District</h5>
                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Mobility District</h5>
                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Opportunity District</h5>
                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                      </div>                  
                  </div>
                </div>
              </li>
                </ul>
              
          </div>

          <div class="col-lg-6 col-md-6 col-sm-8">
           
              
              <ul class="list-unstyled fs-sm bg-secondary p-2">
             <div class="fw-bold"> Click on interested to stay updated about this event.</div>
                <li class="d-flex justify-content-between p-0 m-0">
                <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                

               
                @if( $rate == $event->id)
                
                <button class="btn btn-sm btn-outline-primary" type="button" > 
                {{$rating}} /10</button>

                @else
                    <div class="py-2 me-2"> 
                      <button class="btn btn-sm btn-outline-primary" type="button" ><i class="bi bi-star fs-lg me-2"></i> 
                      <a href="{{route('coi.ratenow',['slug' => $event->slug])}}">Rate Now</a> </button>
                    </div>
                @endif
                 
                </li>
                </ul>
           
            <h5 class="mb-3">Understanding Expo</h5>
            <p class="fs-sm mb-3 mb-lg-4 pb-2">{{$event->desc}}</p>
            <span class="badge rounded-pill bg-primary">Participants</span>
            <h5 class="mb-3">Pavillion</h5>

            <!-- Card group -->
              

                  <!-- Card -->
                  <div class="row">
                  @foreach($pavillion as $pav)
                    <div class="col-4 card border-0 px-2">
                      <img src="{{url('assets/image/exhibition/'.$pav->image)}}" class="card-img-top" alt="Card image">
                     
                      <div class="card-image-overlay" >
                        <h5 class="card-title text-light">{{$pav -> pavillion_name}}</h5>
                        <p class="card-text fs-sm text-muted text-light">{{ $pav -> desc}}</p>
                       
                        <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary text-light">Learn more</a>
                      </div>
                    </div>
                  @endforeach
                  </div>
                  <div class="row">
                  <!-- Card -->
                  <div class=" col-4 card border-0 px-0 hover-overlay shadow-1-strong">
                    <img src="image/banner-sm01.png" class="card-img-top" alt="Card image">
                    <div class="mask text-light">
                      <h5 class="card-title">Special Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="col-4 card border-0 px-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Country Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="col-4 card border-0 px-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Partner Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>
              
                

                  <!-- Card -->
                  <div class="col-4 card border-0 px-0">
                    <img src="image/banner-sm01.png" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Organisations Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="col-4 card border-0 px-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Country Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="col-4 card border-0 px-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Partner Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a>
                    </div>
                  </div>
              </div>


          </div>

          <div class="col-lg-3 col-md-4 col-sm-4  bg-secondary">
            <h5 class="m-3 fs-sm fw-light">Contactless Ticketing & Fast-track Entry with M-ticket. <span class="fw-bold text-primary">Learn How</span></h5>
            <div class="row">
              <div>
              <h5 class="mb-3">Start-ups</h5>
                
                <ul class="list-unstyled fs-sm bg-secondary p-2">
                    <li class="d-flex justify-content-between p-0 m-0">
                    <span class="text-dark fw-medium fs-sm">  Book direct with us. <br><span class="text-muted fw-light fs-xs" style ="line-height: 1;">and avail a special discount<br> of 25% along with special benefits. </span></span>
                    <span><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'startup' ])}}" class="btn btn-outline-primary btn-sm bg-light"> BOOK NOW</a></span></li>
              </ul>
              </div>
              <!--<div>
                <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                  <li>Height: 7.8 in / 19.8 cm</li>
                  <li>Weight: 7.58 oz / 215 g</li>
                  <li>Form factor: On ear</li>
                </ul>
              </div>-->
            </div>
            <h5 class="mb-3">Meet-ups</h5>
            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
              <li class="m-3 fs-sm fw-light">Conducts exhibitions, one-to-one meetings and discussions, experiences delivering maximum engagement.</li>
              <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'meet' ])}}" class="btn btn-outline-primary btn-sm bg-light">BOOK NOW</a></li>
            </ul>
            <h5 class="mb-3">Partner with Space</h5>
            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
              <li class="m-3 fs-sm fw-light">When you support the Space program, you enable our efforts to empower and grow the global Space community of volunteers.</li>
              <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'partner' ])}}" class="btn btn-outline-primary btn-sm bg-light">Partner with Space</a></li>
            </ul>

            <h5 class="mb-3">Expo Initiatives</h5>
            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
              <li class="my-3 fs-sm fw-light">Togethor with people from across the world, we are creating meaningful impact through a range of Expo programmes and initiatives. </li>
              <li><!-- No image -->
                <div class="card ">
                  <div class="expo_Initiatives">
                        <div class="card-body ">
                          <h5 class="card-title">Expo live</h5>
                          <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                        </div>

                        <div class="card-body">
                          <h5 class="card-title">Global Best Practice Programme</h5>
                          <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                        </div>

                        <div class="card-body">
                          <h5 class="card-title">Sustainability at Expo</h5>
                          <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                        </div>

                        <div class="card-body">
                          <h5 class="card-title">World Majlis</h5>
                          <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                        </div>
                  </div>
                </div>
              </li>
              
            </ul>

       


          </div>
        </div>
      </section>

                <div class=" container col-lg-8">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fs-md mb-0">Top reviews</h6>
                        <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> 203K
                        reviews<i class="bi bi-chevron-right me-2"></i></a>
                  </div>
  
                   <div class="fs-xs fw-normal">Summary of 203K reviews.</div> 
                   
                   

                   <div class="d-flex badgese pb-2">
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">Today  <span class="bg-"> 2935</span> </span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                  </div>
                  <!-- comment-->
                  <div class=" border-1 d-flex align-items-start py-2 mt-2 border-bottom">
                    <img class="rounded-circle" src="#" width="50" alt="">
  
                    <div class="ps-3">
                      <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">User</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                          <i class="bi bi-star me-2"></i>10/10</a>
                      </div>
                      <h4 class="fs-md mb-3">Lorem ipsum dolor sit amet</h4>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">
                        9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>
                        12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i>
                          </span>
  
                        <span class="fs-ms text-muted">Sep 7, 2019 <i class=" bi bi-share align-middle me-2"></i>
                          </span>
                      </div>
                      
                      <!-- comment  insdie comment reply-->
                      {{--<div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="#" width="50" alt="Sara Palson">
                        <div class="ps-3">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fs-md mb-0">Sara Palson</h6>
                          </div>
                          <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                        </div>
                      </div>--}}
  
                    </div>
                  </div>

                  <!-- Post comment form
                  <div class="card border-0 px-0 shadow my-2">
                    <div class="card-body">
                      <div class="d-flex align-items-start"><img class="rounded-circle border p-2" src="#" width="50" alt="Createx Studio">
                        <form class="needs-validation w-100 ms-3" novalidate="">
                          <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Write comment..." required=""></textarea>
                            <div class="invalid-feedback">Please write your comment.</div>
                          </div>
                          <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                        </form>
                      </div>
                    </div>
                  </div>-->
                </div>
      <!-- Product description + Reviews + Comments-->
      <section class="container mb-4 mb-lg-5">
        <div class="tab-content pt-2">

          <!-- Product details tab-->
          <div class="tab-pane fade show active" id="details" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
              
                <p class="fs-md"> {{Str::limit($event->eventname,289)}}...</p>
                <p class="fs-md"> {{Str::limit($event->desc,289)}}...</p>

                <h3 class="h5 pt-2">Main features</h3>
                <ul class="fs-md">
                  <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                  <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos</li>
                  <li>Omnis voluptas assumenda est omnis dolor</li>
                  <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                </ul>
              </div>
            </div>

      

          </div>

          <!-- Reviews tab-->
          <div class="tab-pane fade" id="reviews" role="tabpanel">
            <!-- Reviews-->
            <div class="row pt-2 pb-3">
              <div class="col-lg-4 col-md-5">

                <h3 class="h4 mb-4">74 Reviews</h3>
                <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
              </div>
             {{-- <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">43</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">16</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">9</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">4</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">2</span>
                    </div>
              </div>--}}
            </div>
            <hr class="mt-4 mb-3">
            <div class="row py-4">
              <!-- Reviews list-->
              <div class="col-md-7">
                <div class="d-flex justify-content-end pb-4">
                  <div class="d-flex align-items-center flex-nowrap">
                    <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                    <select class="form-select form-select-sm" id="sort-reviews">
                      <option>Newest</option>
                      <option>Oldest</option>
                      <option>Popular</option>
                      <option>High rating</option>
                      <option>Low rating</option>
                    </select>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Rafael Marquez">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                      <div class="fs-ms text-muted">83% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">15</button>
                    <button class="btn-dislike" type="button">3</button>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Barbara Palson">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Barbara Palson</h6><span class="fs-ms text-muted">May 17, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                      <div class="fs-ms text-muted">99% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">34</button>
                    <button class="btn-dislike" type="button">1</button>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Daniel Adams">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Daniel Adams</h6><span class="fs-ms text-muted">May 8, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                      <div class="fs-ms text-muted">75% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">26</button>
                    <button class="btn-dislike" type="button">9</button>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Load more reviews</button>
                </div>
              </div>
              <!-- Leave review form-->
              
            </div>
          </div>

          <!-- Comments tab-->
            <div class="tab-pane show" id="comments" role="tabpanel">
              <div class="row">
                <div class="col-lg-8">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fs-md mb-0">Top reviews</h6>
                        <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> 203K
                        reviews<i class="bi bi-chevron-right me-2"></i></a>
                  </div>
  
                   <div class="fs-xs fw-normal">Summary of 203K reviews.</div> 
                   <div class="d-flex  badgses">
                   
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2911</span></div>
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2912</span></div>
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2913</span></div>
                  
                   </div>

                <div class="d-flex abced gx-2">
                 
                  <div class=" border-1 d-flex align-items-end py-2 mx-2 border-bottom rounded shadow-sm">
                    <img class="rounded-circle" src="#" width="50" alt="">
  
                    <div class="ps-0">
                      <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">User</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                          <i class="bi bi-star me-2"></i>10/10</a>
                      </div>

                      <h4 class="fs-md mb-3">Lorem ipsum dolor sit amet</h4>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i></span>
                        <span class="fs-ms text-muted">Sep 7, 2019 <i class=" bi bi-share align-middle me-2"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class=" border-1 d-flex align-items-end py-2 mx-2 border-bottom rounded shadow-sm">
                    <img class="rounded-circle" src="#" width="50" alt="">
  
                    <div class="ps-0">
                      <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">User</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                          <i class="bi bi-star me-2"></i>10/10</a>
                      </div>

                      <h4 class="fs-md mb-3">Lorem ipsum dolor sit amet</h4>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i></span>
                        <span class="fs-ms text-muted">Sep 7, 2019 <i class=" bi bi-share align-middle me-2"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class=" border-1 d-flex align-items-end py-2 mx-2 border-bottom rounded shadow-sm">
                    <img class="rounded-circle" src="#" width="50" alt="">
  
                    <div class="ps-0">
                      <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">User</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                          <i class="bi bi-star me-2"></i>10/10</a>
                      </div>

                      <h4 class="fs-md mb-3">Lorem ipsum dolor sit amet</h4>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i></span>
                        <span class="fs-ms text-muted">Sep 7, 2019 <i class=" bi bi-share align-middle me-2"></i></span>
                      </div>
                    </div>
                  </div>

                </div>

                </div>
              </div>
            </div>
          </div>
      </section>

      <hr class="mt-md-2 mb-2">
      <!--exhibitor-->
      <section class="container pt-2 pt-md-5">
        <h6 class="text-left mb-2"> Participants</h6>
        <div class="my-sliderexpo d-none d-sm-block">
              @foreach ($franchises as $franchise)
                  <div class="col-sm-3 mb-grid-gutter">
                    <div class="card product-card-alt">
                            
                          <div class="product-thumb p-3">
                            
                            
                              <div class="product-card-actions p-2">
                               
                                <div class="fs-sm text-light" href="">Booth 3</div>
                                <div class="fs-sm text-light" href="">Elite Sponsor</div>
                                <div class="fs-sm text-light" href="">View Website</div>
                              </div>

                              <a class="product-thumb-overlay" href=""></a>

                              <img class="p-3" width="auto" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                          </div>  
                    </div>
                  </div>
              @endforeach
        </div>
        <div class="my-sliderexpo d-lg-none">
            <a class="d-flex align-items-center" href="#">
              <img class="rounded-circle" width="90%" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
            </a>
        </div>
      </section>

      @if($speaker->count() > 0 )
        <hr class="mt-md-2 mb-2">
        <!-- Speaker-->
        <section class="container pt-2 pt-md-5">
          <h6 class="text-left mb-2"> Speaker</h6>
          <div class="my-sliderSpeaker">
                @foreach ($speaker as $speaker)
                  
                    <div class="card product-card">
                      <a class=" align-items-center" href="#">
                        <img class="" width="90%" src="{{url('speaker/'.$speaker->image)}}"  alt="{{Str::limit($speaker->name, 24)}}">
                      </a>
                      <div class="fs-sm text-center lh-1"> <small>{{$speaker->name}} <br><strong>{{$speaker->organisation}}</strong></small></div>
                    </div>
                
                @endforeach
          </div>
        </section>
      @endif

      <hr class="mt-md-2 mb-2">
          <!-- Partner-->
          <section class="container py-2 pt-md-5">
            <h6 class="text-left mb-2">Partner</h6>
            <div class="my-sliderPartner">
                  @foreach ($franchises as $franchise)
                  
                    <div class="card product-card-alt">
                      <div class="product-thumb p-3">
                        <div class="product-card-actions p-2">
                          <div class="fs-sm text-light" href="">Booth 3</div>
                          <div class="fs-sm text-light" href="">Elite Sponsor</div>
                          <div class="fs-sm text-light" href="">View Website</div>
                        </div>   
                        <a class="product-thumb-overlay" href=""> </a>
                        <img class="p-3" width="auto" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                      
                      </div>
                    </div>
                  @endforeach
            </div>
          </section>

          <!-- Card group sec_last-->
            <section class="container py-5">

              <!-- Card group -->
              <div class="card-group sec_last">

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">World Expos' History</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Expo 2023 Story</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">After Expo</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
            </section>

            <section class="card text-center py-5 border-0">
              <div class="card-body">
                <h5 class="card-title h2">Buy  your Expo 2022 Tickets Now </h5>
                <p class="card-text fs-sm text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-sm btn-primary">Buy access pass</a>
              </div>
            </section>
            
          <!-- Card group last-->
            <section class="container py-5">
                
                <div class="card-group last" >

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">World Expos' History</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Expo 2023 Story</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">After Expo</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
            </section>

            <div class="handheld-toolbar bg-secondary">
              
              <div class="d-flex justify-content-between py-2 px-2">
               <div class="text-dark fw-medium fs-sm pl-3 lh-3">  Rs.{{$productPrice}}<br><span class=" fw-light fs-xs">Onwards</span></div>
               @if( $ticketOrExhibit != 0 )
                  <a href="{{route('event.product',['slug' => $event->slug])}}" class="btn btn-primary btn-sm">Book your Ticket</a>
                @elseif( $ticketOrExhibit == 0 )
                  <a href="{{route('event.exhibit')}}" class="btn btn-primary btn-sm">Book your Space</a>
               @endif
              
              </div>
              
            </div>

    </main>


        @push('scripts')
          <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "Event",
              "name": "{{$event->eventname}}",
              "startDate": "{{Carbon\Carbon::parse ($event->startdate)->format('Y-m-d')}}",
              "endDate": "{{Carbon\Carbon::parse ($event->enddate)->format('Y-m-d')}}",
              "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
              "eventStatus": "https://schema.org/EventScheduled",
              "location": {
                "@type": "Place",
                "name": "{{$event->venue}}",
                "address": {
                  "@type": "PostalAddress",
                {{--"streetAddress": "100 West Snickerpark Dr",
                  "addressLocality": "Snickertown",
                  "postalCode": "19019",--}}
                  "addressRegion": "{{$event->city}}",
                  "addressCountry": "IN"
                }
              },
              "image": [
                "{{url('assets/image/exhibition/'.$event->image)}}"
              ],
              "description": "{{$event->desc}}",
              {{--"offers": {
                "@type": "Offer",
                "url": "https://www.example.com/event_offer/12345_201803180430",
                "price": "30",
                "priceCurrency": "USD",
                "availability": "https://schema.org/InStock",
                "validFrom": "2024-05-21T12:00"
              },
              "performer": {
                "@type": "PerformingGroup",
                "name": "Kira and Morrison"
              },--}}
              "organizer": {
                "@type": "Organization",
                "name": "The Exhibition Network",
                "url": "https://exhibition.org.in"
              }
            }
          </script>

          <script>
            var slider = tns({
              "container": '.my-sliderexpo',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>
<!--speaker-->
          <script>
            var slider = tns({
              "container": '.my-sliderSpeaker',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>

<!--partner-->
          <script>
            var slider = tns({
              "container": '.my-sliderPartner',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-sliderOffers',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                 
                },
                "500": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": true,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                }
              },
              
              
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 4
                }
              },
              
              "nav": false,
              "mouseDrag": true,
              "controls": false,
              "swipeAngle": false,
              "speed": 400,
              "autoplay": true,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-slider1',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": false,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              
              "nav":false,
              "mouseDrag":true,
              "controls": falses,
              "swipeAngle": false,
              "speed": 400,
              "autoplay":true,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-slider2',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              "autoplay":true,
              "nav":false,
              "mouseDrag":true,
              "controls": true,
              "swipeAngle": false,
              "speed": 400
            });
          </script>

<!--test 1-->
      <script>
        var slider = tns({
          "container": '.expo_Initiatives', 
          "responsive": {
            "350": {
              "items": 1,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "autoplayButtonOutput":false,
              "autoplayHoverPause": true,
              "nav": false,
            },
            "500": {
              "items": 1,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "autoplayButtonOutput":false,
              "autoplayHoverPause": true,
              "nav": false,
            }
          },
          
        });
      </script>

      <script>
        var slider = tns({
          "container": '.expo_Initiat',  
          "responsive": {
            "350": {
              "items": 1,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "autoplayButtonOutput":false,
              "autoplayHoverPause": true,
              "nav": false,
            },
            "500": {
              "items": 1,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "autoplayButtonOutput":false,
              "autoplayHoverPause": true,
              "nav": false,
            }
          },
        });
      </script>
<!_-test2-->

      <script>
        var slider = tns({
          "container": '.last',  
          "responsive": {
            "300": {
              "items": 1,
              "controls": false,
              "nav": false,
              "autoplay":false,
              "mouseDrag":true,
              "controls": false,
            },
            "500": {
              "items": 3,
              "nav": false,
            }
          },
          
        });
      </script>

      <script>
        var slider = tns({
          "container": '.sec_last',  
          "responsive": {
            "300": {
              "items": 1,
              "controls": false,
              "nav": false,
              "autoplay":false,
              "mouseDrag":true,
              "controls": false,
            },
            "500": {
              "items": 3,
              "nav": false,
            }},
        });
      </script>

      <script>
        var slider = tns({
          "container": '.topp',  
          "responsive": {
            "300": {
              "items": 1,
              "controls": false,
              "nav": false,
              "autoplay":false,
              "mouseDrag":true,
              "controls": false,
            },
            "500": {
              "items": 4,
              "nav": false,
            }},
        });
      </script>

      <script>
        var slider = tns({
          "container": '.badgese',   
          
          "responsive": {
            "300": {
              "items": 2,
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

      <script>
        var slider = tns({
          "container": '.badgses',   
          
          "responsive": {
            "300": {
              "items": 2,
              "controls": false,
              "fixedWidth": 150,
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

<script>
        var slider = tns({
          "container": '.abced',   
          
          "responsive": {
            "300": {
              "items": 1,
              "controls": false,
              "fixedWidth": 250,
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
    
        @endpush
</main>