
@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
<main>
      {{--<div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
            
            <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}" >
          </div>
            <div class="ps-3">
              <h3 class="text-light fs-lg mb-0">{{Auth::user()->name}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span>
            </div>
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Total Event</div>
              <h3 class="text-light"> {{$events}}</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Today</div>
              <h3 class="text-light"> {{$evento->count()}}</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Tomorrow</div>
              <h3 class="text-light"> {{$eventomorrow->count()}}</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Next Week</div>
              <h3 class="text-light"> {{$eventweek->count()}}</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Next Month</div>
              <h3 class="text-light"> {{$eventmonth->count()}}</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Three Month</div>
              <h3 class="text-light"> {{$eventthreemonth->count()}}</h3>
            </div>

            <div class="text-sm-end">
              <div class="text-light fs-base">Seller rating</div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>--}}
          
      @if($board == 'event')           
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
            <div class="mb-4 mb-lg-5">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                <li class="nav-item border-bottom"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Browse</a></li>
                <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab"> Monthly Events</a></li>
              </ul>

                <div class="d-flex badgese pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="today"> Today </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="tomorrow"> Tomorrow </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-weekend">  This weekend </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-week">  Next Week </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-weekend">  Next weekend </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-month">  This Month </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-month">  Next Month </a></span>
                </div>
                  <div class="d-flex flex-nowrap align-items-center pb-3">
                    <label class="form-label fw-normal text-nowrap mb-0 me-2">Sort by:</label>
                      <select class="form-select form-select-sm me-2"  wire:model="month">
                        <option>Choose...</option>
                        <option value="01">Jan-01</option>
                        <option value="02">Feb-02</option>
                        <option value="03">Mar-03</option>
                        <option value="04">Apr-04</option>
                        <option value="05">May-05</option>
                        <option value="06">Jun-06</option>
                        <option value="07">Jul-07</option>
                        <option value="08">Aug-08</option>
                        <option value="09">Sep-09</option>
                        <option value="10">Oct-10</option>
                        <option value="11">Nov-11</option>
                        <option value="12">Dec-12</option>
                      </select>
                  </div> 
                <div class="tab-content pt-1">
                    <!-- Product details tab-->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      <div class="row mb-5 pb-2">
                        @foreach ($monthwise as $franchise) 
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
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                              </div>

                              <div class="col-7  p-0">
                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                  {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                <div class="text-muted fs-sm text-start">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                  @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                  @endif 
                                </div>  
                                <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
                              </div>

                              <div class="col-3  p-0">
                                <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                    <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                
                    <!-- Reviews tab-->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                      <div class="row mb-5 pb-2">
                        @foreach ($expoaward as $franchise) 
                          <div class="container  ">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                    <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                  @else
                                    <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                    <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                  @endif 
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
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
                                <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
                              </div>

                              <div class="col-3  p-0">
                                <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                </div>
            </div>

            </div>
          </div>

          <form wire:submit.prevent="newlist">
            <div class="row">  
              <input type="text" class="form-control" placeholder="month..." wire:model.lazy="month">
              <input type="text" class="form-control" placeholder="share your email..." wire:model.lazy="emailClient">
              <a class="btn btn-primary" href="#" wire:click.prevent="emailSend">Email</a>
              
            </div>
          </form>

        </div>
      @endif


      <div class="container">
          <div class="row">
            <!-- Sidebar
            <aside class="col-lg-4 pe-xl-5">-->
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <!--<div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>-->
              <!-- Actual menu-->
              <!--<div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Account</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-settings.html"><i class="ci-settings opacity-60 me-2"></i>Settings</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html"><i class="ci-basket opacity-60 me-2"></i>Purchases</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-sm text-muted ms-auto">4</span></a></li>
                  </ul>
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-add-new-product.html"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                  </ul>
                  <hr>
                </div>
              </div>
            </aside>-->

            {{--<aside class="col-lg-4 pe-xl-5">
              <div class="bg-white h-100 border-end p-4">
                <div class="p-2">
                <ul class="list-unstyled fs-sm">
                    <li><a class="nav-link-style d-flex align-items-center" href="mailto:contact@example.com"><i class=" bi bi-envelope opacity-60 me-2"></i>contact@coibusiness.com</a></li>
                    <li><a class="nav-link-style d-flex align-items-center" href="#"><i class="bi bi-globe opacity-60 me-2"></i>www.coibusiness.com</a></li>
                  </ul>
                  
                  <a class="btn-social bs-facebook bs-outline bs-sm me-2 mb-2" href="#"><i class=" bi bi-facebook"></i></a>
                  <a class="btn-social bs-twitter bs-outline bs-sm me-2 mb-2" href="#"><i class="bi bi-twitter"></i></a>
                  <a class="btn-social bs-instagram bs-outline bs-sm me-2 mb-2" href="#"><i class="bi bi-instagram"></i></a>
                  <a class="btn-social bs-google bs-outline bs-sm me-2 mb-2" href="#"><i class="bi bi-google"></i></a>
                  
                  <h6>Requirement</h6>list your brand , 3 form shop  listing, exhibition listing , user requie listing 
                  <p class="fs-ms text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium viras doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  <hr class="my-2">
                  <h6 class="p-0 m-0 ">My Shop</h6> 
                  <p class=" small pb-0 my-0 ">List shop for Brand Store</p>
                  
                  <div class="form-check mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="haveshop">
                        <label class="form-check-label" for="same-address">I have Shop.</label>
                    </div>

                        <hr class="my-2">
                            <h6 class="p-1 m-0 bg-primary btn btn-sm text-white"> <strong>  COI Business</strong></h6> 
                            <p class=" small pb-0 my-0 ">Looking to Expand Business</p>
                            
                            <div class="form-check mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                        <label class="form-check-label" for="same-address">Business Expansion</label>
                    </div>
                            <hr class="my-2">
                                    <h6 class="p-1 m-0 bg-primary btn btn-sm text-white"> <strong>  COI Space</strong></h6> 
                                    <p class=" small pb-0 my-0 ">Looking for Entreprenuer Business Space</p>
                                    
                                    <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                                <label class="form-check-label" for="same-address">Business Expansion</label>
                            </div>
          
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
            </aside>--}}




            <!-- Content-->
            <section class="col-lg-12 pt-lg-4">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <!-- Title-->
                {{--<div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                  <h2 class="h5 py-2 me-2 text-center text-sm-start">
                    All Orders
                        
                        @if($board == 'job')
                            Jobs          
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.jobadd')}}"> New Job</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$jobs->count()}}</span>
                        @endif

                        @if($board == 'coupons')
                            Coupon          
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.addCoupons')}}"> New Coupon</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$coupons->count()}}</span>
                        @endif

                         @if($board == 'event')
                          Event (Expo | Awards) 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.eventadd')}}">New event</a>
                            <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$events}}</span>
                         @endif

                         @if($board == 'user')
                          User 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.jobadd')}}" >New user</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$jobs->count()}}</span>
                         @endif

                         @if($board == 'shop')
                          Shop 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.eventadd')}}">New shop</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$jobs->count()}}</span>
                         @endif

                         @if($board == 'contact')
                          Contact 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.eventadd')}}">New contact</a>
                            <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$franchises->count()}}</span>
                         @endif

                         @if($board == 'blog')
                          Blog 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.eventadd')}}" >New blog</a>
                            <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$franchises->count()}}</span>
                         @endif

                         @if($board == 'franchise')
                          Opportunities 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.addfranchise')}}">New Opportunity</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$franchises->count()}}</span>
                         @endif

                         @if($board == 'career')
                          Resume 
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.eventadd')}}">New career</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$resume->count()}}</span>
                         @endif

                        @if($board == 'category')
                             Category          
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.addcategories')}}">New Category</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$category->count()}}</span>
                        @endif

                        @if($board == 'attributes')
                          Attributes          
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.addattributes')}}">New Attribute</a>
                            <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$fattributes->count()}}</span>
                        @endif
                        
                        @if($board == 'response')
                            Response          
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.addoptios')}}"> New Response</a>
                              <span class="badge bg-faded-accent fs-sm text-body align-middle ms-2">{{$optio->count()}}</span>
                        @endif
                  </h2>

                  @if(Session::has('message'))
                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                  @endif
                  
                  <div class="py-2">
                    <div class="d-flex flex-nowrap align-items-center pb-3">
                      <label class="form-label fw-normal text-nowrap mb-0 me-2">Sort by:</label>
                      <select class="form-select form-select-sm me-2"  wire:model="board">
                        <option>Choose...</option>
                        <option value="order"  >Order</option>
                        <option value="coupons">Coupons</option>
                        <option value="job">Jobs</option>
                        <option value="response">Response</option>
                        <option value="event" selected>Events</option>
                        <option value="user">Users</option>
                        <option value="shop">Shops</option>
                        <option value="contact">Contacts</option>
                        <option value="blog">Blogs</option>
                        <option value="franchise">Opportunities</option>
                        <option value="career">Resumes</option>
                        <option value="category">Categories</option>
                        <option value="attributes">Attributes</option>
                      </select>
                      <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class="bi bi-arrow-up"></i></button>
                    </div>        
                  </div>
                </div>--}}
                <!-- edit page,  active deactive-->
                
                @if($board == 'job')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr> <th>#</th>
                        <th>title:slug:type</th>
                        <th>skills:level</th>
                        <th>desc:req</th>
                        <th>qual:exp.</th>
                        <th>Action</th></tr>
                      </thead>
                      <tbody>
                          @foreach ($jobs as $info)
                            <tr><td class="py-3 align-middle">{{$info->id}}</td>
                              <td class="py-2 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}},{{$info->department}}<br>{{$info->experience}},{{$info->type}}<br>{{$info->location_state}},{{$info->location_country}}</span></td>
                              <td class="py-2 align-middle fw-sm"></td>
                              <td class="py-2 align-middle fw-sm">{{Str::limit($info->description, 25)}}<br>{{Str::limit($info->requirement, 25)}}</td>
                              <td class="py-2 align-middle fw-sm"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                              <td class="py-2 align-middle">
                                  <div class="dropdown">
                                    <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Choose</a>
                                      <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                          @if(($info->status) === '1')
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateJobstatus({{$info->id}},'active')">Deactive</a></li>
                                          @else    
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateJobstatus({{$info->id}},'deactive')">Active</a></li>
                                          @endif
                                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                          <li><a class="dropdown-item" href="{{route('admin.jobadd')}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                          <li><a class="dropdown-item" href=""><i class="bi bi-note me-2"></i>Details</a></li>
                                      </ul>
                                  </div>      
                              </td>
                            </tr>
                          @endforeach          
                      </tbody>
                    </table>
                    {{$jobs->links('pagination-links')}}
                  </div>
                @endif
                
                @if($board == 'coupons')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                        <thead>
                          <tr> <th>#</th>
                          <th><small>Code</small></th>
                          <th><small>Type</small> </th>
                          <th><small>Value</small></th>
                          <th><small>Cart value</small></th>
                          <th><small>Expiry Date</small> </th>
                          <th><small>Package</small></th>
                          <th>Action</th></tr>
                        </thead>
                        <tbody>
                          @foreach ($coupons as $info)
                            <tr>
                              <td class="py-1 align-middle">{{$info->id}}</td>
                              <td class="py-1 align-middle">{{$info->code}}</td>
                              <td class="py-1 align-middle">{{$info->type}}</td>
                                @if($info->type == 'fixed')
                                   <td class="py-1 align-middle">Rs. {{$info->value}}</td>
                                @else
                                    <td class="py-1 align-middle"> {{$info->value}} %</td>
                                @endif
                              </td>

                              
                              <td class="py-1 align-middle">{{$info->cart_value}}</td>
                              <td class="py-1 align-middle">{{$info->expiry_date}}</td>
                              <td class="py-1 align-middle">{{$info->package}}</td>
                              <td class="py-1 align-middle">
                                
                                  <div class="dropdown">
                                  <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  @if($info->status == '1')
                                    Active
                                  @else
                                    Deactive
                                  @endif</a>
                                  <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                  @if($info->status === '1')
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateCouponstatus({{$info->id}},'0')">Deactive</a></li>
                                  @else    
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateCouponstatus({{$info->id}},'1')">Active</a></li>
                                  @endif
                                      <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="couponDelete({{$info->id}})">  Delete</a></li>
                                      <li><a class="dropdown-item" href="{{route('admin.editCoupon' , ['coupon_id' => $info->id])}}" ></i>Edit</a></li>
                                     
                                  </ul>
                                </div>   
                            </tr>
                          @endforeach          
                        </tbody>
                    </table>
                  </div>
                  {{$coupons->links('pagination-links')}}
                @endif

                @if($board == 'response')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                        <thead>
                          <tr> <th>#</th>
                          <th><small>Name</small></th>
                          <th><small>Content</small></th>
                          <th>Action</th></tr>
                        </thead>
                        <tbody>
                          @foreach ($optios as $info)
                            <tr>
                              <td class="py-1 align-middle">{{$info->id}}</td>
                              <td class="py-1 align-middle">{{$info->name}}</td>
                              <td class="py-1 align-middle">{{$info->content}}</td>
                              <td class="py-1 align-middle">
                                  <div class="dropdown">
                                  <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  @if($info->status == '1')
                                    Active
                                  @else
                                    Deactive
                                  @endif</a>
                                  <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                  @if($info->status === '1')
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateOptiostatus({{$info->id}},'0')">Deactive</a></li>
                                  @else    
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateOptiostatus({{$info->id}},'1')">Active</a></li>
                                  @endif
                                      <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="optioDelete({{$info->id}})">  Delete</a></li>
                                      <li><a class="dropdown-item" href="{{route('admin.editoptio' , ['optio_id' => $info->id])}}" ></i>Edit</a></li>      
                               </ul>
                              </div>
                             </td>   
                            </tr>
                          @endforeach          
                        </tbody>
                    </table>
                  </div>
                  {{$coupons->links('pagination-links')}}
                @endif
                
                @if($board == 'event')
                  
                  @if($expoaward->count() > 0)
                    <div class="table-responsive fs-md">
                      <table class="table table-hover mb-0">
                          <thead>
                            <tr> <th>#</th>
                            <th><small>edition| type |event name| Venue</small></th>
                            <th><small>Auidence| Exhibitor</small> </th>
                            <th><small>Category| Pavillion</small></th>
                            <th><small>Contact</small></th>
                            <th>Action</th></tr>
                          </thead>
                          <tbody>
                            @foreach ($expoaward as $info)
                              <tr>
                                <td class="py-1 align-middle">{{$info->id}}</td>
                                <td class="py-1 align-middle"><span class="align-middle badge bg-info ms-2">
                                  {{$info->edition}},{{$info->eventname}}, {{$info->eventype}},
                                  <br><span class="align-middle badge bg-info ms-2">visitors {{($info->auidence)}} | exhibitors +300 </span></span></td>

                                <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{Carbon\Carbon::parse ($info->startdate)->format('D, M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M Y')}}</span>
                                <span class="align-middle badge bg-info ms-2">{{$info->venue}},{{$info->city}}</span>{{$info->category_id}}</td>
                                
                                <td class="py-1 align-middle fw-sm">
                                  <span class="align-middle badge  bg-info ms-2">
                                  
                                  </span></td>
                                <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{($info->phone)}}
                                  {{Str::limit($info->organizer, 25)}}<br>{{($info->email)}}</span></td>
                                    
                                  <td class="py-2 align-middle">
                                    <div class="dropdown">
                                      <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
                                        @if($info->admstatus == '1')
                                            Active
                                          @else
                                            Deactive
                                        @endif</a>
                                        <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                            @if(($info->admstatus) === '1')
                                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'0')">Deactive</a></li>
                                            @else    
                                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'1')">Active</a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                            <li><a class="dropdown-item" href="{{route('admin.jobadd')}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href=""><i class="bi bi-note me-2"></i>Details</a></li>
                                        </ul>
                                    </div>      
                                  </td>
                              </tr>
                            @endforeach          
                          </tbody>
                      </table>
                    </div>
                    {{$expoaward->links('pagination-links')}}
                  @endif
                  {{$mymonth}} Current Month{{$month}}  Count{{$monthwise->count()}}
                 
                    <div class="d-flex flex-nowrap align-items-center pb-3">
                      <label class="form-label fw-normal text-nowrap mb-0 me-2">Sort by:</label>
                      <select class="form-select form-select-sm me-2"  wire:model="month">
                        <option>Choose...</option>
                        <option value="01">Jan-01</option>
                        <option value="02">Feb-02</option>
                        <option value="03">Mar-03</option>
                        <option value="04">Apr-04</option>
                        <option value="05">May-05</option>
                        <option value="06">Jun-06</option>
                        <option value="07">Jul-07</option>
                        <option value="08">Aug-08</option>
                        <option value="09">Sep-09</option>
                        <option value="10">Oct-10</option>
                        <option value="11">Nov-11</option>
                        <option value="12">Dec-12</option>
                      </select>
                    <input type="text" wire:model.lazy="searchTerm">
                    </div>    
                    
@if(is_null($searchTerm))
@else
    <div class="table-responsive fs-md d-none d-sm-block"> Search Result
      <table class="table table-hover mb-0">
          <thead>
            <tr> <th>#</th>
            <th><small>Basic </small></th>
            <th><small>Auidence| Exhibitor</small> </th>
            <th><small>Category</small></th>
            <th><small>Sector</small></th>
            <th>Action</th></tr>
          </thead>
          <tbody>
            @foreach ($searchcat as $info)
              <tr>
              
                <td class="py-1 align-middle">
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="h4 fw-light mb-0">{{$info->edition}}</div> 
                          <div class="small text-muted text-capitalize">{{$info->visitors}}</div>
                          <div class="round-circle"> ID {{$info->id}}</div> 
                    </div>
                  </div>
                </td>

                <td class="py-1 align-middle">
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        @if(Carbon\Carbon::parse ($info->startdate)->format('M') != Carbon\Carbon::parse ($info->enddate)->format('M'))
                          <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($info->startdate)->format('d')}}</div> 
                          <div class="small text-muted">{{Carbon\Carbon::parse ($info->startdate)->format('M')}} </div>
                        @else
                          <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($info->startdate)->format('d')}}</div> 
                          <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($info->startdate)->format('M')}} </div>

                        @endif 
                          <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $info->slug])}}">
                        {{ucwords(trans(Str::limit($info->eventname, 24)))}}</a></div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($info->startdate)->format('M') != Carbon\Carbon::parse ($info->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($info->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M')}}
                        @else
                          {{Carbon\Carbon::parse ($info->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">{{$info -> venue}}, {{$info -> city}}</div>
                    </div>

                    <div class="col-3  p-0">
                      <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $info->slug])}}">
                          <img src="{{url('exhibition/'.$info->image)}}" alt="{{Str::limit($info->eventname, 24)}}"></a>
                    </div>
                  </div>
                </td>
            
                <td class="py-1 align-middle fw-sm">
                  
                
                  @if(is_null($info->shtdesc))
                    <a href="{{route('admin.editcategories' , ['event_id' => $info->id])}}" class="btn btn-primary btn-sm">Category</a>
                  @else
                      
                  @php
                      $sht = json_decode($info->shtdesc)
                  @endphp

                    @foreach ($sht as $newtre)
                      {{$newtre}}
                    @endforeach
                     

                  @endif
                </td>
                <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{($info->phone)}}
                <br>{{($info->email)}}</span></td>
                    
                  <td class="py-2 align-middle">
                    <div class="dropdown">
                      <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
                        @if($info->admstatus == '1')
                            Active
                          @else
                            Deactive
                        @endif</a>
                        <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                            @if(($info->admstatus) === '1')
                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'0')">Deactive</a></li>
                            @else    
                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'1')">Active</a></li>
                            @endif
                            <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                            <li><a class="dropdown-item" href="{{route('adminevent.detail',['slug' => $info->slug])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                        </ul>
                    </div>        
                  </td>
              </tr>
            @endforeach          
          </tbody>
      </table>
    </div>  
