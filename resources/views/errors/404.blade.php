<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css" class="drift-base-styles">.drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}</style>
    
    <title>404-error</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="COI - Council of Innovation">
    <meta name="keywords" content="Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative">
    <meta name="author" content="COI - CouncilofInnovation">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="apple-touch-icon" sizes="180x180" href="https://cartzilla.createx.studio/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cartzilla.createx.studio/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cartzilla.createx.studio/favicon-16x16.png">
    <link rel="manifest" href="https://cartzilla.createx.studio/site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="https://cartzilla.createx.studio/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">


   
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->


    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/drift-basic.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/lightgallery.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.min.css')}}">
   
  
 
    @livewireStyles
  </head>
 
  <!-- Body-->
  <body class="handheld-toolbar-enabled"  style="">
    <!-- Sign in / sign up modal-->
     <main class="page-wrapper">
      
     @livewire('header-component')
     
    </main>


<div class="container py-5 mb-lg-3">
        <div class="row justify-content-center pt-lg-4 text-center">
          <div class="col-lg-5 col-md-7 col-sm-9">
            <h1 class="display-404 py-lg-3">404</h1>
            <h2 class="h3 mb-4">We can't seem to find the page you are looking for.</h2>
            <p class="fs-md mb-4">
              <u>Here are some helpful links instead:</u>
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10">
            <div class="row">
              <div class="col-sm-4 mb-3"><a class="card h-100 border-0 shadow-sm" href="{{asset('/')}}">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><i class="bi bi-house text-primary h4 mb-0"></i>
                      <div class="ps-3">
                        <h5 class="fs-sm mb-0">Home</h5><span class="text-muted fs-ms">Return to home</span>
                      </div>
                    </div>
                  </div></a></div>
              <div class="col-sm-4 mb-3"><a class="card h-100 border-0 shadow-sm" href="{{asset('/shop')}}">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><i class=" bi bi-search text-success h4 mb-0"></i>
                      <div class="ps-3">
                        <h5 class="fs-sm mb-0">Search</h5><span class="text-muted fs-ms">Find with advanced search</span>
                      </div>
                    </div>
                  </div></a></div>
              <div class="col-sm-4 mb-3"><a class="card h-100 border-0 shadow-sm" href="{{asset('/contact-us#contact')}}">
                  <div class="card-body">
                    <div class="d-flex align-items-center"><i class=" bi bi-info-circle text-info h4 mb-0"></i>
                      <div class="ps-3">
                        <h5 class="fs-sm mb-0">Help &amp; Support</h5><span class="text-muted fs-ms">Visit our help center</span>
                      </div>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer-->
     <!-- Blog + Instagram info cards-->
     @livewire('top-footer-component')
    
    @livewire('footer-component') 
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/simplebar.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('js/Drift.min.js')}}"></script>
    <script src="{{asset('js/lightgallery.min.js')}}"></script>
    <script src="{{asset('js/lg-video.min.js')}}"></script>
    <!-- Main theme script-->
    <script src="{{asset('js/theme.min.js')}}"></script>
  
   
   @livewireScripts
   @stack('scripts')

</body>
</html>