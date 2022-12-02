@section('page_title',($event->eventname))
<main>
    <div class="bg-secondary">
      <div class=" container">
        <div class="row ">
          <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                <div class="align-content-center pt-4 "><i class="bi bi-chevron-left"></i></div>
          
                <div class="text-center py-2">
                      <div>{{$event->eventname}}</div> 
                      <div class="fs-xs fw-light">
                      @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                        {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}
                      @else
                        {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}} {{ucwords(trans($event->country))}}
                      @endif
                      </div> 
                </div>

                <div class="align-content-center pt-4"><i class="bi bi-x"></i></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="pt-3">SELECT YOUR TICKET
            @foreach($ticke as $edy)
            
                <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                  <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                    <div class="pt-2 ">
                      <div class="d-flex">
                        <div class="mr-auto p-2"><h3 class="product-title fs-base mb-2"><a href="#reviews">{{$edy->package}}</a></h3>
                          <div class="fs-xs fw-normal"><i class="bi bi-currency-rupee"></i>{{$edy->price}}</div>
                          <div class="fs-md">Detail <i class="bi bi-chevron-right"></i> <br><span class="fs-xs fw-normal">{{$edy->desc}}</span></div>
                        </div>
                      </div>
                    </div> 
                  </div>

                  <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 33;">
                        <a href="" class="btn btn-sm btn-outline-primary" wire:click.prevent="store({{$edy->id}},'{{$edy->code}}',{{$edy->price}})">
                          Add
                       </a>  
                       
                        {{--<div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                          <div class="quantity-input">
                            <a class="btn btn-increase" href="#" wire:click.prevent="increase">+</a> 
                            {{$totalSteps}}
                            <a class="btn btn-decrease" href="#" wire:click.prevent="decrease">-</a>
                          </div>

                          <button class="btn btn-link px-0 text-danger" type="button" wire:click="destroy">
                          <i class="bi bi-x"></i><span class="fs-sm">Remove</span></button>
                        </div>--}}
                          
                  </div>
                </div>
            @endforeach
          </div>
          <div class="bg-secondary">
            <div class="container">
              <div class="d-flex justify-content-between py-2 px-2">
                <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i>{{Cart::instance('cart')->subtotal()}} <br><span class=" fw-light fs-xs">Onwards</span></div>
                <a href="{{route('checkout')}}" class="btn btn-primary btn-sm">Proceed</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="handheld-toolbar bg-secondary">
      <div class="d-flex justify-content-between py-2 px-2">
        <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i> <br><span class=" fw-light fs-xs">Onwards</span></div>
        <a href="{{route('event.product',['slug' => $event->slug])}}" class="btn btn-primary btn-sm">Proceed</a>
      </div>
    </div>
    
    </main>
    