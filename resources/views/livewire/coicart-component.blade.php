    
    @section('page_title','Business Opportunity')
    @section('page_description','Job')
    @section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
    @section('page_author' , 'COI - CouncilofInnovation')
    <main>     
      <!-- Page Title-->
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{'/'}}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{route('franchise.Coi')}}">Opportunity</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
            <!-- Steps
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.html">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item {{'checkout' == request()->path() ? 'active' : '' }}" href="{{route('coicart')}}">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item {{'seller/account' == request()->path() ? 'active' : '' }}" href="checkout-payment.html">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item {{'seller/account' == request()->path() ? 'active' : '' }}" href="checkout-review.html">
                <div class="step-progress"><span class="step-count">5</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Review</div></a>
            </div>-->

          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Checkout</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <section class="col-lg-8">
            <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.html">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item {{'checkout' == request()->path() ? 'active' : '' }}" href="{{route('coicart')}}">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item {{'seller/account' == request()->path() ? 'active' : '' }}" href="checkout-payment.html">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item {{'seller/account' == request()->path() ? 'active' : '' }}" href="checkout-review.html">
                <div class="step-progress"><span class="step-count">5</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Review</div></a>
            </div>

            <!-- Autor info-->
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-3 mb-grid-gutter">
              <div class="d-flex align-items-center">
                <div class="img-thumbnail rounded-circle position-relative flex-shrink-0">
                  <span class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip" title="" data-bs-original-title="Reward points">
                    384</span><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="60" alt="{{Auth::user()->name}}"></div>
                <div class="ps-3">
                  <h3 class="fs-base mb-0">{{Auth::user()->name}}</h3><span class="text-accent fs-sm">{{Auth::user()->email}}</span>
                </div>
              </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="{{route('user.profile')}}">
                <i class="ci-edit me-2"></i>Edit profile</a>
            </div>

            <!-- Shipping address-->
            <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Billing address</h2>
            <form  wire:submit.prevent="placeOrder">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-fn">First Name</label>
                    <input class="form-control" type="text"  wire:model.lazy="firstname" required="">
                     @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-ln">Last Name</label>
                    <input class="form-control" type="text"  wire:model.lazy="lastname" required="">
                    @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-email">E-mail Address</label>
                    <input class="form-control" type="email"  wire:model.lazy="email" required="">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-phone">Phone Number</label>
                    <input class="form-control" type="text"  wire:model.lazy="mobile" required="">
                    @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-company">Company</label>
                    <input class="form-control" type="text"  wire:model.lazy="company" required="">
                    @error('company') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-country">Country</label>
                    <select class="form-select"  wire:model.lazy="country" required="">
                      <option>Choose country</option>
                      <option value="australia">Australia</option>
                      <option value="canada">Canada</option>
                      <option value="france">France</option>
                      <option value="germany">Germany</option>
                      <option value="switzerland">Switzerland</option>
                      <option value="usa">USA</option>
                    </select>
                    @error('country') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-city">State</label>
                    <select class="form-select"  wire:model.lazy="province" required="">
                      <option>Choose city</option>
                      <option value="amsterdam">Amsterdam</option>
                      <option value="berlin">Berlin</option>
                      <option value="geneve">Geneve</option>
                      <option value="yew">New York</option>
                      <option value="paris">Paris</option>
                    </select>
                    @error('province') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-zip">City</label>
                    <input class="form-control" type="text"  wire:model.lazy="city" required="">
                    @error('city') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-zip">ZIP Code</label>
                    <input class="form-control" type="text"  wire:model.lazy="zipcode" required="">
                    @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-address-1">Address 1</label>
                    <input class="form-control" type="text"  wire:model.lazy="line1" required="">
                    @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label" for="checkout-address-2">Address 2</label>
                    <input class="form-control" type="text"  wire:model.lazy="line2" required="">
                    @error('line2') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  value="1"  wire:model="ship_to_different">
                <label class="form-check-label" for="same-address">Shipping to Different Address</label>
              </div>
              <h6 class="mb-3 py-3 border-bottom">Payment: {{$paymentmode}} <div class="fs-sm fw-light">Choose payment Mode</div></h6>

              
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  value="cod"  wire:model="paymentmode">
                <label class="form-check-label" for="same-address">Cash on  delivery</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox"  value="card"  wire:model="paymentmode">
                <label class="form-check-label" for="same-address">by  credit & debit </label>
              </div>
              @error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror

              @if($ship_to_different)
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-fn">First Name</label>
                      <input class="form-control" type="text" id="checkout-fn" wire:model.lazy="s_firstname" required="">
                      @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-ln">Last Name</label>
                      <input class="form-control" type="text" id="checkout-ln" wire:model.lazy="s_lastname" required="">
                      @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-email">E-mail Address</label>
                      <input class="form-control" type="email" id="checkout-email" wire:model.lazy="s_email" required="">
                      @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-phone">Phone Number</label>
                      <input class="form-control" type="text" id="checkout-phone" wire:model.lazy="s_mobile" required="">
                      @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-country">Country</label>
                      <select class="form-select" id="checkout-country" wire:model.lazy="s_country" required="">
                        <option>Choose country</option>
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="france">France</option>
                        <option value="germany">Germany</option>
                        <option value="switzerland">Switzerland</option>
                        <option value="usa">USA</option>
                      </select>
                      @error('s_country') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-address-1">Address 1</label>
                      <input class="form-control" type="text" id="checkout-address-1" wire:model.lazy="s_line1" required="">
                      @error('S_line1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-city">State</label>
                      <select class="form-select" id="checkout-city" wire:model.lazy="s_province" required="">
                        <option>Choose city</option>
                        <option value="amsterdam">Amsterdam</option>
                        <option value="berlin">Berlin</option>
                        <option value="geneve">Geneve</option>
                        <option value="yew">New York</option>
                        <option value="paris">Paris</option>
                      </select>
                      @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-zip">City</label>
                      <input class="form-control" type="text" id="checkout-zip" wire:model.lazy="s_city" required="">
                      @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label" for="checkout-zip">ZIP Code</label>
                      <input class="form-control" type="text" id="checkout-zip" wire:model.lazy="s_zipcode" required="">
                      @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                  
                </div>
              @endif

              @if($paymentmode == "card")
                  <!-- Payment methods accordion-->
                  <h2 class="h6 pb-3 mb-2">Choose payment method</h2>{{$paymentmode}}
                  <!--<form class="credit-card-form row">-->
                  @if(Session::has('stripe_error'))
                        <h3 class="fw-normal text-center my-4 alert alert danger"> {{Session::get('stripe_error')}}</h3>
                        @endif
                  <div class="mb-3 col-sm-6">
                    <input class="form-control jp-card-invalid" type="text" name="number" placeholder="Card Number" required="" wire:model.lazy="card_no">
                  </div>
                  <div class="mb-3 col-sm-3">
                    <input class="form-control jp-card-invalid" type="text" name="expiry" placeholder="MM" required="" wire:model.lazy="card_month">
                  </div>
                  <div class="mb-3 col-sm-3">
                    <input class="form-control jp-card-invalid" type="text" name="expiry" placeholder="YY" required="" wire:model.lazy="card_year">
                  </div>
                  <div class="mb-3 col-sm-3">
                    <input class="form-control jp-card-invalid" type="text" name="cvc" placeholder="CVC" required="" wire:model.lazy="card_cvc">
                  </div>  
                  <!--</form>-->
                
                
              @endif
              <!-- Navigation (desktop)-->
              <div class="d-none d-lg-flex pt-4 mt-3">
                <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{route('checkout')}}">
                  <i class="bi bi-chevron-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span>
                  <span class="d-inline d-sm-none">Back</span></a></div>
                <div class="w-50 ps-2">
                  <button class="btn btn-primary d-block w-100" type="submit">
                    <span class="d-none d-sm-inline">Proceed to Shipping</span>
                    <span class="d-inline d-sm-none">Next</span><i class=" bi bi-chevron-right mt-sm-0 ms-1"></i></button>
                </div>
              </div>
            </form>
          </section>

          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
            <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
              <div class="py-2 px-xl-2">
                <div class="widget mb-3">
                  <h2 class="widget-title text-center">Order summary</h2>
                  @foreach (Cart::instance('cart')->content() as $item)
                    <div class="d-flex align-items-center pb-2 border-bottom">
                    <a class="d-block flex-shrink-0 me-2" href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">
                    <img class="rounded-1" src="{{asset ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}" width="64" ></a>
                      <div class="ps-1">
                        <h6 class="widget-product-title"><a href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">
                        {{$item->model->name}}</a></h6>
                        <div class="widget-product-meta"><span class="text-dark  border-end pe-2 me-2">

                        @if($item->model->sale_price > 0 &&  $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                        Rs. {{$item->model->sale_price}}
                        @else
                        Rs. {{$item->model->regualar_price}}
                        @endif

                        <span class="text-muted"> x {{$item->qty}}</span></span> 
                        <span class="fs-xs text">Standard license</span>
                        </div>
                      </div>
                    </div>
                  @endforeach

                @if(Session::has('checkout'))
                      <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">   
                          <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount : ({{session::get('coupon')['code']}}) </span><span class="text-end"><small>Rs.</small> {{Session::get('checkout')['discount']}}</span></li>
                          <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal :</span><span class="text-end"><small>Rs.</small> {{Session::get('checkout')['subtotal']}}</span></li>
                          <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping</span><span class="text-end"><small></small> Free Shipping</span></li>
                          <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes : ({{config('cart.tax')}}%)</span><span class="text-end"><small>Rs.</small> {{Session::get('checkout')['tax']}}</span></li>
                      </ul>
                    <h3 class="fw-normal text-center my-4">Rs. {{Session::get('checkout')['total']}}</h3>
               
                @endif

                <form class="needs-validation" method="post" novalidate="">
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Promo code" required="">
                    <div class="invalid-feedback">Please provide promo code.</div>
                  </div>
                  <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo code</button>
                </form>
              </div>
            </div>
          </aside>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
          <div class="col-lg-8">
            <div class="d-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{route('checkout')}}"><i class=" bi bi-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" type="submit"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </main>