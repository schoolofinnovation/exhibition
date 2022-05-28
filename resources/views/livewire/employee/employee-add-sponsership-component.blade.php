@section('page_title','List Your Sponsership')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' My Brand')
@section('page_path',' Brand')
@section('page_list',' addJob')

<main>
<div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          
        
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
            <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}"></div>
            <div class="ps-3">                  
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span>
              <span class="badge bg-success"><i class=" bi bi-check me-1"></i>Available for Business Account</span>
            </div>
          </div>


          <div class="d-flex align-items-center pb-3">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div> 
            @endif
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Total sales</div>
              <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-end">
              <div class="text-light fs-base">Seller rating</div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pe-xl-5">
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
              <!-- Actual menu-->
              <div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Account</h3>
                  </div>
                  <ul class="list-unstyled mb-0" wire:model="option">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active"  value="profile" ><i class="ci-settings opacity-60 me-2"></i>Profile  <small>list your agency</small> </a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"  value="listevent"><i class="ci-basket opacity-60 me-2"></i>Exhibition</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Award show<span class="fs-sm text-muted ms-auto">4</span></a></li>
                  </ul>
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href=""><i class="ci-dollar opacity-60 me-2"></i>Speaker<span class="fs-sm text-muted ms-auto">$1,375.00</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href=""><i class="ci-package opacity-60 me-2"></i>Exhibitors<span class="fs-sm text-muted ms-auto">5</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href=""><i class="ci-cloud-upload opacity-60 me-2"></i>Category</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href=""><i class="ci-currency-exchange opacity-60 me-2"></i>Partners</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href=""><i class="ci-sign-out opacity-60 me-2"></i>Sponsership</a></li>
                  </ul>
                  <hr>
                </div>
              </div>
            </aside>
            <!-- Content-->
 
            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                
                <!-- Title-->
                <form id="profile" wire:submit.prevent="newSponser">
                      <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Sponsership</h2>

                        <div class="py-2">
                          <select class="form-select me-2" wire:model.lazy="event_id">
                            <option>Select Event</option>
                            @foreach($exhibition_id as $expo_id)
                                <option value="{{$expo_id->id}}">{{$expo_id->eventname}}</option> 
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Sponsership Name" wire:model="plan" wire:keyup="generateSlug">
                              <label for="fl-text">Sponsership Name</label>
                              <div class="form-text">Sponsership Plan Name</div>
                            </div>

                            <div class="col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Auidence Approch" wire:model.lazy="auidence">
                              <label for="fl-text">Auidence Approch</label>
                              <div class="form-text">Sponsership Auidence Approch</div>
                            </div>
                          

                      </div>

                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Media Coverage" wire:model.lazy="mediacoverage">
                              <label for="fl-text">Media Coverage</label>
                              <div class="form-text">.e.g. Social Media, Print Media, Radio..</div>
                            </div>

                            <div class="col-3 form-floating mb-3">
                              <input class="form-control" type="date"  placeholder="Start Date" wire:model.lazy="startdate">
                              <label for="fl-text">Start Date</label>
                              <div class="form-text">Sponsership start from...</div>
                            </div>

                            <div class="col-3 form-floating mb-3">
                              <input class="form-control" type="date" placeholder="End Date" wire:model.lazy="enddate">
                              <label for="fl-text">End Date</label>
                              <div class="form-text">Sponsership End at...</div>
                            </div>
                      </div>

                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Standard license Cost" wire:model.lazy="stdcost">
                              <label for="fl-text">Standard license Cost</label>
                              <div class="form-text">Average marketplace Cost for this Sponsership is INR 10,000.</div>
                            </div>

                            <div class="col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Extended license Cost" wire:model.lazy="extcost">
                              <label for="fl-text">Extended license Cost</label>
                              <div class="form-text">Typically 10x of the Standard license Cost.</div>
                            </div>

                      </div>
                      
                    

                      <div class="row g-2">
                        <div class="col-5 mb-3 pb-2">
                          <!--<label class="form-label" for="unp-product-files">Exhibition booklet for sale</label>-->
                          <input class="form-control" type="file" wire:model.lazy="image">
                          <label class="fs-ms">Sponsership Booklet for sale</label><span class="form-text">
                            Maximum file size is 1GB</span>
                            <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="required_sponser_booklet">
                            <label class="fs-ms">If, You don't have Sponsership Booklet.</label>
                        </div>

                        <div class="col-7 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Sponsership Coverage" wire:model.lazy="sponsercoverage">
                              <label for="fl-text">Sponsership Coverage</label>
                              <div class="form-text">Sponsership Coverage</div>
                        </div>

                        
                      </div>

                      <div class="form-check mb-1 pb-1">
                          <input class="form-check-input" type="checkbox" value="" wire:model.lazy="terms">
                          <label class="form-check-label" for="flexCheckDefault">
                          You must agree with our <a href="#"> Terms & Conditions</a>
                          </label>
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit">
                        <i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                </form>

              </div>
            </section>

          </div>
        </div>
      </div>

<!-- Floating label: Text input -->
<div class="form-floating mb-3">
  <input class="form-control" type="text" placeholder="Your name">
  <label for="fl-text">Your name</label>
</div>

<!-- Floating label: Select -->
<div class="form-floating mb-3">
  <select class="form-select" id="fl-select">
    <option selected>Argentina</option>
    <option>Belgium</option>
    <option>France</option>
    <option>Germany</option>
    <option>Japan</option>
    <option>Spain</option>
    <option>USA</option>
  </select>
  <label for="fl-select">Your country</label>
</div>

<!-- Floating label: Textarea -->
<div class="form-floating">
  <textarea class="form-control" id="fl-textarea" style="height: 120px;" placeholder="Your message"></textarea>
  <label for="fl-textarea">Your message</label>
</div>

      <div>Looking for other designs? Check out the other themes we created. Easy to switch, play and develop new websites.
            What's next?
            We are already working on a new product, so stay tuned.</div>
            </main>