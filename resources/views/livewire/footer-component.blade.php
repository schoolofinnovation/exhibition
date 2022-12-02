<main>
@if(Route::currentRouteName() === 'event.product')

@else
  <footer class="footer bg-dark pt-5 d-none d-sm-block">
      <div class="container">
        <div class="row pb-2">

          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light" style="font-weight: 720; font-size: 39px;">One step closer to meaningful innovation</h3>
              
            <p class="fs-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>

            <h6 class="d-inline-block col-sm-3 pe-3 me-3 border-end border-light"><span class="text-primary">65,478 </span>
            <span class="fw-normal text-white">Products</span></h6>
            <h6 class="d-inline-block col-sm-3 pe-3 me-3 border-end border-light"><span class="text-primary">2,521 </span>
            <span class="fw-normal text-white">Members</span></h6>
            <h6 class="d-inline-block col-sm-3 me-3"><span class="text-primary">897 </span>
            <span class="fw-normal text-white">Vendors</span></h6>
          <div class="widget mt-4 text-md-nowrap text-center text-md-start">
            <a class="btn-social bs-light bs-twitter me-2 mb-2"  target="_blank" href="{{$infos->twitter}}"><i class=" bi bi-twitter"></i></a>
            <a class="btn-social bs-light bs-facebook me-2 mb-2"  target="_blank" href="{{$infos->facebook}}"><i class=" bi bi-facebook"></i></a>
            <a class="btn-social bs-light bs-instagram me-2 mb-2"  target="_blank" href="{{$infos->instagram}}"><i class=" bi bi-instagram"></i></a>
            <a class="btn-social bs-light bs-youtube me-2 mb-2"  target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
            <a class="btn-social bs-light bs-linkedin me-2 mb-2"  target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
          </div>
       
     
              <!--<ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Watches</a></li>
              </ul>-->
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light" style="font-size: 13px; font-weight: 400;">
              <a target="_blank" href="{{asset('/contact-us#contact')}}">Beep us if you want to reach us</a> <br>
                Some of the work we are proud of ,<br>
                <a target="_blank" href="{{asset('/contact-us')}}">More about us</a> ,<br>
                <a target="_blank" href="{{asset('/career')}}">Check out our job openings</a><br>
                 <a target="_blank" href="{{asset('/contact-us')}}">Contact us</a></h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="{{route('business.exhibition')}}">Exhibition</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="{{route('business.magazine')}}">Magazine</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="{{route('business.award')}}">Award</a></li>
              </ul>
            </div>

            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <!--<ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="">News</a></li>
              </ul>-->
            </div>

          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>

              <form class="subscription-form validate" action="" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                <div class="input-group flex-nowrap"><i class="bi bi-envelope position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required="">
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>

            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>

            <!--testing-->          
          <hr class="hr-light mb-5">
          <div class="row  pb-2 ">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4">
                <a class="d-inline-block align-middle mt-n1 me-3" style="line-height:17px;" href="{{asset('/')}}">
                  <div class="fs-4 text-light" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> 
                    Council <small class="text-primary fw-normal">of</small><br>Innovation</div>
                    <!--<img class="d-block" src="./franciz_files/footer-logo-light.png" width="117" alt="Council of Innovation">-->
                </a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown">
                    <img class="me-2" src="./franciz_files/en.png" width="20" alt="English">Eng / $</button>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="./franciz_files/fr.png" width="20" alt="Français">Français</a></li>
                    <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="./franciz_files/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                    <li><a class="dropdown-item" href=""><img class="me-2" src="./franciz_files/it.png" width="20" alt="Italiano">Italiano</a></li>
                  </ul>
                </div>

              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="">Partner</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3">
              <a class="btn-social bs-light bs-twitter ms-2 mb-2" target="_blank" href="{{$infos->twiter}}"><i class="bi bi-twitter"></i></a>
              <a class="btn-social bs-light bs-facebook ms-2 mb-2" target="_blank" href="{{$infos->facebook}}"><i class="bi bi-facebook"></i></a>
              <a class="btn-social bs-light bs-instagram ms-2 mb-2" target="_blank" href="{{$infos->instagram}}"><i class="bi bi-instagram"></i></a>
              <a class="btn-social bs-light bs-youtube ms-2 mb-2" target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
              <a class="btn-social bs-light bs-linkedin ms-2 mb-2" target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
              </div><img class="d-inline-block" src="./franciz_files/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="{{asset('/')}}" target="_blank" rel="noopener">COI | Council of Innovation</a></div>
        </div>
        </div>
       </div>
      </div>
  </footer>
@endif
   
  @if('/' == request()->path() ? 'active' : '')
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar">
          <span class="handheld-toolbar-icon"><i class="bi bi-house-door"></i></span>
          <span class="handheld-toolbar-label">Home</span
        </a>

          <a class="d-table-cell handheld-toolbar-item" href="#">
            <span class="handheld-toolbar-icon"><i class=" bi bi-heart"></i></span>
            <span class="handheld-toolbar-label">Wishlist</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#offcanvasRight" onclick="window.scrollTo(0, 0)">
            <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
          </a>
          @if(Cart::instance('cart')->count() > 0)
            <a class="d-table-cell handheld-toolbar-item" href="#">
              <span class="handheld-toolbar-icon"><i class="bi bi-cart"></i>
              @if(Cart::instance('cart')->count() > 0)
              <span class="badge bg-primary rounded-pill ms-1">{{Cart::instance('cart')->count()}}</span></span>
              
                <span class="handheld-toolbar-label">{{Cart::instance('cart')->subtotal()}}</span>
              @else
              <span class="handheld-toolbar-label">Cart</span>
              @endif  
            </a>
          @endif
        </div>
    </div>
  @endif

    <span class="navbar-tool-label"> </span> 
          
    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="{{asset('/#top')}}" data-scroll="">
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="bi bi-funnel-fill"></i></a>
</main>