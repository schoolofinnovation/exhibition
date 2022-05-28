@section('page_title',' Council of Innovation')
@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')
@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<main>
    
      <section class="container bg-faded-info mt-4">
        <div class=" rounded-3 py-4" >
          <div class="row align-items-center">

            <div class="col-md-4">
              <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                <a class="btn btn-accent" href="">Get Free COI Page <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
              </div>
            </div>
            
            <div class=" col-md-8 d-none d-sm-block pr-5">
              <div class="d-flex my-Slider1">
                    <!-- Product-->
                    @foreach ($franchises as $franchise)
                      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-2">
                        <div class="card product-card">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}">
                          </a> 
                        </div>
                      </div>
                    @endforeach
              </div>

              <div class="row align-items-center ">
                <div class="d-flex my-Slider2">
                  
                  @foreach ($premium as $franchise)
                    <!-- Product-->
                    <div class="col-lg-3 col-md-4 col-sm-6 px-1 mb-4">
                      <div class="card product-card">
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1 bg-secondary"></i></a>    
                        </div>
                        
                        <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}">
                        </a>
                        <div class="card-body py-2">
                          <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{ucwords(trans($franchise->category->industry))}}</a>
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</strong></a></h3></div>
                          </div>

                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="mb-2">
                            <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                            
                          </div>
                          <!--<div class="text-center">
                            <a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact Details</a>
                          </div>-->
                        </div>
                      </div>
                      <!--<hr class="d-sm-none">-->
                    </div>
                  @endforeach
                  
                </div>
              </div>  

            </div>

          </div>
        </div>
      </section>

      <!--list-->
      <section class="d-sm-none">
        <div class="d-flex  align-items-center my-Slider3">
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

      <!-- Products grid (Trending products)-->
      <section class="container">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
          <h2 class="h3 mb-0 pt-3 me-2"><i class="bi bi-globe2"  width="164" height="164"></i> Trending Opportunities</h2>
          <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="{{route('franchise.Coi')}}">More Opportunities<i class="bi bi-chevron-right ms-1 me-n1"></i></a></div>
        </div>
       
        <!-- Grid-->
        <div class="row pt-2 mx-n2 my-Slider6">
              @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
              @endphp

              @foreach ($franchises as $franchise)
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <div class="product-card-actions d-flex align-items-center">
                      <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                        @if($witems->contains($franchise->id))
                          <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                            <i class=" bi bi-heart-fill"></i></a>
                            @else
                          <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                            <i class=" bi bi-heart"></i></a>
                        @endif
                    </div>
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                      <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}">
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{$franchise->category->industry}}</a>
                      <!--<h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h3>-->
                    
                      <div class="d-flex justify-content-between">
                        <div class="product-price">
                          <h3 class="product-title fs-sm">
                            <a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{Str::limit($franchise->brand_name, 24)}}</strong>
                          </a></h3></div>
                          
                          <div class="star-rating align-center">
                          @php
                       $avgrating = 0;
                      @endphp

                      @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                        @php
                         $avgrating = $avgrating + $orderItem->review->rating;
                        @endphp
                      @endforeach

                      @for($i=1;$i<=5;$i++)
                        @if($i<=$avgrating)
                          <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                         @else
                          <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                        @endif
                      @endfor
                          </div>
                      </div>

                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                        <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                        </div>
                      </div>

                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                        <div class="star-rating align-center"> <small>{{$franchise->max_area}} - {{$franchise->min_area}}</small></div>
                      </div>
                     </div>

                    <div class="card-body card-body-hidden">
                      <div class="d-flex justify-content-between mb-2">
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                      </div>
                      <div class="text-center">
                        <a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact Details</a>
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
          <div class="col-md-8 d-none d-sm-block">Awards
            <div class="row align-items-center">
              <div class="d-flex">
                @foreach ($franchises as $franchise)
                    <!-- Product-->
                    <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-2">
                      <div class="card product-card">
                        <!--<div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            
                        </div>
                        
                        <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}">-->
                        </a>
                        <div class="card-body py-2">
                          <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{ucwords(trans($franchise->category->industry))}}</a>
                          <!--<h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h3>-->
                        
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</strong></a></h3></div>
                              <!--<div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                                <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                                <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                              </div>-->
                          </div>

                        <!--<div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                            <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                          </div>
                          </div>

                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                            <div class="star-rating align-center"> <small>{{$franchise->max_area}} - {{$franchise->min_area}}</small>
                          </div>
                          </div>-->
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="d-flex justify-content-between mb-2">
                            <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                            <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                          </div>
                          <div class="text-center">
                            <a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact Details</a>
                          </div>
                        </div>
                      </div>
                      <!--<hr class="d-sm-none">-->
                    </div>
                @endforeach
              </div>
            </div>
            <div class="row align-items-center ">
              <div class="d-flex">
                @foreach ($franchises as $franchise)
                    <!-- Product-->
                    <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                      <div class="card product-card">
                        <!--<div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            
                        </div>-->
                        
                        <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}">
                        </a>
                        <div class="card-body py-2">
                          <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{ucwords(trans($franchise->category->industry))}}</a>
                          <!--<h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h3>-->
                        
                          <div class="d-flex justify-content-between">
                            <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</strong></a></h3></div>
                              <!--<div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                                <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                                <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                              </div>-->
                          </div>

                        <!--<div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                            <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                          </div>
                          </div>

                          <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                            <div class="star-rating align-center"> <small>{{$franchise->max_area}} - {{$franchise->min_area}}</small>
                          </div>
                          </div>-->
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="d-flex justify-content-between mb-2">
                            <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                            <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                          </div>
                          <div class="text-center">
                            <a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact Details</a>
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
        </div>
      </section>

      <!-- Products grid (Upcoming products)-->
      <section class="container pt-3">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
          <div class="h3 mb-0 pt-3 me-2">Demanding Opportunities</div>  
        <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="">More Opportunities<i class=" bi bi-chevron-right ms-1 me-n1"></i></a></div>
        </div>
       
       <!-- Grid-->
        <div class="row pt-2 mx-n2 my-Slider9">
              
              @foreach ($franchises as $franchise)
          <!-- Product-->

          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">

              <div class="product-card-actions d-flex align-items-center">
              <a class="btn-action nav-link-style me-2" href="">
              <i class="bi bi-shuffle me-1"></i>Compare</a>
              @if($witems->contains($franchise->id))
              <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart-fill"></i></a>
                @else
                <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart"></i></a>
                @endif
              </div>
              
              <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
              <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
              <div class="card-body py-2">
              <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{$franchise->category->industry}}</a>
                <!--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>-->
               
                <div class="d-flex justify-content-between">
                  <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                  <strong>{{Str::limit($franchise->brand_name, 24)}}</strong></a></h3></div>
                  <div class="star-rating align-center"> @php
                       $avgrating = 0;
                      @endphp

                      @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                        @php
                         $avgrating = $avgrating + $orderItem->review->rating;
                        @endphp
                      @endforeach

                      @for($i=1;$i<=5;$i++)
                        @if($i<=$avgrating)
                          <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                         @else
                          <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                        @endif
                      @endfor
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$franchise->max_area}} - {{$franchise->min_area}}</small>
                  </div>
                </div>

                
              </div>
              <div class="card-body card-body-hidden">
              <div class="d-flex justify-content-between mb-2">
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class="bi bi-brush fs-sm me-1"></i>Know More</a>
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})">
                  <i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal">
                <i class=" bi bi-eye align-middle me-1"></i>Contact Details</a></div>
              </div>
            </div>
            <!--<hr class="d-sm-none">-->
          </div>
          @endforeach
        </div>
      </section>

        <!-- Product widgets-->
        <section class="container pb-2 pb-md-3">
          <div class="row my-Slider8">
            <!-- Bestsellers-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">Bestsellers</h3>
                @foreach ($new as $franchise)<!--border-bottom-->
                  <div class="d-flex align-items-center pb-2 ">
                    <a class="d-block flex-shrink-0" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                    <img src="{{url('Storage/brands/'.$franchise->image)}}" width="64" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
                      <div class="ps-2">
                        <h6 class="widget-product-title"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">{{$franchise->max_investment}} - {{$franchise->min_investment}} lacs.</span></div>
                      </div>
                  </div>
                @endforeach
                <!--<p class="mb-0">...</p>-->
                <a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

            <!-- New arrivals-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">New Opportunities</h3>
                @foreach ($new as $franchise)
                  <!--border-bottom-->
                  <div class="d-flex align-items-center pb-2 ">
                  <a class="d-block flex-shrink-0" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                
                  <img src="{{url('Storage/brands/'.$franchise->image)}}" width="64" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h6>
                      <div class="widget-product-meta"><span class="text-accent">{{$franchise->max_investment}} - {{$franchise->min_investment}} lacs.</span></div>
                    </div>
                  </div>
                @endforeach
                <!--<p class="mb-0">...</p>--><a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

            <!-- Top rated-->
            <div class="col-md-4 col-sm-6 mb-2 py-3">
              <div class="widget">
                <h3 class="widget-title fw-bolder">Top rated Opportunities</h3>
                @foreach ($new as $franchise)
                  <!--border-bottom-->
                  <div class="d-flex align-items-center pb-2 ">
                  <a class="d-block flex-shrink-0" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                
                  <img src="{{url('Storage/brands/'.$franchise->image)}}" width="64" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{Str::limit($franchise->brand_name, 24)}}</a></h6>
                      <div class="widget-product-meta"><span class="text-accent">{{$franchise->max_investment}} - {{$franchise->min_investment}} lacs.</span></div>
                    </div>
                  </div>
                @endforeach
                <!--<p class="mb-0">...</p>--> <a class="fs-sm" href="{{asset('/shop')}}">View more<i class="bi bi-chevron-right fs-xs ms-1"></i></a>
              </div>
            </div>

          </div>
        </section>

        <!-- Products grid (dealer & dealership)-->
        <section class="container pt-2">
          <!-- Heading-->
          <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
            <h2 class="h3 mb-0 pt-3 me-2">Dealership & Distribution Opportunities</h2>
            <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="">More Opportunities<i class=" bi bi-chevron-right ms-1 me-n1"></i></a></div>
          </div>
       
          <!-- Product-->
          <div class="row pt-2 mx-n2 my-Slider9a">
            @foreach ($dealers as $franchise)
              <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <div class="product-card-actions d-flex align-items-center">
                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                    @if($witems->contains($franchise->id))
                      <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class=" bi bi-heart-fill"></i></a>
                        @else
                        <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                        <i class=" bi bi-heart"></i>
                      </a>
                    @endif
                  </div>
                  
                  <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                  <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>

                  <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{$franchise->category->industry}}</a>
                    <!--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>-->
                  
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}">
                      <strong>{{Str::limit($franchise->brand_name, 24)}}</strong></a></h3></div>
                      <div class="star-rating align-center">
                      @php
                        $avgrating = 0;
                        @endphp

                        @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                          @php
                          $avgrating = $avgrating + $orderItem->review->rating;
                          @endphp
                        @endforeach

                        @for($i=1;$i<=5;$i++)
                          @if($i<=$avgrating)
                            <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                          @else
                            <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                          @endif
                        @endfor
                      </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                      <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                      <div class="star-rating align-center"> <small>{{$franchise->max_area}} - {{$franchise->min_area}}</small>
                      </div>
                    </div>            
                  </div>

                  <div class="card-body card-body-hidden">
                    <div class="d-flex justify-content-between mb-2">
                      <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $franchise->slug])}}"><i class="bi bi-brush fs-sm me-1"></i>Know More</a>
                      <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})">
                        <i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                      </div>
                      <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal">
                      <i class=" bi bi-eye align-middle me-1"></i>Contact Details</a></div>
                    </div>
                  </div>
                <!--<hr class="d-sm-none">-->
              </div>
            @endforeach
          </div>
        </section>

        <!-- YouTube feed
        <section class="container pb-5 mb-md-3">
          <div class="border rounded-3 p-3">
            <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="bg-secondary p-5 text-center">
                  <img class="d-block mb-4 mx-auto" src="{{asset('assets/images/yt-logo.png')}}" width="120" alt="YouTube">
                  <div class="d-flex justify-content-center align-items-center mb-4"><img class="me-2" src="{{asset('assets/images/yt-subscribers.png')}}" width="126" alt="YouTube Subscribers">
                  <span class="fs-sm">250k+</span></div>
                  <a class="btn btn-primary border-0 btn-sm mb-3" href="" style="background-color: #ff0000;"><i class="ci-add-user me-2"></i>Subscribe*</a>
                  <p class="fs-sm mb-0">*View latest gadgets reviews available for purchase in our store.</p>
                </div>
              </div>

              <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-2">
                  <h2 class="h4 mb-3">Latest  from COI channel</h2><a class="btn btn-outline-accent btn-sm mb-3" href="{{asset('/blog')}}">More videos<i class=" bi bi-chevron-right fs-xs ms-1 me-n1"></i></a>
                </div>
                <div class="row g-2">
                      <div class="col-lg-6 col-6  ">
                        <div class="rounded-3 overflow-hidden">
                          <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo?modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                          </div>
                        </div>
                        <h6 class="fs-sm pt-1">5 Super Useful Gadgets on COI You Must Have in 2020</h6>
                      </div>


              <div class="col-lg-6 col-6 ">
                <div class="rounded-3 overflow-hidden">
                  <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo?modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                </div>
                <h6 class="fs-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020</h6>
              </div>-->

              
                      <!--<div class="col-lg-4 col-6 mb-3">
                <div class="rounded-3 overflow-hidden">
                  <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo?modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                </div>
                <h6 class="fs-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020</h6>
              </div>-->
                  
                <!-- <div class="col-lg-4 col-6 mb-3 d-lg-none"><a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/sJK67XXE_Rg" data-bs-toggle="video" lg-uid="lg3">
                      <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">6:11</span><img class="w-100" src="./franciz_files/cover04.jpg" alt="Video cover"></div>
                      <h6 class="fs-sm fw-bold pt-1">5 Amazing Construction Inventions and Working Tools Available...</h6></a></div>-->
              <!-- </div>
              </div>
            </div>
          </div>
        </section>-->

        <!-- YouTube feed-->
        <section class="container pb-5 mb-md-3">
          <div class="border rounded-3 p-3">
            <div class="row">
            
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="bg-secondary p-5 text-center">
                  <img class="d-block mb-4 mx-auto" src="{{asset('assets/images/yt-logo.png')}}" width="120" alt="YouTube">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img class="me-2" src="{{asset('assets/images/yt-subscribers.png')}}" width="126" alt="YouTube Subscribers">
                  <span class="fs-sm">250k+</span></div>
                  <a class="btn btn-primary border-0 btn-sm mb-3" href="" style="background-color: #ff0000;"><i class="ci-add-user me-2"></i>Subscribe*</a>
                  <p class="fs-sm mb-0">*View latest gadgets reviews available for purchase in our store.</p>
                </div>
              </div>

              <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 pb-1">
                  <h2 class="h4 mb-2">COI Business channel</h2><a class="btn btn-outline-accent btn-sm mb-2" href="{{asset('/blog')}}">More <i class=" bi bi-chevron-right fs-xs ms-1 me-n1"></i></a>
                </div>
                <div class="row g-2 my-Slider10">
                  @foreach($evento as $eventoi)
                    <!--<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 px-1 mb-1">
                      <div class="card product-card">
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                          <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="addtoWishlist(139,'in asperiores quod nam',79)" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                            <i class=" bi bi-heart"></i></a> 
                        </div>
                      
                      <a class="card-img-top d-block overflow-hidden" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">
                        <img src="http://127.0.0.1:8000/Storage/brands/digital_8.png" alt="in asperiores quod nam"></a>

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
                        <div class="product-title fs-sm h3 mb-0">
                              <a href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam">{{ucwords(trans($eventoi->eventname))}}
                                </a></div>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><small>{{$eventoi->edition}} Edition <i class="bi bi-shield-fill-check"></i> <i class="bi bi-lightning-fill"></i></small>
                              
                            </div>

                            <div class="star-rating align-center ">
                              <small class="text-primary">Visitors | Exhibitors</small>
                                <div class="my-1 align-center"> <small class="mx-2 fw-bold">{{$eventoi->auidence}}</small> <small class="mx-2 fw-bold">+ {{$eventoi -> exhibitors}}</small></div>
                                  <!-- <i class="star-rating-icon bi bi-star-fill active"></i>
                                  <i class="star-rating-icon bi bi-star-fill active"></i>
                                  <i class="star-rating-icon bi bi-star-fill active"></i>
                                  <i class="star-rating-icon bi bi-star-fill active"></i>
                                  <i class="star-rating-icon bi bi-star-fill active"></i> -->
                            </div>
                        </div>
                        <!--<small> <i class="bi bi-chevron-right"></i>  </small> 

                        <small></small><br>--><small>{{ucwords(trans($eventoi->city))}}, {{$eventoi -> country}}</small><!--ucfirst-->
                        <div class="d-flex justify-content-between">
                          @if($eventoi -> search_id == null)
                            
                           @else
                            <span class=" bg-primary" style="display: inline-block; padding: 0.25em 0.625em;font-size: .75em;font-weight: normal;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.175rem;">
                              {{$eventoi->search->tag}} </span>
                          @endif
                          {{$eventoi->expo}}
                          <!-- <div class=""><span class="badge bg-danger">Date</span></div> -->
                          <!--<div class="star-rating align-center"> <small>Venue</small>
                          </div>-->
                        </div>
                      </div>
                      
                      <div class="card-body card-body-hidden">
                        <div class="d-flex justify-content-between mb-2">
                          <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                          <a class="btn btn-primary btn-sm d-block w-50 mx-0" type="button" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam"><!--<i class=" bi bi-cart fs-sm me-1">--></i>Request a Booth</a>
                        </div>
                        
                          <div class="text-center">
                          @guest<a class="nav-link-style fs-ms" href="http://127.0.0.1:8000/franchise/in-asperiores-quod-nam" data-bs-toggle="modal">
                          <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                          @endguest
                        </div>
                      </div>
                    
                      </div>
                     
                    </div>
                  @endforeach  
                      <!--<div class="rounded-3 overflow-hidden">
                          <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo?modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                          </div>
                        </div>-->
          
                      <!--<div class="col-lg-4 col-6 mb-3">
                            <div class="rounded-3 overflow-hidden">
                              <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo?modestbranding=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                              </div>
                            </div>
                            <h6 class="fs-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020</h6>
                          </div>-->
                  
                      <!-- <div class="col-lg-4 col-6 mb-3 d-lg-none"><a class="d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/sJK67XXE_Rg" data-bs-toggle="video" lg-uid="lg3">
                            <div class="position-relative mb-2"><span class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">6:11</span><img class="w-100" src="./franciz_files/cover04.jpg" alt="Video cover"></div>
                            <h6 class="fs-sm fw-bold pt-1">5 Amazing Construction Inventions and Working Tools Available...</h6></a></div>-->
                </div>
              </div>

            </div>
          </div>
        </section>
