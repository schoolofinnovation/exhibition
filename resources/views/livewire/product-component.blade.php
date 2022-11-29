<main>
@section('page_title',($event->eventname))

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


    </main>
    

    