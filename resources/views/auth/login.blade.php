@section('page_title', 'Login - The Exhibition Network')
@section('page_description','Access your The Exhibition Network account and stay up to date with the latest exhibitions and conference updates.')
@section('page_keywords','Login, The Exhibition Network, Sign In')



<!--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>-->

<x-guest-layout>
<a href="/" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="right" title="" data-original-title="Go back">
<span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
<line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span></a>

<section>
<div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
<img src="{{asset ('image/img-v-2.jpg') }}" alt="Image" class="img-as-bg">

<div class="row position-relative zindex-110 p-5"><div class="col-md-8 text-center mx-auto">
<span class="badge badge-warning badge-pill">News</span><h5 class="h5 text-white mt-3">
The all new Quick is here</h5><p class="text-white opacity-8">Everything you need to create amazing websites at scale.</p></div></div></div><div class="container-fluid d-flex flex-column"><div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100"><div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-md-0">
    <div class="row justify-content-center"><div class="col-11 col-lg-10 col-xl-6"><div><div class="mb-5"><h6 class="h3 mb-1">Welcome back!</h6>
    <p class="text-muted mb-0">Sign in to your account to continue.</p></div>
<span class="clearfix"></span>

        <x-jet-validation-errors class="mb-1 " />
    <form method="POST" action="{{route('login')}}">
            @csrf 

            <div class="form-group">
            <label class="form-control-label">Email address</label>
            <div class="input-group"><div class="input-group-prepend">
            <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

            </span></div>

            <input type="email" class="form-control"  name="email" placeholder="name@example.com" :value="old('email')" required autofocus>
            </div></div>

            <div class="form-group mb-0">
            <div class="d-flex align-items-center justify-content-between"><div>

            <label class="form-control-label">Password</label></div>
            <div class="mb-2">
            <a href="{{ route('password.request') }}" class="small text-muted text-underline--dashed border-primary" data-toggle="password-text" data-target="#input-password">
            Forgot password</a></div></div>

            <div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span></div>

            <input type="password" class="form-control"  name="password" required autocomplete="current-password" placeholder="Password">
            </div></div><div class="mt-4">
            <button type="submit" class="btn btn-block btn-primary">Sign in</button></div>

    </form>


<hr>

<!--<div class="py-3 text-center"><span class="text-xs text-uppercase">or</span></div>-->

<div class="row">
<div class="col-sm-6"><a href="#" class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0"><span class="btn-inner--icon">
<img src="{{asset ('image/social/facebook-7fcb46c06e.svg') }}" alt="Image placeholder"></span>
</a></div>
<div class="col-sm-6"><a href="{{route('google.login')}}" class="btn btn-block btn-neutral btn-icon"><span class="btn-inner--icon">
<img src="{{asset ('image/social/google-213cd1c446.svg') }}" alt="Image placeholder"></span><!--<span class="btn-inner--text">Google</span>--></a></div></div>

<div class="mt-4"><small>Not registered?</small> <a href="{{route('register')}}" class="small font-weight-bold">Create account</a></div>

</div></div></div></div></div></div></section>

<div class="modal fade fixed-right" id="modal-products" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-vertical" role="document"><div class="modal-content">
<div class="modal-header py-3 align-items-center"><div class="modal-title"><h6 class="mb-0">You might like these</h6></div><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p class="text-sm mb-4">Looking for other designs? Check out the other themes we created. Easy to switch, play and develop new websites.</p><div class="card card-overlay hover-shadow-lg"><div class="h-100"><img src="https://webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-website-ui-kit.png" class="card-img-top" alt="Purpose Website UI Kit"></div><div class="card-img-overlay d-flex flex-column align-items-center p-0"><div class="overlay-actions w-100 card-footer mt-auto"><a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="h6 mb-0 stretched-link" target="_blank">Purpose Website UI Kit</a></div></div></div><div class="card card-overlay hover-shadow-lg"><div class="h-100"><img src="https://webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-application-ui-kit.png" class="card-img-top" alt="Purpose Application UI Kit"></div><div class="card-img-overlay d-flex flex-column align-items-center p-0"><div class="overlay-actions w-100 card-footer mt-auto"><a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/" class="h6 mb-0 stretched-link" target="_blank">Purpose Application UI Kit</a></div></div></div><div class="card card-placeholder align-items-center flex-column justify-content-center border-dashed" style="height:250px"><div class="col text-center"><div class="pt-5"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile text-primary" style="width:50px;height:50px"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg> <span class="h5 d-block mt-3">What's next?</span></div><p class="text-sm px-4 mt-2 mb-0">We are already working on a new product, so stay tuned.</p></div></div></div></div></div></div>

    </x-guest-layout>