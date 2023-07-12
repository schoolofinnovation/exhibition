
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
       
<!--event start-->      
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
                                              upcoming
                                          @elseif (Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                              ongoing
                                          @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                              ongoing
                                          @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                            ongoing
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
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M You')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
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
                              <h2 class="accordion-header">
                              
                              


                              
                              </h2>
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

<!-- Start Cleint-->
      @if($board == 'client')
        {{--<div class="container">
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
        </div>--}}
       
    
        <div class="container my-5">
              <div class="small"> List meet-up brand</div>        

              <form wire:submit.prevent="AddBrandAttend">

                    <select class="form-control mb-1" type="text"   wire:model.lazy="event_id" >
                        <option selected>Choose</option>
                      @foreach($findInspection as $findoo)
                        <option value="{{$findoo -> id}}">{{$findoo -> eventname}}</option>
                      @endforeach
                    </select>
                       

                <input type="text" class="form-control mb-1" wire:model.lazy="brand_name" placeholder="brand_name">
                <input type="text" class="form-control mb-1" wire:model.lazy="country" placeholder="country">
                <input type="text" class="form-control mb-1" wire:model.lazy="link" placeholder="link">

                <input type="text" class="form-control mb-1" wire:model.lazy="name" placeholder="name">
                <input type="text" class="form-control mb-1" wire:model.lazy="contact" placeholder="contact">
                <input type="email" class="form-control mb-1" wire:model.lazy="email" placeholder="email">
                <input type="text" class="form-control mb-1" wire:model.lazy="designation" placeholder="designation">
                
               {{-- <textarea type="text" class="form-control mb-1" wire:model.lazy="comment" placeholder="comment"></textarea>
                <input type="text" class="form-control mb-1" wire:model.lazy="size" placeholder="size">
                <input type="text" class="form-control mb-1" wire:model.lazy="grade" placeholder="grade">
                <textarea type="text" class="form-control mb-1" wire:model.lazy="reminder" placeholder="reminder"></textarea>

                <input type="text" class="form-control mb-1" wire:model.lazy="email_request" placeholder="email_request">
                <input type="text" class="form-control mb-1" wire:model.lazy="service_request" placeholder="service_request">--}}

                <button class="btn btn-primary mt-2" type="submit">Submit</button>
              </form>
        </div>
      @endif
<!--Stop Client-->

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
             <button type="submit" class="form-control "  >Submit</button>
           </form>
        

        @foreach($nEwComment as $comment)
       
        <div class="bg-secondary mb-2 lh-1 fs-sm" >
         {{$comment ->statement}}
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
      @endif

      @if($board == 'viewso')

 <div class="row"> 
  <div>T.Views</div>
  <div>R.Event/T.event</div>
 </div>
       
          @foreach( $descRankingViews as $franchise)
              <div class="container  ">
                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                  <div class="col  pr-0">
                      
                        <div class="h4 fw-light mb-0"></div> 
                        <div class="small text-muted">{{$franchise->view_count}} </div>
                    
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
      @endif

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
