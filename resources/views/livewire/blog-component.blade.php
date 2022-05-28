<main>

	<!-- Trending START -->
	<section class="py-2">
		<div class="container">
			<div class="row g-0">
				<div class="col-12 bg-primary-soft p-2 rounded">
					<div class="d-sm-flex align-items-center text-center text-sm-start">
						<!-- Title -->
						<div class="me-3">
							<span class="badge bg p-2 px-3 badgecolor" >Trending:</span>
						</div>
						<!-- Slider1 -->
						<div class="my-Slider1 arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
							@foreach($trending as $post)
								<a href="{{route('blog.details',['slug' => $post->slug])}}" class="text-reset btn-link">{{$post->s_desc}}</a>
							@endforeach
						</div>
					</div>
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
	<!-- Trending END -->

	<!--Latest news slider START -->
	<section class="py-3 card-grid ">
		<div class="container">
			<div class="row ">
				<div class="col">
					<div class="my-Slider2">
						<!--<div class="tns-outer" id="tns2-ow">
							<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">
								slide <span class="current">10 to 12</span>  of 4</div>
								<div id="tns2-mw" class="tns-ovh"><div class="tns-inner" id="tns2-iw">
									<div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="false" data-dots="false" data-items-lg="4" data-items-md="1" data-items-sm="1" data-items-xs="1" data-items="3" id="tns2" style="transform: translate3d(-56.25%, 0px, 0px); transition-duration: 0s;">-->			
							@foreach($try as $post)
								<div class="card" >
										<div class="row mx-1">
											<div class="col-4 px-1">
												<img class="rounded-3" href="{{route('blog.details',['slug' => $post->slug])}}" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 25)}}">
											</div>
											<div class="col-8 px-1">
												<a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link px-1 text-reset fw-normal">{{Str::limit($post->tittle, 35)}}</a>
												<!-- Card info -->
												
											</div>
										</div>
										<!--<div><ul class="nav nav-divider align-items-center small">
													<li class="nav-item">
														<div class="nav-link position-relative">
															<span>by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
														</div>
													</li>
													<li class="nav-item">
														@guest
															<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
															@else
															<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i></a>
																<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
																	@csrf
																</form>
														@endguest
													</li>
												</ul></div>-->
								</div>
							@endforeach
					</div>
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
	<!--Latest news slider END -->

	<!--Main hero START latest -->
	<section class="py-0 card-grid">
		<div class="container">
			<div class="row">
				<!-- Slider START -->
				<div class="col-lg-7">
					<div class="my-Slider3 arrow-hover arrow-blur arrow-round rounded-3">
						<!--<div class="tns-outer" id="tns3-ow">
							<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">
								3</span>  of 2</div>
								<div id="tns3-mw" class="tns-ovh">
								<div class="tns-inner" id="tns3-iw">
									<div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" 
									data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="true" data-dots="false" 
									data-items="1" id="tns3" style="transition-duration: 0s; transform: translate3d(-33.3333%, 0px, 0px);">-->
						
								@foreach($latest as $post)
									<div class="card card-overlay-bottom card-bg-scale h-400 h-lg-560 rounded-0" 
									style=" background-image:url({{asset('Storage/mags/'.$post->image)}}); background-position: center left; background-size: cover;">
											<!-- Card Image overlay -->
											<div class="card-img-overlay d-flex flex-column p-3 p-sm-5">
											<!--Card overlay Bottom-->
												<div class="w-100 mt-auto">
													<div class="col">
														<!-- Card category -->
														<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge  badgecolor mb-2" style=" background-color : #ff0440;">
														<i class="fas fa-circle me-2 small fw-bold"></i>check{{$post->tag}}</a>
														<!-- Card title -->
														<h2 class="text-white display-5">
														<a  class="btn-link text-reset stretched-link fw-normal">{{Str::limit($post->s_desc,49)}}
														</a></h2>
														<p class="text-white">{{Str::limit($post->s_desc,104)}}</p>
														<!-- Card info -->
														<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
															<li class="nav-item">
																<div class="nav-link">
																<div class="d-flex align-items-center text-white position-relative">
																	<div class="avatar avatar-sm">
																	  <img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
																	</div>
																<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" 
																	class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
															</div>
															</div>
															</li>
															<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
															<li class="nav-item">{{$post->views_count}} chec</li>	
															<li class="nav-item">
																@guest
																		<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> </a>
																	@else
																		<a href="#" class="bg-secondary" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">{{$post->likedUsers->count()}} <i class="bi bi-hand-thumbs-up" aria-hidden="true"></i></a>
																		<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
																			@csrf
																		</form>
																@endguest
															</li>
														</ul>		
													</div>
												</div>
											</div>
									</div>
								@endforeach

							<!--</div></div></div>-->	
							<!--<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
								<button type="button" data-controls="prev" tabindex="-1" aria-controls="tns3">
									<i class="fas fa-chevron-left"></i></button>
									<button type="button" data-controls="next" tabindex="-1" aria-controls="tns3">
										<i class="fas fa-chevron-right"></i></button></div>-->
					        <!--</div>-->
					</div>
				</div>
				<!-- Slider END -->
				<div class="col-lg-5 mt-5 mt-lg-0">
				@foreach($slider as $post)
					<!-- Card item START -->
						<div class="card mb-4">
							<div class="row g-3">
								<div class="col-4">
									<img class="rounded-3" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
								</div>
								<div class="col-8">
									<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
									<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset stretched-link fw-bold">{{Str::limit($post->tittle,36)}}</a></h5>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
													</div>
													<!--<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>-->
												</div>
											</div>
										</li>
										<li class="nav-item">
												@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> </a>
													@else
														<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">
														{{$post->likedUsers->count()}}	
														<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
														</a>
														<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
															@csrf
														</form>
												@endguest
										</li>
										<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
					<!-- Card item END -->
				@endforeach
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
	<!--Main hero END -->

	<!-- (4) Feature News slider START -->
	<section class="py-0">
		<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="my-Slider4 arrow-blur arrow-round rounded-3 overflow-hidden">
							
							@foreach($try as $post)
								<div class="card card-overlay-bottom card-img-scale">
									<!-- Card Image -->
									<img class="card-img" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
									<!-- Card Image overlay -->
									<div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
										<div>
											<!-- Card category -->
											<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor fs-6 mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
										</div>
										<div class="w-100 mt-auto">
											<!-- Card title -->
											<h4 class="text-white"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset stretched-link">{{Str::limit($post->tittle,38)}}</a></h4>
											<!-- Card info -->
											<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
												<li class="nav-item position-relative">
													<div class="nav-link">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}} </a>
													</div>
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>						   
							@endforeach
						</div>
					</div>
				</div>			
		</div>
	</section>
	<!--Feature News slider END -->

	<!--testing-->
	<section class="position-relative">
		<div class="container" data-sticky-container="">
			<div class="row">
				<!-- Main Post START -->
				<div class="col-lg-9">
					<!-- Top highlights START -->
					<div class="mb-4">
						<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
						<p>Latest breaking news, pictures, videos, and special reports</p>
					</div>
					<div class="my-Slider5 arrow-blur arrow-round rounded-3">
							@foreach( $highlight as $post)
									<div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" href="{{route('blog.details',['slug' => $post->slug])}}" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto" >
													<!-- Card category -->
													<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
												</div>
											</div>
										</div>
										<div class="card-body px-0 pt-3">
											<h4 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,51)}}</a></h4>
											<p class="card-text">{{Str::limit($post->desc,141)}}</p>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs"> 
																<img class="avatar-img rounded-circle" src="{{url('Storage/mags/'.$post->user->profile_photo_url)}}" alt="{{Str::limit($post->tittle, 24)}}">
															</div>
															<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">
													@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
														@else
															<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i></a>
															<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
																@csrf
															</form>
													@endguest
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
												<li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 1 </a></li>
											</ul>
										</div>
									</div>
								@endforeach
					</div>
					<!-- Top highlights START -->

					<!-- Divider -->
					<div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

					<!-- Card video item START -->
					<div class="card mb-2 mb-sm-4">
						<div class="row g-3">
							<div class="col-md-6 order-sm-2">
								<div class="rounded-3 overflow-hidden">
									<div class="ratio ratio-16x9">
										<iframe width="560" height="315" src="./final_files/tXHviS-4ygo.html" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
											<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
											<h3><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,48)}}</a></h3>
											<p>{{Str::limit($post->s_desc,241)}}</p>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
															</div>
															<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
														</div>
													</div>
												</li>
												<li class="nav-item">
														@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
															
														@else
															<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
															{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
															</a>
															<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
																@csrf
															</form>
														@endguest
													
														</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
												<li class="nav-item"><a href="" class="btn-link"><i class="far fa-comment-alt me-1"></i> 14 </a></li>
											</ul>
										</div>

							</div>
					</div>
					<!-- Card video item END -->

					<!-- Divider -->
					<div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

					<!-- Small card 6X6 START -->
					<div class="row">
						<div class="col-12 col-md-6">
							@foreach($oddsmall as $post)
								<!-- Card item START -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<img class="rounded" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<div class="col-8">
											<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset">{{Str::limit($post->tittle,36)}}</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center mt-3 small">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
															</div>
															<!--<span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>-->
														</div>
													</div>
												</li>
												<li class="nav-item">
													@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i></a>
													@else
														<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
														{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
														</a>
														<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
															@csrf
														</form>
														
													@endguest
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							@endforeach
						</div>

						<div class="col-12 col-md-6">
							@foreach($evensmall as $post)
								<!-- Card item START -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<img class="rounded" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<div class="col-8">
											<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset">{{Str::limit($post->tittle,36)}}</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center mt-3 small">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
															</div>
															<!--<span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>-->
														</div>
													</div>
												</li>
												<li class="nav-item">
													@guest
														<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i></a>
													@else
														<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
														{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
														</a>
														<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
															@csrf
														</form>
														
													@endguest
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							@endforeach
						</div>
					
					</div><!-- Row END -->
					<!-- Small card 6X6 END -->

					<!-- Adv -->
					<div>
						<a href="" class="card-img-flash d-block mt-4">
							<img src="{{asset('mag/adv-3.png')}}" alt="adv">
						</a>
					</div>
					
				</div>
				<!-- Main Post END -->
				<!-- Sidebar START -->
				<div class="col-lg-3 mt-5 mt-lg-0">
					<div data-sticky="" data-margin-top="80" data-sticky-for="767">
						<!-- Social links -->
						<div class="row g-2">
							<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-facebook text-white-force rounded p-2 position-relative">
								<i class="fab fa-facebook-square fs-3"></i>
								<div class="d-flex">
									<h6 class="me-1 mb-0">1.5K</h6>
									<small class="small">Fans</small>
								</div>
							</a>
							<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-instagram-gradient text-white-force rounded p-2 position-relative">
								<i class="fab fa-instagram fs-3"></i>
								<div class="d-flex">
									<h6 class="me-1 mb-0">1.8M</h6>
									<small class="small">Followers</small>
								</div>
							</a>
							<a href="https://blogzine.webestica.com/index-3.html#" class="d-flex justify-content-between align-items-center bg-youtube text-white-force rounded p-2 position-relative">
								<i class="fab fa-youtube-square fs-3"></i>
								<div class="d-flex">
									<h6 class="me-1 mb-0">22K</h6>
									<small class="small">Subscribers</small>
								</div>
							</a>
						</div>
						<!-- Categories -->
						<div class="row g-2 mt-5">
							<h5>Categories</h5>
									@foreach($cag as $post)
										<div class="d-flex justify-content-between align-items-center bg-warning-soft rounded p-2 position-relative">
											<h6 class="m-0 text-warning">{{$post->tag}}</h6>
											<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor text-dark stretched-link">{{$post->mag->count()}}</a>
										</div>
									@endforeach
						</div>
						<!-- Most read -->
						<div class="row g-2 mt-5">
						  <h5 class="mt-5 mb-3">Most read</h5>
							@foreach ($tittlemostread as $post)
								<div class="d-flex position-relative mb-3">
									<span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">{{$post->count()}}</span>
									<h6><a href="{{route('blog.details',['slug' => $post->slug])}}" class="stretched-link text-reset btn-link">{{Str::limit($post->tittle,65)}}</a></h6>
								</div>
							@endforeach
						</div>

					</div>
				</div>
				<!-- Sidebar END -->
			</div> <!-- Row end -->
		</div>
	</section>
	<!--testingend-->

	<!--Main content 2 START -->
	<section class="position-relative">
		<div class="container" data-sticky-container="">
			<div class="row">
				<!-- Main Post START -->
				<div class="col-lg-9">
					<!-- Entertainment START -->
					<div class="row">
						<div class="col-12 mb-3">	
							<h2 class="m-0"><i class="bi bi-hand-index-thumb me-2"></i>Entertainment</h2>
							<p>Checkout the hand pick post by admin</p>
						</div>
						<div class="col-md-6">
						@foreach($handpick as $post)
							<!-- Card item big START -->
							<div class="card mb-4">
								<div class="card-body p-4 border rounded-3">	
									<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
									<h4 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,57)}}</a></h4>
									<p class="card-text m-0">{{Str::limit($post->s_desc,90)}}</p>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle" src="{{$post->user->profile_photo_url}}" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">
										
											@guest
											<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
												
											@else
												<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
												{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
												</a>
												<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
													@csrf
												</form>
												
											@endguest
										
											</li>
										<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
							<!-- Card item big END -->
							@endforeach
							
						</div>

						<div class="col-md-6">
						@foreach($handpicked as $post)
							<!-- Card item START -->
							<div class="card mb-1">
								<div class="card-body px-0 border-bottom">
									<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
									<h5><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset">{{Str::limit($post->tittle,36)}}</a></h5>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
													</div>
													<span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">
										
											@guest
											<a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up-fill" aria-hidden="true"></i> </a>
												
											@else
												<a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
												{{$post->likedUsers->count()}}<i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
												</a>
												<form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
													@csrf
												</form>
												
											@endguest
										
											</li>
										<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
							<!-- Card item END -->
						@endforeach
			
						</div>
					</div>
					<!-- Entertainment END -->

					<!-- Podcast slide START -->
					<div class="row">
						<div class="col-12 my-3">	
							<h2 class="m-0"><i class="bi bi-mic me-2"></i>Latest Podcasts</h2>
							<p>Listen and Learn: The best educational podcasts</p>
						</div>
						<div class="col-12">	
							<div class="my-Slider6 arrow-dark arrow-hover arrow-round rounded-3">
							    @foreach($podcast as $post)
									<div class="card card-fold bg-light">
										<div class="card-body p-4">
										<!--<ul class="nav nav-divider align-items-center d-none d-sm-inline-block small mb-2">
												<li class="nav-item"><i class="bi bi-clock-history"></i> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
												<li class="nav-item" style="list-style-type:none">With <a href="#">{{$post->user->name}}</a> </li>
											</ul>-->
											<div class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="stretched-link fw-bold text-reset">{{Str::limit($post->tittle,31)}}</a></div>
											<p class="m-0">{{Str::limit($post->s_desc,52)}}</p>
										</div>
										<img src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}" class="card-img-bottom" >
									</div>
								@endforeach	
							</div>
						</div>
					</div>
					<!-- Podcast slide END -->
				</div>
				<!-- Main Post END -->

				<!-- Sidebar 2 START -->
				<div class="col-lg-3 mt-5 mt-lg-0">
					<div data-sticky="" data-margin-top="80" data-sticky-for="767" style="">
						<div>
							<h4>Recomended</h4>
							<div class="my-SliderRe dots-dark mt-3 mb-5">
								@foreach($recomend as $post)
								    <div class="card">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto">
													<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
												</div>
											</div>
										</div>
										<div class="card-body p-0 pt-3">
											<h5 class="card-title">
											<a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">
											{{Str::limit($post->tittle,49)}}</a></h5>
										</div>
									</div>
								@endforeach	
							</div>
						</div>
						
						<!-- Newsletter START -->
						<div class="bg-light p-4 mt-4 rounded-3 text-center">
							<h4>Subscribe to our mailing list!</h4>
							<form>
								<div class="mb-3">
									<input type="email" class="form-control" placeholder="Email address">
								</div>
								<button type="submit" class="btn btn-primary">Subscribe</button>
								<div class="form-text">We don't spam</div>
							</form>
						</div>
						<!-- Newsletter END -->
					</div>
				</div>
				<!-- Sidebar 2 END -->
			</div> <!-- Row end -->
		</div>
	</section>
	<!--Main content 2 END -->

	<!--Main content START -->
	<section class="position-relative">
		<div class="container" data-sticky-container="">
			<div class="row">
				<!-- Main Post START -->
				<div class="col-lg-9">
					<!-- Title -->
					<div class="mb-4">
						<h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
						<p>Latest breaking news,  pictures, videos, and special reports</p>
					</div>
					<div class="row gy-4">

					@foreach($mostread as $post)
						<!-- Card item START -->
						<div class="col-sm-6">
							<div class="card">
								<!-- Card img -->
								<div class="position-relative">
								
									<img class="card-img" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
									
									<div class="card-img-overlay d-flex align-items-start flex-column p-3">
										<!-- Card overlay bottom -->
										<div class="w-100 mt-auto">
											<!-- Card category -->
											<a href="{{route('blog.category',['category_slug'=> $post->tag])}}" class="badge badgecolor mb-2">
											<i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
										</div>
									</div>
								</div>
								<div class="card-body px-0 pt-3">
									<h4 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle, 90)}}</a></h4>
									<p class="card-text">
									{{$post->s_desc}}
									
									</p>
									<!-- Card info -->
									<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
										<li class="nav-item">
											<div class="nav-link">
												<div class="d-flex align-items-center position-relative">
													<div class="avatar avatar-xs">
														<img class="avatar-img rounded-circle"  src="{{$post->user->profile_photo_url}}" alt="avatar">
													</div>
													<span class="ms-3">by <a href="" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
												</div>
											</div>
										</li>
										<li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Card item END -->
						@endforeach
						
						<!-- Load more START -->
						<div class="col-12 text-center mt-5">
							<button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
						</div>
						<!-- Load more END -->
					</div>
				</div>
				<!-- Main Post END -->
				<!-- Sidebar START -->
				<div class="col-lg-3 mt-5 mt-lg-0">
					<div data-sticky="" data-margin-top="80" data-sticky-for="767">

						<!-- Social widget START -->
						<div class="row g-2">
							<div class="col-4">
								<a href="" class="bg-facebook rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-facebook-square fs-5 mb-2"></i>
									<h6 class="m-0">1.5K</h6>
									<span class="small">Fans</span>
								</a>
							</div>
							<div class="col-4">
								<a href="" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-instagram fs-5 mb-2"></i>
									<h6 class="m-0">1.8M</h6>
									<span class="small">Followers</span>
								</a>
							</div>
							<div class="col-4">
								<a href="" class="bg-youtube rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-youtube-square fs-5 mb-2"></i>
									<h6 class="m-0">22K</h6>
									<span class="small">Subs</span>
								</a>
							</div>
						</div>
						<!-- Social widget END -->

						<!-- Trending topics widget START -->
						<div>
							<h4 class="mt-4 mb-3">Trending topics</h4>
							@foreach($cag as $post)
							<!-- Category item -->
							<div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " 
							style="background-image:url({{asset('Storage/mags/'.$post->image)}}); background-position: center left; background-size: cover;">
								<div class="p-3">
									<a href="{{route('blog.category',['category_slug'=> $post->tag])}}"   class="stretched-link btn-link fw-bold text-white h5">{{$post -> category}}</a>
								</div>
							</div>
							@endforeach
							<!-- View All Category button -->
							<div class="text-center mt-3">
								<a href="" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
							</div>
						</div>
						<!-- Trending topics widget END -->

						<div class="row">
							<!-- Recent post widget START -->
							<div class="col-12 col-sm-6 col-lg-12">
								<h4 class="mt-4 mb-3">Recent post</h4>
							@foreach($recent as $post)
								<!-- Recent post item -->
								<div class="card mb-3">
									<div class="row g-3">
										<div class="col-4">
											<img class="rounded" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
										</div>
										<div class="col-8">
											<h6><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link stretched-link text-reset fw-bold">
											{{Str::limit($post->tittle, 35)}}</a></h6>
											<div class="small mt-1">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</div>
										</div>
									</div>
								</div>

								@endforeach
								
							</div>
							<!-- Recent post widget END -->




							<!-- ADV widget START -->
							<div class="col-12 col-sm-6 col-lg-12 my-4">
								<a href="" class="d-block card-img-flash">
									<img src="{{asset('mag/adv.png')}}" alt="">
								</a>
								<div class="smaller text-end mt-2">ads via <a href="" class="text-body"><u>COI</u></a></div>
							</div>
							<!-- ADV widget END -->
						</div>
					</div>
				</div>
				<!-- Sidebar END -->
			</div> <!-- Row end -->
		</div>
	</section>
	<!--Main content END -->

	<!-- Divider -->
	<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

	<!--Section START mayank-->
	<section class="pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="mb-4 d-md-flex justify-content-between align-items-center"><h2 class="m-0"><i class="bi bi-megaphone"></i> Sponsored news</h2><a href="" class="text-body small"><u>Content by: COI</u></a></div>
						<div class="my-SliderL arrow-hover arrow-blur arrow-dark arrow-round">
							@foreach($poste as $posts)
									<div class="card tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
										<!-- Card img -->
										<div class="position-relative">
											<img class="card-img" src="{{url('Storage/mags/'.$posts->image)}}" alt="{{Str::limit($posts->tittle, 24)}}">
											<div class="card-img-overlay d-flex align-items-start flex-column p-3">
												<!-- Card overlay bottom -->
												<div class="w-100 mt-auto">
													<a href="{{route('blog.category',['category_slug'=> $posts->slug])}}" class="badge badgecolor mb-2">
														<i class="fas fa-circle me-2 small fw-bold"></i>{{$posts->tag}}</a>
												</div>
											</div>
										</div>
										<div class="card-body px-0 pt-3">
											<h5 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{str::limit($posts-> tittle, 49)}}</a></h5>
											<!-- Card info -->
											<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
												<li class="nav-item">
													<div class="nav-link">
														<div class="d-flex align-items-center position-relative">
															<div class="avatar avatar-xs">
																<img class="avatar-img rounded-circle" 
																src="{{url('Storage/mags/'.$posts->image)}}" alt="{{Str::limit($posts->tittle, 24)}}">
															</div>
															<!--<span class="ms-3">by <a href="" class="stretched-link text-reset btn-link">{{$posts->user->name}}</a></span>-->
														</div>
													</div>
												</li>
												<li class="nav-item">{{ Carbon\Carbon::parse($posts->created_at)->format('F d, Y ')}}</li>
											</ul>
										</div>
									</div>
							@endforeach
                        </div>	
                    </div>		
			    </div>
			</div>
		</div>
	</section>
	<!--Section END -->

    @push('scripts')
	    <script>
            var slider = tns({
              "container": '.my-Slider1',
				"autoplay" : true,
				"autoplayHoverPause" : true, 
				"data-gutter" : 0,
				"arrow" : false, 
				"dots" : false, 
				"items" : 1,
				"nav": false,
				"controls": false,
				"swipeAngle": false
            });
        </script>

		<script>
			var slider = tns({
				"container": '.my-Slider2',            
				"responsive": {
				"350": {
					"items": 1,
					"controls": true,
					"edgePadding": 30
				},
				"500": {
					"items": 4
				}
				},
				"swipeAngle": false,
				"speed": 400,
				"nav": false,
				"mouseDrag":true,
				"controls": false,
				"swipeAngle": false,
				"autoplay" : true,
				"autoplayHoverPause" : true,
				"gutter" : 1,
				"autoplayButton":false,
				"arrow" : false, 
				"dots" : false, 
			});
		</script>
          
		  <script>
            var slider = tns({
                "container": '.my-Slider3',
				"autoplay" : true,
				"autoplayHoverPause" : true, 
				"gutter" : 0,
				"arrow" : false, 
				"dots" : false, 
				"items" : 1,
				"nav": false,
				"controls": false,
				"swipeAngle": false,
				"autoplayButton":false,
            });
          </script>

		<script>
			var slider = tns({
				"container": '.my-Slider2',            
				"responsive": {
				"350": {
					"items": 1,
					"controls": true,
					"edgePadding": 30
				},
				"500": {
					"items": 4
				}
				},
				
			    "container": '.my-Slider4',
				"autoplay" : true,
				"hoverpause" : true, 
				"gutter" : 0,
				"arrow" : false, 
				"dots" : false, 
				"items" : 4,
				"nav": false,
				"controls": false,

				
				"gutter" : 2, 
				"arrow" : false, 
				"dots" : false, 		
			});
		</script>
		
        <script>
            var slider = tns({
              "container": '.my-Slider5',
				"autoplay" : true,
				"hoverpause" : true, 
				"gutter" : 1,
				"arrow" : false, 
				"dots" : false, 
				"items" : 2,
				"nav": false,
				"controls": false,
            });
        </script>

          <script>
            var slider = tns({
              "container": '.my-Slider6',            
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 3
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav":false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "gutter" : 10,
            });
          </script>
          <script>
            var slider = tns({
              "container": '.my-SliderRe',            
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 1
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav":false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "gutter" : 10,
            });
          </script>
          <script>
            var slider = tns({
              "container": '.my-SliderL',            
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              "swipeAngle": false,
              "speed": 400,
              "nav":false,
              "mouseDrag":true,
              "controls": false,
              "swipeAngle": false,
              "gutter" : 10,
            });
          </script>

         
    @endpush  
</main>