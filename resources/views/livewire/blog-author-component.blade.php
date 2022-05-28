home<main>

<!-- =======================
Inner intro START -->
<section class="pt-5 container">
	
		<div class="row bg-primary-soft">
      <div class="col-12">
        <!-- Author info START -->
		<div class=" d-md-flex p-3 p-sm-4 my-3 text-center text-md-start rounded">
					<!-- Avatar -->
          <div class=" me-0 me-md-4">
            <div class="avatar avatar-xxl">
              <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
            </div>
            <!-- Post count -->
            <div class="text-center mt-n3 position-relative">
              <span class="badge bg-danger fs-sm">{{$author->mag->count()}} Posts</span>
			  <span class="badge bg-danger fs-sm">{{$author->review->count()}} Review</span>
			  <span class="badge bg-danger fs-sm">{{$user->likedMags->count()}} Likes</span>
			  <span class="badge bg-danger fs-sm">{{$likecoun}} Subscribers</span>
            </div>
          </div><!-- Info -->
					<div><h2 class="m-0">{{$author->name}}</h2>
             <small>{{$author->sprofile[0]->title}}</small>
						<p class="my-2">{{$author->sprofile[0]->about}}</p>
						<!-- Social icons -->
						<ul class="nav justify-content-center justify-content-md-start">
							<li class="nav-item">
								<a class="nav-link ps-0 pe-2 fs-5" href="{{$author->sprofile[0]->facebook}}"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="{{$author->sprofile[0]->twitter}}"><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="{{$author->sprofile[0]->linkedin}}"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>					
					</div>
				</div>
				<!-- Author info END -->
      </div>
	  </div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
		<div class="row">
      <div class="col-12 mb-3">
        <h2>The Latest from {{$author->name}}</h2>
      </div>
			<!-- Main Post START -->
			<div class="col-12">
				<div class="row gy-4">
                @foreach($author->mag as $post)
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4">
						<div class="card">
							<!-- Card img -->
							<div class="position-relative">
								<img class="card-img" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay bottom -->
									<div class="w-100 mt-auto">
										<!-- Card category -->
										<a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset fw-bold">{{Str::limit($post->tittle,46)}}</a></h4>
								<p class="card-text">{{Str::limit ($post->desc, 154)}}</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
									<li class="nav-item">
										<div class="nav-link">
											<div class="d-flex align-items-center position-relative">
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
												</div>
												<span class="ms-3">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></span>
											</div>
										</div>
									</li>
									<!--, Y-->
									<li class="nav-item text-sm">{{ Carbon\Carbon::parse($post->created_at)->format('F d')}}</li>
									<li class="nav-item text-sm">{{$post->likedUsers->count()}} <i class="bi bi-hand-thumbs-up"></i>  </li>
									<li class="nav-item text-sm">{{$post->review->count()}} R </li>
									<li class="nav-item text-sm">{{$post->views_count}} <i class="bi bi-eye"></i> </li>
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
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================

Main content END -->
<section class="py-3 my-2">
	<div class="container">
		<div class="row">
			<div class="col">
				<a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
					<img src="{{asset('mag/adv-3.png')}}" alt="">
				</a>
			</div>
		</div>
	</div>
</section>

<section class="pt-0">
	<div class="container">
		<div class="row">
		<div class="col-12 mb-3">
        <h2>Highly appreciated post from {{$author->name}}</h2>
      </div>
			<div class="col-12">
            @foreach($rank as $post)
				<!-- Card item START -->
				<div class="card border rounded-3 up-hover p-4 mb-4">
					<div class="row g-3">
						<div class="col-lg-5">
							<!-- Categories -->
							<a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
							
							<!-- Title -->
							<h2 class="card-title">
								<a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset stretched-link">
                                {{Str::limit($post->tittle,48)}}</a>
							</h2>
							<!-- Author info -->
							<div class="d-flex align-items-center position-relative mt-3">
								<div class="avatar me-2">
									<img class="avatar-img rounded-circle" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
								</div>
								<div>
									<h5 class="mb-1"><a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a></h5>
									<ul class="nav align-items-center small">
										<li class="nav-item me-3">{{ Carbon\Carbon::parse($post->created_at)->format('F d, Y ')}}</li>
										<li class="nav-item me-3"><i class="far fa-clock me-1"></i>5 min read</li>
										<li class="nav-item"><i class="far fa-clock me-1"></i>{{$post->review->count()}} review</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Detail -->
						<div class="col-md-6 col-lg-4">
							<p>{{$post->s_desc}} </p>
						</div>
						<!-- Image -->
						<div class="col-md-6 col-lg-3">
							<img class="rounded-3" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}">
						</div>
					</div>
				</div>
				<!-- Card item END -->
                @endforeach

				<!-- Load more -->
				<button type="button" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>

			</div>
		</div>
	</div>
</section>

<section class="p-0">
	<div class="container">
		<div class="row">
		
			<div class="col">
				<!-- Slider -->
				<div class="tiny-slider arrow-hover arrow-dark arrow-round">
					<div class="tns-outer" id="tns2-ow">
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">9 to 13</span>  of 5</div>
                    <div id="tns2-mw" class="tns-ovh"><div class="tns-inner" id="tns2-iw">
                    <div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-autoplay="false" data-hoverpause="true" data-gutter="24" data-arrow="true" data-dots="false" data-items-xl="5" data-items-lg="4" data-items-md="3" data-items-sm="2" data-items-xs="2" id="tns2" style="transition-duration: 0s; transform: translate3d(-38.0952%, 0px, 0px);">
                    @foreach($cag as $post)
                    <div class="tns-item tns-slide-cloned tns-transparent" aria-hidden="true"   tabindex="-1">
							<div class="card card-overlay-bottom card-img-scale">
								<img class="card-img" src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}" >
								<div class="card-img-overlay d-flex px-3 px-sm-5">
									<h5 class="mt-auto mx-auto">
										<a href="#" class="stretched-link btn-link fw-bold text-white">{{$post -> category}}</a>
									</h5>
								</div>
							</div>
						</div>
                    @endforeach   
                    </div></div></div><div class="tns-controls" aria-label="Carousel Navigation" tabindex="0" style="display: none;"><button type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i class="fas fa-chevron-left"></i></button><button type="button" data-controls="next" tabindex="-1" aria-controls="tns2"><i class="fas fa-chevron-right"></i></button></div></div>
				</div> <!-- Slider END -->
			</div>
		</div>
	</div>
</section>

@livewire('blog-trending-component')
</main>