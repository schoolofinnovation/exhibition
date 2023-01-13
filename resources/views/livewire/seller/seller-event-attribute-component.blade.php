<main>
        <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
           
                <form wire:submit.prevent="updateAttribute">
                    <!-- Title-->
                
                    <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Event</h2>
                        <div class="py-2">
                            <select class="form-select me-2" wire:model.lazy="eventna_id">
                            <option>Select Event</option>
                                @foreach($event as $eve)
                                <option value="{{$eve -> id}}">{{$eve->eventname}}</option>
                              
                                @endforeach
                            </select>
                            @error('eventna_id')
                            <div class="form-text">Which Edition going to be organised?</div>
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Category</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                           
                            <select class="form-select me-2" wire:model.lazy="category_id">
                                <option>Select Category</option>
                                @foreach($category as $eve)
                                <option value="{{$eve -> id}}">{{$eve->industry}}</option>
                              
                                @endforeach
                            </select>
                            </div>
                            <div class="form-text">Average marketplace price for this category is $15.</div>
                            @error('category_id')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-extended-price">Sector</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            
                            <select class="form-select me-2" wire:model.lazy="sector_id">
                                <option>Select Sector</option>
                                @foreach($sector as $eve)
                                <option value="{{$eve -> id}}">{{$eve->sector}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-text">Typically 10x of the Standard license price.</div>
                            @error('sector_id')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Expo</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            
                            <select class="form-select me-2" wire:model.lazy="expo_id">
                                <option>Select Expo</option>
                                @foreach($expo as $eve)
                                <option value="{{$eve -> id}}">{{$eve->expoindustry}}</option>
                              
                                @endforeach
                            </select>
                            </div>
                            <div class="form-text">Average marketplace price for this category is $15.</div>
                            @error('expo_id')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-extended-price">Search</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <select class="form-select me-2" wire:model.lazy="search_id">
                                <option>Select Search </option>
                                @foreach($search as $eve)
                                <option value="{{$eve -> id}}">{{$eve->tag}}</option>
                                @endforeach
                            </select>
                            
                            </div>
                            <div class="form-text">Typically 10x of the Standard license price.</div>
                            @error('search_id')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        
                        
                        <div class=" col-sm-12 mb-3 pb-2">
                            <label class="form-label" for="unp-product-name">Tag Line</label>
                            <input class="form-control" type="text" wire:model="tagline">
                            <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                            @error('tagline')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class=" col-sm-12 mb-3 pb-2">
                            <label class="form-label" for="unp-product-name">Short Desc</label>
                            <textarea class="form-control" type="text" wire:model="shtdesc" row="2" ></textarea>
                            <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                            @error('shtdesc')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class=" col-sm-12 mb-3 pb-2">
                            <label class="form-label" for="unp-product-name">Description</label>
                            <textarea class="form-control" type="text" wire:model="desc" row="3" ></textarea>
                            <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                            @error('desc')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        
                    </div>
                
            

                    

                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Auidence</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="text" wire:model.lazy="auidence">
                            </div>
                            <div class="form-text">Average marketplace price for this category is $15.</div>
                            @error('auidence')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-extended-price">Exhibitors</label>
                            <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                            <input class="form-control" type="text" wire:model.lazy="exhibitors">
                            @error('exhibitors')
                            <div class="form-text">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-text">Typically 10x of the Standard license price.</div>
                        </div>
                        
                    </div>

                   

                    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                </form>
            </div>
        </section>
    </main>