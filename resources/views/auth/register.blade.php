<!--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>-->
<x-guest-layout>
<a href="/" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="right" title="" data-original-title="Go back"><span class="btn-inner--icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span></a>

<section><div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
<img src="{{asset ('images/img-v-2.jpg') }}" alt="Image" class="img-as-bg"><div class="row position-relative zindex-110 p-5">
<div class="col-md-8 text-center mx-auto"><span class="badge badge-warning badge-pill">News</span>
<h5 class="h5 text-white mt-3">The all new Quick is here</h5><p class="text-white opacity-8">
Everything you need to create amazing websites at scale.</p></div></div></div>
<div class="container-fluid d-flex flex-column">
<div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
<div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0">
<div class="row justify-content-center">
<div class="col-11 col-lg-10 col-xl-7"><div>
<div class="mb-2"><h6 class="h3 mb-1">Create your account</h6>
<!--<p class="text-muted mb-0">
Made with love for designers &amp; developers.</p>-->
</div>
<span class="clearfix"></span>
<x-jet-validation-errors class="mb-4" />
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="form-group">
<label class="form-control-label">Name</label>
<div class="input-group input-group-merge">
<input type="text" class="form-control form-control-prepend" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Ive">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span></div>
</div></div>


<div class="form-group"><label class="form-control-label">Email address</label><div class="input-group input-group-merge">
<input type="email" class="form-control form-control-prepend"  name="email" :value="old('email')" required placeholder="name@example.com">

<div class="input-group-prepend"><span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></span></div></div></div>

<div class="form-group mb-4">
<div class="d-flex align-items-center justify-content-between"><div>
<label class="form-control-label">Password</label></div>

<div class="mb-2">
<a href="#" class="small text-muted text-underline--dashed border-primary" data-toggle="password-text" data-target="#input-password">
Show password</a></div></div>

<div class="input-group input-group-merge">
<input type="password" class="form-control form-control-prepend" name="password" required autocomplete="new-password" placeholder="********">
<div class="input-group-prepend"><span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span></div></div></div>

<div class="input-group input-group-merge">
<input type="password" class="form-control form-control-prepend" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="********">
<div class="input-group-prepend"><span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span></div></div></div>


<div class="my-4"><div class="custom-control custom-checkbox mb-3">
<input type="checkbox" class="custom-control-input" id="check-terms"> 
<label class="custom-control-label" for="check-terms">I agree to the 
<a href="'.route('terms.show').'">terms and conditions</a></label></div></div>
<div class="mt-3">

<button type="submit" class="btn btn-block btn-primary">Create my account</button></div></form>

<div class="py-1 text-center"><span class="text-xs text-uppercase">or</span></div><div class="row"><div class="col-sm-6"><a href="#" class="btn btn-block btn-neutral btn-icon mb-3 mb-sm-0"><span class="btn-inner--icon">
<img src="{{asset ('images/github.svg') }}" alt="Image placeholder">
</span>
<span class="btn-inner--text">Github</span>
</a>
</div>
<div class="col-sm-6">
<a href="#" class="btn btn-block btn-neutral btn-icon"><span class="btn-inner--icon">
<img src="{{asset ('images/google.svg') }}" alt="Image placeholder"></span>
<span class="btn-inner--text">Google</span>
</a>
</div>
</div>
<div class="mt-4">
<small>Already have an acocunt?</small> 
<a href="{{route('login')}}" class="small font-weight-bold">Sign in</a></div>
</div></div></div></div></div></div></section>
</x-guest-layout>
