@section('page_path', 'Add Portfolio')
@section('page_list', 'addbrand')
@section('page_name', 'Choose Business Brand...')
@section('page_title','create your portfolio')
@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

<main>
 <!-- Products grid (Trending products)-->
<section class="container pt-4">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-0 border-bottom pb-1 mb-1">
        <div class="row">  
        <h2 class="h3 mb-0 pt-0 ">Trending products</h2>
          <h5 class=" mb-0  "><small>Choose Business Brand...</small></h5>
          </div>
          <h2 class="h3 mb-0 pt-0 ">Like Post <span class=" btn-wishlist btn-sm bg-secondary">{{$user->likedMags->count()}} {{$user->likedFranchises->count()}}</span></h2>
          <div class="pt-0"><a class="btn btn-outline-accent btn-sm" href="{{asset('/')}}">More products<i class=" bi bi-chevron-right ms-1 me-n1"></i></a></div>
        </div>
       
       <!-- Grid-->
        <div class="row pt-3 mx-n2">
              @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
              @endphp

    @foreach (Cart::instance('wishlist')->content() as $item)        
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">

              <div class="product-card-actions d-flex align-items-center">
              <a class="btn-action nav-link-style me-2" href="">
              <i class="bi bi-shuffle me-1"></i>Compare</a>
               @if($witems->contains($item->model->id))
              <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$item->model->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart-fill"></i></a>
                @else
                <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$item->model->id}},'{{$item->model->brand_name}}',{{$item->model->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart"></i></a>
                @endif

              </div>
              
              <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $item->model->slug])}}"> <img src="{{url('Storage/brands/'.$item->model->image)}}" alt="{{Str::limit($item->model->brand_name, 24)}}"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $item->model->slug])}}">{{$item->model->category->industry}}</a>
                <!--<h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $item->model->slug])}}">{{Str::limit($item->model->brand_name, 24)}}</a></h3>-->
               
                <div class="d-flex justify-content-between">
                  <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $item->model->slug])}}"><strong>{{Str::limit($item->model->brand_name, 24)}}</strong></a></h3></div>
                  <div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$item->model->max_investment}} - {{$item->model->min_investment}}</small>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$item->model->max_area}} - {{$item->model->min_area}}</small>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
              <div class="d-flex justify-content-between mb-2">
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $item->model->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $item->model->slug])}}"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $item->model->slug])}}" data-bs-toggle="modal">
                <i class=" bi bi-eye align-middle me-1"></i>Contact Details</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
      </section> 
      
<section class="container">
    <div class="row  pt-3 mx-n2">
      @php
        $witems = Cart::instance('wishlist')->content()->pluck('id');
      @endphp
      <!-- blog-->    
      @foreach ($user->likedMags as $item) 
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center">
                  <a class="btn-action nav-link-style me-2" href="">
                  <i class="bi bi-shuffle me-1"></i>Compare</a>
                  @if($witems->contains($item->id))
                  <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                    <i class=" bi bi-heart-fill"></i></a>
                    @else
                    <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$item->id}},'{{$item->brand_name}}',{{$item->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                    <i class=" bi bi-heart"></i></a>
                    @endif
              </div>
              
              <a class="card-img-top d-block overflow-hidden" href="{{route('blog.details',['slug' => $item->slug])}}"> 
              <img href="{{route('blog.details',['slug' => $item->slug])}}" src="{{url('Storage/mags/'.$item->image)}}" alt="{{Str::limit($item->tittle, 25)}}"></a>
               <div class="card-body py-2">
                <a class="product-meta d-block fs-xs pb-1" href="{{route('blog.details',['slug' => $item->slug])}}">{{$item->tag}} </a>
                <h3 class="product-title fs-sm">
                  <a href="{{route('blog.details',['slug' => $item->slug])}}">{{Str::limit($item->tittle, 24)}}</a></h3>
               
                <div class="d-flex justify-content-between">
                  <div class="product-price"><h3 class="product-title fs-sm">
                    <a href="{{route('blog.details',['slug' => $item->slug])}}">
                     {{$item->likedUsers->count()}} likes</a></h3>
                  </div>
                  <div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>{{$item->s_desc}}</small></span></div>
                  <div class="star-rating align-center"> <small> </small>
                  </div>
                </div>

               
              </div>
              <div class="card-body card-body-hidden">
              <div class="d-flex justify-content-between mb-2">
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('blog.details',['slug' => $item->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('blog.details',['slug' => $item->slug])}}"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('blog.details',['slug' => $item->slug])}}" data-bs-toggle="modal">
                <i class=" bi bi-eye align-middle me-1"></i>Contact Details</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
</section>


<section class="container">
<div class="row  pt-3 mx-n2">
              @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
              @endphp
    @foreach ($user->likedFranchises as $item) 
             
          <!-- frnchise-->

          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">

              <div class="product-card-actions d-flex align-items-center">
              <a class="btn-action nav-link-style me-2" href="">
              <i class="bi bi-shuffle me-1"></i>Compare</a>
               @if($witems->contains($item->id))
              <a class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart-fill"></i></a>
                @else
                <a class="btn-wishlist btn-sm" type="button"  href="" wire:click.prevent="addtoWishlist({{$item->id}},'{{$item->brand_name}}',{{$item->max_investment}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class=" bi bi-heart"></i></a>
                @endif

              </div>
              
              <a class="card-img-top d-block overflow-hidden" href="{{route('franchise.details',['slug' => $item->slug])}}"> 
                  <img href="{{route('franchise.details',['slug' => $item->slug])}}" src="{{url('Storage/brands/'.$item->image)}}" alt="{{Str::limit($item->tittle, 25)}}"></a>
              <div class="card-body py-2">
                <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $item->slug])}}">industry</a>
                <h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $item->slug])}}">{{Str::limit($item->brand_name, 24)}}</a></h3>
               
                <div class="d-flex justify-content-between">
                  <div class="product-price">
                    <h3 class="product-title fs-sm">
                     
                    <a href="{{route('franchise.details',['slug' => $item->slug])}}">
                     {{$item->likedUsers->count()}} likes</a>
                  </h3></div>
                    
                 
                  <div class="star-rating align-center"><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  <i class="star-rating-icon bi bi-star-fill active"></i><i class="star-rating-icon bi bi-star-fill active"></i>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$item->max_investment}} - {{$item->min_investment}}</small>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-"><small>Area Required (sqm)</small></span></div>
                  <div class="star-rating align-center"> <small>{{$item->max_area}} - {{$item->min_area}}</small>
                  </div>
                </div>

              </div>
              <div class="card-body card-body-hidden">
              <div class="d-flex justify-content-between mb-2">
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $item->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="{{route('franchise.details',['slug' => $item->slug])}}"><i class=" bi bi-cart fs-sm me-1"></i>Apply</a>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('franchise.details',['slug' => $item->slug])}}" data-bs-toggle="modal">
                <i class=" bi bi-eye align-middle me-1"></i>Contact Details</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          @endforeach
        </div>
</section>


</main>