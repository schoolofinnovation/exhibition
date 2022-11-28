<main>
@section('page_title',($event->eventname))

      



      <div class="text-center">
        <div class="row">
          <div class="col-lg-3 "></div>
          
          <div class="col-lg-6 ">
                    
              <ul class="nav nav-pills nav-fill" role="tablist">
                        
                  @if($currentStep == 1)
                        <li class="nav-item"><a class="nav-link px-1 active" href="#" data-bs-toggle="tab" role="tab">Venue</a></li>
                        <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Date & Time</a></li> 
                        <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Tickets</a></li>
                  @endif
                  @if($currentStep == 2)
                      <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Venue</a></li>
                      <li class="nav-item"><a class="nav-link px-1 active" href="#" data-bs-toggle="tab" role="tab">Date & Time</a></li> 
                      <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Tickets</a></li>
                  @endif
                  @if($currentStep == 3)      
                      <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Venue</a></li>
                      <li class="nav-item"><a class="nav-link px-1 " href="#" data-bs-toggle="tab" role="tab">Date & Time</a></li> 
                      <li class="nav-item "><a class="nav-link px-1 active" href="#" data-bs-toggle="tab" role="tab">Tickets</a></li>
                  @endif     
                  
              </ul>
              

              <div class="row">  
                    @if($currentStep == 1)
                    <div class="progress" style="height: 1px;">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
                    @if($currentStep == 2)
                    <div class="progress" style="height: 1px;">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
                    @if($currentStep == 3)
                    <div class="progress" style="height: 1px;">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    @endif
              </div>

              <form wire:submit.prevent="add" >
                    <div class="row" >
                            
                              @if($currentStep == 1)
                                <!-- Item-->
                                @foreach($ticke as $edy)
                              <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom"    >
                              
                                <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                                  <div class="pt-2 ">
                                      
                                        <div class="d-flex">
                                              <div class="mr-auto p-2"><h3 class="product-title fs-base mb-2"><a href="#reviews">{{$edy->package}}</a></h3>
                                            <div class="fs-sm"> @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}
                                              @else
                                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}
                                              @endif </div>
                                              
                                            </div>
                                        </div>
                                      
                                  </div> 
                                </div>  
                                <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 33;">
                                      <a href="" class="btn btn-sm btn-primary" wire:click.prevent="store({{$edy->id}},'{{$edy->code}}',{{$edy->price}})">{{$edy->price}}</a>   
                                     
                                 </div>
                              </div>
                              @endforeach
                              @endif

                              @if($currentStep == 2)
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom"  href="#" wire:click="increaseStep()">
                                  <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                                      
                                      <div class="pt-2">

                                      <h3 class="product-title fs-base mb-2"><a href="#reviews">{{$event->eventname}}</a></h3>
                                      <div class="fs-sm"> @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                                        @endif </div>
                                      <div class="fs-sm">{{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}</div>
                                      
                                      </div>
                                  </div>
                                  <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 33;">
                                      <div class="nav-item"><a class="nav-link px-1" href="#reviews" data-bs-toggle="tab" role="tab"><i class="bi bi-chevron-double-right bg-primary"></i></a></div>    
                                  </div>
                                </div> 
                              @endif

                              @if($currentStep == 3)
                                <!-- Item-->
                                <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom"  href="#" wire:click.prevent="store({{$event->id}},'{{$event->eventname}}',{{$event->max_pass}})">
                                  <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                                      
                                      <div class="pt-2">

                                      <h3 class="product-title fs-base mb-2"><a href="#">{{$event->eventname}}</a></h3>
                                      <div class="fs-sm"> @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                                        @endif </div>
                                      <div class="fs-sm">{{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}</div>
                                      
                                      </div>
                                  </div>
                                  <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 33;">
                                      <a href="" class="btn btn-sm btn-primary"> 1</a>   
                                      <a class="btn btn-primary" href="#" wire:click="increase()">+</a>
                                      <a class="btn btn-primary" href="#" wire:click="decrease()">-</a>
                                 </div>
                                </div> 
                              
                              @endif

                    </div>
              </form>
      
          </div>
   
          <div class="col-lg-3"></div>
        </div>


      </div>



    </main>
    

    