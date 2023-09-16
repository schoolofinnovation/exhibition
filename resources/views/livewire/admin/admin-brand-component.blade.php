<main>

  <div class="container">
    <h1>Contact</h1>
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

                          <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                          </a>

                          <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="detecto({{$franchise->id}})"> 
                            <i class="bi bi-plus"></i>
                          </a>
                      </div>
              </div>
          </div>
      @endforeach
  </div>

  <div class="container">
    <h1>Event</h1>
    @foreach()
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
                    <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">
                    <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                  @endif
              </div>
          </div>
      </div>
    @endforeach
  </div>

  <div class="container">
    <h1>Demographics</h1>
    <small>Requests</small>
  </div>
</main>