@section('page_path',' Business Account')
@section('page_list',' businessaccount')
@section('page_name',' Manage Account')

@section('page_title', 'Manage your Business Account')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }} 
        </h2>
    </x-slot>

    
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item"><a class="nav-link px-0 active" href="#one" data-bs-toggle="tab" role="tab"> <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>Profile Information</div><div class="d-lg-none text-center"><i class="ci-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Profile</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#two" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-bell opacity-60 me-2"></i>Update Password</div> <div class="d-lg-none text-center"><i class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Notifications</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#three" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Two Factor Auth.</div><!--Authentication--><div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#four" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Browser Sessions</div><div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#five" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Delete Account</div><div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
        </ul>
        

        <div class="bg-primary-light" id="one">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')  
            @endif
        </div>

        <div class="mt-10 sm:mt-0" id="two">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            
                    @livewire('profile.update-password-form')
           
            @endif
            </div>
       

        <div class="mt-10 sm:mt-0" id="three">
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    @livewire('profile.two-factor-authentication-form')
            @endif
        </div>

        <div class="mt-10 sm:mt-0" id="four">
                @livewire('profile.logout-other-browser-sessions-form')
        </div>


        <div class="mt-10 sm:mt-0" id="five">
        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                @livewire('profile.delete-user-form')
        @endif
        </div>
      