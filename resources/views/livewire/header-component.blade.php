<main>

 <!-- Navbar Electronics Store-->
 <header class="shadow-sm">
        <!-- Topbar
        <div class="topbar topbar-dark bg-dark">
          <div class="container">
            <div>
              <div class="topbar-text dropdown disable-autohide">
              <a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="me-2" src="" width="20"  >Eng / $</a>
                <ul class="dropdown-menu my-1" style="">
                  <li class="dropdown-item">
                    <select class="form-select form-select-sm">
                      <option value="usd">$ USD</option>
                      <option value="eur">€ EUR</option>
                      <option value="ukp">£ UKP</option>
                      <option value="jpy">¥ JPY</option>
                    </select>
                  </li>
                  <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="{{asset('image/5.png')}}" width="20" alt="Français">Switerland</a></li>
                  <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="{{asset('image/6.png')}}" width="20" alt="Deutsch">Canada</a></li>
                  <li><a class="dropdown-item" href=""><img class="me-2" src="{{asset('image/7.png')}}" width="20" alt="Italiano">India</a></li>
                </ul>
              </div>
              <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3 ms-3">
              <span class="text-muted me-1">Available 24/7 at</span>
              <a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a>
              </div>
            </div>
            <div class="topbar-text dropdown d-md-none ms-auto">
            <a class="topbar-link dropdown-toggle" href="" data-bs-toggle="dropdown">Wishlist / Compare / Track</a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href=""><i class=" bi bi-heart text-muted me-2"></i>Wishlist ({{Cart::instance('wishlist')->count()}})</a></li>
                <li><a class="dropdown-item" href=""><i class="bi bi-shuffle text-muted me-2"></i>Compare (3)</a></li>
                <li><a class="dropdown-item" href=""><i class="ci-location text-muted me-2"></i>Order tracking</a></li>-->
             <!-- </ul>
            </div>

            <div class="d-none d-md-block ms-3 text-nowrap">
            <a class="topbar-link d-none d-md-inline-block" href=""><i class=" bi bi-heart mt-n1"></i>Wishlist {{Cart::instance('wishlist')->count()}}</a>
            <a class="topbar-link ms-3 ps-3 border-start border-light d-none d-md-inline-block" href="">
            <i class="bi bi-shuffle mt-n1"></i>Compare (3)</a>
            <a class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block" href="">
            <i class="bi bi-loaction mt-n1"></i>Order tracking</a></div>

          </div>
        </div>-->

        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand d-none d-sm-block  flex-shrink-0 mx-0" href="{{asset('/')}}"><i class="bi bi-globe2"></i></a>

                <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0 ml-1" style="line-height:17px;" href="{{asset('/')}}">
                <div class="fs-4" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> 
                  Council <small class="text-primary fw-normal">of</small><br>Innovation</div><!--<img src="{{asset('image/def.png')}}" width="142" alt="COI">--></a> 
              
                <a class="navbar-brand d-sm-none me-2" href="{{asset('/')}}"> 
                <div class="fs-4" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> <i class="bi bi-globe2 mr-1"></i>COI </div>
                  <!--<img src="{{asset('image/abc.png')}}" width="74" alt="COI">--></a>
           

              <!-- Search-->
              <div class="input-group d-none d-lg-flex flex-nowrap mx-0">
              <select class="form-select flex-shrink-0" style="width: 1 rem;" wire:model="searchoo">
                      <option> Search Opportunity</option>
                      <option  value="opportunity">Opportunity</option>
                      <option  value="city">City</option>
                      <option  value="business">Business</option>
                      <option  value="investment">Investment</option>
                      <option  value="exhibition" href="#exhibit">Exhibition</option>
                      <option  value="award" href="#awards">Award</option>
                      <option  value="magazine" href="">Magazine</option>
                      <option  value="coispace" href="#awards">COI Space</option>
                </select>
               
        @if($searchoo == 'opportunity')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Categories</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'city')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>State</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'investment')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Maximum Investment</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Minimum Investment</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'exhibition')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Industry</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Minimum Investment</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'award')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>Award Show</option>
                    @foreach ($award as $category)
                      <option  value="{{$category->id}}">{{$category->type}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'magazine')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>State</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif

        @if($searchoo == 'coispace')
            <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Industry">
                  <option>State</option>
                    @foreach ($abc as $category)
                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                      @endforeach 
                </select>
                @if(!is_null($def))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="Sector">
                  <option>Sector</option>
                  @foreach ($def as $sector)
                    <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                  @endforeach
                </select>
                @endif

                @if(!is_null($ghi))
                <select class="form-select flex-shrink-0" style="width: 10.5rem;" wire:model="service">
                  <option>Sector</option>
                  @foreach ($ghi as $sector)
                    <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                  @endforeach
                </select>
                @endif
        @endif
        <!--<input type="search" aria-label="Search">-->
                <button class="btn btn-outline-dark" type="submit">
                  <i class=" bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i></button>
              </div>

