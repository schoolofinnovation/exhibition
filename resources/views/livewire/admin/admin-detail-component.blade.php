@section('page_title',  ($this->slug))

<main>
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
                @if(is_null($evento->image))
                    <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">Add</a>
                  @else
                  <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                  <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
      <div class="col-8 p-0">
        <div class="fs-md fw-normal text-start">
          <a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
            Last update: <br>{{$evento->updated_at}}</a>
        </div>
        
            @if(is_null($evento->created_at))
              <div class="text-muted fs-sm text-start">Created by: <br>Admin</div>
            @else
              <div class="text-muted fs-sm text-start">Created at: <br>{{$evento->created_at}}</div>
            @endif
        
        <div class="text-muted fs-sm text-start"> Edition: {{$evento->edition}} </div>
      </div>

      <div class="col-4 p-0">
          @if(is_null($evento->admstatus))
               <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Active</a>
          @elseif($evento->admstatus == 1)
               <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'0')" class="btn btn-primary btn-sm">Deactive</a>
          @else
               <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'0')" class="btn btn-primary btn-sm">Deactive</a>
          @endif

          
      </div>
     </div>
    </div>

    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
               
                <div class="h4 fw-light mb-0"> {{$evento->id}}</div> 
                <div class="small text-muted">ID</div>
                <div class="round-circle">{{$evento->level}}</div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start">
                @foreach($category as $cat)
                    {{$cat->expo->tag}}
                @endforeach
              </div>
              <div class="text-muted fs-sm text-start">Category</div>
            </div>

            <div class="col-3 p-0">
               @if(is_null($category))
                <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--tag--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Tag</div> 
                
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
            @if(is_null($evento->tagline))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">{{$evento->tagline}}</div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->tagline))
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--Short--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Sht</div> 
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              @if(is_null($evento->shtdesc))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">{{Str::limit($evento->shtdesc,170)}}</div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->shtdesc))
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--Long--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Lng</div> 
               
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              @if(is_null($evento->desc))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">{{Str::limit($evento->desc,170)}}</div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->desc))
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
        {{Str::limit($evento->desc,170)}}
        </div>
    </div>
    
    {{--webo--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Web</div> 
                <div class="round-circle" ></div> 
            </div>

            <div class="col-7  p-0"> 
              @if(is_null($evento->link))
                <div class="text-muted fs-sm text-start">Website</div>
              @else
                <div class="fs-md fw-normal text-start">
                <a class="btn btn-primary btn-sm" href="{{$evento->link}}">Web link</a></div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->link))
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif

            </div>
        </div>

       
    </div>

    {{--participants--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">{{$participants->count()}}</div> 
               
                <div class="round-circle" >Ptr</div> 
                
            </div>

            <div class="col-7  p-0">
              
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->organiser))
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addParticipants' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'participantsdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--speaker--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">{{$speaker->count()}}</div> 
               
                <div class="round-circle">Spk</div> 
                
            </div>

            <div class="col-7  p-0">
             
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->organiser))
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSpeaker' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'speakerdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--pavillion--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">{{$pavillion->count()}}</div> 
               
                <div class="round-circle">Pav</div> 
                
            </div>

            <div class="col-7  p-0">
              
            </div>

            <div class="col-3 p-0">
               @if(count($pavillion) > 0)
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--sponsership--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
               
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                            </div>

            <div class="col-7  p-0">
            
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->organiser))
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

{{--hastags--}}
      <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">{{$hastag->count()}}</div> 
               
                <div class="round-circle" ><i class="bi bi-hastag"></i></div> 
                
            </div>

            <div class="col-7  p-0">
              
            </div>

            <div class="col-3 p-0">
               @if(is_null($hastag))
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
      </div>

    {{--organiser--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Org</div> 
               
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              @if(is_null($evento->organizer))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">
                  {{$evento->organizer}}<br>
                  {{$evento->email}}<br>
                  {{$evento->phone}}
                </div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->organiser))
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser' ])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--basic--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">basic</div> 
               
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              @if(is_null($evento->edition))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">
                  {{$evento->organizer}}<br>
                  {{$evento->email}}<br>
                  {{$evento->phone}}
                </div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->edition))
                <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--ticket--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0"></div> 
               
                <div class="round-circle" >Ticket</div> 
                
            </div>

            <div class="col-7  p-0">
              @if(is_null($evento->edition))
                <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
              @else
                <div class="fs-md fw-normal text-start">
                  {{$evento->organizer}}<br>
                  {{$evento->email}}<br>
                  {{$evento->phone}}
                </div>
              @endif
            </div>

            <div class="col-3 p-0">
               @if(is_null($evento->edition))
                <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Edit</a>
               @endif
            </div>
        </div>
    </div>

    {{--<div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="#shop-sidebar" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Filters</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Status</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i>
          <span class="badge bg-primary rounded-pill ms-1">4</span></span>
          <span class="handheld-toolbar-label">$265.00</span>
        </a>
      </div>
    </div>--}}

    
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'event'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Admin</span>
        </a>
       

        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id , 'board' => 'edit'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="{{route('event.details',['slug' => $evento->slug])}}">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
          <span class="handheld-toolbar-label">View</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>


</main>