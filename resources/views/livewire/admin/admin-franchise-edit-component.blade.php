  <main> 
    <div class=" container my-3 py-3"> 

        <div class="text h3"><a class="btn btn-primary px-2 mx-2" href="{{ route('admin.dashboard') }}"> Dashboard </a>Edit Opportunity </div>
        <!--<div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
              <div class="text-sm-end">
              <a class="btn btn-primary" href="{{ route('seller.dashboard') }}" data-bs-toggle="modal">  Dashboard </a></div>
                @if (Session::has('message'))
                <h6 class="fs-base text-light mb-0">
                {{Session::get('message')}}
                </h6>
                @endif
                <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>-->

            <ul class="nav nav-tabs nav-justified" role="tablist">
              @if($currentStep == 1)
                <li class="nav-item"><a class="nav-link px-0 active" href="#franchise" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class=" bi bi-user opacity-60 me-2"></i>list your business</div>
                    <div class="d-lg-none text-center"><i class=" bi bi-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Franchise</span></div></a></li>
              @endif
              @if($currentStep == 2)
                    <li class="nav-item"><a class="nav-link px-0 active" href="#social" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class=" bi bi-bell opacity-60 me-2"></i>Which type business model do you have?</div>
                    <div class="d-lg-none text-center"><i class=" bi bi-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Social</span></div></a></li>
              @endif
              @if($currentStep == 3)
                    <li class="nav-item"><a class="nav-link px-0 active" href="#team" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class=" bi bi-card opacity-60 me-2"></i> Which business location you want to do business? </div>
                    <div class="d-lg-none text-center"><i class=" bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a></li>
              @endif
              @if($currentStep == 4)  
                    <li class="nav-item"><a class="nav-link px-0 active" href="#user" data-bs-toggle="tab" role="tab">
                    <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>describe with upload about your business model</div>
                    <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">User</span></div></a></li>
              @endif
            </ul>
    
        <div class="row">  
          @if($currentStep == 1)
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          @endif
          @if($currentStep == 2)
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          @endif
          @if($currentStep == 3)
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          @endif
          @if($currentStep == 4)
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          @endif
        </div>

        <form wire:submit.prevent="add" >
          <div class="row mt-5" >
                    @if($currentStep == 1)
                          <div class="col-sm-3 mb-2 pb-2">
                            <label class="form-label" >Brand {{$co_name}}</label>
                              <div class="input-group">
                                <select class="form-control" wire:model="brand_name" wire:keyup="generateSlug">
                                      <option selected >Choose...</option>  
                                    @foreach ($tryin as $cat)
                                      <option value="{{$cat->brand_name}}" >{{$cat->brand_name}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'brand_name' ){{ $message}}@enderror</span>
                          </div>

                            <div class="col-sm-3  mb-3">
                              <label class="form-label">Property Type</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="property_type">
                              <option selected >Choose...</option> 
                                <option value="commercial">Commercial</option>
                                <option value="nonCommercial">Non-Commercial </option>
                              
                              </select>
                              </div>
                              <span class="text-danger">@error( 'property_type' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3  mb-3">
                              <label class="form-label">Featured</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="featured">
                              <option selected >Choose...</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                                <option value="non-featured">Non Featured</option>
                                <option value="featured">Featured</option>
                                <option value="new">New</option>
                                <option value="premium">Premium</option>
                                <option value="demand">Demand</option>
                              
                              </select>
                              </div>
                              <span class="text-danger">@error( 'featured' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-3  mb-3">
                              <label class="form-label">Type Opportunities</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="total_no_outlet">
                              <option selected >Choose...</option>
                                <option value="low">Distributor</option>
                                <option value="medium">Dealer</option>
                                <option value="high">C&F</option>
                                <option value="non-featured">State Franchise</option>
                                <option value="featured">Regional Franchise</option>
                                <option value="new">Unit Franchise</option>
                                <option value="premium">Master Franchise</option>
                                <option value="demand">Authorized Partner</option>
                              </select>
                              </div>
                              <span class="text-danger">@error('total_no_outlet'){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-2 mb-3">
                                  <label class="form-label">Min Investment (Lacs)</label>
                                  <div class="input-group">
                                  <select class="form-control" wire:model="min_investment">
                                  <option selected >Choose...</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="8">8</option>
                                  <option value="10">10</option>
                                  <option value="15">15</option>
                                  <option value="20">20</option>
                                  <option value="25">25</option>
                                  <option value="30">30</option>
                                  <option value="35">35</option>
                                  <option value="40">40</option>
                                  <option value="45">45</option>
                                  <option value="50">50</option>
                                  </select>
                                  <span class="text-danger">@error( 'min_investment' ){{ $message}}@enderror</span>
                                  </div>
                            </div>

                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Max Investment (Lacs)</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="max_investment">
                              <option selected >Choose...</option>
                                <option value="10 Cr">10 Cr</option>
                                <option value="5 Cr">5 Cr</option>
                                <option value="1 Cr">1 Cr</option>
                                <option value="75">75</option>
                                <option value="70">70</option>
                                <option value="65">65</option>
                                <option value="60">60</option>
                                <option value="55">55</option>
                                <option value="50">50</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                              </select>
                              </div>
                              <span class="text-danger">@error( 'max_investment' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Max. Area (.sqm)</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="max_area">
                              <option selected >Choose...</option>
                                <option value="75">75</option>
                                <option value="70">70</option>
                                <option value="65">65</option>
                                <option value="60">60</option>
                                <option value="55">55</option>
                                <option value="50">50</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                              </select>
                              </div>
                              <span class="text-danger">@error( 'max_area' ){{ $message}}@enderror</span>
                            </div>
                          
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Min. Area (.sqm)</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="min_area">
                              <option selected >Choose...</option>
                                <option value="75">75</option>
                                <option value="70">70</option>
                                <option value="65">65</option>
                                <option value="60">60</option>
                                <option value="55">55</option>
                                <option value="50">50</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                              
                              </select>
                              </div>
                              <span class="text-danger">@error( 'min_area' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Min. Outlet</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="min_outlet">
                              <option selected >Choose...</option>
                                <option value="75">75</option>
                                <option value="70">70</option>
                                <option value="65">65</option>
                                <option value="60">60</option>
                                <option value="55">55</option>
                                <option value="50">50</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                              
                              </select>
                              </div>
                              <span class="text-danger">@error( 'min_outlet' ){{ $message}}@enderror</span>
                            </div>
                          
                        
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Max. Outlet</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="max_outlet">
                              <option selected >Choose...</option>
                                <option value="75">75</option>
                                <option value="70">70</option>
                                <option value="65">65</option>
                                <option value="60">60</option>
                                <option value="55">55</option>
                                <option value="50">50</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="3">3</option>
                              
                              </select>
                              </div>
                              <span class="text-danger">@error( 'max_outlet' ){{ $message}}@enderror</span>
                            </div>

                            
                    @endif

                    @if($currentStep == 2)
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Business Zone</label>
                              <div class="input-group">
                              <select class="form-control" wire:model="Location">
                              <option selected >Choose...</option>  
                                <option value="east">East India</option>
                                <option value="west">West India</option>
                                <option value="north">North India</option>
                                <option value="south">South India</option>
                                <option value="central">Central India</option>
                              </select>
                              </div>
                              <span class="text-danger">@error( 'Location' ){{ $message}}@enderror</span>
                            </div>
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">State</label>
                              <div class="input-group">
                                <select class="form-control"   wire:model="State">
                                  <option selected >Choose...</option> 
                                    @foreach ($local as $cat)
                                    <option value="{{$cat->state}}" >{{$cat->state}}</option> 
                                      @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'State' ){{ $message}}@enderror</span>
                            </div>
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">City Categories</label>
                              <div class="input-group">
                                <select class="form-control"   wire:model="Tier">
                                <option selected >Choose...</option> 
                                
                                  <option value="1" >Tier 1</option>
                                  <option value="2" >Tier 2</option>
                                  <option value="3" >Tier 3</option>
                                </select>
                              </div>
                              <span class="text-danger">@error( 'Tier' ){{ $message}}@enderror</span>
                            </div>
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Business Partner</label>
                              <div class="input-group">
                                <select class="form-control"   wire:model="images">
                                <option selected >Choose...</option> 
                                @foreach ($city as $cat)
                                  <option value="{{$cat->city}}" >{{$cat->city}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'images' ){{ $message}}@enderror</span>
                            </div>
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Shops</label>
                              <div class="input-group">
                                <select class="form-control"   >
                                <option selected >Choose...</option> 
                                @foreach ($city as $cat)
                                  <option value="{{$cat->id}}" >{{$cat->city}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'city' ){{ $message}}@enderror</span>
                            </div> 
                            <div class="col-sm-2  mb-3">
                              <label class="form-label">Shops</label>
                              <div class="input-group">
                                <select class="form-control"   >
                                <option selected >Choose...</option> 
                                @foreach ($city as $cat)
                                  <option value="{{$cat->id}}" >{{$cat->city}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <span class="text-danger">@error( 'city' ){{ $message}}@enderror</span>
                            </div>
                          
                    <!--zone-->
                      @if(!is_null($def))
                            {{$Location}} business zone 
                          @foreach ($def as $cat)
                            <div class="form-check col my-1 ">
                              <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="{{$cat->id}}">
                              <label class="form-check-label" for="inlineRadio1">{{$cat->city}}</label>
                            </div>
                          @endforeach
                      @endif

                      <!--state-->
                      @if(!is_null($abc))
                              @foreach ($abc as $cat)
                              <div class="form-check col my-1 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="{{$cat->id}}">
                            <label class="form-check-label" for="inlineRadio1">{{$cat->city}}</label>
                          </div>
                          @endforeach
                      @endif

                      <!--state-->
                      @if(!is_null($ice))
                              @foreach ($ice as $cat)
                              <div class="form-check col my-1 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="{{$cat->id}}">
                            <label class="form-check-label" for="inlineRadio1">{{$cat->city}}</label>
                          </div>
                          @endforeach
                      @endif

                    @endif

                    @if($currentStep == 3)
                      <div>Choose type of business model...</div>
                        <div class="row my-5" >  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="FOCO" wire:model="image">
                            <label class="form-check-label" for="inlineRadio1">FOCO</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="FOFO" wire:model="image">
                            <label class="form-check-label" for="inlineRadio2">FOFO</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="COFO" wire:model="image">
                            <label class="form-check-label" for="inlineRadio3">COFO</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio4" value="COCO" wire:model="image">
                            <label class="form-check-label" for="inlineRadio1">COCO</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio5" value="dealer_disribution" wire:model="image">
                            <label class="form-check-label" for="inlineRadio2">Dealer Disribution</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio6" value="master_franchise" wire:model="image" >
                            <label class="form-check-label" for="inlineRadio3">Master Franchise</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio7" value="channel_partner" wire:model="image">
                            <label class="form-check-label" for="inlineRadio2">Channel Partner</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio8" value="management_partner" wire:model="image" >
                            <label class="form-check-label" for="inlineRadio3">Management Partner</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio9" value="business_franchise" wire:model="image" >
                            <label class="form-check-label" for="inlineRadio3">Business Franchise</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio10" value="channel_partner" wire:model="image">
                            <label class="form-check-label" for="inlineRadio2">Channel Partner</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio11" value="management_partner" wire:model="image">
                            <label class="form-check-label" for="inlineRadio3">Supplier Partner</label>
                          </div>   
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio12" value="state_partner" wire:model="image">
                            <label class="form-check-label" for="inlineRadio3">State Partner</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio13" value="city_partner" wire:model="image">
                            <label class="form-check-label" for="inlineRadio2">City Partner</label>
                          </div>
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio14" value="district_partner" wire:model="image" >
                            <label class="form-check-label" for="inlineRadio3">District Partner</label>
                          </div>  
                          <div class="form-check col my-3 ">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio15" value="unit_business" wire:model="image" >
                            <label class="form-check-label" for="inlineRadio3">Unit Business</label>
                          </div>  
                        </div>
                      </div>
                    @endif

                    @if($currentStep == 4)
                            <div class="col-sm-4 mb-1 pb-1">
                              <label class="form-label" >Description</label>
                              <textarea class="form-control" type="text" wire:model="description"></textarea>
                              <span class="text-danger">@error( 'description' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-1 pb-1">
                              <label class="form-label" >Short Description</label>
                              <textarea class="form-control" type="text" wire:model="short_description"></textarea>
                              <span class="text-danger">@error( 'short_description' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-2 pb-2">
                              <label class="form-label" >Business Brochure</label>
                              <input class="form-control" type="file" wire:model="brand_image">
                            <span class="text-danger">@error('brand_image'){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Name</label>
                              <input class="form-control" type="text"   >
                              <span class="text-danger">@error( 'brand_head_name' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >e-mail</label>
                              <input class="form-control" type="text"   >
                              <span class="text-danger">@error( 'bh_email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Contact</label>
                              <input class="form-control" type="text"  >
                              <span class="text-danger">@error( 'bh_contact' ){{ $message}}@enderror</span>
                            </div>
            
                            <h2>User Contact Details</h2>
                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >e-mail</label>
                              <input class="form-control" type="text" wire:model="email"  >
                              <span class="text-danger">@error( 'email' ){{ $message}}@enderror</span>
                            </div>

                            <div class="col-sm-4 mb-3 pb-2">
                              <label class="form-label" >Contact</label>
                              <input class="form-control" type="text" wire:model="contact"  >
                              <span class="text-danger">@error( 'contact' ){{ $message}}@enderror</span>
                            </div>

                            <div class="form-check mb-1 pb-1">
                              <input class="form-check-input" type="checkbox" value="" id="terms">
                              <label class="form-check-label" for="flexCheckDefault">
                              You must agree with our <a href="#"> Terms & Conditions</a>
                              </label>
                            </div>

                    @endif  


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