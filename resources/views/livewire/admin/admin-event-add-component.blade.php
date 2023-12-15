@section('page_title','Add event')
@section('page_path',' addevent')
@section('page_list',' addevent')
@section('page_name',' Add event')

    <main> 
        <div class="container">
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                <div class="text-sm-end">
                <a class="btn btn-primary" href="route('admin.dashboard', ['board' => 'event'])" data-bs-toggle="modal">  All Event </a></div>
                    @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
                <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
         
            <form wire:submit.prevent="newlist" id="listexpo">
                <div class="row g-1">

                    <div class="col-sm-1">
                    <label class="form-label" for="seniority">Type</label>
                    <select class="form-control" type="text"   wire:model.lazy="eventype"  id="seniority"  placeholder="Provide short title of your request">
                        <option selected>Choose</option>
                        <option value="award">Award</option>
                        <option value="conference">Conference, Forum, Seminar</option>
                        <option value="expo">Exhibition</option>
                        <option value="festival">Festival</option>
                        <option value="network">Network</option>
                        <option value="dealer">Dealer Distribution</option>
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
                        <input class="form-control" type="text" placeholder="Your Edition" wire:model.debounce.500ms="edition" >
                        @error( 'edition' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">From</label>
                        <input class="form-control" type="date" placeholder="Your Name"   wire:model.lazy="startdate" >
                        @error('startdate' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">To</label>
                        <input class="form-control" type="date" placeholder="Your Name"   wire:model.lazy="enddate" >
                        @error( 'enddate' ){{ $message}}@enderror
                    </div>

                    
                    <div class="col-sm-3">
                        <label class="form-label" for="cf-name">Venue</label>
                        <input class="form-control" type="text" placeholder="Your City" wire:model.lazy="venue" >
                        @error( 'venue' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">City</label>
                        <input class="form-control" type="text" placeholder="City" wire:model.lazy="city" >
                        @error('city'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Country</label>
                        <input class="form-control" type="text" placeholder="Country" wire:model.lazy="Country" >
                        @error('country'){{ $message}}@enderror
                    </div>
                    
                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Visitor</label>
                        <input class="form-control" type="text" placeholder="Your Visitor" wire:model.lazy="auidence" >
                        @error('auidence'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Exhibitor</label>
                        <input class="form-control" type="text" placeholder="Your Exhibitor" wire:model.lazy="exhibitors" >
                        @error('exhibitors'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Tag Line</label>
                        <textarea class="form-control" type="text" row="2" placeholder="Your Tagline" wire:model.lazy="tagline" ></textarea>
                        @error('tagline'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Desc</label>
                        <textarea class="form-control" type="text" placeholder="Your Desc" rows="2" wire:model.lazy="desc" ></textarea>
                        @error('desc'){{ $message}}@enderror
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Short Description</label>
                        <textarea class="form-control" type="text" placeholder="Your Short desc" rows="2" wire:model.lazy="shtdesc" ></textarea>
                        @error('shortdesc'){{ $message}}@enderror
                    </div>
                    
                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name">Web Link</label>
                        <input class="form-control" type="text"  wire:model.lazy="link" ></input>
                        @error('link'){{ $message}}@enderror
                    </div>

                   

                </div>
                <hr class="my-2">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Organizer</label>
                            <input class="form-control" type="text" placeholder="Organizer"   wire:model.lazy="organizer" >
                            @error( 'organizer' ){{ $message}}@enderror
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Email</label>
                            <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" >
                            @error( 'email' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Phone</label>
                            <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" >
                            @error( 'phone' ){{ $message}}@enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'event'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Admin</span>
        </a>
       
        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>

    </main>


     