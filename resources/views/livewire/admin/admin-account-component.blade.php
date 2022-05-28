@section('page_path',' Admin Account')
@section('page_list',' adminaccount')
@section('page_name',' Manage Account')

@section('page_title','Manage your Account')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

<main>
<div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Brand</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Brand</h1>
          </div>
        </div>
      </div>


      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">

          <!-- Sidebar-->
         @livewire('admin.admin-aside-component')
         
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }} 
        </h2>
    </x-slot>

    
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item"><a class="nav-link px-0 active" href="#one" data-bs-toggle="tab" role="tab"> <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>Profile</div><div class="d-lg-none text-center"><i class="ci-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Profile</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#two" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-bell opacity-60 me-2"></i>Social</div> <div class="d-lg-none text-center"><i class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Notifications</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#three" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Official</div><div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#four" data-bs-toggle="tab" role="tab"><div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Team</div><div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
        </ul>
        
        <div class="" id="one">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')  
            @endif
        </div>

       
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0" id="two">
                    @livewire('profile.update-password-form')
            </div>
            @endif
       

        <div class="mt-10 sm:mt-0" id="three">
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    @livewire('profile.two-factor-authentication-form')
            @endif
        </div>

        <div class="mt-10 sm:mt-0" id="four">
                @livewire('profile.logout-other-browser-sessions-form')
        </div>


        <div class="mt-10 sm:mt-0" id="official">
        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                @livewire('profile.delete-user-form')
        @endif
        </div>
    