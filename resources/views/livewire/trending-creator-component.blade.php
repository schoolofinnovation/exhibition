<main>
        <section class="container pt-2 pb-5 pb-md-3">
            <!--<h2 class="h3 mb-4 pb-2">Top Creators</h2>-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-1 mb-1">  
                  <div class="fs-sm" >Business Community
                  
                      <h4 class="mb-0 me-2">Speaker</h4>
                      
                  </div>
                    <!--<div class="pt-3">
                      <a class="btn btn-outline-primary btn-sm" href="#listexpo"> 
                        Connect <i class="bi bi-caret-down-fill ms-1 me-n1"></i></a>
                    </div>-->

                      <div class="pt-3">
                        <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          All
                        </a>

                        <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                          <li><a class="dropdown-item" href="#">Speaker</a></li>
                          <li><a class="dropdown-item" href="#">Subscribe</a></li>
                        </ul>
                      </div>
                </div>

              <div class="row my-Slider23">

                <!-- Bestsellers-->
                <div class="col-md-4 col-sm-6 mb-2 py-1">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Network</h3>-->
                  
                    @foreach ($network as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}"  width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                          <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

                <!-- New arrivals-->
                <div class="col-md-4 col-sm-6 mb-2 py-3">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Speaker</h3>-->
                    @foreach ($speaker as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                            <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

                <!-- Top rated-->
                <div class="col-md-4 col-sm-6 mb-2 py-3">
                  <div class="widget">
                    <!--<h3 class="widget-title fw-bolder">Social</h3>-->
                    @foreach ($social as $franchise)
                      <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                        <div class="d-flex align-items-center position-relative">
                          
                          <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                          <div class="ms-2">
                            <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                            <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                            <!--<span class="fs-xs text-muted">730 followers</span>-->
                          </div>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                      </div>
                      
                    @endforeach
                  </div>
                </div>

              </div>
        </section>
</main>

@push('scripts')
    <script>
      var slider = tns({
        "container": '.my-Slider23',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": false,

            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 3,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":false,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>
@endpush