    <main>
        <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
           
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
            </div>
        </section>
    </main>