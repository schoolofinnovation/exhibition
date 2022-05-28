<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css" class="drift-base-styles">.drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}</style>
    
<title>@yield('page_title') | COI</title>
    <!-- SEO Meta Tags <link rel="canonical" href="{{url()->current()}}"/>-->
    <meta name="description" content="@yield('page_description')">
    <meta name="keywords" content="@yield('page_keywords')">
    <meta name="author" content="@yield('page_author')">    
    
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/image/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/image/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/image/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/image/favicons/site.webmanifest')}}">


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
   
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 
    @livewireStyles
  </head>
 
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
     <main class="page-wrapper">
      
     @livewire('header-component')
     
    </main>
      
    <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          
        
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
            <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}"></div>
            <div class="ps-3">                  
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span>
              <span class="badge bg-success"><i class=" bi bi-check me-1"></i>Available for Business Account</span>
            </div>
          </div>


          <div class="d-flex align-items-center pb-3">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div> 
            @endif
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Total Exhibitor</div>
              <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Total Exhibition</div>
              <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-end">
              <div class="text-light fs-base">Exhibitor Rating</div>
              <div class="star-rating">
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            @livewire('employee.employee-aside-component')
            <!-- Content-->
 
            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                
                {{$slot}}

              </div>
            </section>

          </div>
        </div>
      </div>
   

    <!-- Footer-->
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
   
   @livewireScripts
   @stack('scripts')

</body>
</html>