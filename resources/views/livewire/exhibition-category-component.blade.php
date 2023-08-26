@section('page_title',  ($this->categry) )
@section('page_description','Find the business opportunity with The Exhibition Network, World leading event publishing company.')
@section('page_keyword',  'upcoming ,Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')

    <main>
      <!--google-->
        <div class="bg-secondary d-lg-none">
          <div class=" container">
            <div class="row ">
              <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                    <div class="align-content-center py-2 ">
                    <a href="{{$previous}}"><i class="bi bi-chevron-left"></i></a>  
                    </div>
              
                    <div class="text-center py-2">
                          <div>Upcoming {{$this->eventype}}</div> 
                    </div>

                    <div class="align-content-center py-2">
                    <a href=""><i class="bi bi-search"></i></a>    
                    </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
            <div class="mb-4 mb-lg-5">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                <li class="nav-item border-bottom"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Browse</a></li>
                <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab"> Saved Events</a></li>
              </ul>

                <!-- <div class="d-flex badgese pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Today</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                </div> -->

                <div class="tab-content pt-1">
                
                    <!-- Product details tab-->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id'); 
                      @endphp

                      <div class="row mb-5 pb-2">
                        

                        @foreach ($exhibition as $business)
                        @php
                            $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                           
                        @endphp

                        @foreach ($franchiso as $franchise)
                        @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                                <div class="container">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @else
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                        @endif 
                                        @php 
                                          $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                          $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                          $name = $franchise->eventname;
                                          $venue = $franchise->venue;
                                          $city = $franchise->city;
                                          $country = $franchise->country;
                                          $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                          
                                        @endphp
                                          
                                            <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                  </div>
                                </div>
                            @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate) 
                                <div class="container">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @else
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                        @endif 
                                        @php 
                                          $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                          $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                          $name = $franchise->eventname;
                                          $venue = $franchise->venue;
                                          $city = $franchise->city;
                                          $country = $franchise->country;
                                          $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                          
                                        @endphp
                                          
                                            <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                  </div>
                                </div>
                            @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate) 
                                <div class="container">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @else
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                        @endif 
                                        @php 
                                          $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                          $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                          $name = $franchise->eventname;
                                          $venue = $franchise->venue;
                                          $city = $franchise->city;
                                          $country = $franchise->country;
                                          $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                          
                                        @endphp
                                          
                                            <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                  </div>
                                </div>
                            @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate) 
                                <div class="container">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @else
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                        @endif 
                                        @php 
                                          $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                          $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                          $name = $franchise->eventname;
                                          $venue = $franchise->venue;
                                          $city = $franchise->city;
                                          $country = $franchise->country;
                                          $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                          
                                        @endphp
                                          
                                            <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                  </div>
                                </div> 
                            @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                                <!-- <div class="container">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @else
                                            <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                            <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                        @endif 
                                        @php 
                                          $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                          $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                          $name = $franchise->eventname;
                                          $venue = $franchise->venue;
                                          $city = $franchise->city;
                                          $country = $franchise->country;
                                          $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                          
                                        @endphp
                                          
                                            <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                  </div>
                                </div> -->
                          @endif

                        @endforeach

                        
                          
                        @endforeach


                      </div>
                    </div>
                
                    <!-- Reviews tab-->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                      <div class="row text-center">
                        <i class="bi bi-bookmark"></i>
                        <p>Saving an event will add it to this tab so that you can find it later</p>
                        <a href="" class="btn btn-primary text-capitalize">return to search results</a>
                      </div>
                    </div>

                </div>
            </div>

            </div>
          </div>
        </div>
    <!--end Google-->  

      <div class="page-title-overlap bg-accent pt-4 d-none d-sm-block">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <!--<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{asset('/')}}"><i class=" bi bi-house-fill"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{asset('/')}}"><i class=" bi bi-chevron-right"></i>Exhibition</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page"><i class=" bi bi-chevron-right"></i>Business </li>
              </ol>
            </nav>
          </div>-->
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{$this->eventype}}</h1>
          </div>
        </div>
      </div>

      <div class="container pb-5 mb-2 mb-md-4 d-none d-sm-block">
        <div class="row">
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
              <div class="d-flex flex-wrap">
                <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                  <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                  <select class="form-select"  wire:model="sorting">
                    <option value="today" selected="selected">Today</option>
                    <option value="tomorrow"  >Tomorrow</option>
                    <option value="weekend">This weekend</option>
                  </select>
                  <span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of {{$exhibition->count()}} {{$this->eventype}} </span>
                </div>

                <div class="d-flex pb-3">
                  <select class="form-select"  wire:model="pagesize">
                    <!--<option value="12" selected="selected">12 per page</option>-->
                              <option value="12">12 per page</option>
                              <option value="16">16 per page</option>
                              <option value="18">18 per page</option>
                              <option value="21">21 per page</option>
                              <option value="24">24 per page</option>
                              <option value="30">30 per page</option>
                              <option value="32">32 per page</option>
                  </select>
                </div>
              </div>
              <!--<div class="d-flex pb-3">
                    <a class="nav-link-style nav-link-light me-3" href="#"><i class="bi bi-chevron-left"></i></a>
                    <span class="fs-md text-light">1 / 5</span>
                    <a class="nav-link-style nav-link-light ms-3" href="#"><i class="bi bi-chevron-right"></i></a></div>

                    <div class="d-none d-sm-flex pb-3">
                    <a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#">
                      <i class=" bi bi-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-rs.html">
                        <i class="ci-view-list"></i></a>
                  </div>--> 

            </div>

            <div class="row mx-n2">
              @php $witems = Cart::instance('wishlist')->content()->pluck('id');  @endphp
              @foreach ($exhibition as $business)
                        @php
                            $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                        @endphp

                        @foreach ($franchiso as $franchise)
                          <div class="col-md-4 col-sm-6 px-2 mb-4">

                            <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                              <div class="product-card-actions d-flex align-items-center">
                                <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                  @if($witems->contains($franchise->id))
                                      <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                      <i class=" bi bi-heart-fill"></i></button>
                                  @else
                                      <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                      <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                        <i class=" bi bi-heart"></i></a></button>
                                  @endif
                              </div>

                              <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                              
                              <div class="card-body py-2">
                                    <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                      </a>
                                      {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                                
                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><h3 class="product-title fs-sm">
                                      <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                    <div class="star-rating align-center">
                                    <!--untitled-1 line 558 -574-->
                                    </div>
                                  </div>

                                      <div class="d-flex justify-content-between">
                                        <div class="product-price"><span class="text">
                                        <small> <i class="bi bi-calendar3"></i>
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                          @endif 
                                        </small></span>
                                          <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                        </div>
                                        
                                        <div class="star-rating">
                                        <span class="text">
                                        <small></small></span>
                                        </div>
                                      </div>

                                      <div class="d-flex justify-content-between">
                                        <div class="product-price"><span class="text">
                                        <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                          <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                        </div>

                                        
                                        <div class="star-rating">
                                        <span class="text">
                                        <small></small></span>
                                        </div>
                                      </div>
                              </div>

                              <div class="card-body card-body-hidden">
                                <div class="text-center pb-2">
                                  <!--<div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                    <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                  </div>
                                  <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="blue">
                                    <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                  </div>
                                  <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="yellow">
                                    <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                  </div>
                                  <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="pink">
                                    <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                  </div>-->
                                </div>

                                <div class="d-flex mb-2">
                                  
                                  <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                  <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                  href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                  
                                  </div>
                                  <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                              
                              </div>
                            
                            </div>

                            <hr class="d-sm-none">
                          </div>
                        @endforeach
              @endforeach
            </div>
              

            <!-- Banner-->
            <!--<div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                  <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="{{asset ('assets/images/04.jpg')}}" width="100" alt="Shop Converse">
              </div>
            </div>-->
            <!-- Products grid-->
            <div class="row mx-n2">

               <!-- Product-->
               <!--<div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                        <del class="fs-sm text-muted">38.<small>50</small></del>
                      </div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                        <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="blue">
                        <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="yellow">
                        <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="pink">
                        <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                      </div>
                    </div>
                    <div class="d-flex mb-2">
                      <select class="form-select form-select-sm me-2">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                      <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    </div>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>-->

            </div>
            <hr class="my-3">
           {{--{{$exhibition->links('pagination-links')}}--}}

           
          </section>



         
        </div>
      </div>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="shopsidebar" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">
        
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">{{$this->eventype}}</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title d-none d-sm-block">{{$this->eventype}}</h3>
                  <div class="accordion mt-n1" id="shop-categories" wire:model="categ" >
                      @foreach ($catego as $category)
                        <!-- Shoes-->
                        <div class="accordion-item">
                          <h3 class="accordion-header">
                              @if($this->eventype ==  'expo')
                                  <a class="accordion-button" href="{{route('coi.exhibitioncategory',['eventype' => 'expo', 'categry' => $category->slug])}}">
                                    {{$category->expoindustry}}
                                  </a>
                                  @elseif ($this->eventype ==  'award')
                                  <a class="accordion-button" href="{{route('coi.exhibitioncategory',['eventype' => 'award', 'categry' => $category->slug])}}">
                                    {{$category->expoindustry}}
                                  </a>
                                  @elseif ($this->eventype ==  'conference')
                                  <a class="accordion-button" href="{{route('coi.exhibitioncategory',['eventype' => 'conference', 'categry' => $category->slug])}}">
                                    {{$category->expoindustry}}
                                  </a>
                              @endif
                        </div>
                      @endforeach
                  </div>
                </div>
              </div>
            
      </div>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">
        
        <div class="offcanvas-header">
          <div class="offcanvas-title h5" id="offcanvasExampleLabel">List your Show <br>
          <span class="fs-xs fw-lighter">Got an event? Partner with us</span></div>
          
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    
        <div class="list-group list-group-flush border-bottom scrollarea">

            <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Notifications</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.Orders')}}" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Your Orders</normal>
                <small>
                @if (Auth::check()) 
                  <i class="bi bi-chevron-right"></i>
                  @else
                  <i class="bi bi-lock-fill"></i>
                  
                  @endif
                </small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
            </a>

            <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">COI Recommends</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">Get COI business picked just for you</div>
            </a>

            <a href="{{route('admin.global')}}" class=" border-0 list-group-item list-group-item-action {{'admin/global' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Global</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">Satisfy your palates</div>
            </a>

            <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Luggage, Travel & Stay</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">Plan your business trip headache's</div>
            </a>
                                                          
            <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Rewards</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
            </a>

            <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Offers</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
            </a>

            <a href="{{route('user.profile')}}" class="list-group-item list-group-item-action {{'user/profile' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Accounts & Settings</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">Location, Payments, permissions & More</div>
            </a>
            
            <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Help & Support</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
            </a>
          
            
          

        </div>
            
      </div>

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
    @endpush



    
                              
                      