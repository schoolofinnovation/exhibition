<!DOCTYPE html>
<!-- saved from url=(0041)https://blogzine.webestica.com/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="CouncilofInnovation.com">
	<meta name="description" content="Business News, Magazine and Blog!!">
	
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/image/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/image/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/image/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/image/favicons/site.webmanifest')}}">



	<!-- Favicon 
	<link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">-->

	<!-- Google Font -->
	<!--<link rel="preconnect" href="https://fonts.gstatic.com/">-->
	
	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('mag/all.min.css')}}" >
	<link rel="stylesheet" type="text/css"  href="{{asset('mag/bootstrap-icons.css')}}" >
	<link rel="stylesheet" type="text/css"  href="{{asset('mag/tiny-slider.css')}}" >
	<link rel="stylesheet" type="text/css"  href="{{asset('mag/glightbox.css')}}" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('mag/style.css')}}" >
    
    @livewireStyles

	
<style>

	.badgecolor{
		background-color : #ff0440;
		}

</style>
</head>

<body >

<!-- Top alert START -->

<!-- Top alert END -->

<!-- Offcanvas START -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-hidden="true" style="visibility: hidden;">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column pt-0">
		<div>
			<img class="light-mode-item my-3" src="{{asset('mag/logo.svg')}}"  href="{{asset('/blog')}}" alt="logo">
			<img class="dark-mode-item my-3" src="{{asset('mag/logo-light.svg')}}" href="{{asset('/blog')}}" alt="logo">
			<p>The next-generation blog, news, and magazine theme for you to start sharing your stories today! </p>
			<!-- Nav START -->
			<ul class="nav d-block flex-column my-4">
				<li class="nav-item">
					<a href="{{asset('/blog')}}" class="nav-link h5">Home</a>
				</li><li class="nav-item">
					<a class="nav-link h5" href="{{asset('/about-us')}}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="{{asset('/author')}}">Our Journal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link h5" href="{{asset('/contact-us')}}">Contact Us</a>
				</li>
			</ul>
			<!-- Nav END -->
			<div class="bg-primary-soft p-4 mb-4 text-center w-100 rounded">
				<span>The Blogzine</span>
				<h3>Save on Premium Membership</h3>
				<p>Get the insights report trusted by experts around the globe. Become a Member Today!</p>
				<a href="" class="btn btn-warning">View pricing plans</a>
			</div>
		</div>
		<div class="mt-auto pb-3">
			<!-- Address -->
			<p class="text-body mb-2 fw-bold">New York, USA (HQ)</p>
			<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
			<p class="mb-2">Call: <a href="" class="text-body"><u>469-537-2410</u> (Toll-free)</a> </p>
			<a href="" class="text-body d-block">hello@blogzine.com</a>
		</div>
  </div>
</div>
<!-- Offcanvas END -->

<!-- =======================
Header START -->
@livewire('blog-header-component')

<!--<div id="sticky-space" class="active" style="height: 75px;"></div>-->
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->


{{$slot}}     

<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->

<footer class="bg-dark pt-5">
@livewire('blog-footer-component')

		<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top back-top-show"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script  src="{{asset('mag/bootstrap.bundle.min.js')}}" ></script>

<!-- Vendors -->
<script  src="{{asset('mag/tiny-slider.js')}}"></script>
<script  src="{{asset('mag/sticky.min.js')}}"></script>
<script src="{{asset('mag/glightbox.js')}}"></script>
<script src="https://use.fontawesome.com/19dfad01e7.js"></script>


<!-- Template Functions -->
<script  src="{{asset('mag/functions.js')}}"  ></script>
@livewireScripts
@stack('scripts')

</body></html>