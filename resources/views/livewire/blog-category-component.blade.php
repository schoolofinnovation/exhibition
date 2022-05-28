<section class="p-0 pb-5">
	<div class="container">
    <div class="row g-4">
   @foreach($mat as $post)
      <!-- Card item START -->
      <div class="col-sm-6 col-lg-4">
        <div class="card card-overlay-bottom card-img-scale overflow-hidden">
          <!-- Card featured -->
					<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
          <!-- Card Image -->
          <img src="{{url('Storage/mags/'.$post->image)}}" alt="{{Str::limit($post->tittle, 24)}}" href="{{route('blog.details',['slug' => $post->slug])}}">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
            <div>
              <!-- Card category -->
              <a href="{{route('blog.category',['category_slug'=> $post->slug])}}" class="badge bg-warning"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post->tag}}</a>
            </div>
            <div class="w-100 mt-auto">
              
              <!-- Card title -->
              <h4 class="text-white"><a href="{{route('blog.details',['slug' => $post->slug])}}" class="btn-link text-reset stretched-link">{{Str::limit($post->s_desc,49)}}</a></h4>
              <!-- Card info -->
              <ul class="nav nav-divider text-white-force align-items-center small">
                <li class="nav-item position-relative">
                  <div class="nav-link">by <a href="{{route('blog.author',['slug' => $post->user->slug])}}" class="stretched-link text-reset btn-link">{{$post->user->name}}</a>
                  </div>
                </li>
                <li class="nav-item">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Card item END -->
@endforeach
      
    </div> <!-- Row END -->
	</div>
</section>

<!-- =======================
Newsletter START -->
<section class="pb-5 pt-3 mt-1">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="bg-dark p-3 p-sm-4 rounded-3 position-relative overflow-hidden">
					<div class="row">
						<div class="col-md-8 col-lg-6 mx-auto text-center py-5 position-relative">
							<!-- Title -->
							<h2 class="display-6 text-white">Never miss a story!</h2>
							<p class="text-white">Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
							<!-- Form -->
							<form class="row row-cols-sm-auto g-2 align-items-center justify-content-center mt-3">
								<div class="col-12">
							    <input type="email" class="form-control" placeholder="Enter your email address">
							  </div>
							  <div class="col-12">
							    <button type="submit" class="btn btn-primary m-0">Subscribe</button>
							  </div>
							  <div class="form-text text-white opacity-6 mt-2">By subscribing you agree to our 
							  	<a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Newsletter END -->