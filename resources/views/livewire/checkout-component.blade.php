@section('page_title','Cart')

<main>
    <div class="page-title-overlap bg-accent pt-4 ">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2 d-none">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="bi bi-house"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="">Opportunities</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start d-none">
          <h1 class="h3 text-light mb-0">Your Application</h1>

          @if(Session::has('success_message'))
             <span class="alert alert-success text-center"><strong>Success</strong> {{Session::get('success_message')}}</span>
          @endif
        </div>
      </div>
    </div>

    <div class="container mb-5 pb-3">
      <div class="bg-light shadow-lg rounded-3 overflow-hidden">
        <div class="row">

          <!-- Content-->
          <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 pe-lg-0 ps-xl-5">
            <div class="pb-1">Please select from the following option(s)</div>
              <div class="fw-light">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    M-Ticket
                  </label>
                </div>
              </div> 
              <div class="fs-xs pb-1">Login & save the planet. Use your phone as a ticket.</div>
              

            <ul class="bg-secondary py-3"> <span class="fw-bold"> M-Ticket Information</span> 
              <li class="fs-sm">Customer(s) can access their ticket(s) from the 'My Profile' section on the app/mobile-web.</li>				
              <li class="fs-sm">It is mandatory to present the ticket(s) in my profile section via app/mobile-web at the venue.</li>					
              <li class="fs-sm">No physical ticket(s) are required to enter the venue.</li>
            </ul>
              
          </section>
          @php
                    $data = session()->get('eventID');  
                    $findevent = DB::table('events')->where('id', $data)->first()

                    @endphp

          <!-- Sidebar-->
          <aside class="col-lg-4 ps-xl-5">
              <hr class="d-lg-none">
              <div class="p-4 h-100 ms-auto border-start">

                <div class="widget px-lg-2 py-2 mb-3">
                  <h2 class="widget-title text-center">Order summary</h2>

                  @if(Cart::instance('cart')->count()>0)
                    @foreach (Cart::instance('cart')->content() as $item)
                      <div class="d-flex align-items-center pb-2 border-bottom">
                        <a class="d-block flex-shrink-0 me-2" href="{{route ('event.details',['slug'=>$findevent->slug])}}">
                        <img class="rounded-1" src="{{asset('public/assets/image/exhibition') }}/{{$findevent->image}}" alt="{{Str::limit($findevent->eventname, 24)}}"  width="64" ></a>
                        
                        <div class="ps-1">
                            <h6 class="widget-product-title"><a href="{{route ('event.details',['slug'=>$findevent->slug])}}">
                            {{$item->model->package}}</a></h6>
                           
                            <div class="widget-product-meta"><span class="text-dark  border-end pe-2 me-2">
                                @if($item->model->sale_price > 0 &&  $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                  <i class="bi bi-currency-rupee"></i> {{$item->model->sale_price}}
                                  @else
                                  <i class="bi bi-currency-rupee"></i> {{$item->model->regular_price}}
                                @endif

                                <span class="text-muted">{{$item->model->price}} x {{$item->qty}}</span></span> 
                                <span class="fs-xs text">Ticket</span>
                            </div>
                          
                        </div>
                      </div>
                    @endforeach



                    


                      <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">   
                        <li class="d-flex justify-content-between align-items-center">
                          <span class="me-2"> Date </span>
                          <span class="text-end">
                            @if(Carbon\Carbon::parse ($item->model->startdate)->format('M') != Carbon\Carbon::parse ($item->model->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($item->model->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($item->model->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon\Carbon::parse ($item->model->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($item->model->enddate)->format('D, d M Y')}}
                            @endif 
                          </span>
                        </li>
                          <li class="d-flex justify-content-between align-items-center">
                            <span class="me-2"> Time </span>
                            <span class="text-end"> {{Carbon\Carbon::now()}}</span></li>
                        <li class="d-flex justify-content-between align-items-center">
                          <span class="me-2"> Venue </span>
                        <span class="text-end"> {{$findevent->venue}} : {{$findevent->city}}</span></li>
                        
                        <li class="align-items-center">
                          
                        <span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$item->model->code}}({{$item->model->price}}): {{$item->qty}} ticket(s)</span></li>

                      </ul>     

                        @if(session::has('coupon'))
                            <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">   
                                <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount : ({{session::get('coupon')['code']}}) <a href="" wire:click.prevent="removeCoupon"><i class="bi bi-x"></i></a> </span><span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$discount}}</span></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="me-2">Sub-total</span><span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$subtotalAfterDiscount}}</span></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="me-2">Booking Fee <input class="form-check-input" type="checkbox"   value="1"  wire:model="checkfee"></span>
                              <span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$bookingFee}}</span></li>
                              @if($checkfee == 1)
                                <li class="d-flex justify-content-between align-items-center"><small><span class="me-2">Base Price</span></small><small><span class="text-end"> {{$basePrice}}</span></small></li>
                                <li class="d-flex justify-content-between align-items-center"><small><span class="me-2">Tax : ({{config('cart.tax')}}%)</span></small><small><span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$taxAfterDiscount}}</span></small></li>
                              @endif 
                            </ul>
                              {{--<h3 class="fw-normal text-center my-4"><i class="bi bi-currency-rupee"></i>{{$totalAfterDiscount}}</h3>--}}
                              <div class="d-flex justify-content-between align-items-center "><span class="me-2 fw-bold">Total Amount</span><span class="text-end fw-bold fs-sm"><small></small> {{$totalAfterDiscount}}</span></div> 
                          @else 
                            <ul class="list-unstyled fs-sm pt-2 pb-2 border-bottom">
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Sub-total</span><span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$subtotal}}</span></li>
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Booking Fee <input class="form-check-input" type="checkbox"   value="1" id="have-check" wire:model="checkfee"></span>
                              <span class="text-end"><small><i class="bi bi-currency-rupee"></i></small> {{$bookingFee}}</span></li>
                              @if($checkfee == 1)
                              <li class="d-flex justify-content-between align-items-center"><small><span class="me-2">Base Price</span></small><span class="text-end"><small><i class="bi bi-currency-rupee"></i> {{$basePrice}}</small></span></li>
                              <li class="d-flex justify-content-between align-items-center"><small><span class="me-2">Integrated GST (IGST) @ 18%</span></small><span class="text-end"><small><i class="bi bi-currency-rupee"></i> {{$tax}}</small></span></li>
                              @endif

                            </ul>
                            <div class="d-flex justify-content-between align-items-center "><span class="me-2 fw-bold">Total Amount</span><span class="text-end fw-bold fs-sm"><small></small> {{$total}}</span></div> 

                            {{--<h3 class="fw-normal text-center my-4"><i class="bi bi-currency-rupee"></i>{{Cart::instance('cart')->total()}}</h3>--}}  
                        @endif
                    @else
                      <div>No item in cart</div>
                  @endif 
                </div>

                <!--coupon-->
                @if(!session::has('coupon'))
                  <div class="form-check mb-2 pb-1">
                    <input class="form-check-input" type="checkbox"   value="1" id="have-check" wire:model="haveCouponCode">
                    <label class="form-check-label" for="same-address">I have coupon Code.</label>
                  </div>

                    @if($haveCouponCode == 1)
                      <div class="text-center mb-4 pb-3 border-bottom">
                        <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                        @if(Session::has('coupon_message'))
                          <div class="alert alert-success text-center"> {{Session::get('coupon_message')}} </div>
                        @endif

                        <form class=" pb-2"   wire:submit.prevent="applyCouponCode">
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Coupon code" value="" name="couponCode" wire:model="couponCode" required="">
                            <div class="invalid-feedback">Please provide Coupon code.</div>
                          </div>
                          <button class="btn btn-secondary d-block w-100" type="submit">Apply Coupon code</button>
                        </form>
                      </div>
                    @endif
                @endif  
                
                  <div class="d-flex fs-sm pt-2 pb-1"> 
                      <div class="px-1"><i class="bi bi-info-circle"></i></div>
                      <div class="small text-form text-muted">By proceeding, I express my consent to complete this transaction.</div>
                  </div>
                 
                  @guest
                      <a class="btn btn-primary btn-shadow d-block w-100 d-none d-sm-block" href="#" wire:click.prevent="checkout">
                      Login to Proceed</a>
                  @endguest
                  @auth
                      <a class="btn btn-primary btn-shadow d-block w-100 d-none d-sm-block" href="#" wire:click.prevent="checkout">
                      Proceed To Pay</a>
                  @endauth
                
                </div>
              </div>
          </aside>

        </div>
        
    </div>
    
            <div class="handheld-toolbar bg-secondary">
              <div class="py-2 px-2">
              @if(Auth::check())
               <a class="btn btn-primary btn-shadow d-block w-100 " href="#" wire:click.prevent="checkout">
                  Login to Proceed</a>
              @else
                <a class="btn btn-primary btn-shadow d-block w-100 " href="#" wire:click.prevent="checkout">
                  Proceed</a>
              @endif
              </div>
            </div>

    </main>