@section('page_title', ($franchise->brand_name))

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')


@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<main>
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{asset('/')}}"><i class="bi bi-house"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{asset('/franchise') }}">Opportunity</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ucwords(trans($franchise->brand_name))}}</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{ucwords(trans($franchise->brand_name))}}</h1>
          </div>
        </div>
      </div>

      <style>

      </style>

      <div class="container">
        <!-- Gallery + details-->
        <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5" style="background-image:img('');">
          <div class="px-lg-3">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pe-lg-0 pt-lg-4">
                <div class="product-gallery">
                  <div class="product-gallery-preview order-sm-2">
                    <div class="product-gallery-preview-item" id="first"><img class="image-zoom" src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{($franchise->brand_name)}}" data-zoom="" >
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item active" id="second"><img class="image-zoom" src="{{url('Stora/'.$franchise->brand->image)}}" alt="{{($franchise->brand_name)}}" data-zoom="" >
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{($franchise->brand_name)}}" data-zoom="" >
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{($franchise->brand_name)}}" data-zoom="" >
                      <div class="image-zoom-pane"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0">
                <div class="product-details ms-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll="">
                    <div class="star-rating">
                      @php
                       $avgrating = 0;
                      @endphp

                      @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                        @php
                         $avgrating = $avgrating + $orderItem->review->rating;
                        @endphp
                      @endforeach

                      @for($i=1;$i<=5;$i++)
                        @if($i<=$avgrating)
                          <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                         @else
                          <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                        @endif
                      @endfor
                    </div>
                      
                    <span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">{{$franchise->orderItems->where('rstatus',1)->count()}} Reviews</span></a>
                    <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class=" bi bi-heart"></i></button>
                  </div>

                  <div class=" fs-sm  text-danger">{{ucwords(trans($franchise->brand->industry))}} <i class="bi bi-chevron-right"></i> {{$franchise->brand->sector}}</div>
                  <img  class="my-2" src="{{url('Storage/brands/'.$franchise->brand->brand_logo)}}" alt="{{($franchise->brand->brand_name)}}" width="94px">
                <div class="position-relative me-n4 mb-3">
                  <div class="mb-3"><span class="h3 fw-normal text-accent me-1"><small>{{ucwords(trans($franchise->brand->brand_name))}}</small></span>
                    <span class="text-muted fs-lg me-3"><small>{{$franchise->brand->sprofile->co_name}}</small></span>
                    
                    <span class="badge bg-danger badge-shadow align-middle mt-n2">{{$franchise->featured}}</span>

                  </div>
                  <div class="fs-sm mb-4"><span class="text-heading fw-light me-1">Investment:</span><span class="text-muted fw-high" id="colorOption">INR {{$franchise->max_investment}} Lac - {{$franchise->min_investment}} Lac</span>
                  <br><span class="text-heading fw-light me-1">Required Area:</span><span class="text-muted fw-high" id="colorOption">{{$franchise->max_area}} - {{$franchise->min_area}} Sqm.</span></div>
                  <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Featured :<strong> {{$franchise->featured}}</strong></div>
                </div>
                  

                  <form class="mb-grid-gutter" method="post">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center pb-1">
                        <label class="form-label" for="product-size">Select type of Opportunity:</label>
                        <a class="nav-link-style fs-sm form-label" href="#size-chart" data-bs-toggle="modal">
                          <i class="ci-ruler lead align-middle me-1 mt-n1"></i>Your Business City</a>
                      </div>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <select class="form-select ml-1" required="" id="product-size" >
                            <option value="">Select Opportunities</option>
                          @foreach ($franchise->opportunites as $opp)
                            <option value="">{{ucwords(trans($opp))}}</option>
                          @endforeach
                        </select>

                        <select class="form-select ml-1" required="" id="product-size">
                          <option value=""> Business Location </option>
                          <option value="single_unit">Single Unit (advantage) </option>
                          <option value="multi_unit">Multi Unit</option>
                          <option value="area_developer">Area Developer</option>
                          <option value="master_franchise">Master Franchise</option>
                          <option value="master_franchise">Authorized Dealer</option>
                          <option value="master_franchise">Trade Partner</option>
                          <option value="master_franchise">Development Agent</option>
                        </select>
                     </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                    <button class="btn btn-outline-secondary me-3 px-1" type="button" style="width: 3rem;"><i class="bi bi-arrow-up"></i></button>
                      <!--<select class="form-select me-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>-->
                      <button class="btn btn-primary btn-shadow d-block w-100" type="submit" wire:click.prevent="store({{$franchise->id}},'{{$franchise->brand_name}}',{{$franchise->max_investment}})">
                        <i class=" bi bi-cart fs-lg me-2"></i>Business Request </button>
                      {{--<button wire:click="export">Download File</button>--}}
                    </div>
                  </form>

                  <!-- Product panels--> {{$contacct}}
                  <div class="accordion mb-4" id="productPanels">

                    <div class="accordion-item" >
                      <h3 class="accordion-header">
                      <a class="accordion-button collapsed" href="#productInfo"  role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo">
                      <i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i> Contact Info</a></h3>
                      <div class="accordion-collapse collapse" id="productInfo" data-bs-parent="#productPanels" style="">
                        <div class="accordion-body">
                          <h6 class="fs-sm mb-2">Composition</h6>
                          <ul class="fs-sm ps-4">
                            <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                            <li>Lining: Cotton 100%</li>
                            <li>Cotton 80%, Polyester 20%</li>
                          </ul>
                          <h6 class="fs-sm mb-2">Art. No.</h6>
                          <ul class="fs-sm ps-4 mb-0">
                            <li>183260098</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i> Business Requirements</a></h3>
                      <div class="accordion-collapse collapse" id="shippingOptions" data-bs-parent="#productPanels">
                        <div class="accordion-body fs-sm">
                          <div class="d-flex justify-content-between border-bottom pb-2">
                            <div>
                              <div class="fw-semibold text-dark">Courier</div>
                              <div class="fs-sm text-muted">2 - 4 days</div>
                            </div>
                            <div>$26.50</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">Local shipping</div>
                              <div class="fs-sm text-muted">up to one week</div>
                            </div>
                            <div>$10.00</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">Flat rate</div>
                              <div class="fs-sm text-muted">5 - 7 days</div>
                            </div>
                            <div>$33.85</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">UPS ground shipping</div>
                              <div class="fs-sm text-muted">4 - 6 days</div>
                            </div>
                            <div>$18.00</div>
                          </div>
                          <div class="d-flex justify-content-between pt-2">
                            <div>
                              <div class="fw-semibold text-dark">Local pickup from store</div>
                              <div class="fs-sm text-muted">—</div>
                            </div>
                            <div>$0.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>Find in local store</a></h3>
                      <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                          <select class="form-select">
                            <option value="">Select your country</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Belgium">Belgium</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Spain">Spain</option>
                            <option value="UK">United Kingdom</option>
                            <option value="USA">USA</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sharing-->
                  <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label>
                  <a class="btn-share btn-twitter me-1 my-2" href="{{$franchise->brand->twitter}}"><i class=" bi bi-twitter"></i></a>
                  <a class="btn-share btn-instagram me-1 my-2" href="{{$franchise->brand->instagram}}"><i class=" bi bi-instagram"></i></a>
                  <a class="btn-share btn-facebook my-1" href="{{$franchise->brand->facebook}}"><i class=" bi bi-facebook"></i></a>

                @guest
									<a class="btn-share btn-facebook me-1 my-2" href="{{asset('/login')}}"> {{$franchise->likedUsers->count()}} <i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> </a>		
								@else
									<a class="btn-share  my-1" href="#" onclick="document.getElementById('like-form-{{$franchise->id}}').submit();">{{$franchise->likedUsers->count()}}
										<i class="bi bi-hand-thumbs-up-fill"  aria-hidden="true" style = "color:{{Auth::user()->likedFranchises()->where('franchise_id','$franchise->id')->count() > 0 ? 'red' : ''}}"></i></a>
										<form action="{{route('detail.like',$franchise->id)}}" method="POST" style="display:none" id="like-form-{{$franchise->id}}">
											@csrf
										</form>
								@endguest
                  <a class="btn-share btn-facebook my-1" href="{{$franchise->review_status}}">{{$franchise->review_status}} <i class=" bi bi-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product description section 1-->
        <div class="row align-items-center py-md-3">
          <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-3" src="{{url('Storage/documents/'.$franchise->brand->document)}}" alt="check"></div>
          
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
            <h2 class="h3 mb-4 text-danger pb-2">{{$franchise->brand->tittle_line}}</h2>
            <h6 class="fs-base mb-3">{{$franchise->brand->tag_line}}</h6>
            <p class="fs-sm text-muted pb-2">{{$franchise->brand->short_desc}}</p> <!--limit25word-->
           
            <h6 class="fs-base text-danger mb-3">Business Instructions</h6>
            <ul class="nav nav-tabs mb-3" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#wash" data-bs-toggle="tab" role="tab"><i class="ci-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#bleach" data-bs-toggle="tab" role="tab"><i class="ci-bleach fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#hand-wash" data-bs-toggle="tab" role="tab"><i class="ci-hand-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#ironing" data-bs-toggle="tab" role="tab"><i class="ci-ironing fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#dry-clean" data-bs-toggle="tab" role="tab"><i class="ci-dry-clean fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#dry" data-bs-toggle="tab" role="tab"><i class="ci-dry-clean fs-xl"></i></a></li>
              
            </ul>
            <div class="tab-content text-muted fs-sm">
              <div class="tab-pane fade show active" id="wash" role="tabpanel">Why should I join the {{ucwords(trans($franchise->brand_name))}} team?</div>
              <div class="tab-pane fade" id="bleach" role="tabpanel">How much is the investment and franchisee fee?</div>
              <div class="tab-pane fade" id="hand-wash" role="tabpanel">How much are the royalty and advertising fees?</div>
              <div class="tab-pane fade" id="ironing" role="tabpanel">How much does it cost to open a {{ucwords(trans($franchise->brand_name))}} restaurant?</div>
              <div class="tab-pane fade" id="dry-clean" role="tabpanel">How much money will I make?</div>
              <div class="tab-pane fade" id="dry" role="tabpanel">What is a Development Agent?</div>
            </div>

          </div>
        </div>
      </div>
              
      <!-- Product description section 2-->
      <div class="content-space-b-3" style="padding-bottom: 7.5rem">
        <div class="bg-soft-primary-light" style="background-color: rgba(0, 189, 142, 0.1)">
          <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
              <div class="col-md-6 content-space-t-1 content-space-md-1">
                <!-- Heading -->
                <div class="mb-7">
                  <h1 class="display-4 text-primary mb-3 mb-md-5"><span class="text-warning">Extend —</span><br>your reach</h1>
                  <p class="lead">One theme to find and build the right business, wherever you are.</p>
                </div>
                <!-- End Heading -->

                <div class="d-grid gap-3">
                  <!-- Info Block -->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"></path>
                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"></path>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-4">
                      <h5 class="text-primary">
                        <a href="#">Audience <i class="bi-chevron-right small ms-1 small"></i></a>
                      </h5>
                      <p>Find startups with content marketing and SEO tools</p>
                    </div>
                  </div>
                  <!-- End Info Block -->

                  <!-- Info Block -->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z" fill="#035A4B"></path>
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z" fill="#035A4B"></path>
                        </svg>

                      </span>
                    </div>

                    <div class="flex-grow-1 ms-4">
                      <h5 class="text-primary">
                        <a href="#">Campaigns <i class="bi-chevron-right small ms-1 small"></i></a>
                      </h5>
                      <p>Reach your audience and promote products all from Space</p>
                    </div>
                  </div>
                  <!-- End Info Block -->
                </div>
              </div>
              <!-- End Col -->

              <div class="col-sm-10 col-md-6 col-lg-5">
                <div class="row gx-2 transform-y-5rem">
                  <div class="col-6">
                    <div class="d-grid gap-2">
                      <!-- Images -->
                      <div class="d-none d-md-block bg-img-center" style="background-image: url('{{asset('/image/test.jpg')}}'); height: 18.25rem;"></div>
                      <div class="d-none d-md-block bg-img-center" style="background-image: url('{{asset('/image/test.jpg')}}'); height: 20.25rem;"></div>
                      <img class="d-md-none img-fluid w-100" src="./assets/img/225x292/img1.jpg" alt="Image Description">
                      <img class="d-md-none img-fluid w-100" src="./assets/img/225x324/img1.jpg" alt="Image Description">
                      <!-- End Images -->
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <div class="d-grid gap-2">
                      <!-- Images -->
                      <div class="d-none d-md-block bg-img-center" style="background-image: url('{{asset('/image/test.jpg')}}'); height: 22rem;"></div>
                      <div class="d-none d-md-block bg-img-center" style="background-image: url('{{asset('/image/test.jpg')}}'); height: 16rem;"></div>
                      <img class="d-md-none img-fluid w-100" src="./assets/img/225x355/img1.jpg" alt="Image Description">
                      <img class="d-md-none img-fluid w-100" src="./assets/img/225x261/img1.jpg" alt="Image Description">
                      <!-- End Images -->
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      </div>

      <div class="row align-items-center py-4 py-lg-5">
        <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-3" src="{{url('Storage/banners/'.$franchise->brand->banner)}}" alt="Map"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
          <h2 class="h3 mb-2 text-danger pb-2">Contact</h2>
          <h6 class="fs-base mb-3">{{$franchise->brand->sprofile->co_name}}</h6>
          <p class="fs-sm text-muted pb-0">{{$franchise->brand->sprofile->off_address}}</p>
          <p class="fs-sm text-muted pb-0">e-mail: {{$franchise->brand->user_email}}</p>
          <p class="fs-sm text-muted pb-0">Contact: {{$franchise->brand->user_contact}}</p>
          <div class="d-flex mb-2">
            <div class="me-4 pe-2 text-center">
              <h4 class="h2 text-accent mb-1">{{$franchise->total_no_outlet}}</h4>
              <p>Outlet</p>
            </div>
            <div class="me-4 pe-2 text-center">
              <h4 class="h2 text-accent mb-1">{{$franchise->year}}</h4>
              <p>Established in</p>
            </div>
            <div class="text-center">
              <h4 class="h2 text-accent mb-1">57%</h4>
              <p>Male</p>
            </div>
          </div>
          <h6 class="fs-base mb-3">Factory information</h6>
          <p class="fs-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
    
      <!--review-->
      <div class="border-top border-bottom my-lg-3 py-5" id="#reviews">
        <div class="container pt-md-2" id="reviews">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">{{$franchise->review->count() + $franchise->orderItems->where('rstatus',1)->count()}} Reviews</h2>
              
              <div class="star-rating me-2">
              @php
                       $avgrating = 0;
                      @endphp

                      @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                        @php
                         $avgrating = $avgrating + $orderItem->review->rating;
                        @endphp
                      @endforeach

                      @for($i=1;$i<=5;$i++)
                        @if($i<=$avgrating)
                          <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                         @else
                          <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                        @endif
                      @endfor</div>
              <span class="d-inline-block align-middle">4.1 Overall rating</span>
              <p class="pt-3 fs-sm text-muted">58 out of {{$franchise->review->count()}} (77%)<br>Customers recommended this product</p>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class= " bi bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: '{{$franchise->review->where('rating', 5)->count()}}';" aria-valuenow="{{$franchise->review->where('rating', 5)->count()}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$franchise->review->where('rating', 5)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class= " bi bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" background-color: #a7e453;" aria-valuenow="{{$franchise->review->where('rating', 4)->count()}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$franchise->review->where('rating', 4)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class= " bi bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: '{{$franchise->review->where('rating', 3)->count()}}';" background-color: #ffda75;" aria-valuenow="{{$franchise->review->where('rating', 3)->count()}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$franchise->review->where('rating', 3)->count()}}</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class= " bi bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width:'{{$franchise->review->where('rating', 2)->count()}}';" background-color: #fea569;" aria-valuenow="{{$franchise->review->where('rating', 2)->count()}}"  aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$franchise->review->where('rating', 2)->count()}}</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class= " bi bi-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width:'{{$franchise->review->where('rating', 1)->count()}}';" aria-valuenow="{{$franchise->review->where('rating', 1)->count()}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">{{$franchise->review->where('rating', 1)->count()}}</span>
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
                    <option>High Rating</option>
                    <option>Low Rating</option>
                  </select>
                </div>
              </div>
              @foreach($franchise->orderItems->where('rstatus',1) as $reviews)
              <div class="product-review pb-4 mb-4 border-bottom">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2">
                          <!--<img class="rounded-circle" src="{{url('Storage/'.$reviews->user->profile_photo_url)}}" width="50" alt="{{$reviews->user->name}}">-->
                          <img  class="rounded-circle" src="{{$reviews->user->profile_photo_url}}" alt="{{$reviews->user->name}}" style="max-width: 50%;">
                            <div class="ps-3"> 
                              <h6 class="fs-sm mb-0">{{$reviews->user->name}}</h6>
                              <span class="fs-ms text-muted">{{ Carbon\Carbon::parse($reviews->created_at)->diffForHumans()}}<!-- (->format('d F Y g:i A'))--></span>
                            </div>
                        </div>
                      <div>
                        <div class="star-rating">
                          @php
                          $avgrating = 0;
                          @endphp

                          @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                            @php
                            $avgrating = $avgrating + $orderItem->review->rating;
                            @endphp
                          @endforeach

                          @for($i=1;$i<=5;$i++)
                            @if($i<=$avgrating)
                              <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                            @else
                              <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                            @endif
                          @endfor
                        </div>
                        <div class="fs-ms text-muted"> 83% of users found this review helpful</div>
                      </div>
                    </div>
                    <p class="fs-md mb-2">{{$reviews->comment}}</p>
                    <!--<ul class="list-unstyled fs-ms pt-1">
                      <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>{{$reviews->pros}}</li>
                      <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>{{$reviews->cons}}</li>
                    </ul>-->
                    <div class="text-nowrap">
                      <button class="btn-like" type="button">  <i class="bi bi-thumbs-up"></i> 15</button>
                      <button class="btn-dislike" type="button">3</button>
                    </div>
                  </div>
              @endforeach

              @foreach ($franchise->review as $reviews)
                @if ($loop->first or $loop->iteration <= 2)
                  <div class="product-review pb-4 mb-4 border-bottom">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2">
                          <!--<img class="rounded-circle" src="{{url('Storage/'.$reviews->user->profile_photo_url)}}" width="50" alt="{{$reviews->user->name}}">-->
                          <img  class="rounded-circle" src="{{$reviews->user->profile_photo_url}}" alt="{{$reviews->user->name}}" style="max-width: 50%;">
                            <div class="ps-3"> 
                              <h6 class="fs-sm mb-0">{{$reviews->user->name}}</h6>
                              <span class="fs-ms text-muted">{{ Carbon\Carbon::parse($reviews->created_at)->diffForHumans()}}<!-- (->format('d F Y g:i A'))--></span>
                            </div>
                        </div>
                      <div>
                        <div class="star-rating">
                          @php
                          $avgrating = 0;
                          @endphp

                          @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                            @php
                            $avgrating = $avgrating + $orderItem->review->rating;
                            @endphp
                          @endforeach

                          @for($i=1;$i<=5;$i++)
                            @if($i<=$avgrating)
                              <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                            @else
                              <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                            @endif
                          @endfor
                        </div>
                        <div class="fs-ms text-muted"> 83% of users found this review helpful</div>
                      </div>
                    </div>
                    <p class="fs-md mb-2">{{$reviews->comment}}</p>
                    <!--<ul class="list-unstyled fs-ms pt-1">
                      <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>{{$reviews->pros}}</li>
                      <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>{{$reviews->cons}}</li>
                    </ul>-->
                    <div class="text-nowrap">
                      <button class="btn-like" type="button">  <i class="bi bi-thumbs-up"></i> 15</button>
                      <button class="btn-dislike" type="button">3</button>
                    </div>
                  </div>
                @endif
              @endforeach

              
              <div class="text-center"><button class="btn btn-outline-accent" type="button"><i class=" bi bi-reload me-2"></i>Load more reviews</button></div>
            </div>

            <!-- Leave review form-->
            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
              <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                  @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
                    @guest
                      <h3 class="h4 pb-2">Login please for comment</h3>
                      @else  
                      <h3 class="h4 pb-2">Write a review</h3>
                      @livewire('review-form-component')
                    @endguest
              </div>
            </div>

          </div>
      </div>
      <!--review-->

      <!--down-->
      <div class="container pt-5">
        <h2 class="h3 text-center pb-4">Opportunity</h2>
        <div class="my-Slider">  
          @foreach ($related_franchise as $franchise)
              <div class="my-slide">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#">
                <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
                  <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{$franchise->category->industry}}</a>
                    
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{Str::limit($franchise->brand_name, 24)}}</strong></a></h3></div>
                      <div class="star-rating align-center"> 
                        @php
                          $avgrating = 0;
                          @endphp

                          @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                            @php
                            $avgrating = $avgrating + $orderItem->review->rating;
                            @endphp
                          @endforeach

                          @for($i=1;$i<=5;$i++)
                            @if($i<=$avgrating)
                              <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                            @else
                              <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                            @endif
                          @endfor
                      </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                      <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                      </div>
                    </div>
              
                  </div>
              </div>
          @endforeach
        </div>
      </div>

      <!--you may also like-->
      <div class="container py-5 my-md-3">
        <h2 class="h3 text-center pb-4">Trending Brand</h2>
        <div class="my-slider">      
          @foreach ($related_franchise as $franchise)
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#">
                <img src="{{url('Storage/brands/'.$franchise->image)}}" alt="{{Str::limit($franchise->brand_name, 24)}}"></a>
                  <div class="card-body py-2">
                    <a class="product-meta d-block fs-xs pb-1" href="{{route('franchise.details',['slug' => $franchise->slug])}}">{{$franchise->category->industry}}</a>
                    
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><h3 class="product-title fs-sm"><a href="{{route('franchise.details',['slug' => $franchise->slug])}}"><strong>{{Str::limit($franchise->brand_name, 24)}}</strong></a></h3></div>
                      <div class="star-rating align-center"> 
                          @php
                          $avgrating = 0;
                          @endphp

                          @foreach($franchise->orderItems->where('rstatus',1) as $orderItem)
                            @php
                            $avgrating = $avgrating + $orderItem->review->rating;
                            @endphp
                          @endforeach

                          @for($i=1;$i<=5;$i++)
                            @if($i<=$avgrating)
                              <i class="star-rating-icon bi bi-star-fill active" aria-hidden="true"></i>
                            @else
                              <i class="star-rating-icon bi bi-star" aria-hidden="true"></i>
                            @endif
                          @endfor
                      </div>
                    </div>

                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-"><small>Investment (lacs)</small></span></div>
                      <div class="star-rating align-center"> <small>{{$franchise->max_investment}} - {{$franchise->min_investment}}</small>
                      </div>
                    </div>
                    
                  </div>
              </div>
          @endforeach
        </div>      
      </div>
      

      @push('scripts')
          <script>
            var slider = tns({
              "container": '.my-slider',            
              "responsive": {
                "350": {
                  "items": 2,
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
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider',            
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
              
            });
          </script>
      @endpush
</main>