@endif             

                @if(is_null($month))
                @else
                  <div class="table-responsive fs-md d-none d-sm-block">
                    <table class="table table-hover mb-0">
                        <thead>
                          <tr> <th>#</th>
                          <th><small>Basic </small></th>
                          <th><small>Auidence| Exhibitor</small> </th>
                          <th><small>Category</small></th>
                          <th><small>Sector</small></th>
                          <th>Action</th></tr>
                        </thead>
                        <tbody>
                          @foreach ($monthwise as $info)
                            <tr>
                              
                              <td class="py-1 align-middle">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0">{{$info->edition}}</div> 
                                        <div class="small text-muted text-capitalize">{{$info->visitors}}</div>
                                        <div class="round-circle"> ID {{$info->id}}</div> 
                                  </div>
                                </div>
                              </td>

                              <td class="py-1 align-middle">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                      @if(Carbon\Carbon::parse ($info->startdate)->format('M') != Carbon\Carbon::parse ($info->enddate)->format('M'))
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($info->startdate)->format('d')}}</div> 
                                        <div class="small text-muted">{{Carbon\Carbon::parse ($info->startdate)->format('M')}} </div>
                                      @else
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($info->startdate)->format('d')}}</div> 
                                        <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($info->startdate)->format('M')}} </div>

                                      @endif 
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $info->slug])}}">
                                      {{ucwords(trans(Str::limit($info->eventname, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                      @if(Carbon\Carbon::parse ($info->startdate)->format('M') != Carbon\Carbon::parse ($info->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($info->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M')}}
                                      @else
                                        {{Carbon\Carbon::parse ($info->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M')}}
                                      @endif 
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucfirst(trans($info -> venue))}}, {{ucfirst(trans($info -> city))}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $info->slug])}}">
                                        <img src="{{url('exhibition/'.$info->image)}}" alt="{{Str::limit($info->eventname, 24)}}"></a>
                                  </div>
                                </div>
                              </td>
                          
                              <td class="py-1 align-middle fw-sm">
                                
                                @if(is_null($info->shtdesc))
                                  <a href="{{route('admin.editcategories' , ['event_id' => $info->id])}}" class="btn btn-primary btn-sm">Category</a>
                                @else
                                    
                                  
                                    {{$info->shtdesc}}
                                  


                                @endif
                                </td>
                              <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{($info->phone)}}
                                <br>{{($info->email)}}</span></td>
                                  
                                <td class="py-2 align-middle">
                                  <div class="dropdown">
                                    <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
                                      @if($info->admstatus == '1')
                                          Active
                                        @else
                                          Deactive
                                      @endif</a>
                                      <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                          @if(($info->admstatus) === '1')
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'0')">Deactive</a></li>
                                          @else    
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'1')">Active</a></li>
                                          @endif
                                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                          <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                          <li><a class="dropdown-item" href="{{route('adminevent.detail',['slug' => $info->slug])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                                      </ul>
                                  </div>        
                                </td>
                            </tr>
                          @endforeach          
                        </tbody>
                    </table>
                  </div>
                @endif                  

                  {{--<div class="table-responsive fs-md d-lg-none">
                    <table class="table table-hover mb-0">
                        <thead>
                          <tr> <th>#</th>
                          <th><small>edition| type |event name| Venue</small></th>
                          <th><small>Auidence| Exhibitor</small> </th>
                          <th><small>Category| Pavillion</small></th>
                          <th><small>Contact</small></th>
                          <th>Action</th></tr>
                        </thead>
                        <tbody>
                          @foreach ($monthwise as $info)
                            <tr>
                              <td class="py-1 align-middle">{{$info->id}}</td>
                              <td class="py-1 align-middle"><span class="align-middle badge bg-info ms-2">
                                {{$info->edition}},{{$info->eventname}}, {{$info->eventype}}, <span class="align-middle badge bg-info ms-2">{{$info->venue}},{{$info->city}} </span>
                                <br>
                                <span class="align-middle badge bg-info ms-2">
                                {{Carbon\Carbon::parse ($info->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M Y')}}</span>
                                </span></td>

                              <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{Carbon\Carbon::parse ($info->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M Y')}}</span>
                              <span class="align-middle badge bg-info ms-2">visitors {{($info->auidence)}} | exhibitors +300 </span>{{$info->category_id}}</td>
                              
                              <td class="py-1 align-middle fw-sm">
                                <span class="align-middle badge  bg-info ms-2">
                                
                                </span></td>
                              <td class="py-1 align-middle fw-sm"><span class="align-middle badge bg-info ms-2">{{($info->phone)}}
                                {{Str::limit($info->organizer, 25)}}<br>{{($info->email)}}</span></td>
                                  
                                <td class="py-2 align-middle">
                                  <div class="dropdown">
                                    <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
                                      @if($info->admstatus == '1')
                                          Active
                                        @else
                                          Deactive
                                      @endif</a>
                                      <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                          @if(($info->admstatus) === '1')
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'0')">Deactive</a></li>
                                          @else    
                                              <li><a class="dropdown-item" href="#" wire:click.prevent="updateEventstatus({{$info->id}},'1')">Active</a></li>
                                          @endif
                                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                          <li><a class="dropdown-item" href="{{route('admin.jobadd')}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                          <li><a class="dropdown-item" href=""><i class="bi bi-note me-2"></i>Details</a></li>
                                      </ul>
                                  </div>        
                                </td>
                            </tr>
                          @endforeach          
                        </tbody>
                    </table>
                  </div>--}}

                 
                @endif

                @if($board == 'user')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                            <thead>
                              <tr> <th>#</th>
                      <th>Name </th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                            </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($users as $user)
                                  <tr>
                                  @if($user->email_verified_at == 'null')
                    <tr class="bg-primary">
                      <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">{{$user->id}} </a></td>
                      <td class="py-3">{{$user->name}}<br> <span class="badge bg-info m-0">{{$user->email}}</span></td>
                      <td class="py-3">{{$user->utype}}</td>
                      <td class="py-3">
                      </td>
                    </tr>

                    @else

                  <tr class="bg-red">
                      <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">{{$user->id}} </a></td>
                      <td class="py-3">{{$user->name}}<br> <span class="badge bg-info m-0">{{$user->email}}</span></td>
                      <td class="py-3">{{$user->utype}}</td>
                      <td class="py-3">

                      <select class="form-select form-select-sm me-2"  wire:model="board">
                        <option >Choose...</option>
                          <option value="job">Job</option>
                          <option value="event">Event</option>
                          <option value="user">User</option>
                          <option value="shop">Shop</option>
                          <option value="contact">Contact</option>
                          <option value="blog">Blog</option>
                          <option value="franchise">Franchise</option>
                          <option value="career">Resume</option>
                        </select>

                      </td>
                      <td class="py-3 align-middle">
                        <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                        <i class="bi bi-pencil"></i></a>
                        <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$user->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                            <div class=" bi bi-x"></div></a></td>
                    </tr>
                    @endif
                      </tr>
                    @endforeach          
                    </tbody>
                    </table>
                    {{$users->links('pagination-links')}}
                  </div>
                  
                @endif

                @if($board == 'shop')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                            <thead>
                              <tr> <th>#</th>
                              <th>title:slug:type</th>
                              <th>skills:level</th>
                              <th>desc:req</th>
                              <th>qual:exp.</th>
                              <th>Status</th>
                              <th>Action</th></tr>
                            </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($jobs as $info)
                                  <tr><td class="py-3 align-middle">{{$info->id}}</td>
                                    <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}},{{$info->department}}<br>{{$info->experience}},{{$info->type}}<br>{{$info->location_state}},{{$info->location_country}}</span></td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->skills, 25)}}<br>{{$info->level}}</td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->description, 25)}}<br>{{Str::limit($info->requirement, 25)}}</td>
                                    <td class="py-3 align-middle fw-sm"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                                    <td class="py-3 align-middle">
                                      @if($info->status == 'active')
                                        <span class="badge bg-success m-0">Active</span>
                                        @else
                                        <span class="badge bg-danger m-0">Deactive</span>
                                      @endif </td>
                                    <td class="py-3 align-middle"><a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil"></i></a><a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                        <div class=" bi bi-x"></div></a> </td></tr>
                                @endforeach          
                            
                            </tbody>
                    </table>
                  </div>
                  <div class="text-end">
                    <button class="btn btn-primary" >Submit new ticket</button>
                  </div>
                @endif

                @if($board == 'contact')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                            <thead>
                              <tr> <th>#</th>
                              <th>title:slug:type</th>
                              <th>skills:level</th>
                              <th>desc:req</th>
                              <th>qual:exp.</th>
                              <th>Status</th>
                              <th>Action</th></tr>
                            </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($jobs as $info)
                                  <tr><td class="py-3 align-middle">{{$info->id}}</td>
                                    <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}},{{$info->department}}<br>{{$info->experience}},{{$info->type}}<br>{{$info->location_state}},{{$info->location_country}}</span></td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->skills, 25)}}<br>{{$info->level}}</td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->description, 25)}}<br>{{Str::limit($info->requirement, 25)}}</td>
                                    <td class="py-3 align-middle fw-sm"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                                    <td class="py-3 align-middle">
                                      @if($info->status == 'active')
                                        <span class="badge bg-success m-0">Active</span>
                                        @else
                                        <span class="badge bg-danger m-0">Deactive</span>
                                      @endif </td>
                                    <td class="py-3 align-middle"><a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil"></i></a><a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                        <div class=" bi bi-x"></div></a> </td></tr>
                                @endforeach          
                            
                            </tbody>
                    </table>
                  </div>
                  <div class="text-end">
                    <button class="btn btn-primary" >Submit new ticket</button>
                  </div>
                @endif

                @if($board == 'blog')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                            <thead>
                              <tr> <th>#</th>
                              <th>title:slug:type</th>
                              <th>skills:level</th>
                              <th>desc:req</th>
                              <th>qual:exp.</th>
                              <th>Status</th>
                              <th>Action</th></tr>
                            </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($jobs as $info)
                                  <tr><td class="py-3 align-middle">{{$info->id}}</td>
                                    <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}},{{$info->department}}<br>{{$info->experience}},{{$info->type}}<br>{{$info->location_state}},{{$info->location_country}}</span></td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->skills, 25)}}<br>{{$info->level}}</td>
                                    <td class="py-3 align-middle fw-sm">{{Str::limit($info->description, 25)}}<br>{{Str::limit($info->requirement, 25)}}</td>
                                    <td class="py-3 align-middle fw-sm"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                                    <td class="py-3 align-middle">
                                      @if($info->status == 'active')
                                        <span class="badge bg-success m-0">Active</span>
                                        @else
                                        <span class="badge bg-danger m-0">Deactive</span>
                                      @endif </td>
                                    <td class="py-3 align-middle"><a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil"></i></a><a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                        <div class=" bi bi-x"></div></a> </td></tr>
                                @endforeach          
                            
                            </tbody>
                    </table>
                  </div>
                  <div class="text-end">
                    <button class="btn btn-primary" >Submit new ticket</button>
                  </div>
                @endif

                @if($board == 'franchise')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                          <thead>
                            <tr> 
                              <th>#</th>
                              <th>Franchise <br><small>Industry Sector</small></th>
                              <th>Area<small>(Sqm)</small><br><small>max-min</small></th>
                              <th>Investment <br> <small>max-min</small></th>
                              
                              <th>Action</th>
                            </tr>
                          </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($franchises as $franchise)
                                  <tr>
                                  <td class="py-3">
                      <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                      {{$franchise->id}} </a></td>
                      
                      <td class="py-3">
                      <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                      {{$franchise->brand_name}} <br>
                      <span class="badge bg-info m-0">
                      {{$franchise->category->industry}}<i class="bi bi-chevron-right"></i>{{$franchise->sector}}</br></span>
                      </a></td>
                      <td class="py-3">
                      <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                      {{$franchise->max_area}} - {{$franchise->min_area}} </a></td>
                      <td class="py-3">
                      <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                      {{$franchise->max_investment}} - {{$franchise->min_investment}} L </a></td>

                    
                      
                      <td class="py-3 align-middle">
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          @if($franchise->status == 'active')
                      <span class="badge bg-success m-0">Active</span>
                      @else
                      <span class="badge bg-danger m-0">Deactive</span>
                      @endif
                          </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updatefranchisestatus({{$franchise->id}},'active')">Active</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updatefranchisestatus({{$franchise->id}},'deactive')">Deactive</a></li>
                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Fdelete({{$franchise->id}})"> Delete</a></li>
                          <li><a class="dropdown-item" href="{{route('admin.editfranchise',['franchise_id'=>$franchise->id])}}"><i class="bi bi-pencil"></i>Edit</a></li>
                          <li><a class="dropdown-item" href="">Detail</a></li>
                        </ul></div>
                      </td>
                    
                                  </tr>
                                @endforeach          
                            
                            </tbody>
                    </table>
                    {{$franchises->links('pagination-links')}}
                  </div>
                  
                @endif

                @if($board == 'career')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                            <thead>
                              <tr> <th>#</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Resume</th>
                                <th>Review</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!--<tr>
                                <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                              </tr>--> 
                            
                                @foreach ($resume as $info)
                                  <tr>
                                  <td class="py-3 align-middle">{{$info->id}}</td>
                    <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->name}} 
                                                            </span> - <small>{{$info->created_at}} </small> {{$info->email}}</td>
                    
                    <td class="py-3 align-middle">{{$info->message}}</td>
                    <td class="py-3 align-middle">{{$info->resume}} 
                    <button class="btn btn-outline-secondary btn-sm px-2" type="button" ><i class="bi bi-arrow-up"></i></button>    
                  </td>
                  
                    <td class="py-3 align-middle">
                      @if($info->status == 'new')
                      <span class="badge bg-success m-0">new</span>
                      @else
                      <span class="badge bg-danger m-0">old</span>
                      @endif
                      </td>

                    <td class="align-middle">
                    <a class=" nav-link-style "  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                    <i class="bi bi-pencil"></i></a>

                    <a class="nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                        <i class=" bi bi-x"></i></a> </td>
                                  </tr>
                                @endforeach          
                            
                            </tbody>
                    </table>
                    {{$resume->links('pagination-links')}}
                  </div>
                
                @endif

                @if($board == 'attributes')
                   @livewire('admin.admin-attributes-component')
                @endif

                @if($board == 'category')
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li class="nav-item"><a class="nav-link px-0 active" href="#group" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>Group</div>
                          <div class="d-lg-none text-center"><i class="ci-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Franchise</span></div></a></li>
                      <li class="nav-item"><a class="nav-link px-0" href="#category" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Category {{$categories->count()}}</div>
                          <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a></li>
                      <li class="nav-item"><a class="nav-link px-0" href="#sector" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class="ci-bell opacity-60 me-2"></i>Sub-Category {{$sector->count()}}</div>
                          <div class="d-lg-none text-center"><i class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Social</span></div></a></li>
                      <li class="nav-item"><a class="nav-link px-0" href="#business" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Business {{$service->count()}}</div>
                          <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a></li>   
                  </ul>

                  <!-- Tab content-->
                  <div class="tab-content">
                    <!-- category-->
                    <div class="tab-pane fade show active" id="group" role="tabpanel">
                        <!-- Orders list-->
                        <div class="table-responsive fs-md mb-4">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Industry<span class="badge bg-danger">{{$catcount->count()}}</span></th>
                                <th>Sector<span class="badge bg-danger">{{$sector->count()}}</span></th>
                                <th>Business<span class="badge bg-danger">{{$service->count()}}</span></th>
                              </tr>
                            </thead>
                            
                            <tbody>
                            @foreach($categ as $category)
                              <tr>
                                <td class="py-3">
                                <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                                {{$category->id}} </a></td>

                                <td class="py-3">{{$category->industry}} 
                                
                                </td>

                                <td class="py-3">
                                  @foreach($category->sector as $cat)
                                  <span class="badge bg-success m-0">{{$cat->sector}}</span>
                                  @endforeach
                                </td>

                                <td class="py-3">
                                  @foreach($category->service as $cat)
                                  <span class="badge bg-success m-0">{{$cat->business}}</span>
                                  @endforeach
                                </td>       
                              
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- Pagination-->
                      {{$categ->links('pagination-links')}}
                    </div>

                    <!--Sector-->
                    <div class="tab-pane fade " id="sector" role="tabpanel">
                        <!-- Orders list-->
                        <div class="table-responsive fs-md mb-4">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Sector</th>
                                
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($sectorr as $category)
                                  <tr>
                                    <td class="py-3">
                                    <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                                    {{$category->id}} </a></td>
                                    <td class="py-3">{{$category->sector}} </td>
                                    
                                    <td class="py-3">
                                    @if($category->status == 'active')
                                    <span class="badge bg-success m-0">Active</span>
                                    @else
                                    <span class="badge bg-danger m-0">Deactive</span>
                                    @endif
                                    </td>

                                  <td class=" py-3 align-middle">
                                  <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                                  <i class="bi bi-pencil"></i></a>
                                  <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                  <i class=" bi bi-x"></i></a></td>
                                  </tr>
                                  @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- Pagination-->
                        {{$sectorr->links('pagination-links')}}
                    </div>

                    <!-- business-->
                    <div class="tab-pane fade" id="business" role="tabpanel">
                      <!-- Orders list-->
                      <div class="table-responsive fs-md mb-4">
                        <table class="table table-hover mb-0">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Business   <span class="badge bg-danger"></span></th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                          <tbody>
                            @foreach ($business as $category)
                              <tr>
                                <td class="py-3">
                                <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                                {{$category->id}} </a></td>
                                <td class="py-3">{{$category->business}} 
                                <span class="badge bg-danger"> 22 </span>
                                </td>
                                
                                <td class="py-3">
                                @if($category->status == 'active')
                                <span class="badge bg-success m-0">Active</span>
                                @else
                                <span class="badge bg-danger m-0">Deactive</span>
                                @endif
                                </td>

                                <td class=" py-3 align-middle">
                                <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                                <i class="bi bi-pencil"></i></a>
                                <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                <i class=" bi bi-x"></i></a> </td>
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- Pagination-->
                      {{$business->links('pagination-links')}}
                    </div>

                    <!-- category-->
                    <div class="tab-pane fade" id="category" role="tabpanel">
                      <!-- Orders list-->
                      <div class="table-responsive fs-md mb-4">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Industry   <span class="badge bg-danger"></span></th>
                            
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($categ as $category)
                            <tr>

                              <td class="py-3">
                              <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                              {{$category->id}} </a></td>
                              <td class="py-3">{{$category->industry}} 
                              <span class="badge bg-danger"> 22 </span>
                              </td>
                            
                            
                              
                              <td class="py-3">
                              @if($category->status == 'active')
                              <span class="badge bg-success m-0">Active</span>
                              @else
                              <span class="badge bg-danger m-0">Deactive</span>
                              @endif
                              </td>

                            <td class=" py-3 align-middle">
                            <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                            <i class="bi bi-pencil"></i></a>

                            <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                <i class=" bi bi-x"></i></a> </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                 </div>               
                @endif
              </div>  
              
                @if($board == 'order')
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                        <thead>
                          <tr> 
                          <th><small>Order Id</small></th>
                          <th><small>Total <div class="fw-normal">Subtotal + Disc. + Tax</div></small> </th>
                          <th><small>Name | zipcode <div class="fw-normal">Mobile | e-mail</div></small></th>
                          <th><small>Status</small></th>
                          <th>Action</th></tr>
                        </thead>
                        <tbody>
                          @foreach ($orders as $order)
                            <tr>
                              <td class="py-1 align-middle">{{$order->id}} </td>
                              <td class="py-1 align-middle">{{$order->total}} | <span class="badge bg-primary"> {{$order->status}}</span><div class="fw-normal badge bg-success">{{$order->subtotal}} + {{$order->discount}} + {{$order->tax}}</div> </td>
                              
                              <td class="py-1 align-middle">{{$order->firstname}} - {{$order->lastname}} | {{$order->zipcode}}
                              <div class="fw-normal badge bg-success">{{$order->mobile}} {{$order->email}} </div>
                              </td>
                              <td class="py-1 align-middle"> <span class="badge bg-success">{{$order->created_at}}</span></td>
                              <td class="py-2 align-middle">
                                <div class="dropdown">
                                  <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$order->status}}</a>
                                  <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder()">Details</a></li>
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder">Suspend</a></li>
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder">Act Admin</a></li>
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder">Delivered</a></li>
                                      <li><a class="dropdown-item" href="#" wire:click.prevent="cancelOrder()">Canceled</a></li>
                                      <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="oDelete({{$order->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                  </ul>
                                </div>      
                              </td>
                            </tr>
                          @endforeach          
                        </tbody>
                    </table>
                  </div>
                  {{$orders->links('pagination-links')}}
                @endif
            </section>


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
