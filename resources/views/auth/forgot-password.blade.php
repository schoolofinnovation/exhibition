<!--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>-->

<x-guest-layout>

<a href="/" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="right" title="" data-original-title="Go back"><span class="btn-inner--icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span></a>


<section><div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
<img src="{{asset ('images/img-v-2.jpg') }}" alt="Image" class="img-as-bg">
<div class="row position-relative zindex-110 p-5"><div class="col-md-8 text-center mx-auto"><span class="badge badge-warning badge-pill">News</span><h5 class="h5 text-white mt-3">The all new Quick is here</h5><p class="text-white opacity-8">Everything you need to create amazing websites at scale.</p></div></div></div><div class="container-fluid d-flex flex-column"><div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100"><div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0"><div class="row justify-content-center"><div class="col-11 col-lg-10 col-xl-6"><div><div class="mb-5"><h6 class="h3 mb-1">Reset password</h6><p class="text-muted mb-0">We will send you an email that will allow you to reset your password.</p></div><span class="clearfix"></span>

<form method="POST" action="{{ route('password.email') }}">
@csrf
<x-jet-validation-errors class="mb-4" />
<div class="form-group"><label class="form-control-label">Email address</label><div class="input-group input-group-merge">

<input type="email" class="form-control form-control-prepend" id="input-email" placeholder="name@example.com"  name="email" :value="old('email')" required autofocus>

<div class="input-group-prepend"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg></span></div></div></div>

<div class="mt-4"><button type="submit" class="btn btn-block btn-primary">Reset password</button></div></form>

<div class="mt-4"><small>Not registered?</small>
 <a href="{{route('register')}}" class="small font-weight-bold">Create account</a></div></div></div></div></div></div></div></section>

</x-guest-layout>