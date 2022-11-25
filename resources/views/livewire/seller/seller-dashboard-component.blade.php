@section('page_title','Dashboard')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')


@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')

    <main>
      <!--<div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          
        
        <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
            <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}"></div>
            <div class="ps-3">                  
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span>
              <span class="badge bg-success"><i class=" bi bi-check me-1"></i>Available for Business Account</span>
            </div>
          </div>
         

            <div class="d-flex ">
              <div class="text-sm-end me-5">
                <div class="text-light fs-base"> <span class="px-1 h5 text-primary">@if($brands->count()>0) {{$brands->count()}} @endif</span>Brand</div>
                <div class="text-light  fs-xs"><span class="px-1 h5 text-primary"> {{$todayrevenue}}</span>Today <br>Revenue</div>
              </div>
              <div class="text-sm-end me-5">
                <div class="text-light fs-base"><span class="px-1 h5 text-primary"> @if($likecoun > 0){{$likecoun}} @endif</span>Post</div>
                <div class="text-light  fs-xs"><span class="px-1 h5 text-primary"> {{$todaysales}}</span>Today<br>Sales</div>
              </div>
              <div class="text-sm-end me-5">
                <div class="text-light fs-base"><span class="px-1 h5 text-primary"> @if($review->count()>0){{$review->count()}} @endif</span>Review</div>
                <div class="text-light  fs-xs"><span class="px-1 h5 text-primary"> {{$totalrevenue}}</span>Total<br>Revenue</div>
              </div>
              <div class="text-sm-end me-5">
                <div class="text-light fs-base"><span class="px-1 h5 text-primary"> @if($user->likedMags->count()>0){{$user->likedMags->count()}} @endif</span>Likes</div>
                <div class="text-light  fs-xs"><span class="px-1 h5 text-primary"> {{$totalsales}}</span>Total<br>Sales</div>
              </div>
              <div class="text-sm-end me-5">
                <div class="text-light fs-base"><span class="px-1 h5 text-primary"> @if($franchise->count()>0){{$franchise->count()}} @endif</span>Opportunity</div>
                <div class="text-light  fs-xs"><span class="px-1 h5 text-primary"> </div>
              </div>
              <div class="text-sm-end">
                <div class="text-light fs-base">Seller rating</div>
                <div class="star-rating"><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star"></i>
                </div>
                <div class="text-light  fs-xs">Based on {{$review->count()}} reviews</div>
              </div>
            </div>
          

        </div>
      </div>-->

      <div class=" mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
           
          <!-- Sidebar--> 
            <aside class="col-lg-3 pe-xl-5">
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
              <!-- Actual menu-->
              <div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                      <i class="ci-settings opacity-60 me-2"></i>Event<span class="fs-sm text-muted ms-auto">Add</span></a>
                    
                      <div class="collapse" id="home-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('event.add')}}"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('ticket.add')}}"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Lead-collapse" aria-expanded="false">
                      <i class="ci-basket opacity-60 me-2"></i>Lead</a>
                      <div class="collapse" id="Lead-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Tickets-collapse" aria-expanded="false">
                      <i class="ci-heart opacity-60 me-2"></i>Tickets<span class="fs-sm text-muted ms-auto">4</span></a>
                      <div class="collapse" id="Tickets-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Meetup-collapse" aria-expanded="false">
                      <i class="ci-dollar opacity-60 me-2"></i>Meetup<span class="fs-sm text-muted ms-auto">$1,375.00</span></a>
                      <div class="collapse" id="Meetup-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Coupon-collapse" aria-expanded="false">
                      <i class="ci-package opacity-60 me-2"></i>Coupon<span class="fs-sm text-muted ms-auto">5</span></a>
                      <div class="collapse" id="Coupon-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Speaker-collapse" aria-expanded="false">
                      <i class="ci-cloud-upload opacity-60 me-2"></i>Speaker</a>
                      <div class="collapse" id="Speaker-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Participants-collapse" aria-expanded="false">
                      <i class="ci-currency-exchange opacity-60 me-2"></i>Participants</a>
                      <div class="collapse" id="Participants-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 collapsed" href="#"  data-bs-toggle="collapse" data-bs-target="#Profile-collapse" aria-expanded="false">
                      <i class="ci-currency-exchange opacity-60 me-2"></i>Profile</a>
                      <div class="collapse" id="Profile-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Event</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Attribute</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Ticket</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Participants</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Pavillion</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="#"><i class="ci-basket opacity-60 me-2"></i>Add Count</a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li><form id="logout-form" action="{{route('logout')}}" method="POST">@csrf</form>
                  </ul>
                  <hr>
                </div>
              </div>
            </aside>

            <!-- Content-->
            <section class="col-lg-9 pt-lg-2 pb-md-4 ">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                
                @if($event->count() > 0)
                    
                    <div class="d-flex  border-bottom">
                        <div class="h4  text-center text-sm-start "> Event 
                            <a class="btn btn-outline-primary btn-sm " href="{{route('event.add')}}">Add</a>
                        </div>
                    </div>

                    <div class="row pt-2">
                      <!-- Product-->
                      @foreach ($event as $product)
                        <div class="col-sm-6 mb-grid-gutter">
                          <div class="card product-card-alt">
                            <div class="product-thumb">
                              <button class="btn-wishlist btn-sm" type="button"><i class=" bi bi-heart"></i></button>
                                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href=""><i class=" bi bi-eye"></i></a>
                                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class=" bi bi-cart"></i></button>
                                </div>
                                <a class="product-thumb-overlay" href=""></a><img src="{{url('Storage/brands/'.$product->image)}}" alt="{{Str::limit($product->eventname, 24)}}">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">
                                  {{ucwords(trans($product->eventname))}}  {{ucwords(trans($product->id))}}</a>in <a class="product-meta fw-medium" href="#">{{ucwords(trans($product->eventname))}}</a></div>
                                  <div class="star-rating"><i class="star-rating-icon bi bi-star-filled active"></i>
                                  <i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i><i class="star-rating-icon bi bi-star-filled active"></i>
                                  </div>
                                </div>
                                  <h3 class="product-title fs-sm mb-2"><a href="">{{ucwords(trans($product->eventname))}} </a></h3>
                                  <h3 class="product-title fs-sm mb-2"><a href="">@if(Carbon\Carbon::parse ($product->startdate)->format('M') != Carbon\Carbon::parse ($product->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($product->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($product->enddate)->format('D, d M Y ')}}
                                  @else
                                    {{Carbon\Carbon::parse ($product->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($product->enddate)->format('D, d M Y')}}
                                  @endif
                                  </a></h3>
                                  <h3 class="product-title fs-sm mb-2"><a href="">{{$product -> venue}}, {{$product -> city}}</a></h3>
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fs-sm me-2">
                                    <i class=" bi bi-download text-muted me-1"></i><span class="fs-xs ms-1">Search Appearance</span>
                                    <i class=" bi bi-download text-muted me-1"></i><span class=" text-primary"></span><span class="fs-xs ms-1">Application</span>
                                    <i class=" bi bi-download text-muted me-1"></i><span class="fs-xs ms-1">Review</span>
                                    </div>
                                    <div class=" dropdown">
                                        <a class="bg-faded-accent text-accent fs-ms rounded-1 py-1 px-2 dropdown-toggle"  role="button" id="dropdownMenuLink"  data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">@if($product->status == 'active') <small>Active</small> @elseif($product->status != 'active') <small>Deactive</small> @endif <span class="carat"></span></a>
                                      <div class="  dropdown-menu dropdown-menu-end" style="min-width:auto;" aria-labelledby="dropdownMenuLink">
                                            @if($product->status == 'active')
                                                <a class=" dropdown-item d-flex align-items-center py-1"  href="#" wire:click.prevent="updatestatus({{$product->id}},'deactive')">Deactive</a>
                                              @else
                                                <a class=" dropdown-item d-flex align-items-center py-1 " href="#" wire:click.prevent="updatestatus({{$product->id}},'active')" >Active</a>
                                            @endif
                                          <a class=" dropdown-item d-flex align-items-center py-1" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$product->id}})">Delete</a>
                                          <a class=" dropdown-item d-flex align-items-center py-1" href="">Details</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                        {{$event}}
                    </div>
                  @else
                    <!--second phase-->
                      <h2 class=" pt-2 pb-2 mb-2 text-center text-sm-start border-bottom">
                          <div><svg viewBox="0 0 317 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-12 w-auto">
                                  <path d="M74.09 30.04V13h-4.14v21H82.1v-3.96h-8.01zM95.379 19v1.77c-1.08-1.35-2.7-2.19-4.89-2.19-3.99 0-7.29 3.45-7.29 7.92s3.3 7.92 7.29 7.92c2.19 0 3.81-.84 4.89-2.19V34h3.87V19h-3.87zm-4.17 11.73c-2.37 0-4.14-1.71-4.14-4.23 0-2.52 1.77-4.23 4.14-4.23 2.4 0 4.17 1.71 4.17 4.23 0 2.52-1.77 4.23-4.17 4.23zM106.628 21.58V19h-3.87v15h3.87v-7.17c0-3.15 2.55-4.05 4.56-3.81V18.7c-1.89 0-3.78.84-4.56 2.88zM124.295 19v1.77c-1.08-1.35-2.7-2.19-4.89-2.19-3.99 0-7.29 3.45-7.29 7.92s3.3 7.92 7.29 7.92c2.19 0 3.81-.84 4.89-2.19V34h3.87V19h-3.87zm-4.17 11.73c-2.37 0-4.14-1.71-4.14-4.23 0-2.52 1.77-4.23 4.14-4.23 2.4 0 4.17 1.71 4.17 4.23 0 2.52-1.77 4.23-4.17 4.23zM141.544 19l-3.66 10.5-3.63-10.5h-4.26l5.7 15h4.41l5.7-15h-4.26zM150.354 28.09h11.31c.09-.51.15-1.02.15-1.59 0-4.41-3.15-7.92-7.59-7.92-4.71 0-7.92 3.45-7.92 7.92s3.18 7.92 8.22 7.92c2.88 0 5.13-1.17 6.54-3.21l-3.12-1.8c-.66.87-1.86 1.5-3.36 1.5-2.04 0-3.69-.84-4.23-2.82zm-.06-3c.45-1.92 1.86-3.03 3.93-3.03 1.62 0 3.24.87 3.72 3.03h-7.65zM164.516 34h3.87V12.1h-3.87V34zM185.248 34.36c3.69 0 6.9-2.01 6.9-6.3V13h-2.1v15.06c0 3.03-2.07 4.26-4.8 4.26-2.19 0-3.93-.78-4.62-2.61l-1.77 1.05c1.05 2.43 3.57 3.6 6.39 3.6zM203.124 18.64c-4.65 0-7.83 3.45-7.83 7.86 0 4.53 3.24 7.86 7.98 7.86 3.03 0 5.34-1.41 6.6-3.45l-1.74-1.02c-.81 1.44-2.46 2.55-4.83 2.55-3.18 0-5.55-1.89-5.97-4.95h13.17c.03-.3.06-.63.06-.93 0-4.11-2.85-7.92-7.44-7.92zm0 1.92c2.58 0 4.98 1.71 5.4 5.01h-11.19c.39-2.94 2.64-5.01 5.79-5.01zM221.224 20.92V19h-4.32v-4.2l-1.98.6V19h-3.15v1.92h3.15v9.09c0 3.6 2.25 4.59 6.3 3.99v-1.74c-2.91.12-4.32.33-4.32-2.25v-9.09h4.32zM225.176 22.93c0-1.62 1.59-2.37 3.15-2.37 1.44 0 2.97.57 3.6 2.1l1.65-.96c-.87-1.86-2.79-3.06-5.25-3.06-3 0-5.13 1.89-5.13 4.29 0 5.52 8.76 3.39 8.76 7.11 0 1.77-1.68 2.4-3.45 2.4-2.01 0-3.57-.99-4.11-2.52l-1.68.99c.75 1.92 2.79 3.45 5.79 3.45 3.21 0 5.43-1.77 5.43-4.32 0-5.52-8.76-3.39-8.76-7.11zM244.603 20.92V19h-4.32v-4.2l-1.98.6V19h-3.15v1.92h3.15v9.09c0 3.6 2.25 4.59 6.3 3.99v-1.74c-2.91.12-4.32.33-4.32-2.25v-9.09h4.32zM249.883 21.49V19h-1.98v15h1.98v-8.34c0-3.72 2.34-4.98 4.74-4.98v-1.92c-1.92 0-3.69.63-4.74 2.73zM263.358 18.64c-4.65 0-7.83 3.45-7.83 7.86 0 4.53 3.24 7.86 7.98 7.86 3.03 0 5.34-1.41 6.6-3.45l-1.74-1.02c-.81 1.44-2.46 2.55-4.83 2.55-3.18 0-5.55-1.89-5.97-4.95h13.17c.03-.3.06-.63.06-.93 0-4.11-2.85-7.92-7.44-7.92zm0 1.92c2.58 0 4.98 1.71 5.4 5.01h-11.19c.39-2.94 2.64-5.01 5.79-5.01zM286.848 19v2.94c-1.26-2.01-3.39-3.3-6.06-3.3-4.23 0-7.74 3.42-7.74 7.86s3.51 7.86 7.74 7.86c2.67 0 4.8-1.29 6.06-3.3V34h1.98V19h-1.98zm-5.91 13.44c-3.33 0-5.91-2.61-5.91-5.94 0-3.33 2.58-5.94 5.91-5.94s5.91 2.61 5.91 5.94c0 3.33-2.58 5.94-5.91 5.94zM309.01 18.64c-1.92 0-3.75.87-4.86 2.73-.84-1.74-2.46-2.73-4.56-2.73-1.8 0-3.42.72-4.59 2.55V19h-1.98v15H295v-8.31c0-3.72 2.16-5.13 4.32-5.13 2.13 0 3.51 1.41 3.51 4.08V34h1.98v-8.31c0-3.72 1.86-5.13 4.17-5.13 2.13 0 3.66 1.41 3.66 4.08V34h1.98v-9.36c0-3.75-2.31-6-5.61-6z" fill="#000"></path>
                                  <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"></path>
                                  <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"></path>
                              </svg> 
                          </div>
                          <div class="ml-20 text-sm"> Business Advertise evolved</div>
                      </h2>

                      <div class="">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
                          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                              <!--<div class="p-6 sm:px-20 bg-white border-b border-gray-200">-->
                              <div class="p-6 bg-white">
                                <div class="mt-0 text-2xl">Welcome to your COI Application!</div>
                                <div class="mt-0 text-sm  text-gray-500">COI, <a href="">Council of Innovation </a>provides a beautiful, robust starting point for your next business advertise application.</div>
                                <div href="{{asset('/')}}">
                                  <div class="mt-5  items-center text-sm  text-dark-700">
                                          <div>Recent</div>
                                          <div class="ml-0 text-dark-500">
                                              You have no recent any brand business opportunity, <a href=""> publish portfolio</a> to start. 
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class=" bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                                <div class="p-9">
                                    <div class="flex items-center">
                                        <div class="ml-4 text-md text-gray-600 leading-7 ">Start</div>
                                    </div>
                                    <div class="ml-6">
                                            <a href="{{asset('/sell-your-business')}}">
                                                <div class="mt-1 flex items-center text-sm  text-indigo-700">             
                                                  <div class="ml-1 text-indigo-500">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                  </div>
                                                  <div>Sell your Business</div>
                                                </div>
                                            </a>

                                            <a href="{{asset('/expand-your-business')}}">
                                                <div class="mt-1 flex items-center text-sm  text-indigo-700">
                                                  <div class="ml-1 text-indigo-500">
                                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                  </div>
                                                  <div>Expand your Business</div>
                                                </div>
                                            </a>

                                            <a href="{{asset('/business-strategy')}}">
                                              <div class="mt-1 flex items-center text-sm  text-indigo-700">
                                                <div class="ml-1 text-indigo-500">
                                                  <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </div>
                                                <div>Business Strategy</div>
                                                </div>
                                            </a>
                                            
                                            <a href="{{asset('/business-design')}}">
                                              <div class="mt-1 flex items-center text-sm  text-indigo-700">
                                                <div class="ml-1 text-indigo-500">
                                                  <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </div>
                                                <div>Business Design</div>
                                              </div>
                                            </a>
                                    </div>
                                </div>

                                <!--<div class="p-3 border-t border-dark-200 md:border-t-0 md:border-l">-->
                                <div class="p-3 "> 
                                  <div class="ml-1 text-md text-gray-600 leading-7">Walkthroughs</div>
                                  <div class="ml-4">
                                    <a href="{{route('seller.profile')}}">
                                      <div class="pl-5 mt-1 py-1 bg-gray-200 text-sm text-gray-500"> <strong>
                                          create your profolio</strong> <br> Create your business idea into business.</div></a>
                                    <a href="{{route('seller.brand')}}">
                                      <div class="pl-5 mt-1 py-1  bg-gray-200 text-sm text-gray-500"><strong>
                                          list your brand </strong><br> Get success to recognie your legimate business brand.</div></a>
                                    <a href="{{route('seller.franchise')}}">
                                      <div class="pl-5 mt-1 py-1 bg-gray-200 text-sm text-gray-500"><strong>
                                          publish business opportunity </strong><br> Sharing helps to get more interested business partner.</div></a>
                                  </div>
                                </div>

                              </div>
                          </div>
                        </div>
                      </div>
                @endif
                
              </div>
            </section>

          </div>
        </div>
      </div>
    </main>

   