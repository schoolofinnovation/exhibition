<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css" class="drift-base-styles">.drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}</style>
    
    <title>@yield('page_title') | COI</title>
    <!-- SEO Meta Tags <link rel="canonical" href="{{url()->current()}}"/>-->
    <meta name="description" content="@yield('page_description')">
    <meta name="keywords" content="World's largest business event platform, find all upcoming events, business conferences, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in">
    <meta name="author" content="theexhibition">  
    
    
    
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/image/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/image/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/image/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('public/image/favicons/site.webmanifest')}}">
    <link rel="mask-icon" color="#fe6a6a" href="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">   
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
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
    @if(Route::currentRouteName() === 'event.product')
    @elseif(Route::currentRouteName() === 'event.productreview')
    @else
    <main class="page-wrapper">
    
     @livewire('header-component')
    {{-- @if(Auth::user()->utype == 'ADM') 
       @livewire('seller-header-component')  
     @endif --}}
    </main>
    @endif

    {{$slot}}

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "@yield('page_eventname')",
      "startDate": "@yield('page_startdate')",
      "endDate": "@yield('page_enddate')",
      "eventAttendanceMode": "https://schema.org/MixedEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": [{
        "@type": "VirtualLocation",
        "url": "@yield('page_description')"
      },
      {
        "@type": "Place",
        "name": "@yield('page_venue')",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "@yield('page_description')",
          "addressLocality": "@yield('page_description')",
          "postalCode": "@yield('page_eventCode')",
          "addressRegion": "@yield('page_eventRegion')",
          "addressCountry": "@yield('page_eventCountry')"
        }
      }],
      "image": [
        "https://example.com/photos/1x1/photo.jpg",
        "https://example.com/photos/4x3/photo.jpg",
        "https://example.com/photos/16x9/photo.jpg"
       ],
      "description": "@yield('page_description')",
      
    }
    </script>
   
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://www.exhibition.org.in",
      "logo": "https://www.example.com/images/logo.png"
    }
    </script>
   @livewireScripts
   @stack('scripts')

</body>
</html>