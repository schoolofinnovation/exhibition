@section('page_title',($event->eventname))
<main>
    <div class="bg-secondary">
      <div class=" container">
        <div class="row ">
          <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                <div class="align-content-center pt-4 ">
                <a href="{{$previous}}"><i class="bi bi-chevron-left"></i></a>  
                </div>
          
                <div class="text-center py-2">
                      <div>{{$event->eventname}}</div> 
                      <div class="fs-xs fw-light">
                      @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                        {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}}
                      @else
                        {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}} | {{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}}
                      @endif
                      </div> 
                </div>

                <div class="align-content-center pt-4">
                <a href="" wire:click.prevent="destroyAll()"><i class="bi bi-x"></i></a>    
                </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          
        <div class="mb-4 mb-lg-5 ">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Ticket</a></li>
            <li class="nav-item"><a class="nav-link px-1 fs-sm" >Date & Time</a></li>
            {{--<li class="nav-item"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab">Date & Time</a></li>
            <li class="nav-item"><a class="nav-link px-1 {{'pass/es/($event->slug)#reviews' == request()->path() ? 'active' : '' }} fs-sm" href="#comments" data-bs-toggle="tab" role="tab">Meet-up</a></li>
            <li class="nav-item"><a class="nav-link px-1 {{'pass/es/($event->slug)#reviews' == request()->path() ? 'active' : '' }} fs-sm" href="#comments" data-bs-toggle="tab" role="tab">Add-on</a></li>--}}
          </ul>

          <div class="tab-content">
          
              <!-- Product details tab-->
              <div class="tab-pane fade show active" id="details" role="tabpanel">
                <!-- details test tickets-->
                  <div class="row">
                    
                      <div class="fs-ms">SELECT YOUR CATEGORY
                        @foreach($ticke as $edy)

                            <div class="row">
                                <div class="col-9">
                                  <div class="product-title fs-md mb-2">{{$edy->packagge}}</div>
                                  <div class="fs-xs fw-lighter lh-1">{{$edy->desc}}</div>
                                  <div class="fs-xs fw-normal"><i class="bi bi-currency-rupee"></i>{{$edy->price}}</div>
                                </div>
                                <div class="col-3">
                                  <a href="" class="btn btn-sm btn-outline-primary" wire:click.prevent="store({{$edy->id}},'{{$edy->code}}',{{$edy->price}})">Add</a>
                                </div>
                            </div>
                        
                        @endforeach

                        @foreach($tickeo as $edy)

                            <div class="row">
                                <div class="col-9">
                                  <div class="product-title fs-md mb-2">{{$edy->packagge}}</div>
                                  <div class="fs-xs fw-lighter lh-1">{{$edy->desc}}</div>
                                  <div class="fs-xs fw-normal"><i class="bi bi-currency-rupee"></i>{{$edy->price}}</div>
                                </div>
                                <div class="col-3">
                                  <a href="" class="btn btn-sm btn-outline-primary" wire:click.prevent="store({{$edy->id}},'{{$edy->code}}',{{$edy->price}})">Add</a>
                                </div>
                            </div>
                        
                        @endforeach
                      </div>
                      
                      @if(Cart::instance('cart')->count()>0)
                          <div class="bg-secondary position-bottom d-none d-sm-block">
                            <div class="container  bg-secondary">
                              <div class="d-flex  justify-content-between py-2 px-2">
                                <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i>{{Cart::instance('cart')->subtotal()}} <br>
                                  @if(Cart::instance('cart')->count()>0)
                                    <span class=" fw-normal fs-xs">{{Cart::instance('cart')->count()}} Ticket</span>
                                    @else
                                    <span class=" fw-light fs-xs">Onwards</span>
                                  @endif
                                </div>
                                
                                <a href="{{route('event.productreview',['slug' => $event->slug])}}" class="btn btn-primary btn-sm">Proceed</a>
                              </div>
                            </div>
                          </div>
                        @else
                          <div class="bg-secondary d-none d-sm-block">
                            <div class="container">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" disabled>Proceed</button>
                              </div>
                            </div>
                          </div>
                      @endif
                  </div>
              </div>
          
              <!-- Reviews tab-->
             
        {{-- <div class="tab-pane fade" id="reviews" role="tabpanel">
                <div class="row">
                  <!-- details test tickets-->
                  <div class="fs-ms">SELECT YOUR TICKET
                    @foreach (Cart::instance('cart')->content() as $item)
                      <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                        <div class="d-block d-sm-flex justify-content-between text-sm-start">
                          <a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="{{route ('event.details', ['slug'=> $item->model->event->slug])}}">
                            <img src="{{asset ('exhibition') }}/{{$item->model->event->image}}" alt="{{Str::limit($item->model->event->image, 24)}}" width="50"></a>
                            
                            <div class="pt-2">
                              <h3 class="product-title fs-base mb-2"><a href="{{route ('event.details',['slug'=>$item->model->event->slug])}}">{{$item->model->event->eventname}}</a></h3>
                              {{--<div class="fs-sm"> @if(Carbon\Carbon::parse ($item->model->event->startdate)->format('M') != Carbon\Carbon::parse ($item->model->event->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($item->model->event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($item->model->event->enddate)->format('D, d M y ')}} | {{ucwords(trans($item->model->event->venue))}} {{ucwords(trans($item->model->event->city))}} {{ucwords(trans($item->model->event->country))}}
                                    @else
                                      {{Carbon\Carbon::parse ($item->model->event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($item->model->event->enddate)->format('D, d M y')}} | {{ucwords(trans($item->model->event->venue))}} {{ucwords(trans($item->model->event->city))}} {{ucwords(trans($item->model->event->country))}}
                                    @endif
                              </div>--}}
                              
                                @if($item->model->sale_price > 0 &&  $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                  <div class="fs-lg text-accent pt-2"><small>Rs. <span class="border-end pe-2 me-2"> <strong>{{$item->model->sale_price}}</strong></span> 
                                  <span class="fs-sm text-muted"> <del>{{$item->model->regualar_price}}</del></span></small></div>
                                  @elseif($item->model->sale_price >0)
                                  <div class="fs-lg text-accent pt-2">Rs. {{$item->model->sale_price}}<small></small></div>
                                  <del class="fs-lg text-accent pt-2">Rs. {{$item->model->regualar_price}}<small></small></del>
                                  @else
                                  <div class="fs-lg text-accent pt-2">Rs. {{$item->model->price}}<small></small></div>
                                @endif

                            </div>
                        </div>

                        <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">  
                            <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</a>
                            {{$item->qty}} 
                            <a class="btn btn-decrease" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</a>
                          <button class="btn btn-link px-0 text-danger" type="button" wire:click="destroy('{{$item->rowId}}')">
                          <i class="bi bi-x"></i><span class="fs-sm">Remove</span></button>
                        </div>
                        
                      </div>
                    @endforeach	
                  </div>

                  @if(Cart::instance('cart')->count()>0)
                      <div class="bg-secondary d-none d-sm-block">
                        <div class="container">
                          <div class="d-flex justify-content-between py-2 px-2">
                            <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i>{{Cart::instance('cart')->subtotal()}} <br>
                            @if(Cart::instance('cart')->count()>0)
                                  <span class=" fw-normal fs-xs">{{Cart::instance('cart')->count()}} Ticket</span>
                                  @else
                                  <span class=" fw-light fs-xs">Onwards</span>
                                @endif
                          </div>
                            <a href="{{route('checkout')}}" class="btn btn-primary btn-sm">Proceed</a>
                          </div>
                        </div>
                      </div>
                    @else
                      <div class="bg-secondary d-none d-sm-block">
                        <div class="container">
                          <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button" disabled >Proceed</button>
                          </div>
                        </div>
                      </div>
                  @endif

                </div>
              </div>--}}

            </div>
          </div>

        </div>
      </div>
    </div>
            
    <!-- bottom -->              
    <div class="handheld-toolbar bg-secondary">
      <div class="d-flex justify-content-between py-2 px-2">
        @if(Cart::instance('cart')->count()>0)
          <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i> {{Cart::instance('cart')->subtotal()}}<br>
            @if(Cart::instance('cart')->count()>0)
                <span class=" fw-light fs-xs">{{Cart::instance('cart')->count()}} Ticket</span>    
                @else
                <span class=" fw-light fs-xs">Onwards</span>    
            @endif
          </div>

              <a href="{{route('event.productreview',['slug' => $event->slug])}}" class="btn btn-primary btn-sm">Proceed</a>
          @else
            <div class="text-dark fw-medium fs-sm pl-3 lh-3">  <i class="bi bi-currency-rupee"></i> {{Cart::instance('cart')->subtotal()}}<br>
              
            </div>
          <a href="" class="btn btn-primary btn-sm" type="button" disabled>Proceed</a>
        @endif
      </div>
    </div>
    
    </main>
    