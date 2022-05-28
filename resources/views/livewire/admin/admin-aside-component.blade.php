<aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5 ">
          <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
            <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
              <div class="d-md-flex align-items-center">
                <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: auto;" ><!--style="width: 6.375rem;"-->
                <span class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip" title="" data-bs-original-title="Reward points">
                  384</span>
                  
                  <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{Auth::user()->name}}" style="max-width: 50%;"></div>
                <div class="ps-md-3">
                  <h3 class="fs-base mb-0">{{Auth::user()->name}}</h3>
                  <span class="text-accent fs-sm">{{Auth::user()->email}}</span><br>
                  <button class="btn btn-sm btn-outline-primary"> <a href="{{route('admin.dashboard')}}"> Dashboard</a> </button>
                </div>
              </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>Account menu</a>
            </div>
            <div class="d-lg-block collapse" id="account-menu">
              <div class="bg-secondary px-4 py-3">
                <h3 class="fs-sm mb-0 text-muted"> Dashboard</h3>
              </div>
          <ul class="list-unstyled mb-0">
              <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex  align-items-center px-4 py-3" href="{{route('admin.dashboard')}}">
                <i class="ci-bag opacity-60 me-2"></i>Category<span class="fs-sm text-muted ms-auto">1</span></a></li>

                <li class="border-bottom mb-0">
                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('admin.categories')}}">
                <i class="ci-heart opacity-60 me-2">
                </i>Banner<span class="fs-sm text-muted ms-auto">3</span></a></li>

                <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('admin.brand')}}">
                <i class="ci-help opacity-60 me-2"></i>Product<span class="fs-sm text-muted ms-auto">1</span></a></li>
              </ul>
              <div class="bg-secondary px-4 py-3">
                <h3 class="fs-sm mb-0 text-muted">Account settings</h3>
              </div>
              <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{route('admin.ticket')}}">
                <i class="ci-user opacity-60 me-2"></i>Ticket</a></li>
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="">
                <i class="ci-location opacity-60 me-2"></i>Franchise</a></li>
                <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="{{route('admin.user')}}">
                <i class="ci-card opacity-60 me-2"></i>User</a></li>
                
              </ul>
            </div>
          </div>
        </aside>



        <!-- Steps-->
        <!--<div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
              <div class="step-progress"><span class="step-count">1</span></div>
              <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.html">
              <div class="step-progress"><span class="step-count">2</span></div>
              <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item" href="checkout-shipping.html">
              <div class="step-progress"><span class="step-count">3</span></div>
              <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item" href="checkout-payment.html">
              <div class="step-progress"><span class="step-count">4</span></div>
              <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
              <div class="step-progress"><span class="step-count">5</span></div>
              <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>-->


              