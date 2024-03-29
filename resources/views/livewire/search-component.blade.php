<main>

@section('page_title', Find Great Exhibtion To Exhibit)
@section('page_description', ('Great Exhibtion To Exhibit '.$event->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

                    <div class="container mt-5">
                        <!-- <input type="text" class="form-control" placeholder="search" > -->
                        <form action="" wire:submit.prevent="searchbackup">
                            <div class="input-group flex-nowrap">
                            <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                            <input type="text" class="form-control rounded-start"  name="search" placeholder="Find your Right Place" wire:model.lazy="searchTerm">
                            <button class="btn btn-primary" type="submit" name=""> Search</button>
                            </div>
                        </form>

                        <div class="row mb-5 pb-2">
                          @if(is_null($searchTerm))

                            <div class="container">
                               Expand your Business Reach with us.
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
                                <p class="col-md-10 col-lg-8 mx-auto fw-bold">Industry</p>
                                <div class="container">
                                    <div class="row row-cols-3 row-cols-lg-6 gy-2 gx-1 g-lg-3">
                                        @foreach($allcategory as $category )
                                            <div class="col">
                                                <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                                                    <div class="p-3 border rounded border-dark bg-light text-center text-dark fs-sm">{{$category -> industry}}</div>
                                                </a> 
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
</main>