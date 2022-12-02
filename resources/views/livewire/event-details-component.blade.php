<main>
@section('page_title', ($event->eventname) )

@section('content_description','Find your Industry Exhibition ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

@section('page_eventname', ($event->eventname))
@section('page_startdate', ($event->startdate))
@section('page_enddate', ($event->enddate))
@section('page_description', ($event->eventname))
@section('page_venue', ($event->venue))
@section('page_description', ($event->eventname))
@section('page_description', ($event->eventname))
@section('page_eventCode', ($event->eventname))
@section('page_eventRegion', ($event->city))
@section('page_eventCountry', ($event->country))
@section('page_description', ($event->eventname))




      <section class="bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');">
        <div class="container pt-4 mb-3 mb-lg-0">
          <div class="row gy-0">
          
            <div class="col-lg-3 col-md-6 col-sm-8 px-0 d-none d-sm-block">
                <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                    <img src="{{url('magazine/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
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
                  <h5 class="text-light fw-normal">{{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}} </h5>
                  <ul class="list-unstyled text-light mb-0 mt-5">
                    <li class="d-flex"><i class="ci-bluetooth-circle h5 fw-normal text-light me-2"></i>
                      <span class="badge badge-primary">{{ucwords(trans($event->sector->sector))}}</span>
                    </li>
                    <li class="d-flex"><i class="ci-sound-waves h5 fw-normal text-light me-2"></i>
                      <div class="ps-1"></div>
                    </li>
                    <li class="d-flex">
                      <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                       href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                      
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

      <section class="container d-lg-none ">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link px-1 active" href="#details" data-bs-toggle="tab" role="tab">Exhibit</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#reviews" data-bs-toggle="tab" role="tab">Advertise</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Meet-up</a></li>
            <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Start-up</a></li>
        </ul>
      </Section>

      <div class="container d-lg-none">
              <div class="col-lg-4 col-md-5 pt-2 pb-2">
                <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i>
                <span class="h5">77% </span><span class="d-inline-block align-middle fs-sm"> 58K rating</span></div>        
              </div>

              <ul class="list-unstyled fs-sm bg-secondary p-2">
                    <li class="d-flex justify-content-between p-0 m-0">
                    <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Rate now</a></span></li>
              </ul>
      </div>  

      <div class="container d-none d-sm-block">
              <ul class="list-unstyled fs-sm  py-4">
                    
                    <li class="d-flex justify-content-between p-0 m-0">
                    
                        <span>
                          <span class="h3">{{$event->edition}}th {{$event->eventname}}</span> <br>
                          @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                            {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                          @else
                            {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M, Y')}}
                          @endif 
                          
                          <i class="bi bi-geo-alt-fill"></i> {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} 

                        </span>
                        
                        <span><a class="btn btn-primary btn-sm" type="button" 
                      href="#" wire:click.prevent="store({{$event->id}},'{{$event->eventname}}',{{$event->max_pass}})"> Book your Tickets </a></span>
                        
                    </li>
                    <li><hr class="mt-md-2 mb-2"></li>
                    <li class="p1 fw-light">
                      {{ucwords(trans($event->category->industry))}} | {{ucwords(trans($event->sector->sector))}} | + {{$event->exhibitors}} Exhibitors | {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}} days | Rs. 599 Onwards
                    </li>

              </ul>
      </div> 

      <div class="container d-lg-none">
           <div class="text-dark fw-medium fs-sm">Applicable Offers</div> 
           
        <div class=" my-sliderOffers">
            <ul class="list-unstyled fs-sm  p-2">
                <li class="d-flex justify-content-between p-0 m-0">
                <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Rate now</a></span></li>
            </ul>

            <ul class="list-unstyled fs-sm  p-2">
                <li class="d-flex justify-content-between p-0 m-0">
                <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Rate now</a></span></li>
            </ul>
          
            <ul class="list-unstyled fs-sm  p-2">
              <li class="d-flex justify-content-between p-0 m-0">
              <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
              <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Rate now</a></span></li>
            </ul>
        </div>
      </div>

      <hr class="mt-md-2 mb-2">
        
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
                    <li><a href="" class="btn btn-outline-primary btn-sm bg-light">Nominate a Speaker</a></li>
                  </ul>
                </div>
                <div>
                <h5 class="mb-3">Business Directory</h5>
                  <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                    
                    <li>List business directory to educate with your business potential</li>
                    <li> <a href="" class="btn btn-sm btn-primary">Expand your business</a> </li>
                  </ul>
                </div>
              </div>
              <h5 class="mb-3">Attend a Space event</h5>
              
              <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                <li>Attend a Space event near you featuring live speakers and Talk business owners, sparking conversation and connections.</li>
                <li><a href="" class="btn btn-outline-primary btn-sm bg-light">Find an event near you</a></li>
                
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
                      <div class="py-2 me-2">
                    <button class="btn btn-sm btn-outline-primary" type="button"><i class="ci-heart fs-lg me-2"></i>Add to Favorites</button>
                  </div></li>
                </ul>
           
            <h5 class="mb-3">Understanding Expo</h5>
            <p class="fs-sm mb-3 mb-lg-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit animasurel. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <span class="badge rounded-pill bg-primary">Participants</span>
            <h5 class="mb-3">Pavillion</h5>

            <!-- Card group -->
              <div class="card-group">

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Special Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Country Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Partner Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="text-primary">Learn more</a>
                    </div>
                  </div>
              </div>

              <!-- Card group -->
              <div class="card-group">

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Organisations Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Country Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="text-primary">Learn more</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card border-0">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Partner Pavillions</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="text-primary">Learn more</a>
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
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> BOOK NOW</a></span></li>
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
              <li><a href="" class="btn btn-outline-primary btn-sm bg-light">BOOK NOW</a></li>
            </ul>
            <h5 class="mb-3">Partner with Space</h5>
            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
              <li class="m-3 fs-sm fw-light">When you support the Space program, you enable our efforts to empower and grow the global Space community of volunteers.</li>
              <li><a href="" class="btn btn-outline-primary btn-sm bg-light">Partner with Space</a></li>
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

      <!-- Product description + Reviews + Comments-->
      <section class="container mb-4 mb-lg-5 hidden">
        <!-- Nav tabs-->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link px-1 active" href="#details" data-bs-toggle="tab" role="tab">Exhibit</a></li>
          <li class="nav-item"><a class="nav-link px-1" href="#reviews" data-bs-toggle="tab" role="tab">Advertise</a></li>
          <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Meet-up</a></li>
          <li class="nav-item"><a class="nav-link px-1" href="#comments" data-bs-toggle="tab" role="tab">Start-up</a></li>
        </ul>
        <div class="tab-content pt-2">
          <!-- Product details tab-->
          <div class="tab-pane fade show active" id="details" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
              <div class="col-lg-8 col-md-7">
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
              </div>
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
              <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                  <h3 class="h4 pb-2">Write a review</h3>
                  <form class="needs-validation" method="post" novalidate="">
                    <div class="mb-3">
                      <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" required="" id="review-name">
                      <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                      <input class="form-control" type="email" required="" id="review-email">
                      <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                      <select class="form-select" required="" id="review-rating">
                        <option value="">Choose rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                      </select>
                      <div class="invalid-feedback">Please choose rating!</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                      <textarea class="form-control" rows="6" required="" id="review-text"></textarea>
                      <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-pros">Pros</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                    </div>
                    <div class="mb-3 mb-4">
                      <label class="form-label" for="review-cons">Cons</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Comments tab-->
          <div class="tab-pane fade" id="comments" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
                <!-- comment-->
                <div class="d-flex align-items-start py-4 border-bottom"><img class="rounded-circle" src="#" width="50" alt="Laura Willson">
                  <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="fs-md mb-0">Laura Willson</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
                    </div>
                    <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 7, 2019</span>
                    <!-- comment reply-->
                    <div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="#" width="50" alt="Sara Palson">
                      <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <h6 class="fs-md mb-0">Sara Palson</h6>
                        </div>
                        <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- comment-->
                <div class="d-flex align-items-start py-4"><img class="rounded-circle" src="#" width="50" alt="Benjamin Miller">
                  <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="fs-md mb-0">Benjamin Miller</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
                    </div>
                    <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Aug 15, 2019</span>
                  </div>
                </div>
                <!-- Post comment form-->
                <div class="card border-0 shadow my-2">
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
        <div class="my-sliderexpo">
              @foreach ($franchises as $franchise)
                
                  <div class="card product-card">
                    <a class="d-flex align-items-center" href="#">
                      <img class="rounded-circle" width="50%" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                    </a>
                  </div>
               
              @endforeach
        </div>
      </section>

      <hr class="mt-md-2 mb-2">
      <!-- Speaker-->
      <section class="container pt-2 pt-md-5">
        <h6 class="text-left mb-2"> Speaker</h6>
        <div class="my-sliderSpeaker">
              @foreach ($speaker as $speaker)
                
                  <div class="card product-card">
                    <a class="d-flex align-items-center" href="#">
                      <img class="rounded-circle ms-2" width="17%" src="{{url('speaker/'.$speaker->image)}}"  alt="{{Str::limit($speaker->name, 24)}}">
                    </a>
                  </div>
               
              @endforeach
        </div>
      </section>

      <hr class="mt-md-2 mb-2">
      <!-- Partner-->
      <section class="container py-2 pt-md-5">
        <h6 class="text-left mb-2">Partner</h6>
        <div class="my-sliderPartner">
              @foreach ($franchises as $franchise)
                
                  <div class="card product-card">
                    <a class="d-flex align-items-center" href="#">
                      <img class="rounded-circle" width="50%" src="{{url('brands/'.$franchise->image)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                    </a>
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
               <div class="text-dark fw-medium fs-sm pl-3 lh-3">  Rs. {{$productPrice}}<br><span class=" fw-light fs-xs">Onwards</span></div>
                <a href="{{route('event.product',['slug' => $event->slug])}}" class="btn btn-primary btn-sm">Book your Ticket
                </a>
              </div>
              
            </div>

     
    </main>


        @push('scripts')
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
                  "autoplay": true,
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
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              
              "nav": false,
              "mouseDrag": true,
              "controls": true,
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

          <script>
            var slider = tns({
              "container": '.expo_Initiatives', 
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                },
                "500": {
                  "items": 1,
                  "nav": false,
                }
              },
              "autoplay":true,
              "nav":false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "speed": 400
            });
          </script>

          <script>
            var slider = tns({
              "container": '.expo_Initiat',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                },
                "500": {
                  "items": 1,
                  "nav": false,
                }
              },
              "autoplay":true,
              "nav":false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "speed": 400
            });
          </script>

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
                }
              },
              
            });
          </script>

        @endpush
</main>