@section('page_title','List Speaker')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' My Brand')
@section('page_path',' Brand')
@section('page_list',' addJob')


<main>
                
                <!-- Title-->
                <form  wire:submit.prevent="newSpeaker">
                      <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Speaker</h2>

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
                            <div class=" col-6 form-floating mb-1">
                              <input class="form-control" type="text" placeholder="Name" wire:model="name" wire:keyup="generateSlug">
                              <label for="fl-text">Name</label>
                            </div>

                            <div class=" col-6 form-floating mb-1">
                                <select class="form-select" wire:model.lazy="designation">
                                    <option selected>Choose Designation</option>
                                    <option value="founder">Founder</option>
                                    <option value="ceo">CEO</option>
                                    <option value="head">Head</option>
                                    <option value="manager">Manager</option>
                                    <option value="entrepreneur">Entrepreneur</option>
                                </select>
                                <label for="fl-select">Select Designation</label>
                            </div>

                            <div class="col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Brand Name" wire:model.lazy="organisation">
                              <label for="fl-text">Organisation</label>
                              <div class="form-text">Speaker's Organisation Name</div>
                            </div>
                            <div class="col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Brand's website" wire:model.lazy="website">
                              <label for="fl-text">Brand's website</label>
                             <div>
                              <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="not_website">
                              <label class="fs-ms">If you don't have business website.</label></div> 
                            </div>
                            
                      </div>

                      <div class="row g-2">
                            <div class=" col-5 form-floating mb-1">
                              <input class="form-control" type="text"  placeholder="Contact" wire:model.lazy="contact">
                              <label for="fl-text">Contact</label>
                            </div>

                            <div class="col-7 form-floating mb-1">
                              <input class="form-control" type="text"  placeholder="e-mail" wire:model.lazy="email">
                              <label for="fl-text">e-mail</label>
                            </div>

                            <div class=" col-5 form-floating mb-3">
                                <select class="form-select" wire:model.lazy="channel">
                                    <option selected>Choose Social</option>
                                    <option value="linkedin">Linkedin</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="google">Google</option>
                                </select>
                                <label for="fl-select">Select Social</label>
                                <div class="form-text">Select Speaker's social link Platform</div>
                            </div>

                            <div class="col-7 form-floating mb-3">
                              <input class="form-control" type="text"  placeholder="Social Link" wire:model.lazy="link">
                              <label for="fl-text">Socil Link</label>
                              <div class="form-text">Upload speaker's social profile address.</div>
                            </div>
                      </div>

                      <div class="mb-2 pb-2">
                        <!--<label class="form-label" for="unp-product-files">Exhibition booklet for sale</label>-->
                        <input class="form-control" type="file" wire:model.lazy="image">
                        <label class="fs-ms">Upload Speaker's Image</label><span class="form-text">
                          Maximum file size is 1GB</span>                           
                      </div>


                      <div class="form-check mb-1 pb-1">
                          <input class="form-check-input" type="checkbox" value="1"  wire:model.lazy="terms">
                          <label class="form-check-label" for="flexCheckDefault">
                          You must agree with our <a href="#"> Terms & Conditions</a>
                          </label>
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                </form>

            </main>