<header class="bg-light shadow-sm navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!--<a class="navbar-brand d-none d-sm-block flex-shrink-0 me-4 order-lg-1" href="{{asset('/')}}">
              <img src="{{asset('image/logo-dark.png')}}" width="142" alt="COI"></a>
              <a class="navbar-brand d-sm-none me-2 order-lg-1" href="{{asset('/')}}">
                  <img src="{{asset('image/logo-icon.png')}}" width="74" alt="COI"></a>-->
                  <a class="navbar-brand d-none d-sm-block  flex-shrink-0 mx-0" href="{{asset('/')}}">
              <i class="bi bi-globe2"></i></a>
          <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0 ml-1" style="line-height:17px;"   href="{{asset('/')}}">
            <div class="fs-4" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> 
              Council <small class="text-primary fw-normal">of</small><br>Innovation</div><!--<img src="{{asset('image/def.png')}}" width="142" alt="COI">--></a> 
          
            <a class="navbar-brand d-sm-none me-2" href="{{asset('/')}}"> <i class="bi bi-globe2"></i>
              <!--<img src="{{asset('image/abc.png')}}" width="74" alt="COI">--></a>
            <a class="navbar-brand d-sm-none me-2" href="{{asset('/')}}"> 
            <div class="fs-4" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> 
              COI </div>
            <!--<img src="{{asset('image/abc.png')}}" width="74" alt="COI">--></a>

            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon  bi bi-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.html"><span class="navbar-tool-tooltip">Favorites</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon  bi bi-heart"></i></div></a>

              <div class="navbar-tool dropdown ms-2"><a class="" href="#">
                 <!-- <img src="{{url('Storage/') }}/{{Auth::user()->profile_photo_path}}" width="32" alt="{{Auth::user()->name}}">
                  <div class=" rounded-circle" style="width: 50%;">-->
                  <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="" style="max-width: 50%;">
                </a>
                  <a class="navbar-tool-text ms-n1" href="#"><small>{{Auth::user()->name}}</small>$1,375.00</a>
                  
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                    <h6 class="dropdown-header">Business Account</h6>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('seller.account')}}">
                      <i class="ci-settings opacity-60 me-2"></i> Account<span class="fs-xs text-muted ms-auto">Set up</span></a>

                      <a class="dropdown-item d-flex align-items-center" href="{{route('seller.profile')}}">
                        <i class="ci-basket opacity-60 me-2"></i>Business Portfolio<span class="fs-xs text-muted ms-auto">Set up</span></a>

                        <a class="dropdown-item d-flex align-items-center" href="{{route('seller.brand')}}">
                          <i class="ci-heart opacity-60 me-2"></i>Business Brand<span class="fs-xs text-muted ms-auto"> List</span></a>

                          <a class="dropdown-item d-flex align-items-center" href="{{route('seller.brand')}}">
                          <i class="ci-heart opacity-60 me-2"></i>Opportunity<span class="fs-xs text-muted ms-auto">Publish </span></a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Seller Dashboard</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-xs text-muted ms-auto">$1,375.00</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-products.html">
                      <i class="ci-package opacity-60 me-2"></i>Products<span class="fs-xs text-muted ms-auto">5</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product.html">
                        <i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a>
                      
                        <a class="dropdown-item d-flex align-items-center" href="dashboard-payouts.html">
                          <i class="ci-currency-exchange opacity-60 me-2">
                        </i>Payouts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                    @csrf
				          </form>
                  
                  </div>
                </div>

              </div>
              <div class="navbar-tool ms-4">
                  <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="#">
                      <span class="navbar-tool-label">3</span><i class="navbar-tool-icon  bi bi-cart"></i></a>
                      @livewire('wishlist-component')
              </div>
            </div>
           

            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group d-lg-none my-3"><i class=" bi bi-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>


              <!-- Categories dropdown-->
              <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown">
                    <i class="  bi bi-menu align-middle mt-n1 me-2"></i>Guide</a>
                  <ul class="dropdown-menu py-1">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Certificate</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Photos<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Abstract</a></li>
                        <li><a class="dropdown-item" href="#">Animals</a></li>
                        <li><a class="dropdown-item" href="#">Architecture</a></li>
                        <li><a class="dropdown-item" href="#">Beauty &amp; Fashion</a></li>
                        <li><a class="dropdown-item" href="#">Business</a></li>
                        <li><a class="dropdown-item" href="#">Education</a></li>
                        <li><a class="dropdown-item" href="#">Food &amp; Drink</a></li>
                        <li><a class="dropdown-item" href="#">Holidays</a></li>
                        <li><a class="dropdown-item" href="#">Industrial</a></li>
                        <li><a class="dropdown-item" href="#">People</a></li>
                        <li><a class="dropdown-item" href="#">Sports</a></li>
                        <li><a class="dropdown-item" href="#">Technology</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Volunteers + Staff</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Graphics<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Icons</a></li>
                        <li><a class="dropdown-item" href="#">Illustartions</a></li>
                        <li><a class="dropdown-item" href="#">Patterns</a></li>
                        <li><a class="dropdown-item" href="#">Textures</a></li>
                        <li><a class="dropdown-item" href="#">Web Elements</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Venue + spaces</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All UI Design<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">PSD Templates</a></li>
                        <li><a class="dropdown-item" href="#">Sketch Templates</a></li>
                        <li><a class="dropdown-item" href="#">Adobe XD Templates</a></li>
                        <li><a class="dropdown-item" href="#">Figma Templates</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Speakers + program</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Web Themes<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">WordPress Themes</a></li>
                        <li><a class="dropdown-item" href="#">Bootstrap Themes</a></li>
                        <li><a class="dropdown-item" href="#">eCommerce Templates</a></li>
                        <li><a class="dropdown-item" href="#">Muse Templates</a></li>
                        <li><a class="dropdown-item" href="#">Plugins</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Auidence + experience</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Fonts<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Blackletter</a></li>
                        <li><a class="dropdown-item" href="#">Display</a></li>
                        <li><a class="dropdown-item" href="#">Non Western</a></li>
                        <li><a class="dropdown-item" href="#">Sans Serif</a></li>
                        <li><a class="dropdown-item" href="#">Script</a></li>
                        <li><a class="dropdown-item" href="#">Serif</a></li>
                        <li><a class="dropdown-item" href="#">Slab Serif</a></li>
                        <li><a class="dropdown-item" href="#">Symbols</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Sponsors + finances</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Add-Ons<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                        <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                        <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                        <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                        <li><a class="dropdown-item" href="#">Other Software</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Video + photography</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Add-Ons<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                        <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                        <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                        <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                        <li><a class="dropdown-item" href="#">Other Software</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Post-event + renewal</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Add-Ons<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                        <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                        <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                        <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                        <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                        <li><a class="dropdown-item" href="#">Other Software</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Primary menu-->
                <div class="navbar-tool ">
                    <a class="navbar-tool-icon-box" style="max-width: 50%;" href="#">
                      <span class="navbar-tool-label">@if($brands->count()>0) {{$brands->count()}} @endif</span>
                      <i class="navbar-tool-icon  bi bi-cart"></i>
                    </a>
                
                    <a class="navbar-tool-icon-box  ms-1" style="max-width: 50%;" href="#">
                          <span class="navbar-tool-label">@if($likecoun > 0){{$likecoun}} @endif</span>
                          <i class="navbar-tool-icon  bi bi-cart"></i>
                        </a>
                    <a class="navbar-tool-icon-box  ms-1" style="max-width: 50%;" href="#">
                          <span class="navbar-tool-label">@if($review->count()>0){{$review->count()}} @endif</span>
                          <i class="navbar-tool-icon  bi bi-cart"></i>
                        </a>
                    <a class="navbar-tool-icon-box  ms-1" style="max-width: 50%;" href="#">
                          <span class="navbar-tool-label">@if($user->likedMags->count()>0){{$user->likedMags->count()}} @endif</span>
                          <i class="navbar-tool-icon  bi bi-cart"></i>
                        </a>
                    <a class="navbar-tool-icon-box  ms-1" style="max-width: 50%;" href="#">
                          <span class="navbar-tool-label">@if($franchise->count()>0){{$franchise->count()}} @endif</span>
                          <i class="navbar-tool-icon  bi bi-cart"></i>
                        </a>   
             </div>
            </div>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
              <div class="input-group"><i class=" bi bi-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>
            </div>
          </div>
        </div>
      </header>

      