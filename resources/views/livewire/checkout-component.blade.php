@section('page_title','Cart')

<main>
    <div class="page-title-overlap bg-accent pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="bi bi-house"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="{{route('franchise.Coi')}}">Opportunities</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
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
              <!-- Header-->
              <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-3">
                <div class="py-1"><a class="btn btn-outline-accent btn-sm" href="{{route ('franchise.Coi')}}"><i class=" bi bi-Chevron-left me-1 ms-n1"></i>Back to Opportunities</a></div>
                    <div class="d-none d-sm-block py-1 fs-sm">
                      @if(Cart::instance('cart')->count()>0)
                          <span class="index">You have <strong>{{Cart::instance('cart')->count()}} </strong>Opportunities in your cart</span>
                        @else
                          Looking for Business Opportunities
                      @endif 
                    </div>
                <div class="py-1">
                  <a class="btn btn-outline-danger btn-sm" href="#" wire:click.prevent="destroyAll()"><i class=" bi bi-x fs-xs me-1 ms-n1"></i>Clear cart</a>
                </div>
              </div>

              @if(Cart::instance('cart')->count()>0)
                  <!-- Item-->
                  @foreach (Cart::instance('cart')->content() as $item)
                    <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                      <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                        <a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="{{route ('franchise.details',['slug'=>$item->model->slug])}}"><img src="{{asset ('Storage/brands/') }}/{{$item->model->image}}" alt="{{Str::limit($item->model->brand_name, 24)}}" width="160"></a>
                          <div class="pt-2">
                            <h3 class="product-title fs-base mb-2"><a href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">{{$item->model->brand_name}}</a></h3>
                            <div class="fs-sm"><span class="text-unmuted me-2">Investment:</span>
                              <a class="btn btn-outline-danger btn-sm" href="#" wire:click.prevent="destroyAll()"><i class=" bi bi-x fs-xs me-1 ms-n1"></i>Clear cart</a>
                            </div>
                            <div class="fs-sm"><span class="text-unmuted me-2">Location:</span>
                              <a class="btn btn-outline-danger btn-sm" href="#" wire:click.prevent="destroyAll()"><i class=" bi bi-x fs-xs me-1 ms-n1"></i>Clear cart</a>
                            </div>
                            <div class="fs-sm"><span class="text-unmuted me-2">Opportunities:</span>
                              <a class="btn btn-outline-danger btn-sm" href="#" wire:click.prevent="destroyAll()"><i class=" bi bi-x fs-xs me-1 ms-n1"></i>Clear cart</a>
                            </div>
                              @if($item->model->sale_price > 0 &&  $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                <div class="fs-lg text-accent pt-2"><small>Rs. <span class="border-end pe-2 me-2"> <strong>{{$item->model->sale_price}}</strong></span> 
                                <span class="fs-sm text-muted"> <del>{{$item->model->regualar_price}}</del></span></small></div>
                                @elseif($item->model->sale_price >0)
                                <div class="fs-lg text-accent pt-2">Rs. {{$item->model->sale_price}}<small></small></div>
                                <del class="fs-lg text-accent pt-2">Rs. {{$item->model->regualar_price}}<small></small></del>
                                @else
                                <div class="fs-lg text-accent pt-2">Rs. {{$item->model->max_investment}}<small></small></div>
                              @endif
                          </div>
                      </div>

                      <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                        <div class="quantity-input">
                          <input class="form-control" type="text"  min="1" value="{{$item->qty}}">
                          <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</a> 
                          <a class="btn btn-decrease" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</a>
                        </div>

                        <button class="btn btn-link px-0 text-danger" type="button" wire:click="destroy('{{$item->rowId}}')">
                        <i class="bi bi-x"></i><span class="fs-sm">Remove</span></button>
                      </div>
                      
                    </div>
                  @endforeach	
                  </div>
              @else
                    <div class="text-center d-block w-100 mt-4"><strong>Looking for Business Opportunities</strong></div>
              @endif
             <button class="btn btn-outline-accent d-block w-100 mt-4" type="button"><i class=" bi bi-loading fs-base me-2"></i>Update cart</button>
          </section>

          <!-- Sidebar-->
        <aside class="col-lg-4 ps-xl-5">
            <hr class="d-lg-none">
            <div class="p-4 h-100 ms-auto border-start">

            <div class="widget px-lg-2 py-2 mb-3">
                <h2 class="widget-title text-center">Order summary</h2>

                @if(Cart::instance('cart')->count()>0)
                  @foreach (Cart::instance('cart')->content() as $item)
                    <div class="d-flex align-items-center pb-2 border-bottom">
                    <a class="d-block flex-shrink-0 me-2" href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">
                    <img class="rounded-1" src="{{asset ('Storage/brands/') }}/{{$item->model->image}}" alt="{{Str::limit($item->model->brand_name, 24)}}" 
                    
                    alt="{{$item->model->name}}" width="64" ></a>
                      <div class="ps-1">
                        <h6 class="widget-product-title"><a href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">
                        {{$item->model->name}}</a></h6>
                        <div class="widget-product-meta"><span class="text-dark  border-end pe-2 me-2">

                        @if($item->model->sale_price > 0 &&  $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                          Rs. {{$item->model->sale_price}}
                          @else
                          Rs. {{$item->model->regualar_price}}
                        @endif

                        <span class="text-muted"> {{$item->model->max_investment}} x {{$item->qty}}</span></span> 
                        <span class="fs-xs text">Standard license</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                      @if(session::has('coupon'))
                          <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">   
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount : ({{session::get('coupon')['code']}}) <a href="" wire:click.prevent="removeCoupon"><i class="bi bi-x"></i></a> </span><span class="text-end"><small>Rs.</small> {{$discount}}</span></li>
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal :</span><span class="text-end"><small>Rs.</small> {{$subtotalAfterDiscount}}</span></li>
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping</span><span class="text-end"><small></small> Free Shipping</span></li>
                              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Tax : ({{config('cart.tax')}}%)</span><span class="text-end"><small>Rs.</small> {{$taxAfterDiscount}}</span></li>
                          </ul>
                            <h3 class="fw-normal text-center my-4">Rs.{{$totalAfterDiscount}}</h3>
                        @else
                          <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end"><small>Rs.</small> {{Cart::instance('cart')->subtotal()}}</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end"><small>Rs.</small> {{Cart::instance('cart')->tax()}}</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping</span><span class="text-end"><small></small> Free Shipping</span></li>
                          </ul>
                            <h3 class="fw-normal text-center my-4">Rs.{{Cart::instance('cart')->total()}}</h3>  
                      @endif
                  @else
                    <div>No item in cart</div>
                @endif

                 
               
                
                <a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="#" wire:click.prevent="checkout">
                <i class=" bi bi-lock-fill fs-lg me-2"></i>Secure Checkout</a>
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

                <div class="text-center pt-2 pb-3"><small class="text-form text-muted">100% money back guarantee</small></div>
              </div>
            </div>
        </aside>
        </div>
        
      </div>
    </div>

    </main>