<main>

<div class="container">
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

                        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
            <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with COI Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">  Event</div>
                        </a> 
                    </div>
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'order'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Order</div>
                        </a> 
                    </div>
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'job'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Job</div>
                        </a> 
                    </div>
                   
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'client'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Visitor</div>
                        </a> 
                    </div>
                    
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'blog'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Blog</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('all.category')}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Category</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Hashtag</div>
                        </a> 
                    </div>


                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'magazine'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Magazine</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'review'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Review</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'visitor'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">User</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'viewso'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Views</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'bulkReview'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Reviews</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'organizer'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Organiser</div>
                        </a> 
                    </div>
                    <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Add Organiser</div>
                        </a> 
                    </div>

                    

                    <div class="col">
                        <a  href="{{route('admin.questionadd')}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Question</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Plan</div>
                        </a> 
                    </div>

                    
                </div>
            </div>
          </div>
        </section>
</main>