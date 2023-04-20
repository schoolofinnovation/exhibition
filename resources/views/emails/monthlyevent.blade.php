<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exhibition Network</title>
</head>

    <body>
            @php
              {{$event->whereYear('startdate', 2023)->where('status', 1)->where('admstatus', 1)->whereMonth('startdate', $event->month)->get()}}
            @endphp

            <div class="row mb-5 pb-2 d-lg-none">
                            @foreach ($event as $franchise) 
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
                                    <div class="text-muted fs-sm text-start"></div>
                                    </div>

                                    <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    </div>
                                </div>
                                </div>
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
                                    @foreach ($event as $info)
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
                                                    <li><a class="dropdown-item" href="{{route('admin.jobadd')}}"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="{{route('adminevent.detail',['slug' => $info->slug])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                                                </ul>
                                            </div>        
                                            </td>
                                        </tr>
                                    @endforeach          
                                </tbody>
                            </table>
                        </div>


        
    </body>
</html>