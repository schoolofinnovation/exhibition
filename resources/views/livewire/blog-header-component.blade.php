
<header class="navbar-light navbar-sticky header-static navbar-sticky-on">
	<div class="navbar-top  small">
		<div class="container">
			<div class="d-md-flex justify-content-between align-items-center my-2">
				<!-- Top bar left -->
				<ul class="nav">
				
					<li class="nav-item">
						<a class="nav-link ps-0" href="{{route('about')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Buy now!</a>
					</li>
					
					@if(Route::has('login'))
					  @auth
						@if(Auth::user()->utype === 'ADM')
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{route('login')}}" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<small>Hello, </small>{{Auth::user()->name}}</a>
					
						
							<div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">Account</h6>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('user.dashboard')}}"><i class="ci-settings opacity-60 me-2"></i>Dashboard</a>
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}"><i class="ci-settings opacity-60 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center" ><i class="ci-basket opacity-60 me-2"></i>Categories</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
								 </form>
                </div>
                </div>
						</ul>
					</li>
					    @elseif(Auth::user()->utype === 'SLR')
					<li class="nav-item">
						<a class="nav-link" href="{{route('login')}}"><small>Hello, </small>{{Auth::user()->name}}</a>
					</li>
					   @elseif(Auth::user()->utype === 'MSR')
					<li class="nav-item">
						<a class="nav-link" href="{{route('login')}}"><small>Hello, </small>{{Auth::user()->name}}</a>
					</li>
					  @elseif(Auth::user()->utype === 'EMP')
					<li class="nav-item">
						<a class="nav-link" href="{{route('login')}}"><small>Hello, </small>{{Auth::user()->name}}</a>
					</li>
					  @elseif(Auth::user()->utype === 'USR')
					<li class="nav-item">
						<a class="nav-link" href="{{route('login')}}"><small>Hello, </small>{{Auth::user()->name}}</a>
					</li>
					@endif
                     @else
					 <li class="nav-item">
						<a class="nav-link" href="{{route('login')}}">Login / Join</a>
					</li>
				   @endif
                 @endif
					
				</ul>
				<!-- Top bar right -->
				<div class="d-flex align-items-center d-none d-lg-block">
					<!-- Dark mode switch 
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>-->

					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href=""><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href=""><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href=""><i class="fab fa-linkedin"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href=""><i class="fab fa-youtube-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ps-2 pe-0 fs-5" href=""><i class="fab fa-vimeo"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Divider -->
			<div class="border-bottom border-2 border-primary opacity-1"></div>
		</div>
	</div>

	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="https://blogzine.webestica.com/index.html">
				<img class="navbar-brand-item light-mode-item" src="{{asset('mag/logo.svg')}}"  alt="logo">			
				<img class="navbar-brand-item dark-mode-item"  src="{{asset('mag/logo-light.svg')}}"  alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse" style="">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item ">
						<a class="nav-link  active" href="{{asset('/blog')}}" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<!--<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item active" href="https://blogzine.webestica.com/index.html">Home default</a></li>
							<li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-2.html">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-3.html">Magazine</a></li>
							<li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-4.html">Home cards</a></li>
							<li> <a class="dropdown-item" href="https://blogzine.webestica.com/index-5.html">Blog classic</a></li>
						</ul>-->
					</li>


					<!-- Nav item 4 Mega menu -->
					@foreach($cage as $post)
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="{{route('blog.category',['category_slug'=> $post->slug])}}" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
							{{$post->category}}</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
                                @foreach($post->mag as $post)
                                     @if ($loop->first or $loop->iteration <= 3)
                                    <!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" href="{{route('blog.details',['slug' => $post->slug])}}" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{str::limit($post -> tittle, 48)}}</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="text-reset btn-link">{{$post->user->name}}</a>
													</li>
													<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->format('F d, Y ')}}</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
										
										@endif
                                    @endforeach
									
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="https://blogzine.webestica.com/index.html#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
                                            @foreach($tag as $post)
											<li class="list-inline-item"><a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="btn btn-sm btn-primary-soft">{{$post->tag}}</a></li>
											<!--<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="https://blogzine.webestica.com/index.html#" class="btn btn-sm btn-info-soft">Politics</a></li>-->
										@endforeach
                                        </ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>
                    @endforeach
					
					
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
					<a class="nav-link dropdown-toggle" role="button" href="" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
				<!-- Offcanvas menu toggler -->
				<div class="nav-item">
					<a class="nav-link p-0" data-bs-toggle="offcanvas" href="https://blogzine.webestica.com/index.html#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
						<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
					</a>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>

<!--<div id="sticky-space" class="active" style="height: 137px;"></div>-->
<!-- =======================
Header END -->
