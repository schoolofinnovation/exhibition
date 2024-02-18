@section('page_title', 'Find Great Exhibition To Exhibit')
@section('page_description', 'Discover India premier event publishing platform, showcasing the best upcoming exhibitions, conferences, trade shows, global seminars, networking meets and providing a platform for organizers to  exhibit their remarkable events.')
@section('page_keyword', 'Great Place to Exhibit, find right place, find right time, find right people, World largest business event platform, find all upcoming events, business conferences, exhibition 2024, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers.  Manage, sell event tickets and promote your event on exhbition.org.in, exhibition')

<main>    
  <!--bg-faded-info
World leading fastest Introducing Great Exhibition To Exhibit Business India First Ever Event Publishing Platform.-->
          <section class="container  py-5 mt-0">
            <div class=" rounded-3 py-5" >
              <div class="row align-items-center ">

                <div class="col-md-4">
                  <div class="row my-Slider4">
                      <div class="px-4 pe-sm-0 ps-sm-5 "><span class=" fs-xs text-primary">Right Place, Right Time, Right People</span>
                        
                      <!-- <span class="badge bg-danger">Free</span> -->
                      
                      {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                        <div class="mb-1 display-1"> Great starts here.</div>
                        <p class=" fw-light lh-1 mt-5"></p> 
                        <!-- <a class="btn btn-outline-primary mt-2" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Search Right Place<i class="bi bi-chevron-right fs-ms ms-1"></i></a> -->

                      </div>

                      <!-- <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Free</span>
                        {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                         <h1 class="mb-1 display-1"> Great starts here.</h1>
                        <p class=" fw-light lh-1">Introducing Great Place To Business India's First Ever Event Publishing Platform</p>
                        <a class="btn btn-accent mt-4" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Expand your Business <i class="bi bi-chevron-right fs-ms ms-1"></i></a>

                      </div> -->
                      <!-- <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Free</span>
                        {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                        <h1 class="mb-1"> Add to calender <br> button</h1>
                        <p class=" fw-light lh-1">Share your events with the #1 add to calender button on the internet.</p>
                        <a class="btn btn-accent mt-4" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Get your button <i class="bi bi-chevron-right fs-ms ms-1"></i></a>

                      </div> -->

                      {{--<div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get Certify</span>
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
                      </div>--}}
                  </div>
                  <div class="widget d-none d-lg-block ">
                    <!-- <h3 class="widget-title">Generate QR</h3> -->
                    <form action="" class="subscription-form validate">
                      <div class="input-group flex-nowrap">
                        <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                        <input type="text" class="form-control rounded-start"  name="search" placeholder="Find your Right Place" required>
                        <button class="btn btn-primary" type="submit" name=""> Search</button>
                      </div>

                      <div class=" fs-xs form-text">*Join our movement <br> Make India a Great Place To Business</div>
                      <div class="subscription-status"></div>
                    </form>
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
                                
                                <!-- <div class=" fs-sm fw-light"><span class=" fs-sm fw-light">{{ucfirst(trans($franchise -> venue))}}</span>
                                {{ucfirst(trans($franchise -> city))}}</div> -->
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
          {{--<section class="d-sm-none">
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
              </section>--}}

        <!--Trending Exhibition-->
        @livewire('trending-exhibition-component')

        <!--COI Awards-->
          @livewire('trending-award-component')

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
          @livewire('conference-component')

          @livewire('trending-dealer-distribution-component')
          
        <!--Trending Magazine-->
          @livewire('trending-magazine-component')
       
        <!-- Creators-->
         @livewire('trending-creator-component')
        
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

@endpush