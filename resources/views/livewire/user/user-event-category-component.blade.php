@section('page_title','Dashboard')

<main>
    @if($trends == 'category')
        <div class="container my-5 mx-auto">
            <div class="container mx-auto my-5"> 
                <div class=" d-flex row">
                    <p >Let's Create Event Together</p>
                    <small class="fw-bold">name</small>
            <br>
                    @foreach($selectedcategory as $catego)
                        @if($catego->admstatus == '1')
                            adm <a class="badge  border-1 text-right border-dark bg-primary text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                            {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                            </a>
                        @else
                            admnot <a class="badge  border-1 text-right border-dark text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                            {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                            </a>
                        @endif

                    @endforeach

                    <div class="col-lg-8 col-sm-7 ">
                        <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
                    </div>
                    <a  class="col-lg-4  form-control col-sm-5 btn btn-primary">Search</a>


                </div>
            
                @if(is_null($searchTerm))
                
                @else

                    @if($searchcat->count() > 0)
                    
                        <form wire:submit.prevent="updateEvent">      
                            <div class="mb-5 pb-2">
                            @foreach ($findAdminStatus as $findoo)
                                <span class="badge bg-success m-0" value="{{$findoo->id}}"  wire:model="checkvalue">  {{$findoo -> tag}} </span>
                            @endforeach

                                @foreach ($searchcat as $franchise) 
                                {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                                <div class=" col col-auto my-1 px-2"> 
                                @if($franchise->admstatus == '1')   
                                    <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue"> <span class=" badge bg-success">{{$franchise->tag}}</span>  
                                @else
                                    <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}
                                @endif
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

    @if($trends == 'event')
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
    @endif
</main>

