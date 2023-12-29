<main>

        <div class="container mx-auto my-5"> 
            <div class=" d-flex row">
                <p class="fw-bold">Find your Event</p>

                <div class="col-lg-8 col-sm-7">
                   <input type="text" class="form-control my-1" placeholder="Search your Event..." wire:model.lazy="searchTerm">
                   <button class="btn btn-primary form-control" type="">Search</button>
                </div>
                <!-- <div class="col-lg-4 col-sm-5"><a  class="btn btn-primary">Search</a></div> -->
            </div>
        </div>
    
        <div class="container">
            <div class="fw-bold mb-0 lh-0 pb-0">Your Event</div>
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
                                    {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                        <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                        
                                    <!-- <a class="round-circle" href="#">
                                        <i class="bi bi-chevron-double-right"></i></a>  -->
                                    <!-- @if($franchise->status == "1" ||  $franchise->admstatus == "0")
                                        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Review</a>
                                    @elseif($franchise->status == "1" ||  $franchise->admstatus == "1")
                                        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Activate</a>
                                    @elseif($franchise->status == "0" ||  $franchise->admstatus == "1")
                                        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Re-Claim</a>
                                    @endif -->

                                    @if($franchise->status == '1')
                                    <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Add</a>
                                    @else
                                    <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="declaimer({{$franchise->id}})" >Remove</a>
                                    @endif

                                    </div>
                            </div>
                        </div>
                    @endforeach

                @endforeach
        
           

        <div class="container">
                    @if(empty($searchTerm))
                    @else
                        
                        @if(count($monthwise) > 0)
                         <p class="py-2 small fw-light">Select your business event<a href="" value="">Click here</a></p>
                            <div class="row mb-5 pb-2 d-lg-none">
                                @foreach ($monthwise as $userRequestedID) 

                                    @php
                                        
                                        $franchiseo = DB::table('usages')->where('user_id', Auth::user()->id)->pluck('event_id');
                                        $searchID = $userRequestedID->where('id', '!=', $franchiseo)->get();
                                        
                                    @endphp

                                    @foreach ($userRequestedID as $franchise) 
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
                                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
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
                                                    {{--<a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                                        <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                                        
                                                    <!-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                                        <i class="bi bi-chevron-double-right"></i></a>  -->
                                                        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a>

                                                    </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>

                            <div class="table-responsive fs-md d-none d-sm-block">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr> 
                                            
                                            <th>Event | City <br> Date | Venue</th>
                                            <th>Ranking <br><small># Ranking  </small></th>
                                            <th>#Certified</th>
                                            <th>#Trending</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($monthwise as $info)
                                            <tr>
                                        
                                            <td class="py-1 align-middle">
                                                <span class="align-middle badge bg-info ms-2">
                                                {{$info->eventname}}</span>|
                                                <span class="align-middle badge bg-info ms-2">
                                                {{$info->city}}</span>
                                                <br>
                                                <span class="align-middle badge bg-info ms-2">
                                                {{Carbon\Carbon::parse ($info->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($info->enddate)->format('D, d M Y')}}
                                                </span>
                                                <span class="align-middle badge bg-info ms-2">
                                                {{$info->venue}}, 
                                                </span>
                                            </td>

                                            <td class="py-1 align-middle fw-sm">
                                                <span class="align-middle badge bg-info ms-2"> <i class="bi bi-verified "></i> </span>
                                                
                                            </td>
                                            
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
                                                        <li><a class="dropdown-item" href="{{route('adminevent.detail',['slug' => $info->slug])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                                                    </ul>
                                                </div>        
                                                </td>
                                            </tr>
                                        @endforeach          
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="container py-5 my-5 mx-auto">
                                <p>Add your Event</p>

                                    <form wire:submit.prevent="newlist">
                                            <div class="col-sm-4">
                                                <label class="form-label" for="cf-name"></label>
                                                <input class="form-control" type="text" placeholder="Event Name"   wire:model="eventname" wire:keyup="generateSlug" required="">
                                                @error( 'eventname' ){{ $message}}@enderror
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="cf-name">Start Date</label>
                                                <input class="form-control" type="date"  placeholder="dd/mm/yy"   wire:model.lazy="startdate" required="">
                                                @error( 'startdate' ){{ $message}}@enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="form-label" for="cf-name">Venue
                                            </label>
                                                <input class="form-control" type="text"  
                                                placeholder="Venue"   wire:model.lazy="venue" required="">
                                                @error('venue'){{ $message}}@enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="form-label" for="cf-name">City
                                            </label>
                                                <input class="form-control" type="text"  
                                                placeholder="City"   wire:model.lazy="city" required="">
                                                @error('city'){{ $message}}@enderror
                                            </div>
                                            <div class="col-sm-3">
                                            <label class="form-label" for="seniority">Type of event</label>
                                            <select class="form-control" type="text"   wire:model.lazy="eventype"  id="seniority"  placeholder="Provide short title of your request">
                                                <option selected>Choose...</option>
                                                <option value="award">Award</option>
                                                <option value="conference">Conference</option>
                                                <option value="expo">Exhibition</option>
                                                <option value="festival">Festival</option>
                                                <option value="network">Network</option>
                                                </select>
                                                @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                                            </div>
                                        
                                            
                                    
                                        <div class="col-sm-6">
                                            <label class="form-label" for="cf-name">Email</label>
                                            <input class="form-control" type="email"  
                                            placeholder="team@exhibition.org.in"   wire:model.lazy="email" required="">
                                            @error( 'email' ){{ $message}}@enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label" for="cf-name">Phone</label>
                                            <input class="form-control" type="number"  
                                            placeholder="Official Contact"   wire:model.lazy="phone" required="">
                                            @error( 'phone' ){{ $message}}@enderror
                                        </div>
                                    
                                            <button class="btn btn-primary mt-2" type="submit">Add your Event</button>
                                    </form>

                            </div>
                        @endif
                    @endif
        </div>
    


    @if($board == 'thank-you')
        <div class="container my-5">
            <p class="text-center fs-sm mx-auto lh-1">
                Thank you for submitting your event with us. 
                <br>
                <span class="fs-md">
                Our team will review your submission and get back to you within the next 4 working hours. we look forward to helping you promote your event and boost your business potential with The Exhibition Network.
                </span> 
            </p>

            <a href="" class="btn btn-primary align-center">Talk to Team</a>

        </div>
    @endif


    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('user.dashboard',['board' == 'dashboard'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">User</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'contact'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Contact</span>
          </a>

      
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'inquiry'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Inquiry</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'user/add-your-business' == request()->path() ? 'active' : '' }}" href="{{route('user.claim')}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'user/add-your-business' == request()->path() ? 'active' : '' }}">Event</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'business'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Plan</span>
          </a>
      

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
</main>