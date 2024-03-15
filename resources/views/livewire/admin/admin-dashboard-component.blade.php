
@section('page_description','Dashboard')
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
       
<!--Mobile event start View-->      
    @if($board == 'event')          
      <div class="container d-lg-none">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            
            <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#requuest" data-bs-toggle="tab" role="tab">Request {{$expoaward->count()}}</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm active" href="#details" data-bs-toggle="tab" role="tab">Monthly {{$monthwise->count()}}</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab">Search {{$searchCat->count()}}</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviewID" data-bs-toggle="tab" role="tab">ID </a></li>
                </ul>

                {{--<div class="d-flex badgese pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="today"> Today </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="tomorrow"> Tomorrow </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-weekend">  This weekend </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-week">  Next Week </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-weekend">  Next weekend </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-month">  This Month </a></span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-month">  Next Month </a></span>
                </div>--}}

                <div class="tab-content pt-1">
                  <!-- Request tab-->
                    <div class="tab-pane fade" id="requuest" role="tabpanel">
                      <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                        <div class="row mb-5 pb-2">
                         @foreach ($expoaward as $franchise) 
                            <div class="container  ">
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
                            </div>
                          @endforeach
                        </div>
                    </div>

                  <!-- Product details tab-->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      <div class="d-flex flex-nowrap align-items-center pb-3">
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
                      <div class="row mb-5 pb-2">
                        @foreach ($monthwise as $franchise) 
                          <div class="container">
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
                                    <div class="badge bg-secondary fs-xs">
                                      @if (Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                                          upco
                                      @elseif (Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                          first
                                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                          ongoi
                                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                        last
                                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                                        ended
                                      @endif
                                    </div>


                                    {{--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">try</button>--}}
                              </div>

                              <div class="col-7  p-0">
                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                  {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                <div class="text-muted fs-sm text-start">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                  @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                  @endif 
                                </div>  
                                <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{ucfirst(trans($franchise -> city))}}</div>
                                <div class="text-muted fs-xs text-start"> <span class="bg-primary">  <i class="bi bi-eye"></i> {{$franchise -> view_count}}</span> 
                                <span class="bg-primary">
                                 @php
                                    $getvalue = $franchise->id;
                                    $countReview = DB::table('rates')->where('event_id', $getvalue)->count()
                                 @endphp
                                  <i class="bi bi-pencil"></i> {{$countReview}}
                                </span>
                              </div>
                              </div>

                              <div class="col-3  p-0">
                                @if(is_null($franchise->image))
                                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                                @else

                                  <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                @endif
                              </div>
                            </div>
                          </div>
                          
                          
                          {{--<div class="accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header"></h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <ul>
                                        <li>Details</li>
                                        <li>Edit</li>
                                        <li>update</li>
                                        <li></li>
                                      </ul>
                                  </div>
                                  </div>
                                </div>
                              </div>--}}
                        @endforeach
                      </div>
                    </div>
                
                  <!-- Reviews tab-->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                      <input type="text" class="form-control" placeholder="search" wire:model.lazy="searchTerm">
                        <div class="row mb-5 pb-2">
                          @if(is_null($searchTerm))

                            <div class="container">
                            Find Some Events
                            </div>  

                          @else
                            @foreach ($searchCat as $franchise) 
                              <div class="container  ">
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
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                      @endif 
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{$franchise -> city}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                    
                                  <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$franchise->id}})"> 
                                  <i class="bi bi-x me-2"></i></a>
                                  
                                  <a class="btn btn-sm btn-primary" href="#" wire:click.prevent="updateInspectionStatus({{$franchise->id}}, '1')">Visit</a>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          @endif
                        </div>
                    </div>

                  <!--Id-->
                    <div class="tab-pane fade" id="reviewID" role="tabpanel">
                      
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="findIDs" aria-label="search with ID" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">  <i class="bi bi-search"></i> </button>
                        </div>

                        <div class="row mb-5 pb-2">
                          @if(is_null($findIDs))
                            <div class=" text-center small"> Not found</div>
                          @else
                            @foreach ($searchId as $franchise) 
                              <div class="container  ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                        <div class="h5 fw-light mb-0">{{$franchise->id}}</div> 
                                        <div class="small text-muted">ID </div>
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
                                    <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{$franchise -> city}}</div>
                                  </div>

                                  <div class="col-3 p-0">
                                      <a href="{{route('admin.eventEdit',['event_id' => $franchise->id, 'board' => 'edit'])}}" class="btn btn-primary btn-sm"> <i class="bi bi-plus-circle"></i> </a>
                                      <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$franchise->id}})"> <i class="bi bi-x me-2"></i></a>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          @endif
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
      </div>
    @endif

    @if($board == 'event')
      {{--<div class="container">
          <div class="d-none d-sm-block">
            <div class="row g-1 ">

              <div class="col-sm-3">
                <select class="form-control" type="text"   wire:model.lazy="month"  placeholder="Provide short title of your request">
                  <option >Choose</option>
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

              <div class="col-sm-4">
                  <input class="form-control" type="text" placeholder="Search ID" wire:model.lazy="searchTerm">
              </div>
            </div>
          </div>

          @if($expoaward->count() > 0)
            <div class="table-responsive fs-md d-none d-sm-block">New Request
              <table class="table table-hover mb-0">
                  <thead>
                    <tr> <th>#</th>
                    <th><small>Basic {{$expoaward->count()}}</small></th>
                  
                    <th><small>Category</small></th>
                    <th><small>Contact</small></th>
                    <th>Action</th></tr>
                  </thead>
                  <tbody>
                    @foreach ($expoaward as $info)
                    <tr>
                          
                          <td class="py-1 align-middle">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$info->edition}}</div> 
                                    <div class="small text-muted text-capitalize">{{$info->auidence}}</div>
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
                                      <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id  , 'board' => 'edit'])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
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
          
          @if($expireplan->count() > 0)
            @else
              <div class="table-responsive fs-md d-none d-sm-block">
                <table class="table table-hover mb-0">
                    <thead>
                      <tr> <th>#</th>
                      <th><small>Basic {{$expireplan->count()}} </small></th>
                      <th><small>Category</small></th>
                      <th><small>Contact</small></th>
                      <th>Action</th></tr>
                    </thead>
                    <tbody>
                      @foreach ($expireplan as $info)
                      <tr>
                          
                          <td class="py-1 align-middle">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$info->edition}}</div> 
                                    <div class="small text-muted text-capitalize">{{$info->auidence}}</div>
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
                      

                            @php
                                $sht = DB::table('dencos')->where('id', $info->id)->get()
                            @endphp
                           
                          <td class="py-1 align-middle fw-sm">
                            @if(is_null($info->shtdesc))
                              <a href="{{route('admin.editcategories' , ['event_id' => $info->id])}}" class="btn btn-primary btn-sm">Category</a>
                            @else
                              {{$sht}}
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
                                      <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id,'board' => 'edit'])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
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
        
          @if(is_null($searchTerm))
            @else
                <div class="table-responsive fs-md d-none d-sm-block"> Search Result
                  <table class="table table-hover mb-0">
                      <thead>
                        <tr> <th>#</th>
                        <th><small>Search Term {{$searchCat->count()}}</small></th>
                        
                        <th><small>Contact</small></th>
                        <th>Action</th></tr>
                      </thead>
                      <tbody>
                        @foreach ($searchCat as $info)
                          <tr>
                          
                            <td class="py-1 align-middle">
                              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                      <div class="h4 fw-light mb-0">{{$info->edition}}</div> 
                                      <div class="small text-muted text-capitalize">{{$info->auidence}}</div>
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
                                        <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id, 'board' => 'edit'])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
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
                      <th><small>Monthly {{$monthwise->count()}} </small></th>
                      <th><small>Contact</small></th>
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
                                      <li><a class="dropdown-item" href="{{route('admin.eventEdit',['event_id' => $info->id, 'board' => 'edit'])}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
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

        </div>
          <div class="table-responsive fs-md d-lg-none">
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
                                  <li><a class="dropdown-item" href=""><i class="bi bi-pencil me-2"></i>Edit</a></li>
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
<!--event stop--> 


      @if($board == 'findSearch')
        @foreach($findSearch as $searcho)
         {{$searcho->search}}
         <hr>
        @endforeach
      @endif


