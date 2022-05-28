@section('page_title','Add event')
@section('page_path',' addevent')
@section('page_list',' addevent')
@section('page_name',' Add event')

         <main> 
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
            <a class="btn btn-primary" href="{{route ('admin.dashboard')}}" data-bs-toggle="modal">  All Event </a></div>
                @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>


        <form wire:submit.prevent="newlist" id="listexpo">
            <div class="row g-1">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Organizer</label>
                    <input class="form-control" type="text" placeholder="Organised By"   wire:model.debounce.500ms="organizer"  required="">
                    @error( 'organizer' ){{ $message}}@enderror
                </div>

                <div class="col-sm-1">
                  <label class="form-label" for="seniority">Type</label>
                  <select class="form-control" type="text"   wire:model.lazy="eventype"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose</option>
                    <option value="award">Award</option>
                    <option value="conference">Conference</option>
                    <option value="expo">Exhibition</option>
                    <option value="festival">Festival</option>
                    <option value="network">Network</option>
                    </select>
                    @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Event Name</label>
                    <input class="form-control" type="text" placeholder="Your Event"   wire:model.debounce.500ms="eventname" wire:keyup="generateSlug" required="">
                    @error( 'eventname' ){{ $message}}@enderror
                </div>

                <div class="col-sm-1">
                    <label class="form-label" for="cf-name">Edition</label>
                    <input class="form-control" type="text" placeholder="Your Edition" wire:model.debounce.500ms="edition" required="">
                    @error( 'edition' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">From</label>
                    <input class="form-control" type="date" placeholder="Your Name"   wire:model="startdate" required="">
                    @error('startdate' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">To</label>
                    <input class="form-control" type="date" placeholder="Your Name"   wire:model="enddate" required="">
                    @error( 'enddate' ){{ $message}}@enderror
                </div>

                <div class="col-sm-3">
                  <label class="form-label" for="seniority">Industry</label>
                  <select class="form-control" type="text"   wire:model.lazy="category_id"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose...</option>
                        @foreach($cat as $category)
                        <option value="{{$category->id}}">{{ucwords(trans($category->industry))}}</option>
                        @endforeach
                    </select>
                    @error('industry') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

               
                <div class="col-sm-3">
                  <label class="form-label" for="seniority">Sector</label>
                  <select class="form-control" type="text"   wire:model.lazy="sector_id"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose...</option>
                    @foreach($sec as $sectors)
                     <option value="{{$sectors->id}}">{{ucwords(trans($sectors->sector))}}</option>
                    @endforeach
                    </select>
                    @error('sector') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="col-sm-2">
                  <label class="form-label" for="seniority">Business Industry</label>
                  <select class="form-control" type="text"   wire:model.lazy="expo_id"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose...</option>
                    @foreach($pavillion as $pav)
                     <option value="{{$pav->id}}">{{$pav->expoindustry}}</option>
                    @endforeach
                    </select>
                    @error('expo_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
 
                <div class="col-sm-3">
                  <label class="form-label" for="seniority">Search Tag</label>
                  <select class="form-control" type="text"   wire:model.lazy="search_id"  id="seniority"  placeholder="Provide short title of your request">
                    <option selected>Choose...</option>
                    @foreach($searchtag as $pav)
                     <option value="{{$pav->id}}">{{$pav->tag}}</option>
                    @endforeach
                    </select>
                    @error('') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                
                <div class="col-sm-3">
                    <label class="form-label" for="cf-name">Venue</label>
                    <input class="form-control" type="text" placeholder="Your City" wire:model.lazy="venue" required="">
                    @error( 'venue' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                  <label class="form-label" for="cf-name">City</label>
                  <input class="form-control" type="text" placeholder="Event City" wire:model="city" required="">
                  @error('city'){{ $message}}@enderror
                </div>
                
                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Visitor</label>
                    <input class="form-control" type="text" placeholder="Your Visitor" wire:model.lazy="auidence" required="">
                    @error('auidence'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Exhibitor</label>
                    <input class="form-control" type="text" placeholder="Your Exhibitor" wire:model.lazy="exhibitors" required="">
                    @error('exhibitors'){{ $message}}@enderror
                </div>
                </div>
            <hr class="my-2">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">Email</label>
                        <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" required="">
                        @error( 'email' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">Phone</label>
                        <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" required="">
                        @error( 'phone' ){{ $message}}@enderror
                    </div>
                </div>

                <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>

</main>


     