</main>


     @push('scripts')
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
                },
                "500": {
                  "items": 4,
                  "nav": false,
                  "controls": false,
                  "autoplayHoverPause": true,
                  "autoplay": true,
                  "autoplayButtonOutput" : false
                }
                
              },
              "autoplayButtonOutput":false
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider3',            
              "responsive": {
                "400": {
                  "items": 1,
                  "autoplay": true,
                  "controls": false,
                  "autoplayHoverPause": true,
                  "autoplayButtonOutput":false,
                  "gutter": 0,
                },
               
              },
              "autoplayButtonOutput":false,
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
                  "edgePadding": 30,
                  "autoplay": true,
                  
                },
                "500": {
                  "items": 4,
                  "controls": false,
                  "autoplayHoverPause": true,
                  "autoplay":true
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "autoplayButtonOutput":false,
              "gutter" : 10,
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
                  
                },
                "500": {
                  "items": 3
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "autoplayButtonOutput":false,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider9',            
              "responsive": {
                "350": {
                  "items": 1,
                  "mouseDrag": true,
                  "edgePadding": 30,
                  "autoplay": true,
                  
                },
                "500": {
                  "items": 4,
                  "autoplay":true
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "mouseDrag":true,
              "controls": false,
              "autoplayHoverPause": true,
              "autoplayButtonOutput":false,
              "swipeAngle": false,
              "gutter" : 10,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider9a',            
              "responsive": {
                "350": {
                  "items": 1,
                  "mouseDrag": true,
                  "edgePadding": 30,
                  "autoplay": true,
                  
                },
                "500": {
                  "items": 4,
                  "autoplay":true,
                  "controls": false,
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "mouseDrag":true,
              "controls": false,
              "autoplayHoverPause": true,
              "autoplayButtonOutput":false,
              "swipeAngle": false,
              "gutter" : 0,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider10',            
              "responsive": {
                "300": {
                  "items": 1,
                  "mouseDrag": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 3,
                  "autoplay":true,
                  "autoplayButtonOutput":false
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav": false,
              "mouseDrag":true,
              "controls": false,
              "autoplayHoverPause": true,
              "swipeAngle": false,
              "autoplayButtonOutput":false,
              "gutter" : 10,
            });
          </script>

      @endpush