        <div class="col-lg-6 px-4 px-xl-5 py-5 border-top" >
            <h2 class="h4 mb-1"> Contact us to see how we can help you.</h2>
            
            <div class="fs-sm text-primary mb-4" data-bs-toggle="collapse" 
            href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            We’ll be in touch within 24 hours.</div>
                      
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div> 
            @endif
            
            <form wire:submit.prevent="newlist" id="collapseExample">
                <div class="row g-3" >
                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">Event Name: {{$slug}}
                    </label>
                        <input class="form-control" type="text"  
                        placeholder="Events Name"   wire:model="eventname" wire:keyup="generateSlug" required="">
                        
                        @error( 'eventname' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">Start Date
                    </label>
                        <input class="form-control" type="date"  
                        placeholder="Your Name"   wire:model.lazy="startdate" required="">
                        
                        @error( 'startdate' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">End Date
                    </label>
                        <input class="form-control" type="date"  
                        placeholder="Your Name"   wire:model.lazy="enddate" required="">
                        
                        @error('enddate'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="cf-name">Venue
                    </label>
                        <input class="form-control" type="text"  
                        placeholder="Your Venue"   wire:model.lazy="venue" required="">
                        @error('venue'){{ $message}}@enderror
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label" for="cf-name">City
                    </label>
                        <input class="form-control" type="text"  
                        placeholder="Your City"   wire:model.lazy="city" required="">
                        @error('city'){{ $message}}@enderror
                    </div>
                    <div class="col-sm-3">
                    <label class="form-label" for="seniority">Type of event</label>
                    <select class="form-control" type="text"   wire:model.lazy="eventype"  id="seniority"  placeholder="Provide short title of your request">
                        <option selected>Choose...</option>
                        <option value="award">Award</option>
                        <option value="conference">Conference</option>
                        <option value="exhibition">Exhibition</option>
                        <option value="festival">Festival</option>
                        <option value="network">Network</option>
                        </select>
                        @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-name">Email
                    </label>
                        <input class="form-control" type="email"  
                        placeholder="business@coi.com"   wire:model.lazy="email" required="">
                        @error( 'email' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="cf-name">Phone
                    </label>
                        <input class="form-control" type="text"  
                        placeholder="Official Contact"   wire:model="phone" required="">
                        @error( 'phone' ){{ $message}}@enderror
                    </div>
                
                 <button class="btn btn-primary mt-2" type="submit">Get in touch</button>
                </div>       
            </form>
        </div>