<!-- Toolbar-->
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span></button>
                <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div></a>
                  
                 
                  @if(Route::has('login'))
          @auth
              @if(Auth::user()->utype === 'ADM')
              <div class="navbar-tool dropdown ms-1">
              <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
              <div class=" rounded-circle" >
                <img  class="rounded-circle" src="{{Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}" style="max-width: 50%;">
              </div>
                  <div class="navbar-tool-text ms-n3" ><small>Hello, </small>{{Auth::user()->name}}</div></a>

                  
                  <div class="dropdown-menu dropdown-menu-end">
                <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-dashboard opacity-60 me-2"></i>Dashboard</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href=""><i class="ci-settings opacity-60 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/entity' == request()->path() ? 'active' : '' }}" href="{{route('admin.info') }}"><i class="bi bi-sliders opacity-60 me-2"></i>Setting</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Dashboard</h6>
                  <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-people opacity-60 me-2"></i>Event<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.user')}}"><i class="bi bi-people opacity-60 me-2"></i>User<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/categories' == request()->path() ? 'active' : '' }}" href="{{route('admin.categories')}}"><i class="bi bi-bookmark opacity-60 me-2"></i>Category<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/brands' == request()->path() ? 'active' : '' }}" href="{{route('admin.brand')}}"><i class="ci-dollar opacity-60 me-2"></i>Brand<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="ci-dollar opacity-60 me-2"></i>Franchise<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/contacts' == request()->path() ? 'active' : '' }}" href="{{route('admin.contact')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Contact<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/job/applicat' == request()->path() ? 'active' : '' }}" href="{{route('admin.resume')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Resume<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-right opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
				   </form>
                </div>
              </div>
             </div>
                
              @elseif(Auth::user()->utype === 'SLR')
              <div class="navbar-tool dropdown ms-1">
              <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
                  <div class=" rounded-circle" style="width: 50%;">
                    <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}" style="max-width: 50%;">
                  </div>
                <div class="navbar-tool-text ms-n3" ><small>Hello, </small>{{Auth::user()->name}}</div></a>
              
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">Business Account</h6>
                 <!-- <a class="dropdown-item d-flex align-items-center" href=""><i class="ci-settings opacity-60 me-2"></i>Account</a>-->
                 <a class="dropdown-item d-flex align-items-center {{'seller/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.account') }}"><i class="ci-settings opacity-60 me-2"></i>Account</a>
                 <a class="dropdown-item d-flex align-items-center {{'seller/dashboard' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Dashboard</a>
                  
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Dashboard</h6>
                  <a class="dropdown-item d-flex align-items-center {{'seller/profile' == request()->path() ? 'active' : '' }}" href="{{ route('seller.profile') }}"><i class="ci-settings opacity-60 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center {{'seller/brand' == request()->path() ? 'active' : '' }}" href="{{ route('seller.brand') }}"><i class="ci-settings opacity-60 me-2"></i>Brand</a>
                  <a class="dropdown-item d-flex align-items-center {{'seller/franchise' == request()->path() ? 'active' : '' }}" href="{{ route('seller.franchise') }}"><i class="ci-settings opacity-60 me-2"></i>Franchise</a>
                  <a class="dropdown-item d-flex align-items-center {{'seller/contact' == request()->path() ? 'active' : '' }}" href="{{ route('seller.contact') }}"><i class="ci-settings opacity-60 me-2"></i>Contact</a>
                  <a class="dropdown-item d-flex align-items-center {{'seller/blog' == request()->path() ? 'active' : '' }}" href="{{ route('seller.blog') }}"><i class="ci-settings opacity-60 me-2"></i>Blog</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Search</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Actions</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
								 </form>
                </div>
                </div>
                </div>
              @elseif(Auth::user()->utype === 'MSR')
              <div class="navbar-tool dropdown ms-1">
              <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
              <div class=" rounded-circle" style="width: 50%;">
                  <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="" style="max-width: 50%;">
                 
                  </div>
                  <div class="navbar-tool-text ms-n3" ><small>Hello, </small>{{Auth::user()->name}}</div></a>
                
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">Basic Account</h6>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('master.dashboard')}}"><i class="ci-settings opacity-60 me-2"></i>Dashboard</a>
                  <!--<a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('profile.show') }}"><i class="ci-settings opacity-60 me-2"></i>Profile</a>-->
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" ><i class="ci-basket opacity-60 me-2"></i>Categories</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
								 </form>
                </div>
                </div>
                </div>
              @elseif(Auth::user()->utype === 'EMP')
              <div class="navbar-tool dropdown ms-1">
                <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
                    <div class=" rounded-circle" style="width: 50%;"><img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="" style="max-width: 50%;"></div>
                    <div class="navbar-tool-text ms-n3" ><small>Hello, </small>{{Auth::user()->name}}</div>
                </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <div style="min-width: 14rem;">
                    <h6 class="dropdown-header">Account</h6>
                    <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('user.account')}}"><i class="ci-settings opacity-60 me-2"></i>Account</a>
                    <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('employee.dashboard')}}"><i class="ci-settings opacity-60 me-2"></i>Mybrand</a>
                    <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" ><i class="ci-basket opacity-60 me-2"></i>Categories</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST">@csrf</form>
                    </div>
                  </div>
              </div>
              @elseif(Auth::user()->utype === 'USR')
              <div class="navbar-tool dropdown ms-1">
              <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
                  <div class=" rounded-circle" style="width: 50%;">
                     <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{ Auth::user()->name }}" style="max-width: 50%;">
                  </div>
                  <div class="navbar-tool-text ms-n3" ><small>Hello, </small>{{Auth::user()->name}}</div></a>
                 
                  <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 12rem;">
                  <h6 class="dropdown-header"><a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('user.account')}}"><i class=" bi bi-settings opacity-60 me-2"></i>My Account</a></h6>
                  
                  <a class="dropdown-item d-flex align-items-center {{'user/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('user.dashboard')}}"><i class=" bi bi-settings opacity-60 me-2"></i>Dashboard</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/mybrand' == request()->path() ? 'active' : '' }}" href="{{route('user.mybrand')}}"><i class=" bi bi-settings opacity-60 me-2"></i>My Brand</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/mybrand' == request()->path() ? 'active' : '' }}" href="{{route('user.Orders')}}"><i class=" bi bi-settings opacity-60 me-2"></i>My Order</a>
                  <a class="dropdown-item d-flex align-items-center {{'expand-your-business' == request()->path() ? 'active' : '' }}" ><i class="bi bi-basket opacity-60 me-2"></i>Subscription</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center {{'user/profile' == request()->path() ? 'active' : '' }}" href="{{route('user.profile')}}"><i class=" bi bi-settings opacity-60 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class=" bi bi-sign-out opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
								 </form>
                </div>
                </div>
                </div>
              
              @endif
                   @else
                   <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="">
                  <div class="navbar-tool-icon-box" ><i class="navbar-tool-icon bi bi-person-circle"></i></div>
                  <div class="navbar-tool-text ms-n3" ><small>Hello, Sign in</small>My Account</div></a>
          @endif
        @endif  
               
        @livewire('wishlist-component')
        @livewire('cart-component')

              </div>
            </div>
          </div>

          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
               
              <!-- Search-->
                <div class="input-group d-lg-none my-3"><i class=" bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="Search for opportunity">
                </div>

                <!-- Departments menu-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ps-lg-0" href="" data-bs-toggle="dropdown"><i class=" bi bi-list align-middle mt-n1 me-2"></i>Departments</a>
                      <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                          <li class="dropdown mega-dropdown">
                              <a class="dropdown-item dropdown-toggle" href="#{{$category->id}}" data-bs-toggle="dropdown">
                              <i class=" opacity-60 fs-lg mt-n1 me-2"></i> {{ucwords(trans($category->industry))}}</a>
                              
                            <div class="dropdown-menu p-0">
                              <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                            
                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                  <div class="widget widget-links">                     
                                    @foreach($category->sector as $seet)
                                      <h6 class="fs-base my-1" >
                                          <a href="{{route('franchise.sector',['sector_slug'=> $seet->slug])}}">{{ucwords(trans($seet->sector))}}</a>
                                      </h6>
                                    
                                      <ul class="widget-list">
                                          @foreach($seet->service as $soet)
                                              <li class="widget-list-item py-0">
                                                <a class="widget-list-link" href="{{route('franchise.sector',['sector_slug'=> $soet->slug])}}">
                                              {{ucwords(trans($soet->business))}}</a></li> 
                                          @endforeach
                                      </ul>
                                    @endforeach
                                  </div>
                                </div>
                              
                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                                  @foreach($category->franchise as $soet)
                                    @if ($loop->first or $loop->iteration <= 3)
                                      <a class="d-block mb-2" href="{{route('franchise.details',['slug' => $soet->slug])}}"><img src="{{url('Storage/brands/'.$soet->image)}}" width="150" alt=""></a>
                                      <div class="fs-sm mb-3">Starting from <br><span class="fw-medium">{{$soet->min_investment}} Lac Investment </span></div>
                                    @endif
                                  @endforeach
                                    <a class="btn btn-primary btn-shadow btn-sm" href="{{asset('/franchise')}}">See offers<i class=" bi bi-chevron-right fs-xs ms-1"></i></a>
                                </div>
                              
                              </div>
                            </div>

                          </li>
                        @endforeach 
                      </ul>
                  </li>
                </ul>

              
                <ul class="navbar-nav">
                  <li  class="nav-item {{'/' == request()->path() ? 'active' : '' }}">
                  <a class="nav-link" href="{{asset('/') }}" >Home</a>
                  </li>
                  <li  class="nav-item {{'sell-your-business' == request()->path() ? 'active' : '' }}"">
                  <a class="nav-link" href="{{route('sell.business')}}">Sell your Business</a>
                  </li>

                  <li  class="nav-item {{'expand-your-business' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('expand.business') }}" >Expand your Business</a>
                  </li>

                  <li  class="nav-item {{'buy-a-brand-license' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('buy.license') }}" >Buy a Brand License</a>
                  </li>

                  <li  class=" nav-item dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="{{asset('/checkout')}}" data-bs-toggle="dropdown">Business Design & Strategy</a>
                     <ul class="dropdown-menu">
                      <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="innovation-accelerator">Innovation Accelerator</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="product-&-service-go-to-market">Product & Service go to Market</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="entrepreneur-in-residence">Entrepreneur in Residence</a></li>
                        </ul>
                      </li>
                      <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy Design</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="">Franchise report</a></li>
                     </ul>
                  </li>

                  @if('exhibition' == request()->path() ? 'active' : '')
                    <li  class=" nav-item dropdown {{'exhibition' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link dropdown-toggle" href="{{asset('/')}}" data-bs-toggle="dropdown">Exhibition</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="innovation-accelerator">Innovation Accelerator</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="product-&-service-go-to-market">Product & Service go to Market</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="entrepreneur-in-residence">Entrepreneur in Residence</a></li>
                          </ul>
                        </li>
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="">Franchise report</a></li>
                      </ul>
                    </li>
                  @endif
                              
               </ul>
              </div>

            </div>
          </div>
        </div>
      </header>
      </main>