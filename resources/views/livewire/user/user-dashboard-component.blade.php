@section('page_title','dashboard')

@section('content_description','Find your Industry Exhibition ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

<main>
      <!--header-->
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
              <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}" >
            </div>

            <div class="ps-3">
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since  {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span><span class="badge bg-success">
                <i class=" bi bi-check me-1"></i>Available for Business</span>
            </div>
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base"> <a class="fs-ms text-light" href="{{route('user.Orders')}}"> Applies</a></div>
              <h3 class="text-light">
                  @if($appliedapplication == 0)
                    <a class="fs-ms text-light" href="{{route('front.home')}}">Find Opportunity</a>
                  @else 
                      {{$appliedapplication}}
                  @endif
            </h3>
            </div>
            <div class="text-sm-end">
              <div class="text-light fs-base">Seller rating</div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pe-xl-5">
              <div class="bg-white h-100 border-end p-4">
                <div class="p-2">
                  <ul class="list-unstyled fs-sm">
                    <li><a class="nav-link-style d-flex align-items-center fw-bold" href="mailto:contact@example.com">
                      <i class=" bi bi-lightbulb opacity-60 me-2"></i>Next, add your business details <span class="btn btn-outline-primary btn-sm">Start</span></a> </li>
                    <li><a class="nav-link-style d-flex align-items-center fs-sm fw-light" href="#"><!--<i class=" bi bi-globe opacity-60 me-2"></i>-->
                    Tell us a little more about your business to activate your account</a></li>
                  </ul>
                  
                  <a class="btn-social bs-twitter bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->twitter}}"><i class=" bi bi-twitter"></i></a>
                  <a class="btn-social bs-facebook bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->facebook}}"><i class=" bi bi-facebook"></i></a>
                  <a class="btn-social bs-instagram bs-outline bs-sm me-2 mb-2"  target="_blank" href="{{$infos->instagram}}"><i class=" bi bi-instagram"></i></a>
                  <a class="btn-social bs-youtube bs-outline bs-sm me-2 mb-2"  target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
                  <a class="btn-social bs-linkedin bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
                
                  <hr class="my-2">
                  <div class=" d-flex justify-content-between">
                    <div class="fw-bold fs-sm">Get started with COI</div>
                    <div class="btn btn-outline-primary btn-sm">Activate</div>
                  </div>
 
                  list your brand , 3 form shop  listing, exhibition listing , user requie listing 
                  <p class="fs-ms "><span class="fw-bold">Increase investor views upto 3 times.</span> <br>
                  Get  your proposal marked as 'Featured' & get a higher rank when investor search</p>

                    
                  <div class=" d-flex justify-content-between">
                    <div class="fw-bold fs-ms text-primary">Know more</div>
                    <div class="fs-ms" href="">Create opportunity model with us.</div>
                  </div>
                  <hr class="my-2">
                  <h6 class="p-0 m-0 fs-sm fw-bold">My Shop</h6> 
                  <p class=" small pb-0 my-0 ">List your shop for Brand Store</p>
                  @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                  <div class="form-check mb-2 pb-1">
                    <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="haveshop">
                    <label class="form-check-label" for="same-address">I have Shop.</label>
                  </div>

          
                 @if($haveshop == 1)
                  <div class="text-center mb-2 pb-2 border-bottom">
                    <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                    <form class="pb-1" wire:submit.prevent="addShop">
                      <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                        <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                      </div>
                      
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="shtype">
                        <label class="form-check-label" for="same-address">Own Shop</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="shtype">
                        <label class="form-check-label" for="same-address">Rented Shop</label>
                      </div>
                    
                      <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                    </form>

                  </div>
                 @endif 

                    <hr class="my-2">
                      @if(!session::has('coupon'))
                          <div class="form-check mb-2 pb-1">
                            <input class="form-check-input" type="checkbox"   value="1" id="have-check" wire:model="haveCouponCode">
                            <label class="form-check-label" for="same-address">I have coupon Code.</label>
                          </div>

                            @if($haveCouponCode == 1)
                              <div class="text-center mb-4 pb-3 border-bottom">
                                <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                                @if(Session::has('coupon_message'))
                                  <div class="alert alert-success text-center"> {{Session::get('coupon_message')}} </div>
                                @endif

                                <form class=" pb-2"   wire:submit.prevent="applyCouponCode">
                                  <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Coupon code" value="" name="couponCode" wire:model="couponCode" required="">
                                    <div class="invalid-feedback">Please provide Coupon code.</div>
                                  </div>
                                  <button class="btn btn-secondary d-block w-100" type="submit">Apply Coupon code</button>
                                </form>
                              </div>
                            @endif
                      @endif  
                   <hr class="my-2">
                    <h6 class="p-1 m-0 fw-bold fs-sm">COI Business</h6> 
                    <p class=" small pb-0 my-0 ">Looking to Expand Business</p>
                    @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                    <div class="form-check mb-2 pb-1">
                      <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                      <label class="form-check-label" for="same-address">Business Expansion</label>
                    </div>
            
                    @if($businessExpand == 1)
                      <div class="text-center mb-2 pb-2 border-bottom">
                        <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                        <form class="pb-1" wire:submit.prevent="addLevel">
                          <!---<div class="mb-3">
                            <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                            <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                          </div>-->
                          
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">COI Membership</label>
                          </div>
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">Publish Your Exhibition</label>
                          </div>
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">Publish your Brand</label>
                          </div>
                          <div class="invalid-feedback">@error('shtype') {{ $message}} @enderror </div>
                          <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                        </form>
                      </div>
                    @endif 
                

                  <hr class="my-2">
                  <h6 class="p-1 m-0 fw-bold fs-sm">COI Space</h6> 
                  <p class=" small pb-0 my-0 ">Looking for Entreprenuer Business Space</p>
                  @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                  <div class="form-check mb-2 pb-1">
                    <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                    <label class="form-check-label" for="same-address">Business Expansion</label>
                  </div>
          
                @if($businessExpand == 1)
                  <div class="text-center mb-2 pb-2 border-bottom">
                    <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                    <form class="pb-1" wire:submit.prevent="addLevel">
                      <!---<div class="mb-3">
                        <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                        <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                      </div>-->
                      
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">COI Membership</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">Publish Your Exhibition</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">Publish your Brand</label>
                      </div>
                      <div class="invalid-feedback">@error('shtype') {{ $message}} @enderror </div>
                      <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                    </form>
                  </div>
                @endif
                  <hr class="my-2">
                  <h6 class="pb-1">Send message</h6>
                  <form class="needs-validation pb-2" method="post" novalidate="">
                    <div class="mb-3">
                      <textarea class="form-control" rows="2" placeholder="Your message" required=""></textarea>
                      <div class="invalid-feedback">Please wirte your message!</div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100" type="submit">Send</button>
                  </form>
                </div>
              </div>
            </aside>
            
            <!-- Content-->
            <section class="col-lg-8 pt-lg-4 pb-md-4">
              @if($newuser->count() == 1 | $newuser->count() > 1)
               
                 @livewire('recommend-component')
                 
                @elseif($newuser->count() == 0)
                  <!--Start Multi-step form-->
                  <div class=" pt-1 px-1 ps-lg-0 pe-xl-5">
                    <form wire:submit.prevent="add" >
                        @if($currentStep == 1)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1" >
                              <div class="h3 mb-5 fw-lighter">Let's start journey to get buiness success professionally. </div>    
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="doing" id="have-check"  wire:model="business"  >
                                <label class="form-check-label" for="same-address">Already doing a Business?</label>
                              </div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="looking" id="have-check"  wire:model="business" >
                                <label class="form-check-label" for="same-address">Looking to do Business?</label>
                              </div>
                            </div>
                            <span class="text-danger">@error( 'business' ){{ $message}}@enderror</span>
                          </div>
                        @endif
              
                        @if($currentStep == 2)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Let's start journey to get buiness success professionally. </div>
                                <div class="form-check mb-2 pb-1">
                                  <input class="form-check-input" type="radio" value="license" id="have-check"  wire:model="doing"  >
                                  <label class="form-check-label" for="same-address">Looking to Buy Brand License</label>
                                </div>
                                <div class="form-check mb-2 pb-1">
                                  <input class="form-check-input" type="radio" value="expand" id="have-check"  wire:model="doing" >
                                  <label class="form-check-label" for="same-address">Looking to Expand Business</label>
                                </div>
                            </div>
                              <!--<input type="radio" class="btn-check" id="btn-check" value="license"  wire:model="doing" ></input>
                                <label class="btn btn-primary" for="btn-check">Looking to Buy Brand License</label>
                                  <input type="radio" class="btn-check" id="btn-check" value="expand"  wire:model="doing" ></input>
                                  <label class="btn btn-primary" for="btn-check">Looking to Expand Business</label>{{$doing}}
                              </div>-->
                            <span class="text-danger">@error( 'doing' ){{ $message}}@enderror</span>
                          </div>
                        @endif

                        @if( $currentStep == 3 )
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Choose your Business Industry</div>
                                <select class="form-select-inline flex-shrink-0" style="width: 10.5;" wire:model="category">
                                  <option> Choose Categories</option>
                                    @foreach ($abc as $category)
                                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                                    @endforeach 
                                </select>
                              @if(!is_null($def))
                                <select class="form-select-inline flex-shrink-0" style="width: auto;" wire:model="sector">
                                  <option> Choose Sector</option>
                                    @foreach ($def as $sector)
                                      <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                                    @endforeach
                                </select>
                              @endif
                              @if(!is_null($ghi))
                                <select class="form-select-inline flex-shrink-0" style="width: auto;" wire:model="service">
                                  <option> Choose Sector</option>
                                    @foreach ($ghi as $sector)
                                      <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                                    @endforeach
                                </select>
                              @endif
                            </div>
                              <span class="text-danger">@error('category'){{ $message}}@enderror</span>
                              <span class="text-danger">@error('sector'){{ $message}}@enderror</span>
                              <span class="text-danger">@error('service'){{ $message}}@enderror</span>
                          </div>
                        @endif

                        @if( $currentStep == 4)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Do you have your own business store?</div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="shoptype">
                                <label class="form-check-label" for="same-address">Rented Shop</label>
                              </div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="shoptype">
                                <label class="form-check-label" for="same-address">Own shop</label>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if( $currentStep == 5)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Do you have your own business store?</div>
                                <label for="customRange3" class="form-label">Investment</label>
                                <input type="range" class="form-range" min="0" max="90" id="customRange1" wire:model="maxinvestment">
                              </div>
                          </div>
                        @endif

                        <div class="row align-items-center">
                          @if($currentStep == 1)
                            <div></div>
                          @endif

                          @if($currentStep == 2 | $currentStep == 3 | $currentStep == 4| $currentStep == 5)
                            <button class=" col-sm-4 btn btn-primary d-block w-auto px-1" type="button" wire:click="decreaseStep()" ><i class="bi bi-arrow-left fs-lg me-2"></i>
                                back
                            </button>
                          @endif
                                  
                          @if($currentStep == 1 | $currentStep == 2 | $currentStep == 3 | $currentStep == 4)
                            <button class=" col-sm-4 btn btn-primary d-block w-auto px-1 "  type="button" wire:click="increaseStep()" ><i class=" bi bi-arrow-right fs-lg me-2"></i>
                                next
                            </button>
                          @endif

                          @if($currentStep == 5)
                            <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="submit"  wire:click="decreaseStep" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                                Submit
                            </button>
                          @endif
                        </div>
                    </form> 
                  </div>
              @endif        
              <!-- Card group -->
                <div class=" row card-group">

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Exhibition</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Award</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Sponsership</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Speaker</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Magazine</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Membership</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                </div> 
            </section>
            
            
           
          </div>
        </div>
      </div>
    </main>