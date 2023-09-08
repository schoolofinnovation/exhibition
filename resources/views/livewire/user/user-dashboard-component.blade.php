@section('page_title','dashboard')

@section('content_description','Find your Industry Exhibition ')
@section('content_keyword', 'Sell', 'Business', 'expansion')

    <main>
   


      {{--<div class="container  ">
        <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
          <div class="col  pr-0">
              @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>
              @else
                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>
              @endif 
              <div class="round-circle">{{$franchise -> id}}</div> 
          </div>

          <div class="col-7  p-0">
            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
              {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
            <div class="text-muted fs-sm text-start">
              @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
              @else
                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
              @endif 
            </div>  
            <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
          </div>

          <div class="col-3  p-0">
            @if(is_null($franchise->image))
              <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                  Add</a>
            @else
              <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
            @endif
          </div>
        </div>
      </div>--}}


  @if($board == 'dashboard')   
    @foreach($eventoo as $evento)
        <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                      <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                      @else
                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                    @endif 
                    <div class="round-circle">{{$evento->edition}}</div> 
                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                      {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                  <div class="text-muted fs-sm text-start">
                      @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                      @else
                      {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                      @endif 
                  </div>  
                  <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                </div>

                <div class="col-3  p-0">
                <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                    <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                </div>
            </div>
        </div>
    @endforeach

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
  @endif

      <!--header-->
      <div class="page-title-overlap bg-accent pt-4 d-none d-sm-block">
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
                    <a class="fs-ms text-light" href="">Find Opportunity</a>
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

      <div class="container mb-5 pb-3 d-none d-sm-block">
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
                  <div class="card ">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Exhibition</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
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
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  
                </div> 

                <div class=" row card-group">

                 

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Speaker</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
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
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                </div> 
            </section>
            
            
           
          </div>
        </div>
      </div>

      {{--<div class="d-flex flex-column flex-shrink-0 bg-body-tertiary" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
          <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>
            </a>
          </li>
        </ul>
        <div class="dropdown border-top">
          <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>--}}

              <div class="offcanvas offcanvas-start" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"  style="width: 4.5rem;">                  
                <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">    

                  
                
                  <div class="list-group list-group-flush scrollarea">

                      <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                      <div class="col-10 mb-1 small fw-lighter">Search</div>
                      </a>
                     
                     

                      <a href="#" class=" border-0 list-group-item px-1 list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter d-flex w-100 align-items-center justify-content-between">Add Event</div>
                      </a>

                      <a href="#" class=" border-0 list-group-item px-1 list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter ">Advertise</div>
                      </a>
                                                                    
                      <a href="{{route('user.dashboard', ['board' => 'profile'])}}" class=" border-0 list-group-item px-1 list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter">
                          Profile</div>
                      </a>

                  </div>

                </div>
              </div>


                  {{--<div class="handheld-toolbar border-top-0">
                    <div class="container py-4">
                      <div class="col-sm-12 ">
                        <div class="small fw-lighter">Product updates</div>
                        <small class="lh-1">Get the latest on new features, product improvement, and other announcements.</small>
                        <div class="bold text-primary fs-sm"> See what's new</div> 
                      </div>

                      @if(Auth::check())
                      <div class="col-sm-12 py-3">
                        <a class="fw-normal text-accent fs-md lh-1" href="{{route('user.dashboard')}}">Dashboard<i class="bi bi-right-chevron"></i> </a>
                      </div>
                      @else
                      
                      <div class="col-sm-12 py-3">
                        <div class="fw-normal text-accent fs-md lh-1">Start Free Trial  <i class="bi bi-right-chevron"></i> </div>
                      </div>


                      @endif


                    </div>
                  </div>--}}


  @if( $board == 'search')        
    <div class="container my-5 mx-auto">
        <div class="mx-auto my-5"> 
            <div class=" d-flex row">
                <p >Let's Create Event Together</p>
               
      
                @foreach($selectedcategory as $catego)
                    <a class="badge  border-1 text-right border-dark text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                    {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                    </a>
                @endforeach

                <div class="col-lg-8 col-sm-7 ">
                    <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
                    <a class="btn btn-primary">Search</a>
                </div>
               
            </div>
        
            @if(is_null($searchTerm))
            @else

                @if($searchcat->count() > 0)
                    <form wire:submit.prevent="updateEvent">      
                        <div class="row mb-5 pb-2" wire:model="checkvalue">

                            @foreach ($searchcat as $franchise) 
                            {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                            <div class=" col col-auto my-1 px-2"> 
                            <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}
                            </div>
                            @endforeach
                            <div>@json($checkvalue)</div>
                            
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                @else
                    <div class="small bold">Sorry, we could found relevant industry. You can upload </div>

                    <form wire:submit.prevent="updatetag">
                        <input type="text" placeholder="tag" wire:model="tag">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                @endif

            @endif
        </div>
    </div>
  @endif

  @if( $board == 'profile')


  <div class="container mb-5">
    <div class="row">  
       <a href="http://" class="">Done</a>
       <a href="http://" class="">Export</a>
    </div>  
  
    <div class="text-center">
      <img src="path-to-image" class="d-inline-block rounded-circle mb-3" width="96" alt="Amanda Gallaher">
      <h6 class="pt-1 mb-1">Amanda Gallaher</h6>
      <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>
      <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
        <i class="ci-twitter"></i>
      </a>
      <a href="#" class="btn-social bs-messenger bs-outline bs-sm">
        <i class="ci-messenger"></i>
      </a>
      <a href="#" class="btn-social bs-pinterest bs-outline bs-sm">
        <i class="ci-pinterest"></i>
      </a>
      <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
        <i class="ci-linkedin"></i>
      </a>
    </div>

    <div class="row my-3 ">
      <div class=" col fs-xs text-center">mobile</div>
      <div class=" col fs-xs text-center">call</div>
      <div class=" col fs-xs text-center">whats App</div>
      <div class=" col fs-xs text-center">mail</div>
    </div>

    <div class="card ">
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex pb-3 border-bottom">
            <i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>
            <div class="ps-3">
              <span class="fs-ms text-muted">Find us</span>
              <a href="#" class="d-block text-heading fs-sm">769, Industrial Dr, West Chicago, IL 60185, USA</a>
            </div>
          </li>
          <li class="d-flex pt-2 pb-3 border-bottom">
            <i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>
            <div class="ps-3">
              <span class="fs-ms text-muted">Call us</span>
              <a href="tel:+184725276533" class="d-block text-heading fs-sm">+1 (847) 252 765 33</a>
            </div>
          </li>
          <li class="d-flex pt-2m">
            <i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>
            <div class="ps-3">
              <span class="fs-ms text-muted">Write us</span>
              <a href="mailto:email@example.com" class="d-block text-heading fs-sm">email@example.com</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
  </div>

  @endif

  @if($board == 'SaveContact')
   
  <div class=" container text-center mt-4">
      <img src="path-to-image" class="d-inline-block rounded-circle mb-3" width="96" alt="Amanda Gallaher">
      <h6 class="pt-1 mb-1">Amanda Gallaher</h6>
      <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>
      <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
        <i class="ci-twitter"></i>
      </a>
      <a href="#" class="btn-social bs-messenger bs-outline bs-sm">
        <i class="ci-messenger"></i>
      </a>
      <a href="#" class="btn-social bs-pinterest bs-outline bs-sm">
        <i class="ci-pinterest"></i>
      </a>
      <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
        <i class="ci-linkedin"></i>
      </a>

      <div class="btn btn-primary  form-control mt-4">Save Contact</div>

    </div>

  @endif



  @if($board == 'ExchangeContact')
   
   <div class=" container text-center mt-4">
       <img src="path-to-image" class="d-inline-block rounded-circle mb-3" width="96" alt="Amanda Gallaher">
       <h6 class="pt-1 mb-1">Amanda Gallaher</h6>
       <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>
       <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
         <i class="ci-twitter"></i>
       </a>
       <a href="#" class="btn-social bs-messenger bs-outline bs-sm">
         <i class="ci-messenger"></i>
       </a>
       <a href="#" class="btn-social bs-pinterest bs-outline bs-sm">
         <i class="ci-pinterest"></i>
       </a>
       <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
         <i class="ci-linkedin"></i>
       </a>
 
     </div>
 
     <div class="container">
      <form action="">
         <input type="text" class="form-control" placeholder="email">
         <input type="text" class="form-control" placeholder="phone">

         <div class="btn btn-primary  form-control mt-4">Save Contact</div>
       </form>
     </div>
     
   @endif


  @if ($board == 'editprofile')
    <div class="container">
     <form wire:submit.prevent="likesUser">
        <input  class="form-control" type="email"  placeholder="email" wire:model="email">
        <input  class="form-control" type="text" placeholder="name" wire:model="name">
        <input  class="form-control" type="number" placeholder="phone" wire:model="phone">
        <input  class="form-control" type="number" placeholder="exp" wire:model="exp">
        <input  class="form-control" type="text" placeholder="designation" wire:model="designation">
        <input  class="form-control" type="text" placeholder="industry" wire:model="industry">
        <div  class="btn btn-primary form-control" type="submit">Submit</div>
     </form>
    </div>
  @endif


  @if($board == 'searchEvent')
     <form wire:submit.prevent="searchEvent">
      <input type="text" placeholder="tag" wire:model="tag">
      <input type="text" placeholder="edition" wire:model="edition">
      <input type="text" placeholder="city" wire:model="city">
      <button type="submit">Search</button>
     </form>
  @endif                  

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Profile</span>
        </a>
       

        <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Create</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'editprofile'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
          <span class="handheld-toolbar-label">Meet-ups</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>

</main>

    @push('scripts')
          <script>
            var slider = tns({
              "container": '.my-sliderOffers',  
              "responsive": {
                "300": {
                  "items": 2,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                  "fixedWidth": 170,
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
    @endpush