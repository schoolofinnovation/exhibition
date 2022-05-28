@section('page_title','your brand')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' My Brand')
@section('page_path',' Brand')
@section('page_list',' addJob')
<main>
  <div class="container">
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
              <div class="text-sm-end"><a class="btn btn-primary" href="{{route ('admin.info')}}" data-bs-toggle="modal">  All Brand </a></div>
                @if (Session::has('message'))
                   <h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>
                @endif
                <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>

        <ul class="nav nav-tabs nav-justified" role="tablist">
            @if($currentStep == 1)
                <li class="nav-item"><a class="nav-link px-0 active" href="#brand" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="bi bi-user opacity-60 me-2"></i>Your New Brand</div>
                    <small class="text-dark"> List your business to be brand.</small>
                    <div class="d-lg-none text-center"><i class="bi bi-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Profile</span></div></a></li>
            @endif
            @if($currentStep == 2)
                <li class="nav-item"><a class="nav-link px-0" href="#official" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="bi bi-bell opacity-60 me-2"></i>Share your Brand's Social</div>
                    <div class="d-lg-none text-center"><i class="bi bi-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Notifications</span></div></a></li>
            @endif
            @if($currentStep == 3)
                <li class="nav-item"><a class="nav-link px-0" href="#social" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="bi bi-card opacity-60 me-2"></i>Get experience with your Marketing Product</div>
                    <div class="d-lg-none text-center"><i class="bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
            @endif
            @if($currentStep == 4)
              <li class="nav-item"><a class="nav-link px-0" href="#team" data-bs-toggle="tab" role="tab">
                <div class="d-none d-lg-block"><i class="bi bi-card opacity-60 me-2"></i>Share your Contact </div>
                <div class="d-lg-none text-center"><i class="bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
            @endif
        </ul>
      
        <form wire:submit.prevent="add" enctype="multipart/form-data">
                  <!-- Tab content-->
            <div class="row">
              @if($currentStep == 1)
                        <div class="col-sm-4 mb-3 pb-2">
                            <label class="form-label" >Brand Name:</label>
                            <input class="form-control" type="text" wire:model.lazy="brand_name"  wire:keyup="generateSlug">
                            <span class="text-danger">@error( 'brand_name' ){{ $message}}@enderror</span> 
                        </div>
                        <div class="col-sm-4 mb-3 pb-2">
                            <label class="form-label" >Website</label>
                            <input class="form-control" type="text" wire:model.lazy="official_website">
                            <span class="text-danger">@error( 'official_website' ){{ $message}}@enderror</span> 
                        </div>

                       

                        <div class="col-sm-3 mb-3">
                            <label class="form-label" ># Store</label>
                              <div class="input-group">
                                  <select class="form-control" wire:model.lazy="newstore">
                                  <option selected >Choose...</option>
                                    <option value="new">New Brand</option>
                                    <option value="old">Old Brand</option>
                                  </select>
                              </div> 
                              <span class="text-danger">@error( 'newstore' ){{ $message}}@enderror</span>
                        </div>

                        @if($newstore == 'old')

                          <div class="col-sm-1 mb-3 pb-2">
                            <label class="form-label" ># store</label>
                            <input class="form-control" type="number" wire:model.lazy="no_of_store"  >
                            <span class="text-danger">@error( 'no_of_store' ){{ $message}}@enderror</span>
                          </div>

                        @endif
                        <div class="col-sm-2 mb-3 pb-2">
                          <label class="form-label" >Brand Est. Year</label>
                          <input class="form-control" type="text" wire:model.lazy="brand_est_year"  >
                          <span class="text-danger">@error( 'brand_est_year' ){{ $message}}@enderror</span>
                        </div>

                       
                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Tittle: <small>Suggestion: India's no.1 Business Expansion</small>
                            </label>
                          <input class="form-control" type="text" wire:model.lazy="tittle_line">
                          <span class="text-danger">@error( 'tittle_line' ){{ $message}}@enderror</span>
                        </div>

                        <!--industry-->
                        <div class="col-sm-3 mb-3">
                            <label class="form-label" >Industry</label>
                              <div class="input-group">
                                  <select class="form-control" wire:model.lazy="Industry">
                                  <option selected >Choose...</option>
                                      @foreach ($industr as $cat)
                                    <option value="{{$cat->id}}" >{{ucwords(trans($cat->industry))}}</option>
                                      @endforeach
                                  </select>
                              </div> 
                              <span class="text-danger">@error( 'industry' ){{ $message}}@enderror</span>
                        </div>
                                
                        @if(!is_null($secto))
                          <div class="col-sm-3 mb-3">
                            <label class="form-label" >Sector</label>
                              <div class="input-group">
                                <select class="form-control" wire:model.lazy="sector">
                                <option selected >Choose...</option>
                                    @foreach ($secto as $cat)
                                  <option value="{{$cat->id}}" >{{$cat->sector}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'sector' ){{ $message}}@enderror</span>
                          </div>
                        @endif

              @endif

              @if($currentStep == 2)

                            <div class="col-sm-4 mb-3 pb-2">
                                <label class="form-label" >Website</label>
                                <input class="form-control" type="text" wire:model.lazy="official_website"  >
                                <span class="text-danger">@error( 'official_website' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Facebook</label>
                              <input class="form-control" type="text" wire:model.lazy="facebook"  >
                              <span class="text-danger">@error( 'facebook' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Linkedin</label>
                              <input class="form-control" type="text" wire:model.lazy="linkedin"  >
                              <span class="text-danger">@error( 'linkedin' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Twitter</label>
                              <input class="form-control" type="text" wire:model.lazy="twitter"  >
                              <span class="text-danger">@error( 'twitter' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Instagram</label>
                              <input class="form-control" type="text" wire:model.lazy="instagram"  >
                              <span class="text-danger">@error( 'instagram' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Youtube</label>
                              <input class="form-control" type="text" wire:model.lazy="youtube"  >
                              <span class="text-danger">@error( 'youtube' ){{ $message}}@enderror</span>
                            </div>
              
                              
              @endif

              @if($currentStep == 3)
                                  
                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" > Brand Logo</label>
                                      <input class="form-control" type="file" wire:model.lazy="brand_logo"  >
                                      <span class="text-danger">@error( 'brand_logo' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Brochure</label>
                                      <input class="form-control" type="file" wire:model.lazy="brochure"  >
                                      <span class="text-danger">@error( 'brochure' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Document</label>
                                      <input class="form-control" type="file" wire:model.lazy="document"  >
                                      <span class="text-danger">@error( 'document' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Marketing Banner</label>
                                      <input class="form-control" type="file" wire:model.lazy="banner"  >
                                      <span class="text-danger">@error( 'banner' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Brand Identity Video</label>
                                      <input class="form-control" type="file" wire:model.lazy="brand_identity_video"  >
                                      <span class="text-danger">@error( 'brand_identity_video' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Product Video</label>
                                      <input class="form-control" type="file" wire:model.lazy="product_video"  >
                                      <span class="text-danger">@error( 'product_video' ){{ $message}}@enderror</span>
                                    </div>  
                              
                   
              @endif

              @if($currentStep == 4)                              
                                    <h2>Brand Head Details</h2>
                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Name</label>
                                      <input class="form-control" type="text" wire:model.lazy="brand_head_name"  >
                                      <span class="text-danger">@error( 'brand_head_name' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >e-mail</label>
                                      <input class="form-control" type="text" wire:model.lazy="bh_email"  >
                                      <span class="text-danger">@error( 'bh_email' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Contact</label>
                                      <input class="form-control" type="text" wire:model.lazy="bh_contact"  >
                                      <span class="text-danger">@error( 'bh_contact' ){{ $message}}@enderror</span>
                                    </div>
              
                                    <h2>User Contact Details</h2>
                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >e-mail</label>
                                      <input class="form-control" type="text" wire:model.lazy="user_email"  >
                                      <span class="text-danger">@error( 'user_email' ){{ $message}}@enderror</span>
                                    </div>

                                    <div class="col-sm-4 mb-3 pb-2">
                                      <label class="form-label" >Contact</label>
                                      <input class="form-control" type="text" wire:model.lazy="user_contact"  >
                                      <span class="text-danger">@error( 'user_contact' ){{ $message}}@enderror</span>
                                    </div>

                                               
                          <div class="form-check mb-1 pb-1">
                          <input class="form-check-input" type="checkbox" value="" id="terms">
                          <label class="form-check-label" for="flexCheckDefault">
                          You must agree with our <a href="#"> Terms & Conditions</a>
                          </label>
                        </div>

              @endif

              <!--button-->
              <div class="row">
                @if($currentStep == 1)
                <div></div>
                @endif

                @if($currentStep == 2 | $currentStep == 3 | $currentStep == 4)
                  <button class=" col-sm-4 btn btn-primary d-block w-50 px-1" type="button" wire:click="decreaseStep()" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                      back
                  </button>@endif
                        
                  @if($currentStep == 1 | $currentStep == 2 | $currentStep == 3)
                  <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="button" wire:click="increaseStep()" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                      Next
                  </button>@endif

                  @if($currentStep == 4)
                  <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="submit"  wire:click="decreaseStep" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                      Submit
                  </button>@endif
              </div>

            </div>
        </form>

  </div>

</main>    
