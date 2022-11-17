    <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <form wire:submit.prevent="add" >
                <!-- Title-->
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Event</h2>
                    <div class="py-2">
                        <select class="form-select me-2" wire:model.lazy="eventype">
                            <option>Select Event Type</option>
                            <option value="exhibition">Exhibition</option>
                            <option value="conference">Conference</option>
                            <option value="awards">Awards</option>
                            <option value="forum">Forum</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Edition</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="number" wire:model.lazy="edition">
                        </div>
                        <div class="form-text">Average marketplace price for this category is $15.</div>
                    </div>
                    
                </div>
                <div class="mb-3 pb-2">
                    <label class="form-label" for="unp-product-name">Event name</label>
                    <input class="form-control" type="text" wire:model="eventname" wire:keyup="generateSlug">
                    <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                </div>
                
               

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Start Date</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="date" wire:model.lazy="startdate">
                        </div>
                        <div class="form-text">Average marketplace price for this category is $15.</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-extended-price">Last Date</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="date" wire:model.lazy="enddate">
                        </div>
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Venue</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="text" wire:model.lazy="venue">
                        </div>
                        <div class="form-text">Average marketplace price for this category is $15.</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-extended-price">City</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="text" wire:model.lazy="city">
                        </div>
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>
                    
                </div>

                <div class="mb-3 pb-2">
                    <label class="form-label" for="unp-product-files">Exhibition Poster</label>
                    <input class="form-control" type="file" wire:model.lazy="image">
                    <div class="form-text">Maximum file size is 1GB</div>
                </div>

                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>
        </div>
    </section>