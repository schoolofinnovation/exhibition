<main>
      

      @if($board == 'dashboard')
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">{{count($ticket)}}</div> 
                  
                    <div class="round-circle" >Ticket</div> 
                    
                </div>

                <div class="col-7  p-0">
                  @if(is_null($evento->edition))
                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                  @else
                    <div class="fs-md fw-normal text-start">
                      {{$evento->organizer}}<br>
                      {{$evento->email}}<br>
                      {{$evento->phone}}
                    </div>
                  @endif
                </div>

                <div class="col-3 p-0">
                  @if(is_null($evento->edition))
                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Add</a>
                  @else
                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Edit</a>
                  @endif
                </div>
            </div>
          </div>
      @endif

      @if($board == 'add-ticket')
            <form wire:submit.prevent="add">
                <!-- Title-->
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Event</h2>
                </div>
                <div class="container">
                
                  <div class="row">
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-standard-price">Code</label>
                          <input class="form-control" type="text" wire:model.lazy="code">
                          <div class="form-text">It shoud be unique</div>
                          @error('code')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-6 mb-3">
                          <label class="form-label" for="unp-product-name">Ticket Name</label>
                          <input class="form-control" type="text" wire:model.lazy="package" wire:keyup="generateSlug">
                          <div class="form-text">Create unique ticket name</div>
                          @error('package')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Number of Tickets</label>
                          <input class="form-control" type="number" wire:model.lazy="number">
                          <div class="form-text">How many auidence can enter? </div>
                          @error('number')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Ticket Price </label>
                          <input class="form-control" type="number" wire:model.lazy="price">
                          <div class="form-text">Price of the ticket</div>
                          @error('price')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Discounted Price</label>
                          <input class="form-control" type="number" wire:model.lazy="saleprice">
                          <div class="form-text">Discounted Price to auidence </div>
                          @error('saleprice')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>    
                      
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-standard-price">Start Date</label>
                          
                          <input class="form-control" type="date" wire:model.lazy="start_date">
                        
                          @error('start_date')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-extended-price">Last Date</label>
                          <input class="form-control" type="date" wire:model.lazy="expiry_date">
                          @error('expiry_date')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model.lazy="desc"></textarea>
                      <div class="form-text">Describle your tickets plan</div>
                      @error('desc')
                          <div class="form-text">{{$message}}</div>
                      @enderror
                  </div>

                  <div class="row">
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-standard-price">Validity</label>
                          
                          <input class="form-control" type="date" wire:model.lazy="validity">
                          
                          @error('validity')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>
                      
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-extended-price">Tickets Deactivation Date</label>
                          <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                          <input class="form-control" type="date" wire:model.lazy="expiry_date">
                          </div>
                          @error('expiry_date')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-extended-price">Tickets Deactivation time</label>
                          <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                          <input class="form-control" type="time" wire:model.lazy="start_time">
                          </div>
                          @error('start_time')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-extended-price">Tickets Deactivation time</label>
                          <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                          <input class="form-control" type="time" wire:model.lazy="expiry_time">
                          </div>
                          @error('expiry_time')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                  </div>

                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" checked wire:model.lazy="terms">
                      <label class="form-check-label" for="flexCheckChecked">
                      By clicking "submit" you agree to our Terms of Service.
                      </label>
                      @error('terms')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                  </div>


                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
              </div>
              </form>

      @endif
</main>