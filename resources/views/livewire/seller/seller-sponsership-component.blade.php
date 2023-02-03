
<main>
      <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
           
            <form wire:submit.prevent="sponseradd">
                    <!-- Title-->
                    <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Your Events</h2>
                        <div class="py-2">
                            <select class="form-select me-2" wire:model.lazy="event_id">
                                <option>Select Event</option>
                                    @foreach($event as $evento)
                                        <option value="{{$evento->id}}">{{$evento-> eventname}}</option>
                                    @endforeach
                            </select>
                            @error('event_id')
                            <div class="form-text">Which Edition going to be organised?</div>
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <label class="form-label" for="unp-standard-price">Plan</label>
                            <select class="form-select me-2" wire:model="plan" wire:keyup="generateSlug">
                                <option>Select Event</option>
                                <option value="Night Party Sponsor"> Night Party Sponsor</option>                                         
                                <option value="Speaker Hall Sponsor"> Speaker Hall Sponsor</option>                                                
                                <option value="Wristband Sponsor"> Wristband Sponsor</option>                                                
                                <option value="Meeting Rooms Sponsor"> Meeting Rooms Sponsor</option>                                                
                                <option value="Idea Hub Sponsor"> Idea Hub Sponsor</option>                                                
                                <option value="Executive Lounge B-Sponsor"> Executive Lounge B Sponsor</option>                                                
                                <option value="Coffee Bar Sponsor"> Coffee Bar Sponsor</option>                                                
                                <option value="Footprint Sponsor"> Footprint Sponsor</option>                                                
                                <option value="Candy Girl Sponsor"> Candy Girl Sponsor</option>                                                
                                <option value="Gelato Sponsor"> Gelato Sponsor</option>                                                
                                <option value="Executive Lounge C-Sponsor"> Executive Lounge C Sponsor</option>                                                
                                <option value="Smoothie Station Sponsor"> Smoothie Station Sponsor</option>                                                
                                <option value="Executive Lounge A-Sponsor"> Executive Lounge A Sponsor</option>                                                
                                <option value="Lanyard Sponsor"> Lanyard Sponsor</option>                                                
                                <option value="Selfie-Bot Sponsor"> Selfie-Bot Sponsor</option>                                                
                                <option value="Clean-&-Green"> Clean & Green Sponsor</option> 
                                <option value="Bar Lounge Sponsor"> Bar Lounge Sponsor</option>                                                
                                <option value="Food Court Sponsor"> Food Court Sponsor</option>                                                
                                <option value="Aqua Sponsor"> Aqua Sponsor</option>                                                
                                <option value="Popcorn Sponsor"> Popcorn Sponsor</option>                                                
                                <option value="Welcome Party Sponsor"> Welcome Party Sponsor</option>                                                
                                <option value="Attendee Bag Sponsor"> Attendee Bag Sponsor</option>                                                
                                <option value="Cloakroom Sponsor"> Cloakroom Sponsor</option> 
                            </select>
                            @error('plan')
                               <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>

                        <div class=" col-sm-3 mb-3 pb-2">
                            <label class="form-label" for="unp-product-name">Audience</label>
                            <input class="form-control" type="text" wire:model.lazy="auidence">
                            <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                            @error('auidence')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        
                    </div>
                
            
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Start Date</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                            </div>
                            <div class="form-text">Average marketplace price for this category is $15.</div>
                            @error('startdate')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-extended-price">Last Date</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="date" wire:model.lazy="enddate">
                            </div>
                            <div class="form-text">Typically 10x of the Standard license price.</div>
                            @error('enddate')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Standard Cost</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="text" wire:model.lazy="stdcost">
                            </div>
                            <div class="form-text">Average marketplace price for this category is $15.</div>
                            @error('stdcost')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-extended-price">Cost</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="text" wire:model.lazy="extcost">
                            @error('extcost')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-text">Typically 10x of the Standard license price.</div>
                        </div>
                        
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-files">Exhibition Poster</label>
                        <input class="form-control" type="file" name="image" wire:model.lazy="image">
                        <div class="form-text">Maximum file size is 1GB</div>
                            @error('image')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-files">Media Coverage</label>
                        <textarea class="form-control" wire:model.lazy="mediacoverage" rows="3"></textarea>
                        <div class="form-text">Maximum file size is 1GB</div>
                            @error('image')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-files">Sponser Coverage</label>
                        <textarea class="form-control" wire:model.lazy="sponsercoverage" rows="3"></textarea>
                        <div class="form-text">Maximum file size is 1GB</div>
                            @error('image')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-files">Terms Conditions</label>
                        <textarea class="form-control" wire:model.lazy="termsconditions" rows="3"></textarea>
                        <div class="form-text">Maximum file size is 1GB</div>
                            @error('image')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                    </div>


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="required_sponser_booklet"  >
  <label class="form-check-label" for="flexCheckChecked">
  required_sponser_booklet
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1"  wire:model.lazy="terms">
  <label class="form-check-label" for="flexCheckChecked">
  terms
  </label>
</div>
                    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                </form>
            </div>
        </section>
        </main>