<!-- Start Cleint-->
      @if($board == 'client')
        <!-- <div class="container">
          <form wire:submit.prevent="emailSend">
             
              <div class="col-lg-4 col-md-4 ">
                      <label class="form-label fw-normal text-nowrap mb-0 me-2">Sort by:</label>
                      <select class="form-select form-select-sm me-2"  wire:model.lazy="month">
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
              <input type="text" class="form-control" placeholder="share your email..." wire:model.lazy="emailClient">
             
             <button type="submit"></button>
            </div>
          </form>
        </div> --><div class="container">
        @foreach($findInspection as $franchise)
          
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
                    <div class="badge bg-secondary fs-xs">
                      @if (Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                          upco
                      @elseif (Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                          first
                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                          ongoi
                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                        last
                      @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                        end
                      @endif
                    </div>


                    {{--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">try</button>--}}
              </div>

              <div class="col-7  p-0"> 
                <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                  {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                <div class="text-muted fs-sm text-start">
                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M You')}}
                  @else
                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                  @endif 
                </div>  
                <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
                <div class="text-muted fs-xs text-start"> <span class="bg-primary">  <i class="bi bi-eye"></i> {{$franchise -> view_count}}</span> 
                <span class="bg-primary">
                  @php
                    $getvalue = $franchise->id;
                    $countReview = DB::table('rates')->where('event_id', $getvalue)->count()
                  @endphp
                  <i class="bi bi-pencil"></i> {{$countReview}}
                </span>
              </div>
              </div>

              <div class="col-3  p-0">
                @if(is_null($franchise->image))
                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.multipartners',['event_id' => $franchise->id, 'formm' => 'client' ])}}">Meetups</a>
                @else

                  <a class="card-img-top d-block overflow-hidden" href="{{route('admin.multipartners',['event_id' => $franchise->id, 'formm' => 'client' ])}}">
                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                @endif
              </div>
            </div>
          
        @endforeach
        </div>
        
      @endif
<!--Stop Client-->

      @if($board == 'visitcard')
          
        <div class=" container small">
            <input type="checkbox" value="1" wire:model="lookingAddFromIMage" name="" id=""> Search
        </div>

        @if($lookingAddFromIMage == 1)
                  <div class="container">
                      <div class="fs-md">Update Contact Card</div>
                      <form wire:submit.prevent="directbrandBcontact">
                          <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                          <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                          
                          <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                          
                          <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                          <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                          <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                          <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                          
                          <button class="form-control  btn btn-primary" type="submit">Submit</button>
                      </form>
                  </div>
        
                  <div class="container my-5">
                      <div class="fs-md">
                      Contact details 
                      </div>
                          @foreach ($getContact as $franchise) 
                              <div class="">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                      
                                          <div class="h4 fw-light mb-0"> 1 </div> 
                                          <div class="small text-muted">chk </div>
                                          
                                          <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                      </div>

                                      <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                          {{$franchise->name}} {{$franchise->designation}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                          {{$franchise->email}}
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                          {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                              <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                              
                                          {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                              <i class="bi bi-chevron-double-right"></i></a> 
                                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}
                                              <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                             </a>

                                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="detecto({{$franchise->id}})"> 
                                                <i class="bi bi-plus"></i>
                                              </a>
                                          </div>
                                  </div>
                              </div>
                          @endforeach
                  </div>

        @else
           <div class="container mt-5">
              <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchBrandTerm">
              
              <div class="row mb-5 pb-2">
                @if(is_null($searchBrandTerm))

                  <div class="container">
                    Find Some Events
                  </div>  

                @else

                  @if($searchBrandcat->count() == 0)
                   
                    <div class="container">
                      <div class="fs-md">Update Contact Card</div>
                      <form wire:submit.prevent="directbrandBcontact">
                          <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                          <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                          
                          <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                          
                          <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                          <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                          <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                          <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                          
                          <button class="form-control  btn btn-primary" type="submit">Submit</button>
                      </form>
                    </div>
          
                    <div class="container my-5">
                        <div class="fs-md">
                        Contact details 
                        </div>
                            @foreach ($getContact as $franchise) 
                                <div class="">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                        <div class="col  pr-0">
                                        
                                            <div class="h4 fw-light mb-0"> 1 </div> 
                                            <div class="small text-muted">chk </div>
                                            
                                            <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                        </div>

                                        <div class="col-7  p-0">
                                          <div class="fs-md fw-normal text-start">
                                            <a class="text-dark" href="#">{{$franchise->name}} {{$franchise->designation}}</a>
                                          </div>
                                          <div class="text-muted fs-sm text-start">
                                              {{$franchise->email}}
                                          </div>  
                                          <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                        </div>

                                        <div class="col-3  p-0">
                                            {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                                <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                                
                                            {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                                <i class="bi bi-chevron-double-right"></i></a> 
                                                <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}
                                                <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                             </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>

                  @else

                    @foreach ($searchBrandcat as $franchiseo) 
                        <div class="">
                          <div class="fw-light h5 mb-0 pb-0">{{$franchiseo -> brand_name}}</div>
                          <div class="small text-muted fw-bold">{{$franchiseo -> organisation}}</div>
                            
                          @php
                            $findBcontact = DB::table('bcontacts')->where('brand_id', $franchiseo -> id)->get();
                          @endphp

                          @if($findBcontact->count() == 0)
                            <h3 class="fw-light h5 mb-0 pb-0">Add Contact</h3>
                            <a href="{{route('admin.brandDetail',['brand_id' => $franchiseo->id])}}" class="btn btn-primary btn-sm">NO More Reference</a>

                          @else

                          <a href="{{route('admin.brandDetail',['brand_id' => $franchiseo->id])}}" class="btn btn-primary btn-sm">Add</a>
                            @foreach($findBcontact as $franchise)
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                    
                                        <div class="h4 fw-light mb-0"> 1 </div> 
                                        <div class="small text-muted">chk</div>
                                        
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                          {{$franchise->name}}  <span class="badge badge-primary">{{$franchise->designation}}</span> </a></div>
                                      <div class="text-muted fs-sm text-start">
                                          {{$franchise->email}}
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                        {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                            <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                            
                                        {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <i class="bi bi-chevron-double-right"></i></a> 
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                                            <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                              </a>
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="detecto({{$franchiseo->id}},'update')">
                                                  <i class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            @endforeach
                          @endif
                        </div>

                        <hr class="">
                    @endforeach

                  @endif

                @endif
              </div>
            </div>
        @endif

      @endif

<!--Start job -->
      @if($board == 'job')
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
              <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm active" href="#jobrequuest" data-bs-toggle="tab" role="tab">Job</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm " href="#Appletdetails" data-bs-toggle="tab" role="tab">Applet</a></li>
                </ul>

                    
                  <div class="tab-content pt-1">
                      <!-- Request tab-->
                      <div class="tab-pane fade show active" id="jobrequuest" role="tabpanel">
                        <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                          <div class="row mb-5 pb-2">
                            @foreach ($jobs as $franchise) 
                              <div class="container  ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                     
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->updated_at)->format('d')}}</div> 
                                        <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->updated_at)->format('M')}} </div>
                                     
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.job',['slug' => $franchise->slug])}}">
                                      {{ucwords(trans(Str::limit($franchise->title, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                     
                                        {{Carbon\Carbon::parse ($franchise->updated_at)->format('D, d M')}}
                                     
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> location_state))}}, {{ucfirst(trans($franchise -> location_country))}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                   {{-- <a class="card-img-top d-block overflow-hidden" href="{{route('admin.job',['slug' => $franchise->slug])}}">
                                        <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
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
        </div>
    
        <!--desktop version-->
        <div class="continer d-none d-sm-block">
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
        </div>
        
      @endif
<!--Stop job -->

<!--Stop blog -->
      @if($board == 'blog')

        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
              <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1  fs-sm" href="#requuest" data-bs-toggle="tab" role="tab">Request</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#details" data-bs-toggle="tab" role="tab">Monthly</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm active" href="#blog" data-bs-toggle="tab" role="tab">blog</a></li>
                </ul>

                  {{--<div class="d-flex badgese pb-2">
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="today"> Today </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="tomorrow"> Tomorrow </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-weekend">  This weekend </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-week">  Next Week </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-weekend">  Next weekend </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="this-month">  This Month </a></span>
                    <span class="badge border border-1 text-right border-dark text-dark mr-1"  value="next-month">  Next Month </a></span>
                  </div>--}}

                  <div class="tab-content pt-1">
                    <!-- Request tab-->
                      <div class="tab-pane fade show active" id="blog" role="tabpanel">
                        <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                          <div class="row mb-5 pb-2">
                            @foreach ($blogfindo as $franchise) 
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
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.blogdashboard',['blog_id' => $franchise -> id , 'board' => 'all'])}}">
                                      {{ucwords(trans(Str::limit($franchise->tittle, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                    {{ucwords(trans(Str::limit($franchise->desc, 24)))}}
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucwords(trans(Str::limit($franchise->s_desc, 24)))}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="bloGdelete({{$franchise->id}})"> 
                                    <i class="bi bi-x me-2"></i></a>
                                    @if(is_null($franchise->image))
                                      {{--<a class="card-img-top d-block overflow-hidden" href="{{route('admin.blogpost',['blog_id' => $franchise->id, 'board' => 'image' ])}}">
                                          Add</a>--}}
                                    @else
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                      <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    @endif
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
        </div>
        
          {{--<div class="table-responsive fs-md mb-4">
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
          </div>--}}
      @endif
<!--Stop blog-->

      @if($board == "magazine")
        <div class="container">
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">List Magazine</a>
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'image-magazine'])}}">Image</a>
        </div>
        
        @foreach ($magazine as $evento)
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                  
                      <div class="h4 fw-light mb-0">18</div> 
                      <div class="small text-muted">Jul</div>
                    
                    <div class="round-circle">1</div> 
                    
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="">
                      {{ucwords(trans(Str::limit($evento->name, 24)))}}</a></div>
                  <div class="text-muted fs-sm text-start">
                      
                  </div>  
                  <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                    @if(is_null($evento->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}">Add</a>
                        <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                        @else
                      <a class="card-img-top d-block overflow-hidden" href="">
                      <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}"></a>
                      <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                    @endif
                </div>
            </div>
          </div>
        @endforeach

      @endif

      @if($board == 'add-magazine')     
        <div class="container">
          <p>List your Business Magazine</p>
            <form wire:submit.prevent="added">
             <input type="text" class="form-control mb-1"  placeholder = "name"  wire:model.lazy="name" >
             <input type="text" class="form-control mb-1"  placeholder = "type"  wire:model.lazy="type" >
             <input type="text" class="form-control mb-1"  placeholder = "subscriber"  wire:model.lazy="subscriber" >
             <textarea type="text" class="form-control mb-1"  placeholder = "desc" rows="3" wire:model.lazy="desc" > </textarea>
             <input type="text" class="form-control mb-1"  placeholder = "frequency"  wire:model.lazy="frequency" >
             <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
      @endif

      @if($board == 'image-magazine')
        <div class="container">
          <form wire:submit.prevent = "image">
          <input type="file" class="form-control mb-1"  placeholder = "image"  wire:model="image" >
            <div class="btn btn-primary form-control mb-1">Submit</div>
          </form>
        </div>
      @endif

      @if($board == 'review')     
        <div class="container">
          <p>List your Statement</p>

          <form wire:submit.prevent = "createStatement">
             <textarea class="form-control" type="text" rows="9" wire:model.lazy = "businessstatement"></textarea>
             <button type="submit" class="form-control"  >Submit</button>
           </form>
        

        @foreach($nEwComment as $comment)
       
          <div class="bg-secondary mb-2 lh-1 fs-sm" >
            {{$comment ->statement}}
        
          <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Reviewdelet({{$comment->id}})"> Delete</a>
        </div>
       
        @endforeach
        </div>
      @endif

      @if($board == 'crowd')     
        <div>
          <p>create user</p>

           <form wire:submit.prevent="tryingfaker">
             <input type="number" wire:model="howMany">
             <button type="submit">Submit</button>
           </form>

        </div>
      @endif
     
      @if($board == 'visitor')
        @foreach ($visitors as $evento)
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                  
                      <div class="p fw-light mb-0">{{$evento->utype}}</div> 
                      <div class="small text-muted">{{$evento->id}}</div>
                    
                    @if(is_null($evento->email_verified_at))   
                        <div class="round-circle">0</div> 
                      @else
                        <div class="round-circle">1</div> 
                    @endif
                    
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="">
                      {{ucwords(trans(Str::limit($evento->name, 24)))}}</a></div>
                  <div class="text-muted fs-sm text-start">
                      {{$evento->email}} <br>
                      @if(is_null($evento->email_verified_at)) 
                      <span class="fs-xs bg-success">{{ $evento->created_at}}</span>
                      @else
                      
                      <span class="fs-xs">{{ $evento->email_verified_at}}</span>
                      @endif
                  </div>  
                  <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                    {{--@if(is_null($evento->image))
                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}">Add</a>
                          @else
                          <a class="card-img-top d-block overflow-hidden" href="">
                          <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}"></a>
                        @endif--}}
                    <span>
                      <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$evento->utype}}</a>
                     
                      <ul class="dropdown-menu" width="auto">

                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'ADM')">ADM</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'SLR')">SLR</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'MSR')">MSR</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'EMP')">EMP</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'USR')">USR</a></li>
                      
                      </ul>

                    </span>
                </div>
            </div>
          </div>
        @endforeach
      @endif

      @if($board == 'createhashtagss')
          <div class="container">
            <form wire:submit.prevent="addHastag">
                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="unp-standard-price">Create Hashtag 
                    </label>
                    <div class="input-group">
                    <textarea class="form-control" type="text" rows="5" wire:model.lazy="hastag"></textarea>
                    </div>
                    @error('hastag')
                    <div class="form-text">Create hashtag, separate with comma </div>
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>

            <div>
              <span class="badge">#{{$hastag}}</span> 
            </div>

            <div class="d-flex badgeseTag pb-2">
                @foreach($hastago as $cat)
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">{{$cat->hastag}}
                        <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Hashdelete({{$cat->id}})"> <i class="bi bi-x me-2"></i> </a> 
                    </span>
                @endforeach
            </div>
          </div>
      @endif

      @if($board == 'createShtDesc')
        <div class="row mb-5 pb-2">

          @foreach ($eventShtdesc as $franchise) 

            ({{$franchise->shtdesc}})
              <div class="container  ">
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
                    <div class="text-muted fs-sm text-start">
                      @if(is_null($franchise -> venue) )
                      
                      @else
                      {{ucfirst(trans($franchise -> venue))}}
                      @endif
                    , {{ucfirst(trans($franchise -> city))}}</div>
                  </div>

                  <div class="col-3  p-0">
                    @if(is_null($franchise->image))  
                      <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                          Auto</a>
                    @else
                      <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                    @endif
                  </div>
                </div>
              </div>
            

          @endforeach

        </div>
      @endif

      @if($board == 'upgradeContent')

        upgrade Error
        <div class="col-lg-8 col-sm-7 ">
            <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
            <a  class="btn btn-primary">Search</a>
        </div>
        
        <div class=" border-0">
              @foreach($resultAdded as $resultAdd)
                 @php
                   $findcountevent = DB::table('dencos')->where('expo_id', $resultAdd->id)->count()
                 @endphp
                 
                <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" wire:click.prevent="eventodelete({{$resultAdd->id}})">
                {{$resultAdd -> tag}} {{$findcountevent}}<i class="bi bi-x me-2"></i></a>
              @endforeach
        </div>


        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="Upgrade"> upgrade</a>


      @endif

      @if($board == 'multiple_images')
        <div class=" container my-3">
          
         
              <form wire:submit.prevent="multiImage">
              <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
                  <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_lgo"  multiple="multiple">
                  <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
                    </form>  

                    <hr> find Images
                     @foreach($photos as $imgo)
                <div class="container">
                    <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}" width="50%" alt="">
                </div>
                @endforeach  
        </div>
      @endif



      @if($board == 'viewso')

          <div class="d-table table-layout-fixed w-100"> 
  
          {{--<div>{{$descRankingViews->pluck('view_count')->sum()}} T.Views</div>
                <div>R.Event/{{$descRankingViews->count()}}T.event</div>--}}
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    {{$descRankingViews->pluck('view_count')->sum()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> T.Views</span>
                  </a>
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    {{$descRankingViews->count()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> T.Event</span>
                  </a>
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="#" value="1" wire:model="$board">
                    <span class="handheld-toolbar-icon">
                    {{$upcomingViews->count()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> Upcoming</span>
                  </a>
          </div>
       
            @foreach( $upcomingViews as $franchise)
                <div class="container">
                        

                @if($franchise->updated_at->format("Y-m-d") == $mytime)
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col bg-dark pr-0">
                          <div class="fs-xs  fw-light mb-0">
                        

                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                          @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                      </div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">
                        @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                              <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                      </div>
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
                @else
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="fs-xs fw-light mb-0">
                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                            @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
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
                @endif

                </div>
            @endforeach

            @foreach( $descRankingViews as $franchise)
                <div class="container">
                        

                @if($franchise->updated_at->format("Y-m-d") == $mytime)
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col bg-dark pr-0">
                          <div class="fs-xs  fw-light mb-0">
                        

                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                          @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
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
                @else
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="fs-xs fw-light mb-0">
                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                              $category = DB::table('dencos')->where('event_id', $franchise->id)->get();
                          @endphp
                          

                            @if ($current < $to && $current < $from)
                                <span class="text-light">upcom</span>
                              @elseif ($current == $to && $current < $from) 
                              <span class="text-light">first</span>
                              @elseif ($current > $to && $current < $from) 
                              <span class="text-light">ongoi</span>
                              @elseif ($current > $to && $current == $from) 
                              <span class="text-light">last</span>
                              @elseif ($current > $to && $current > $from)
                              <span class="text-light">ended</span>
                            @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                      </div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">
                        @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                               <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                      </div>
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
                @endif

                </div>
            @endforeach
         
      @endif

      @if($board == 'order')
        @foreach ($businessOrder as $evento)
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col-3  p-0">
                  
                      <!-- <div class="p fw-light mb-0">{{$evento->type}}</div> 
                      <div class="small text-muted">{{$evento->id}}</div> -->
                    @if($evento->event_id == 'null' )

                    @else
                        @php
                            $eventdetails = DB::table('events')->where('id', $evento->event_id)->get();
                        @endphp

                        @foreach($eventdetails as $evet)
                        
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evet->slug])}}">
                              <img src="{{url('public/assets/image/exhibition/'.$evet->image)}}" alt="{{Str::limit($evet->eventname, 24)}}"></a>

                              
                        @endforeach
                    @endif
                    
                </div>

                <div class="col-7  p-0">
                  <div class="fs-sm fw-normal text-start">
                    <a class="text-dark" href="">
                      {{$evento->name}}</a></div>

                      <div class="fs-sm fw-normal text-start">
                    <a class="text-dark" href="">
                      {{$evento->phone}}</a></div>
                  <div class="text-muted fs-xs text-start">
                      {{$evento->email}} <br>
                    
                      <span class="fs-xs bg-success">{{ $evento->created_at->format('D d M  H:m')}}</span>
                     
                  </div>  
                  <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                        {{--@if(is_null($evento->image))
                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}">Add</a>
                          @else
                          <a class="card-img-top d-block overflow-hidden" href="">
                          <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}"></a>
                        @endif--}}
                    <span>
                      @php
                        $businesslead = DB::table('business_calledos')->where('lead_id', $evento->id)->latest()->get();
                        $resulto = $businesslead->pluck('response')->first();
                      @endphp

                      
                     @if(($businesslead->count()) < '1')
                       <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">New</a>
                     @else
                       <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$resulto}}</a>
                     @endif
                    
                      <ul class="dropdown-menu" width="auto">
                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'interest')">Email</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'interest')">Interest</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'check')">Check</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'callback')">callback</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'ringing')">Ringing</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'Not')">Not</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="DeleteCallingStatus({{$evento->id}})">Delete</a></li>
                      </ul>

                    </span>
                </div>
            </div>
          </div>
        @endforeach
      @endif

      @if($board == 'bulkReview')
        
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      
                        <div class="d-flex flex-nowrap align-items-center pb-3">
                           
                        <form wire:submit.prevent="bulkReview">
                              <select class="form-select form-select-sm me-2"  wire:model="monthly">
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
                              <input type="text" wire:model.lazy="howMany" placeholder="how Many" class="form-control">
                              <input type="submit" class="form-control btn btn-primary">
                        </form>
                         
                        </div> 
                      
                    </div>
      @endif

      @if($board == 'organizer')
          <div class="container">
            <div class="fw-bold mb-0 lh-0 pb-0">Requested Event</div>
            <div class="lh-0 mt-0 small">customize as your business</div>
          </div>
                @foreach ($checkSelected as $fibder) 

                    @php
                    $franchiseo = DB::table('events')->where('id' , $fibder -> event_id)->get();
                    @endphp

                    @foreach($franchiseo as $franchise )
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
                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                    {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                <div class="text-muted fs-sm text-start">
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                    @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                    @endif 
                                </div>  
                                <div class="text-muted fs-sm text-start"></div>
                                </div>

                                <div class="col-3  p-0">
                                   

                                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                                      <ul class="dropdown-menu" width="auto">
                                        <li><a class="dropdown-item" href="#">Reject</a></li>
                                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Accept</a></li>    

                                      </ul>
                                    </span>
                                    </div>
                            </div>
                        </div>
                    @endforeach

                @endforeach

                

                    @php
                        
                        $findOrganiser = DB::table('Brand')->whereNotNull('dtype')->get();
                    @endphp

                    @foreach($findOrganiser as $franchise )
                        <div class="container  ">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    
                                    <div class="h4 fw-light mb-0"> Te</div> 
                                    <div class="small text-muted text-capitalize">DEc</div>
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                </div>

                                <div class="col-7  p-0">
                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                    {{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</a></div>
                                <div class="text-muted fs-sm text-start">
                                    
                                </div>  
                                <div class="text-muted fs-sm text-start"></div>
                                </div>

                                <div class="col-3  p-0">
                                   

                                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                                      <ul class="dropdown-menu" width="auto">
                                        <li><a class="dropdown-item" href="#">Reject</a></li>
                                        <!-- <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Accept</a></li>     -->

                                      </ul>
                                    </span>
                                    </div>
                            </div>
                        </div>
                    @endforeach

               
      @endif

      @if($board == 'new-organiser')
      <div class="container">
        <h3>Add Organiser</h3>
        <form wire:submit.prevent="organiser">
          <hr class="my-2">
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Organizer</label>
                    <input class="form-control" type="text" placeholder="Organizer"   wire:model.lazy="brand_name" >
                    @error( 'organizer' ){{ $message}}@enderror
                </div>
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Email</label>
                    <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" >
                    @error( 'email' ){{ $message}}@enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Phone</label>
                    <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" >
                    @error( 'phone' ){{ $message}}@enderror
                </div>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
      </div>
      @endif


      @if($board == 'ticketPlan')
         <div class="container">
           
            @foreach($ticket as $franchise )
                <div class="container  ">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                        <div class="col  pr-0">
                           
                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->start_date)->format('d')}}</div> 
                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->start_date)->format('M')}} </div>
                          
                            
                            <div class="round-circle">
                              <i class="bi bi-bookmark"></i>
                            </div> 
                        </div>

                        <div class="col-7  p-0">
                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                            {{ucwords(trans(Str::limit($franchise->package, 100)))}}</a></div>
                        <div class="text-muted fs-sm text-start">
                            @if(Carbon\Carbon::parse ($franchise->start_date)->format('M') != Carbon\Carbon::parse ($franchise->expiry_date)->format('M'))
                            {{Carbon\Carbon::parse ($franchise->start_date)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->expiry_date)->format('D, d M')}}
                            @else
                            {{Carbon\Carbon::parse ($franchise->start_date)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->expiry_date)->format('D, d M')}}
                            @endif 
                        </div>  
                        <div class="text-muted fs-sm text-start">{{$franchise->type}}</div>
                        </div>

                        <div class="col-3  p-0">
                          

                            <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                              <ul class="dropdown-menu" width="auto">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Active</a></li>    
                                <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">DeActive</a></li>
                              </ul>
                            </span>
                            </div>
                    </div>
                </div>
            @endforeach

         </div>
      @endif



    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      @if($board == 'job')
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Job</span>
        </a>
         
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
          <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
          <span class="handheld-toolbar-label">Add</span>
        </a>
      @elseif($board == 'magazine')
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label">Magazine</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      @elseif($board == 'blog')

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>

      @elseif($board == 'event')
          
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      
      @elseif($board == 'visitor')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      @elseif($board == 'client')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Brand</span>
          </a>
      @elseif($board == 'organizer')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Brand</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Organiser</span>
          </a>
      @endif

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
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
