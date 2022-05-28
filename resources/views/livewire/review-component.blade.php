<div class="border-top border-bottom my-lg-3 py-5" id="#reviews">
        <div class="container pt-md-2" id="reviews">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">{{$review->count()}} Reviews</h2>
              <div class="star-rating me-2"><i class= bi"bi-star-filled fs-sm text-accent me-1"></i><i class= bi"bi-star-filled fs-sm text-accent me-1"></i><i class= bi"bi-star-filled fs-sm text-accent me-1"></i><i class= bi"bi-star-filled fs-sm text-accent me-1"></i><i class= bi"bi-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
              <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class= bi"bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$review->where('rating', 5)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class= bi"bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$review->where('rating', 4)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class= bi"bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$review->where('rating', 3)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class= bi"bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$review->where('rating', 2)->count()}}</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class= bi"bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$review->where('rating', 1)->count()}}</span>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-3">


          <div class="row pt-4">
            <!-- Reviews list-->
            <div class="col-md-7">
              <div class="d-flex justify-content-end pb-4">
                <div class="d-flex align-items-center flex-nowrap">
                  <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                  <select class="form-select form-select-sm" id="sort-reviews">
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Popular</option>
                    <option>High rating</option>
                    <option>Low rating</option>
                  </select>
                </div>
              </div>

              
              @foreach ($franchise->where('review_status','1')->$review as $reviews)
              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2">
                  <img class="rounded-circle" src="{{url('Storage/'.$reviews->user->profile_photo_path)}}" width="50" alt="{{$reviews->user->name}}">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">{{$reviews->user->name}}</h6>
                      <span class="fs-ms text-muted">{{ Carbon\Carbon::parse($reviews->created_at)->diffForHumans()}}
                      <!-- (->format('d F Y g:i A'))-->
                     </span>
                    </div>
                  </div>
                  <div>

                    <div class="star-rating">

                      <i class="star-rating-icon bi bi-star-filled active"></i>
                      <i class="star-rating-icon bi bi-star-filled active"></i>
                      <i class="star-rating-icon bi bi-star-filled active"></i>
                    
                    </div>
                    <div class="fs-ms text-muted"> 83% of users found this review helpful</div>
                  </div>
                </div>
                <p class="fs-md mb-2">{{$reviews->comment}}</p>
                <ul class="list-unstyled fs-ms pt-1">
                  <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>{{$reviews->pros}}</li>
                  <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>{{$reviews->cons}}</li>
                </ul>
                <div class="text-nowrap">
                  <button class="btn-like" type="button">15</button>
                  <button class="btn-dislike" type="button">3</button>
                </div>
              </div>
              @endforeach



              <div class="text-center">
                <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Load more reviews</button>
              </div>
            </div>


            <!-- Leave review form-->
            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
              <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
              @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
                <h3 class="h4 pb-2">Write a review</h3>
               
               @livewire('review-form-component')

              </div>
            </div>
          </div>
        </div>
      </div>
