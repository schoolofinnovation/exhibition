@section('page_path',' Add Portfolio')
@section('page_list',' addbrand')
@section('page_name',' Add Business Portfolio')

@section('page_title','create your portfolio')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

      <main>
        <div class="container">
              @if (Session::has('message'))<h6 class="fs-base text-light mb-0"> {{Session::get('message')}} </h6>@endif

                <ul class="nav nav-tabs nav-justified" role="tablist">
                  @if($currentStep == 1)
                    <li class="nav-item"><a class="nav-link px-0 active" href="#profile" data-bs-toggle="tab" role="tab">
                        <div class="d-none d-lg-block"><i class=" bi bi-user opacity-60 me-2"></i>Profile</div>
                        <div class="d-lg-none text-center"><i class=" bi bi-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Profile</span></div></a></li>
                  @endif
                  @if($currentStep == 2)
                    <li class="nav-item"><a class="nav-link px-0" href="#notifications" data-bs-toggle="tab" role="tab">
                        <div class="d-none d-lg-block"><i class="bi bi-bell opacity-60 me-2"></i>official</div>
                        <div class="d-lg-none text-center"><i class=" bi bi-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Notifications</span></div></a></li>
                  @endif
                  @if($currentStep == 3)
                    <li class="nav-item"><a class="nav-link px-0" href="#payment" data-bs-toggle="tab" role="tab">
                        <div class="d-none d-lg-block"><i class=" bi bi-card opacity-60 me-2"></i>Social</div>
                        <div class="d-lg-none text-center"><i class=" bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
                  @endif
                  @if($currentStep == 4)
                    <li class="nav-item"><a class="nav-link px-0" href="#team" data-bs-toggle="tab" role="tab">
                        <div class="d-none d-lg-block"><i class=" bi bi-card opacity-60 me-2"></i>Team</div>
                        <div class="d-lg-none text-center"><i class="bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a>
                    </li>
                  @endif
                </ul>


                <form wire:submit.prevent="save" >
                  <div class="col-sm-4 mb-2 pb-2">
                      <label class="form-label" >Logo</label>
                      <input class="form-control" type="file" wire:model.lazy="photo"  >
                    <span class="text-danger">@error( 'photo' ){{ $message}}@enderror</span>
                  </div>

                  <button type="submit">save</button>
                </form>
                  
                <form wire:submit.prevent="add" >
                  <div class="row mt-5">
                      @if($currentStep == 1)
                        <div class="col-sm-4 mb-2 pb-2">
                            <label class="form-label" >Company Name: {{$slug}}</label>
                            <input class="form-control" type="text" wire:model="co_name" wire:keyup="generateSlug" >
                            <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-2 pb-2">
                            <label class="form-label" >Logo</label>
                            <input class="form-control" type="file" wire:model.lazy="co_logo"  >
                          <span class="text-danger">@error( 'co_logo' ){{ $message}}@enderror</span>
                        </div>
                      
                        <div class="col-sm-4 mb-2 pb-2">
                            <label class="form-label" >Industry</label>
                              <div class="input-group">
                                  <select class="form-control" wire:model.lazy="industry">
                                  <option selected >Choose...</option>
                                      @foreach ($industr as $cat)
                                    <option value="{{$cat->id}}">{{$cat->industry}}</option>
                                      @endforeach
                                  </select>
                              </div> 
                              <span class="text-danger">@error( 'industry' ){{ $message}}@enderror</span>
                        </div>
                                
                        @if(!is_null($secto))
                          <div class="col-sm-4 mb-2 pb-2">
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
                      
                        <div class="col-sm-4 mb-2 pb-2">
                          <label class="form-label" >Establish year</label>
                          <input class="form-control" type="text" wire:model.lazy="est_year"  >
                          <span class="text-danger">@error( 'est_year' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-2 pb-2">
                          <label class="form-label" >Turnover</label>
                          <input class="form-control" type="text" wire:model.lazy="turnover"  >
                          <span class="text-danger">@error( 'turnover' ){{ $message}}@enderror</span>
                        </div>

                        <!--<div class="col-sm-4 mb-2 pb-2">
                          <label class="form-label" >Website</label>
                          <input class="form-control" type="text" wire:model.lazy="official_website">
                        
                          <span class="text-danger">@error( 'official_website' ){{ $message}}@enderror</span>
                        </div>-->

                        <!--<div class="col-sm-4 mb-2 pb-2">
                          <label class="form-label" >tittle</label>
                          <textarea class="form-control" type="text" wire:model.lazy="title"  ></textarea>
                          <div class="form-text">use 30 words</div>
                          <span class="text-danger">@error( 'tittle' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >About your brand</label>
                          <textarea class="form-control" type="text" wire:model.lazy="about"  ></textarea>
                          <div class="form-text">use 1000 words</div>
                          <span class="text-danger">@error( 'about' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Description</label>
                          <textarea class="form-control" type="text" wire:model.lazy="desc"  ></textarea>
                          <span class="text-danger">@error( 'desc' ){{ $message}}@enderror</span>
                          <div class="form-text">use 450 words</div>
                        </div>-->
                      @endif

                      @if($currentStep == 2)
                        <div class="col-sm-4 mb-3 pb-2">
                            <label class="form-label" >Official email</label>
                            <input class="form-control" type="text" wire:model.lazy="official_email">
                            <span class="text-danger">@error( 'official_email' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Board Contact</label>
                          <input class="form-control" type="text" wire:model.lazy="board_contact" >
                          <span class="text-danger">@error( 'board_contact' ){{ $message}}@enderror</span>
                        </div>
                       
                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Landline</label>
                          <input class="form-control" type="text" wire:model.lazy="landline" >
                          <span class="text-danger">@error( 'landline' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Office address</label>
                          <input class="form-control" type="text" wire:model.lazy="off_address" >
                          <span class="text-danger">@error( 'off_address' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Country</label>
                          <input class="form-control" type="text" wire:model.lazy="off_country" >
                          <span class="text-danger">@error( 'off_country' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >State</label>
                          <input class="form-control" type="text" wire:model.lazy="off_province">
                          <span class="text-danger">@error( 'off_province' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >City</label>
                          <input class="form-control" type="text" wire:model.lazy="off_city">
                          <span class="text-danger">@error( 'off_city' ){{ $message}}@enderror</span>
                        </div> 

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Zipcode</label>
                          <input class="form-control" type="text" wire:model.lazy="off_zipcode">
                          <span class="text-danger">@error( 'off_zipcode' ){{ $message}}@enderror</span>
                        </div>
            
                      @endif

                      @if($currentStep == 3)
                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Twitter</label>
                          <input class="form-control" type="text" wire:model.lazy="twitter">
                          <span class="text-danger">@error( 'twitter' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Facebook</label>
                          <input class="form-control"   type="text"   wire:model.lazy="facebook"  >
                          <span class="text-danger">@error('facebook'){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Linkedin</label>
                          <input class="form-control" type="text" wire:model.lazy="linkedin">
                          <span class="text-danger">@error( 'linkedin' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-4 mb-3 pb-2">
                          <label class="form-label" >Youtube</label>
                          <input class="form-control" type="text" wire:model.lazy="youtube">
                          <span class="text-danger">@error( 'youtube' ){{ $message}}@enderror</span>
                        </div>
                      @endif

                      @if($currentStep == 4)
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Owner Name</label>
                              <input class="form-control" type="text" wire:model.lazy="owner_name">
                              <span class="text-danger">@error( 'owner_name' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                                <label class="form-label" >e-mail</label>
                                <input class="form-control" type="text" wire:model.lazy="email">
                                <span class="text-danger">@error( 'email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Contact </label>
                              <input class="form-control" type="text" wire:model.lazy="phone">
                              <span class="text-danger">@error( 'phone' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Designation</label>
                              <input class="form-control" type="text" wire:model.lazy="designation">
                              <span class="text-danger">@error( 'designation' ){{ $message}}@enderror</span>
                            </div>
                            
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Type</label>
                              <input class="form-control" type="text" wire:model.lazy="type_social">
                              <span class="text-danger">@error( 'type_social' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Social Link</label>
                              <input class="form-control" type="text" wire:model.lazy="social_link">
                              <span class="text-danger">@error( 'social_link' ){{ $message}}@enderror</span>
                            </div>

                            <!--ceo-->
                            <hr class="my-3">

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Ceo's Name</label>
                              <input class="form-control" type="text" wire:model.lazy="ceo_name">
                              <span class="text-danger">@error( 'ceo_name' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Ceo's e-mail</label>
                              <input class="form-control" type="text" wire:model.lazy="c_email">
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Ceo's Contact</label>
                              <input class="form-control" type="text" wire:model.lazy="c_contact">
                              <span class="text-danger">@error( 'c_contact' ){{ $message}}@enderror</span>
                            </div>

                            <!--business head-->
                            <hr class="my-3">
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Business Head</label>
                              <input class="form-control" type="text" wire:model.lazy="business_head_name">
                              <span class="text-danger">@error( 'business_head_name' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Business Head's Email</label>
                              <input class="form-control" type="text" wire:model.lazy="bh_email">
                              <span class="text-danger">@error( 'bh_email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Business Head's Contact</label>
                              <input class="form-control" type="text" wire:model.lazy="bh_contact">
                              <span class="text-danger">@error( 'bh_contact' ){{ $message}}@enderror</span>
                            </div>

                            <!--Sales head-->
                            <hr class="my-3">
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Sale Head</label>
                              <input class="form-control" type="text" wire:model.lazy="sale_head_name">
                              <span class="text-danger">@error( 'sale_head_name' ){{ $message}}@enderror</span>
                            </div>
                            
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Sale Head email</label>
                              <input class="form-control" type="text" wire:model.lazy="fh_email">
                              <span class="text-danger">@error( 'fh_email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Sale Head Contact</label>
                              <input class="form-control" type="text" wire:model.lazy="fh_contact">
                              <span class="text-danger">@error( 'fh_contact' ){{ $message}}@enderror</span>
                            </div>

                            <!--Marketing Head-->
                              <hr class="my-3">
                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Marketing Head</label>
                              <input class="form-control" type="text" wire:model.lazy="marketing_head_name">
                              <span class="text-danger">@error( 'marketing_head_name' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Marketing Head email</label>
                              <input class="form-control" type="text" wire:model.lazy="mh_email">
                              <span class="text-danger">@error( 'mh_email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3 mb-3 pb-2">
                              <label class="form-label" >Marketing Head Contact</label>
                              <input class="form-control" type="text" wire:model.lazy="mh_contact">
                              <span class="text-danger">@error( 'mh_contact' ){{ $message}}@enderror</span>
                            </div>
                                                        
                            <div class="form-check mb-1 pb-1">
                              <input class="form-check-input" type="checkbox" value="" id="terms">
                              <label class="form-check-label" for="flexCheckDefault">You must agree with our <a href="#"> Terms & Conditions</a></label>
                            </div>
                          
                      @endif

                      <div class="row">
                        @if($currentStep == 1)
                          <div></div>
                        @endif

                        @if($currentStep == 2 | $currentStep == 3 | $currentStep == 4)
                          <button class=" col-sm-4 btn btn-primary d-block w-50 px-1" type="button" wire:click="decreaseStep()" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                            Back
                          </button>
                        @endif
                                
                        @if($currentStep == 1 | $currentStep == 2 | $currentStep == 3)
                          <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="button" wire:click="increaseStep()" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                              Next
                          </button>
                        @endif

                        @if($currentStep == 4)
                          <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="submit"  wire:click="decreaseStep" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                              Submit
                          </button>
                        @endif
                        
                      </div>
                  </div>
                </form>
        </div>
      </main>