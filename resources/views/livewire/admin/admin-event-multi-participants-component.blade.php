    <main>
        <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
           
                @if($formm = 'detailPavillion')
                    <form wire:submit.prevent="add">
                        <!-- Title-->
                        <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                            <h2 class="h3 py-2 me-2 text-center text-sm-start">Your Event</h2>
                            <div class="py-2">
                                <select class="form-select me-2" wire:model.lazy="event_id">
                                    <option>Select Event Type</option>
                                    @foreach($event as $even)
                                    <option value="{{$even->id}}">{{$even->eventname}}</option>
                                    @endforeach
                                </select>
                                @error('event_id')
                                <div class="form-text">Which Edition going to be organised?</div>
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="unp-standard-price">Pavillion Name</label>
                                <div class="input-group">
                                <input class="form-control" type="text" wire:model="pavillion_name" wire:keyup="generateSlug">
                                </div>
                                @error('pavillion_name')
                                <div class="form-text">Which Edition going to be organised?</div>
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>

                            <div class=" col-sm-6 mb-3 pb-2">
                                <label class="form-label" for="unp-product-name">Business Industry</label>
                                <input class="form-control" type="text" wire:model.lazy="business" >
                                <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                                @error('business')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            
                        </div>
                    
                

                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-standard-price">Start Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('startdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-extended-price">Last Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="lastdate">
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                                @error('lastdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
        
                                <label class="form-label" for="unp-standard-price">Number of stall</label>
                                <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                <input class="form-control" type="number" wire:model.lazy="nostall">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('nostall')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            

                            <div class="col-sm-12 mb-3">
                                <label class="form-label" for="unp-extended-price">Description</label>
                                <div class="input-group">
                                <textarea class="form-control" type="text" wire:model.lazy="desc" row="3"></textarea>
                                @error('desc')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                            </div>
                            
                        </div>

                        <div class="mb-3 pb-2">
                            <label class="form-label" for="unp-product-files">Exhibition Poster</label>
                            <input class="form-control" type="file" name="image" wire:model="image">
                            <div class="form-text">Maximum file size is 1GB</div>
                                @error('image')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                        </div>

                        <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                    </form>
                @elseif($formm == 'addPavillion')
                    <form wire:submit.prevent="updatetag">
                        <input type="text" placeholder="tag" wire:model="tag">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                
                @elseif($formm == 'addParticipants')
                    <form wire:submit.prevent="updatetag">
                        <input type="text" placeholder="tag" wire:model="tag">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>

                @elseif($formm == 'detailParticipants')

                    <form action="">

                    </form>

                @elseif($formm == 'addSpeaker')

                    <form wire:submit.prevent="updatetag">
                        <input type="text" placeholder="tag" wire:model="tag">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>  

                @elseif($formm == 'detailSpeaker') 

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
    
                @elseif($formm == 'addSponsership')

                @elseif($formm == 'planSponsership')
                
                @endif

            </div>
        </section>
    </main>