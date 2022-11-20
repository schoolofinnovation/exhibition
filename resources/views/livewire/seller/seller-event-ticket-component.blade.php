<section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            
        <form wire:submit.prevent="add" >
    
    
    wire:model.lazy="cart_value"
    
    wire:model.lazy="expiry_date"
    wire:model.lazy="start_date"
    wire:model.lazy="start_time"
    wire:model.lazy="expiry_time"
    wire:model.lazy="validity"
    
    wire:model.lazy="terms"

                <!-- Title-->
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Event</h2>
                    <div class="py-2">
                        <select class="form-select me-2" wire:model.lazy="type">
                            <option>Select Type</option>
                            <option value="expo">Exhibition</option>
                            <option value="conference">Conference</option>
                            <option value="awards">Awards</option>
                            <option value="forum">Forum</option>
                        </select>
                    </div>
                    <div class="py-2">
                        <select class="form-select me-2" wire:model.lazy="event_id">
                            <option>Select Event</option>
                            <option value="expo">Exhibition</option>
                        </select>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Code</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="text" wire:model.lazy="code">
                        </div>
                        <div class="form-text">It shoud be unique</div>
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-name">Ticket Name</label>
                        <input class="form-control" type="text" wire:model.lazy="package" wire:keyup="generateSlug">
                        <div class="form-text">Create unique ticket name</div>
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-name">Number of Tickets</label>
                        <input class="form-control" type="number" wire:model.lazy="number">
                        <div class="form-text">How many auidence can enter? </div>
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-name">Ticket Price </label>
                        <input class="form-control" type="number" wire:model.lazy="price">
                        <div class="form-text">Price of the ticket</div>
                    </div>

                    <div class="mb-3 pb-2">
                        <label class="form-label" for="unp-product-name">Discounted Price</label>
                        <input class="form-control" type="number" wire:model.lazy="saleprice">
                        <div class="form-text">Discounted Price to auidence </div>
                    </div>               
                </div>

                
                <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Description</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="text" wire:model.lazy="desc">
                        </div>
                        <div class="form-text">Describle your tickets plan</div>
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

                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>
        </div>
    </section>