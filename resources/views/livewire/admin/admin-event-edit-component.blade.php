@section('page_title','Add event')
@section('page_path',' addevent')
@section('page_list',' addevent')
@section('page_name',' Add event')

    <main> 
        <div class="container mb-5 pb-5">
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                <div class="text-sm-end">
                <a class="btn btn-primary" href="{{route('admin.dashboard', ['board' => 'event'])}}" data-bs-toggle="modal">  All Event </a></div>
                    @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
                <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
           
            @if($board == 'basic')
                <form wire:submit.prevent="updateBasicEvent">
                    <div class="row g-1">

                        <div class="col-sm-3">
                        <label class="form-label" for="seniority">Type</label>
                        <select class="form-control" type="text"   wire:model.lazy="eventype"  placeholder="Provide short title of your request">
                            <option >Choose</option>
                            <option value="award">Award</option>
                            <option value="conference">Conference</option>
                            <option value="expo">Exhibition</option>
                            <option value="festival">Festival</option>
                            <option value="network">Network</option>
                            </select>
                            @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Event Name</label>
                            <input class="form-control" type="text" placeholder="Your Event"   wire:model="eventname" wire:keyup="generateSlug" required="">
                            @error( 'eventname' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-1">
                            <label class="form-label" for="cf-name">Edition</label>
                            <input class="form-control" type="text" placeholder="Your Edition" wire:model.lazy="edition" required="">
                            @error( 'edition' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Start Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="startdate" required="">
                            @error('startdate' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">End Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="enddate" required="">
                            @error( 'enddate' ){{ $message}}@enderror
                        </div>

                        
                        <div class="col-sm-3">
                            <label class="form-label" for="cf-name">Venue</label>
                            <input class="form-control" type="text" placeholder="Your City" wire:model.lazy="venue" required="">
                            @error( 'venue' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                        <label class="form-label" for="cf-name">City</label>
                        <input class="form-control" type="text" placeholder="Event City" wire:model="city" required="">
                        @error('city'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                        <label class="form-label" for="cf-name">country</label>
                        <input class="form-control" type="text" placeholder="Event City" wire:model="country" required="">
                        @error('country'){{ $message}}@enderror
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Visitor</label>
                            <input class="form-control" type="text" placeholder="Your Visitor" wire:model.lazy="auidence" required="">
                            @error('auidence'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Exhibitor</label>
                            <input class="form-control" type="text" placeholder="Your Exhibitor" wire:model.lazy="exhibitors" required="">
                            @error('exhibitors'){{ $message}}@enderror
                        </div>
                    
                    </div>
                    
                    

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($board == 'edit')
                <form wire:submit.prevent="updateEvent">
                    <div class="row g-1">

                        <div class="col-sm-3">
                        <label class="form-label" for="seniority">Type</label>
                        <select class="form-control" type="text"   wire:model.lazy="eventype"  placeholder="Provide short title of your request">
                            <option >Choose</option>
                            <option value="award">Award</option>
                            <option value="conference">Conference</option>
                            <option value="expo">Exhibition</option>
                            <option value="festival">Festival</option>
                            <option value="network">Network</option>
                            </select>
                            @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Event Name</label>
                            <input class="form-control" type="text" placeholder="Your Event"   wire:model="eventname" wire:keyup="generateSlug" required="">
                            @error( 'eventname' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-1">
                            <label class="form-label" for="cf-name">Edition</label>
                            <input class="form-control" type="text" placeholder="Your Edition" wire:model.lazy="edition" required="">
                            @error( 'edition' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Start Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="startdate" required="">
                            @error('startdate' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">End Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="enddate" required="">
                            @error( 'enddate' ){{ $message}}@enderror
                        </div>

                        
                        <div class="col-sm-3">
                            <label class="form-label" for="cf-name">Venue</label>
                            <input class="form-control" type="text" placeholder="Your City" wire:model.lazy="venue" required="">
                            @error( 'venue' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                        <label class="form-label" for="cf-name">City</label>
                        <input class="form-control" type="text" placeholder="Event City" wire:model="city" required="">
                        @error('city'){{ $message}}@enderror
                        </div>
                        
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Visitor</label>
                            <input class="form-control" type="text" placeholder="Your Visitor" wire:model.lazy="auidence" required="">
                            @error('auidence'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Exhibitor</label>
                            <input class="form-control" type="text" placeholder="Your Exhibitor" wire:model.lazy="exhibitors" required="">
                            @error('exhibitors'){{ $message}}@enderror
                        </div>
                    


                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Tag Line</label>
                            <textarea class="form-control" type="text" row="2" placeholder="Your Tagline" wire:model.lazy="tagline" required=""></textarea>
                            @error('tagline'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Desc</label>
                            <textarea class="form-control" type="text" placeholder="Your Desc" rows="2" wire:model.lazy="desc" required=""></textarea>
                            @error('desc'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Short Description</label>
                            <textarea class="form-control" type="text" placeholder="Your Short desc" rows="2" wire:model.lazy="shtdesc" required=""></textarea>
                            @error('shtdesc'){{ $message}}@enderror
                        </div>    

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Web Link</label>
                            <input class="form-control" type="text"  wire:model.lazy="link" required=""></input>
                            @error('link'){{ $message}}@enderror
                        </div>
                    
                    </div>
                    
                    <hr class="my-2">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label" for="cf-name">Organizer</label>
                                <input class="form-control" type="text" placeholder="Your email"   wire:model.lazy="organizer" required="">
                                @error( 'organizer' ){{ $message}}@enderror
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label" for="cf-name">Email</label>
                                <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" required="">
                                @error( 'email' ){{ $message}}@enderror
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label" for="cf-name">Phone</label>
                                <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" required="">
                                @error( 'phone' ){{ $message}}@enderror
                            </div>
                        </div>

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($board == "doubling")

               <small class="fw-bold">{{$evento->eventname}} </small>
                <form wire:submit.prevent = "doubleing">  
                    <div class="input-group my-2"> 
                        <input type="text" wire:model.lazy = "eventkhaname" class="form-control" placeholder="Add Relative Event">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

               
                @foreach($relativeevent as $evento)

                    @if(is_null($evento->admstatus))
                        <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Awaiting</a>
                        <div class=" mb-2">
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
                                    <div class="round-circle fs-xs">{{Carbon\Carbon::parse ($evento->startdate)->format('Y')}}</div> 
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
                    @elseif($evento->admstatus == 1)
                        <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'0')" class="btn btn-primary btn-sm">Deactive</a>
                        <div class=" mb-2">
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
                                    <div class="round-circle fs-xs">{{Carbon\Carbon::parse ($evento->startdate)->format('Y')}}</div> 
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
                    @else
                        <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Active</a>
                        <div class=" mb-2">
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
                                    <div class="round-circle fs-xs">{{Carbon\Carbon::parse ($evento->startdate)->format('Y')}}</div> 
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
                    @endif

                @endforeach
            @endif
        </div>

        <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
            <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail',['slug' => $evento->slug])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label">Admin</span>
            </a>
        

            <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id,'board' => 'edit'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
            <span class="handheld-toolbar-label">Edit</span></a>
            
            <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">category</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class=" bi bi-list"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
            </a>
        </div>
        </div>
    </main>
