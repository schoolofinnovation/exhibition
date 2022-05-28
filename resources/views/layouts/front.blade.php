<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Title -->
  <title>Classic Business | Space - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://htmlstream.com/preview/space-v1.6.1/favicon.ico">

  <!-- Google Fonts -->
  <link href="{{asset('front/css/css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/hs.megamenu.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/jquery.mCustomScrollbar.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/custombox.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.css')}}">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/drift-basic.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/lightgallery.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.min.css')}}">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="{{asset('front/css/theme.css')}}">
  <script src="{{asset('front/js/jquery.mousewheel.min.js')}}"></script></head>
 
  @livewireStyles
<body>
  
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--bordered u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid ">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar hs-menu-initialized hs-menu-horizontal">
         
        <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="{{asset ('front/logo-white.svg')}}" alt="Logo">
              <img class="u-header__navbar-brand-on-scroll" src="{{asset ('front/logo.svg')}}" alt="Logo">
              <!--<img class="u-header__navbar-brand-mobile" src="{{asset ('front/logo-short.svg')}}" alt="Logo">-->
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger collapsed" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="navbar-collapse u-header__navbar-collapse py-0 collapse" style="">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">
                  Homme
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Home - Submenu -->
                <ul id="homeSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut" style="min-width: 220px; display: none;" aria-labelledby="homeMegaMenu">
                 
                <!-- Classic -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeClassic" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeClassic">
                      Classic
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeClassic" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeClassic">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/index.html">Default</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Classic -->

                  <!-- Corporate -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeCorporate" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeCorporate">
                      Corporate
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeCorporate" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeCorporate">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/corporate-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/corporate-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/corporate-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Corporate -->

                  <!-- Creative -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeCreative" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeCreative">
                      Creative
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeCreative" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeCreative">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/creative-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/creative-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/creative-start-up.html">Start-Up</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Creative -->

                  <!-- Modern -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeModern" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeModern">
                      Modern
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeModern" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeModern">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/modern-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/modern-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/modern-start-up.html">Start-Up</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/modern-digital.html">Digital</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Modern -->

                  <!-- App -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeApp" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeApp">
                      App
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeApp" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeApp">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-agency.html">Agency</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-business.html">Business</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-start-up.html">Start-Up</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-digital.html">Digital</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-modern.html">Modern</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/app-minimal.html">Minimal</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- End App -->

                  <li class="dropdown-divider"></li>

                  <!-- Demos -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkHomeDemos" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuHomeDemos">
                      Demos
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuHomeDemos" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkHomeDemos">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/job.html">Job <span class="badge badge-primary">New</span></a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/real-estate.html">Real Estate <span class="badge badge-primary">New</span></a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/hotel.html">Hotel <span class="badge badge-primary">New</span></a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/restaurant.html">Restaurant</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/event.html">Event</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/home/shipping.html">Shipping</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- End Demos -->
                </ul>
                <!-- End Home - Submenu -->
              </li>
              <!-- End Home -->

              <!-- Pages -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut" data-position="right">
                <a id="PagesMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false">
                  Pages
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Pages - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu animated hs-position-right fadeOut" aria-labelledby="PagesMegaMenu" style="display: none;">
                  <div class="u-header__mega-menu-wrapper-v1">
                    <ul class="row list-unstyled u-header__mega-menu-list">
                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col mb-3 mb-lg-0">
                        <span class="u-header__sub-menu-title">About &amp; Services</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/about-agency.html">About Agency</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/about-start-up.html">About Start-Up</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/services-agency.html">Services Agency</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/services-start-up.html">Services Start-Up</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>

                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col mb-3 mb-lg-0">
                        <span class="u-header__sub-menu-title">Careers</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/careers.html">Careers</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/careers-single.html">Careers Single</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/hire-us.html">Hire Us</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>

                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col mb-3 mb-lg-0">
                        <span class="u-header__sub-menu-title">Signin &amp; Signup</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/signin-simple.html">Signin Simple</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/signup-simple.html">Signup Simple</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/recover-account.html">Recover Account</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>

                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col mb-3 mb-sm-0">
                        <span class="u-header__sub-menu-title">Contacts</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/contacts-agency.html">Contacts Agency</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/contacts-business.html">Contacts Business</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>

                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col">
                        <span class="u-header__sub-menu-title">Utilities</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/help.html">Help</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/pricing.html">Pricing</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/terms.html">Terms &amp; Conditions</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/privacy.html">Privacy &amp; Policy</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>

                      <li class="col-sm-6 col-lg-2 u-header__mega-menu-col">
                        <span class="u-header__sub-menu-title">Specialty</span>

                        <!-- Links -->
                        <ul class="list-unstyled">
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/coming-soon.html">Coming Soon</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/maintenance-mode.html">Maintenance Mode</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link px-0" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/error-404.html">Error 404</a></li>
                        </ul>
                        <!-- End Links -->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Pages - Mega Menu -->
              </li>
              <!-- End Pages -->

              <!-- Works -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="worksSubMenu">
                  Works
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Works - Submenu -->
                <ul id="worksSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut" style="min-width: 220px; display: none;" aria-labelledby="worksMegaMenu">
                  <!-- Classic -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkWorksBoxedLayout" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuWorksBoxedLayout">
                      Classic
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuWorksBoxedLayout" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkWorksBoxedLayout">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/boxed-classic.html">Portfolio Classic</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/boxed-grid.html">Portfolio Grid</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/boxed-masonry.html">Portfolio Masonry</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/boxed-gallery.html">Portfolio Gallery</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/boxed-slider.html">Portfolio Slider</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Classic -->

                  <!-- Full Width -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkWorksFullWidthLayout" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuWorksFullWidthLayout">
                      Full Width Layout
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuWorksFullWidthLayout" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkWorksFullWidthLayout">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/fullwidth-classic.html">Portfolio Classic</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/fullwidth-grid.html">Portfolio Grid</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/fullwidth-masonry.html">Portfolio Masonry</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/fullwidth-gallery.html">Portfolio Gallery</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/fullwidth-slider.html">Portfolio Slider</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Full Width -->

                  <!-- Single Page -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkWorksSinglePage" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuWorksSinglePage">
                      Single Page
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuWorksSinglePage" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkWorksSinglePage">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/single-page-simple.html">Single Page Simple</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/single-page-grid.html">Single Page Grid</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/single-page-masonry.html">Single Page Masonry</a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/portfolio/case-studies-simple.html">Case Studies Simple</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Single Page -->
                </ul>
                <!-- End Works - Submenu -->
              </li>
              <!-- End Works -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">
                  Blog
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Blog - Submenu -->
                <ul id="blogSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut" style="min-width: 220px; display: none;" aria-labelledby="blogMegaMenu">
                  <!-- Classic -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogClassic" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogClassic">
                      Classic
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogClassic" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset animated" style="min-width: 220px; display: none;" aria-labelledby="navLinkBlogClassic">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/classic-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/classic-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/classic-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Classic -->

                  <!-- Grid -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGrid" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGrid">
                      Grid
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGrid" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkBlogGrid">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/grid-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/grid-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/grid-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Grid -->

                  <!-- List -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogList" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogList">
                      List
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogList" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkBlogList">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/list-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/list-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/list-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- List -->

                  <!-- Masonry -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGridMinimal" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMinimal">
                      Masonry
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkBlogGridMinimal">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/masonry-left-sidebar.html">Left Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/masonry-right-sidebar.html">Right Sidebar</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/masonry-full-width.html">Full Width</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Masonry -->

                  <!-- Single Article -->
                  <li class="dropdown-item hs-has-sub-menu">
                    <a id="navLinkBlogGridMasonry" class="nav-link u-header__sub-menu-nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMasonry">
                      Single Article
                      <i class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></i>
                    </a>

                    <!-- Submenu (level 2) -->
                    <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu list-unstyled u-header__sub-menu u-header__sub-menu-offset" style="min-width: 220px; display: none;" aria-labelledby="navLinkBlogGridMasonry">
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/single-article-classic.html">Classic</a>
                      </li>
                      <li class="dropdown-item u-header__sub-menu-list-item">
                        <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/blog/single-article-simple.html">Simple</a>
                      </li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                  </li>
                  <!-- Single Article -->
                </ul>
                <!-- End Submenu -->
              </li>
              <!-- End Blog -->

              <!-- Shop -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="shopSubMenu">
                  Shop
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Shop - Submenu -->
                <ul id="shopSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut" style="min-width: 220px; display: none;" aria-labelledby="shopMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/classic.html">Classic</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/single-product.html">Single Product</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/checkout.html">Checkout</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/empty-cart.html">Empty Cart</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/gift-card.html">Gift Card</a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/order-completed.html">Order Completed</a>
                  </li>
                </ul>
              </li>
              <!-- End Shop -->

              <!-- Docs -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="docsMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="docsSubMenu">
                  Docs
                  <i class="fa fa-angle-down u-header__nav-link-icon"></i>
                </a>

                <!-- Docs - Submenu -->
                <ul id="docsSubMenu" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut" style="min-width: 260px; display: none;" aria-labelledby="docsMegaMenu">
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link d-block u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/documentation/index.html">
                      <div class="media align-items-center">
                        <img class="max-width-5 mr-3" src="./Classic Business _ Space - Responsive Website Template_files/news-dark-icon.svg" alt="Image Description">
                        <div class="media-body">
                          <span class="d-block text-dark font-weight-medium">Documentation</span>
                          <small class="d-block">Development guides</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="dropdown-item u-header__sub-menu-list-item py-0">
                    <a class="nav-link d-block u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/space-v1.6.1/starter/index.html">
                      <div class="media align-items-center">
                        <img class="max-width-5 mr-3" src="./Classic Business _ Space - Responsive Website Template_files/portfolio-dark-icon.svg" alt="Image Description">
                        <div class="media-body">
                          <span class="d-block text-dark font-weight-medium">Get Started</span>
                          <small class="d-block">Components and snippets</small>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Docs -->

              <!-- Button -->
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary btn-outline" href="{{route('login')}}" role="button" data-modal-target="" data-overlay-color="#151b26">
                  <i class="fa fa-user-circle mr-1"></i>
                  Signin
                </a>
              </li>
              <!-- End Button -->

              <!-- Search -->
              <li class="nav-item u-header__navbar-icon u-header__navbar-v-divider">
                <a class="btn btn-xs btn-icon btn-text-dark u-header__search-toggle" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="search" data-unfold-target="#search" data-unfold-hide-on-scroll="false" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-animation-in="slideInUp">
                  <i class="fa fa-search btn-icon__inner"></i>
                </a>

                <!-- Input -->
                <form id="search" class="js-focus-state input-group form u-header__search u-unfold--css-animation u-unfold--hidden" style="animation-duration: 300ms;">
                  <input class="form-control form__input" type="search" placeholder="Search Space">
                  <div class="input-group-addon u-header__search-addon p-0">
                    <button class="btn btn-primary u-header__search-addon-btn" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- End Input -->
              </li>
              <!-- End Search -->
            </ul>
          </div>
          <!-- End Navigation -->

          <ul class="navbar-nav flex-row u-header__secondary-nav">
            <!-- Shopping Cart -->
            <!--<li class="nav-item u-header__navbar-icon-wrapper u-header__navbar-icon">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                <i class="fa fa-shopping-cart btn-icon__inner"></i>
              </a>-->

              <!--<div id="shoppingCartDropdown" class="u-unfold u-unfold--cart text-center border rounded-0 right-0 p-7 u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px; animation-duration: 300ms; right: 0px;">
                <span class="u-icon u-icon--primary u-icon--md rounded-circle mb-3">
                  <i class="fa fa-shopping-basket u-icon__inner"></i>
                </span>
                <span class="d-block">Your Cart is Empty</span>
              </div>-->
            </li>
            <!-- End Shopping Cart -->

            <!-- Account Signin -->
            <li class="nav-item u-header__navbar-icon">
              <!-- Account Sidebar Toggle Button -->
              <a id="sidebarNavToggler" class="btn btn-xs btn-icon btn-text-dark target-of-invoker-has-unfolds" href="javascript:;" role="button" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                <i class="fa fa-bars btn-icon__inner font-size-13"></i>
              </a>
              <!-- End Account Sidebar Toggle Button -->
            </li>
            <!-- End Account Signin -->
          </ul>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Hero Section -->
    <div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image:url('https://source.unsplash.com/1600x900/?corporate office,business');">
      <!-- Main Content -->
      <div class="d-lg-flex align-items-lg-center height-85vh--lg">
        <div class="container space-2 space-0--lg mt-lg-8">
          <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
              <!-- Title -->
              <span class="d-block text-white text-uppercase mb-2">Join the change</span>
              <h1 class="display-3 font-size-48--md-down text-white mb-0">Space service that moves work forward</h1>
              <!-- End Title -->
            </div>

            <div class="col-lg-5">
              <!-- Signup Form -->
              <div class="bg-white shadow-sm rounded p-6">
                <form class="js-validate" novalidate="novalidate">
                  <div class="mb-4">
                    <h2 class="h4">Get started for free</h2>
                  </div>

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="text" class="form-control form__input" name="username" required="" placeholder="Enter your username" aria-label="Enter your username">
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="email" class="form-control form__input" name="email" required="" placeholder="Enter your email address" aria-label="Enter your email address">
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Input -->
                  <div class="js-form-message mb-3">
                    <div class="js-focus-state input-group input-group form">
                      <input type="password" class="form-control form__input" name="password" required="" placeholder="Enter your password" aria-label="Enter your password">
                    </div>
                  </div>
                  <!-- End Input -->

                  <button type="submit" class="btn btn-block btn-primary">Get Started</button>
                </form>
              </div>
              <!-- End Signup Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Main Content -->
    </div>

    <div class="d-lg-flex align-items-lg-center height-15vh--lg">
      <!-- Bottom Content -->
      <div class="container space-2 space-0--lg">

        <!-- Slick Carousel -->
        <div class="js-slick-carousel slider u-slick slick-initialized slick-slider">
          
          
        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4070px; transform: translate3d(-2035px, 0px, 0px);">
        
        <div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-6" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/paypal.png')}}"" alt="Image Description">
          </div>
          
          <div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-5" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/slack.png')}}" alt="Image Description">
          </div>
          
          <div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-4" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/samsung.pn')}}"g" alt="Image Description">
          </div>
          <div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-3" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/airbnb.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-2" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/lenovo.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="-1" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/spotify.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide" style="width: 185px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/amazon.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide" style="width: 185px;" tabindex="-1" data-slick-index="1" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/google.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide" style="width: 185px;" tabindex="-1" data-slick-index="2" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/paypal.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide" style="width: 185px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/slack.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide" style="width: 185px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/samsung.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-current slick-active" style="width: 185px;" tabindex="0" data-slick-index="5" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/airbnb.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-active" style="width: 185px;" tabindex="0" data-slick-index="6" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/lenovo.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-active" style="width: 185px;" tabindex="0" data-slick-index="7" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/spotify.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned slick-active" style="width: 185px;" tabindex="-1" data-slick-index="8" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/amazon.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned slick-active" style="width: 185px;" tabindex="-1" data-slick-index="9" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/google.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned slick-active" style="width: 185px;" tabindex="-1" data-slick-index="10" aria-hidden="false">
            <img class="u-clients" src="{{asset('front/paypal.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="11" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/slack.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="12" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/samsung.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="13" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/airbnb.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="14" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/lenovo.png')}}" alt="Image Description">
          </div><div class="js-slide slick-slide slick-cloned" style="width: 185px;" tabindex="-1" data-slick-index="15" aria-hidden="true">
            <img class="u-clients" src="{{asset('front/spotify.png')}}" alt="Image Description">
          </div></div></div></div>
        <!-- End Slick Carousel -->
      </div>
      <!-- End Bottom Content -->
    </div>
    <!-- End Hero Section -->

    <hr class="my-0">

    {{$slot}}
    
    <!-- CTA -->
    <div class="gradient-overlay-half-primary-v1">
      <div class="bg-img-hero" style="background-image: url(../../assets/img/bg/bg2.png);">
        <div class="container">
          <div class="row align-items-lg-center text-center text-lg-left space-2">
            <div class="col-lg-7">
              <h2 class="text-white">Get started with Space</h2>
              <p class="lead text-white mb-0">Space gives you everything you need to manage business, build great stuff, and reach your goals.</p>
            </div>

            <div class="col-lg-5 text-lg-right">
              <a class="btn btn-purple mb-2 mb-sm-0 mr-sm-2" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/signup-simple.html">Create Free Account</a>
              <a class="btn btn-light mb-2 mb-sm-0" href="https://htmlstream.com/preview/space-v1.6.1/starter/index.html">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">About</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/about-agency.html">About Agency</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/about-start-up.html">About Start-Up</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/services-agency.html">Services Agency</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/services-start-up.html">Services Start-Up</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Company</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/contacts-agency.html">Contact Us</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/help.html">Help</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/careers.html">Careers</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/terms.html">Terms &amp; Conditions</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/privacy.html">Privacy &amp; Policy</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Shop</h3>

          <!-- List Group -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/classic.html">Classic</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/single-product.html">Single Product</a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/shop/checkout.html">Checkout</a>
          </div>
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
              <i class="fab fa-facebook-f min-width-3 text-center mr-2"></i>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
              <i class="fab fa-twitter min-width-3 text-center mr-2"></i>
              Twitter
            </a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
              <i class="fab fa-dribbble min-width-3 text-center mr-2"></i>
              Dribbble
            </a>
            <a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
              <i class="fab fa-github min-width-3 text-center mr-2"></i>
              GitHub
            </a>
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/index.html" aria-label="Space">
            <img src="./Classic Business _ Space - Responsive Website Template_files/logo-short-white.svg" alt="Logo" style="width: 40px; max-width: 100%;">
          </a>
          <!-- End Logo -->

          <!-- Language -->
          <div class="btn-group d-block position-relative mb-4 mb-lg-auto">
            <a id="footerLanguageInvoker" class="btn-text-secondary d-flex align-items-center u-unfold--language-btn rounded py-2 px-3" href="javascript:;" role="button" aria-controls="footerLanguage" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#footerLanguage" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="false" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
              <span class="font-size-14">English</span>
              <i class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></i>
            </a>

            <!-- Content -->
            <div id="footerLanguage" class="u-unfold u-unfold--language bottom-0 left-0 u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="footerLanguageInvoker" style="animation-duration: 300ms; left: 0px;">
              <div class="py-6 px-5">
                <h4 class="h6 mb-4">Select your language</h4>

                <div class="row">
                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="active d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/us.svg" alt="United States Flag">
                        English
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/fr.svg" alt="France Flag">
                        Français
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/de.svg" alt="Germany Flag">
                        Deutsch
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/pt.svg" alt="Portugal Flag">
                        Português
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>

                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/es.svg" alt="Spain Flag">
                        Español
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/it.svg" alt="Italy Flag">
                        Italiano
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/ru.svg" alt="Russian Flag">
                        Русский
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                        <img class="max-width-3 mr-2" src="./Classic Business _ Space - Responsive Website Template_files/tr.svg" alt="Turkey Flag">
                        Türkçe
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>
                </div>
              </div>

              <!-- Signup -->
              <a class="u-unfold--language__link p-5" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/signup-simple.html">
                <small class="d-block text-muted mb-1">More languages coming soon.</small>
                <small class="d-block">Signup to get notified <i class="fa fa-arrow-right u-unfold__icon-pointer"></i></small>
              </a>
              <!-- End Signup -->
            </div>
            <!-- End Content -->
          </div>
          <!-- End Language -->

          <p class="small text-muted">All rights reserved. © Space. 2019 Htmlstream.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler" style="animation-duration: 500ms; right: 0px;">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--panel__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center border-bottom py-4 px-5">
            <h4 class="h5 mb-0">Account</h4>

            <button type="button" class="close u-sidebar__close ml-auto target-of-invoker-has-unfolds" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
            <div class="u-sidebar__content py-5">
              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Menu label</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-5">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/finance-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Dashboard</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/touch-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Activity</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/team-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Team</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/email-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Mailbox</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/projects-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Projects</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->

              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Sub level</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-0">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/calendar-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Calendar</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/cog-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Tools</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="https://htmlstream.com/preview/space-v1.6.1/html/home/classic-business.html#">
                    <img class="max-width-4 mr-3 mCS_img_loaded" src="{{asset ('front/archive-dark-icon.svg')}}" alt="Image Description">
                    <div class="media-body">
                      <span>Archive</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->
            </div>
          </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer class="u-sidebar__footer u-sidebar__footer--panel py-4 px-5">
          <!-- List -->
          <ul class="list-inline font-size-14 mb-0">
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pr-2" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link px-2" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pl-2" href="https://htmlstream.com/preview/space-v1.6.1/html/pages/help.html">
                <i class="fa fa-info-circle"></i>
              </a>
            </li>
          </ul>
          <!-- End List -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Panel Sidebar Navigation -->

  <!-- Signup Modal Window -->
  <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
      <i class="fas fa-times"></i>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5 bg-white rounded">
      <form class="js-validate" novalidate="novalidate">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign in</h2>
            <p>Signin to manage your account.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required="" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-lock form__text-inner"></i>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" required="" placeholder="Password" aria-label="Password" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>

            <div class="col-6 text-right">
              <a class="js-animation-link float-right" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Forgot Password?</a>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signin</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Do not have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Signup
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signin Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <i class="fab fa-facebook-f mr-2"></i>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <i class="fab fa-twitter mr-2"></i>
                Signin with Twitter
              </button>
            </div>
          </div>
          <!-- End Signin Social Buttons -->
        </div>
        <!-- End Signin -->

        <!-- Signup -->
        <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign up</h2>
            <p>Fill out the form to get started.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required="" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-lock form__text-inner"></i>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" id="password" required="" placeholder="Password" aria-label="Password" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-key form__text-inner"></i>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="confirmPassword" required="" placeholder="Confirm Password" aria-label="Confirm Password" data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signup</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signin" data-link-group="idForm" data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signup Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <i class="fab fa-facebook-f mr-2"></i>
                Signup with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <i class="fab fa-twitter mr-2"></i>
                Signup with Twitter
              </button>
            </div>
          </div>
          <!-- End Signup Social Buttons -->
        </div>
        <!-- End Signup -->

        <!-- Forgot Password -->
        <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Recover account</h2>
            <p>Enter your email address and an email with instructions will be sent to you.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required="" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Recover Account</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signin" data-link-group="idForm" data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>
        </div>
        <!-- End Forgot Password -->
      </form>
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to animated" href="javascript:;" data-position="{&quot;bottom&quot;: 15, &quot;right&quot;: 15 }" data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown" style="display: none; position: fixed; bottom: 15px; right: 15px; opacity: 0;">
    <i class="fa fa-arrow-up u-go-to__inner"></i>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{asset('front/js/jquery.min.js')}}"></script>
  <script src="{{asset('front/js/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('front/js/popper.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('front/js/hs.megamenu.js')}}"></script>
  <script src="{{asset('front/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('front/js/custombox.min.js')}}"></script>
  <script src="{{asset('front/js/custombox.legacy.min.js')}}"></script>
  <script src="{{asset('front/js/slick.js')}}"></script>
  <script src="{{asset('front/js/jquery.fancybox.min.js')}}"></script>

  <!-- JS Space -->
  <script src="{{asset('front/js/hs.core.js')}}"></script>
  <script src="{{asset('front/js/hs.header.js')}}"></script>
  <script src="{{asset('front/js/hs.unfold.js')}}"></script>
  <script src="{{asset('front/js/hs.validation.js')}}"></script>
  <script src="{{asset('front/js/hs.focus-state.js')}}"></script>
  <script src="{{asset('front/js/hs.malihu-scrollbar.js')}}"></script>
  <script src="{{asset('front/js/hs.modal-window.js')}}"></script>
  <script src="{{asset('front/js/hs.show-animation.js')}}"></script>
  <script src="{{asset('front/js/hs.slick-carousel.js')}}"></script>
  <script src="{{asset('front/js/hs.fancybox.js')}}"></script>
  <script src="{{asset('front/js/hs.go-to.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://use.fontawesome.com/19dfad01e7.js"></script>
  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>

  <script type="text/javascript">
$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
		
  </script>
@livewireScripts
</body></html>