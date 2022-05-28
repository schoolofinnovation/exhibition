              <main>  
                <!-- Title-->
                <form id="profile" wire:submit.prevent="newlist">
                      <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Exhibition</h2>

                        <div class="py-2">
                          <select class="form-select me-2" wire:model.lazy="eventype">
                            <option>Select Event</option>
                                <option value="award">Award</option>
                                <option value="conference">Conference</option>
                                <option value="exhibition">Exhibition</option>
                                <option value="festival">Festival</option>
                                <option value="network">Network</option>
                          </select>
                        </div>
                      </div>
                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Exhibition name" wire:model="eventname" wire:keyup="generateSlug">
                              <label for="fl-text">Exhibition name</label>
                            </div>

                            <div class="col-4 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="City" wire:model.lazy="city">
                              <label for="fl-text">City</label>
                            </div>
                            <div class="col-2 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Edition" wire:model.lazy="edition">
                              <label for="fl-text">Edition</label>
                            </div>

                      </div>

                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="text"  placeholder="Venue name" wire:model.lazy="venue">
                              <label for="fl-text">Venue</label>
                            </div>

                            <div class="col-3 form-floating mb-3">
                              <input class="form-control" type="date"  placeholder="Start Date" wire:model.lazy="startdate">
                              <label for="fl-text">Start Date</label>
                            </div>

                            <div class="col-3 form-floating mb-3">
                              <input class="form-control" type="date" placeholder="End Date" wire:model.lazy="enddate">
                              <label for="fl-text">End Date</label>
                            </div>
                      </div>

                      <div class="row g-2">
                            <div class=" col-6 form-floating mb-3">
                              <input class="form-control" type="file" placeholder="Standard license price" wire:model.lazy="stdprice">
                              <label for="fl-text">Standard license price</label>
                              <div class="form-text">Average marketplace price for this category is $10,000.</div>
                            </div>

                            <div class="col-6 form-floating mb-3">
                              <input class="form-control" type="text" placeholder="Extended license price" wire:model.lazy="extprice">
                              <label for="fl-text">Extended license price</label>
                              <div class="form-text">Typically 10x of the Standard license price.</div>
                            </div>

                      </div>
                      
                      <div class="row g-2">
                        <div class=" col-4 form-floating mb-3">
                          <select class="form-select" wire:model.lazy="expo_id">
                            <option selected>Choose Business Industry</option>
                              @foreach($abc as $expo)
                                  <option value="{{$expo->id}}">{{ucwords(trans($expo->expoindustry))}}</option>
                              @endforeach
                          </select>
                          <label for="fl-select">Select Event Industry</label>
                        </div>

                        <div class=" col-4 form-floating mb-3">
                          <select class="form-select" wire:model.lazy="category_id">
                            <option selected>Choose Business Category</option>
                                @foreach($jkl as $expo)
                                    <option value="{{$expo->id}}">{{ucwords(trans($expo->industry))}}</option>
                                @endforeach
                          </select>
                          <label for="fl-select">Select Event Category</label>
                        </div>

                        <div class=" col-4 form-floating mb-3">
                          <select class="form-select" wire:model.lazy="sector_id">
                            <option selected>Choose Business Sector</option>
                                @foreach($ghi as $expo)
                                    <option value="{{$expo->id}}">{{ucwords(trans($expo->sector))}}</option>
                                @endforeach
                          </select>
                          <label for="fl-select">Select Event Sector</label>
                        </div>                        
                      </div>

                      <div class="row g-2">
                        <div class="col-5 mb-3 pb-2">
                          <!--<label class="form-label" for="unp-product-files">Exhibition booklet for sale</label>-->
                          <input class="form-control" type="file" wire:model.lazy="image">
                          <label class="fs-ms">Exhibition booklet for sale</label><span class="form-text">
                            Maximum file size is 1GB</span>
                            <input class="form-check-input" type="checkbox" value="1" id="terms">
                            <label class="fs-ms">If you don't have exhibition Booklet.</label>
                            
                        </div>

                        <div class=" col-7 form-floating mb-3">
                            <select class="form-select" wire:model.lazy="search_id">
                              <option selected>Choose Business Tag</option>
                                  @foreach($def as $expo)
                                      <option value="{{$expo->id}}">{{ucwords(trans($expo->tag))}}{{$expo->id}}</option>
                                  @endforeach
                            </select>
                            <label for="fl-select">Select Event Search</label>
                        </div>
                      </div>

                      <div class="form-check mb-1 pb-1">
                          <input class="form-check-input" type="checkbox" value="" id="terms">
                          <label class="form-check-label" for="flexCheckDefault">
                          You must agree with our <a href="#"> Terms & Conditions</a>
                          </label>
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit">
                        <i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                </form>

              </main>