
@section('page_title','Add Tickets')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - The exhibition Network')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')

<section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">            
        <form wire:submit.prevent="add" >
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
                            @foreach($event as $evento)
                               <option value="{{$evento->id}}">{{$evento->eventname}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-standard-price">Code</label>
                        <input class="form-control" type="text" wire:model.lazy="code">
                        <div class="form-text">It shoud be unique</div>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-product-name">Ticket Name</label>
                        <input class="form-control" type="text" wire:model.lazy="package" wire:keyup="generateSlug">
                        <div class="form-text">Create unique ticket name</div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-product-name">Number of Tickets</label>
                        <input class="form-control" type="number" wire:model.lazy="number">
                        <div class="form-text">How many auidence can enter? </div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-product-name">Ticket Price </label>
                        <input class="form-control" type="number" wire:model.lazy="price">
                        <div class="form-text">Price of the ticket</div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-product-name">Discounted Price</label>
                        <input class="form-control" type="number" wire:model.lazy="saleprice">
                        <div class="form-text">Discounted Price to auidence </div>
                    </div>    
                    
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-standard-price">Start Date</label>
                        
                        <input class="form-control" type="date" wire:model.lazy="start_date">
                        <div class="form-text">Average marketplace price for this category is $15.</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-extended-price">Last Date</label>
                        <input class="form-control" type="date" wire:model.lazy="expiry_date">
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>
                </div>

                
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.lazy="desc"></textarea>
                        <div class="form-text">Describle your tickets plan</div>
                    </div>


                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-standard-price">Validaity</label>
                        
                        <input class="form-control" type="date" wire:model.lazy="validity">
                        
                        <div class="form-text">Average marketplace price for this category is $15.</div>
                    </div>
                    
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-extended-price">Tickets Deactivation Date</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="date" wire:model.lazy="expiry_date">
                        </div>
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-extended-price">Tickets Deactivation time</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="time" wire:model.lazy="start_time">
                        </div>
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="unp-extended-price">Tickets Deactivation time</label>
                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                        <input class="form-control" type="time" wire:model.lazy="expiry_time">
                        </div>
                        <div class="form-text">Typically 10x of the Standard license price.</div>
                    </div>

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" checked wire:model.lazy="terms">
                    <label class="form-check-label" for="flexCheckChecked">
                    By clicking "submit" you agree to our Terms of Service.
                    </label>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>
        </div>
    </section>