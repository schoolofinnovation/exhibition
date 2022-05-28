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
    @livewireStyles
  </head>
 
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
     <main class="page-wrapper">

     @livewire('header-component')


    <div class="container my-5 py-5">

        <div class="mb-4 text-sm text-gray-600 items-center">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="my-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
        </div>
    </main>
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
