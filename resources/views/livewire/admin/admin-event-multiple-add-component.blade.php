@section('page_title','Add event')
@section('page_path',' addevent')
@section('page_list',' addevent')
@section('page_name',' Add event')

    <main> 

    
        <div class="container mb-5 pb-5">
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                <div class="text-sm-end">
                <a class="btn btn-primary" href="{{route('admin.dashboard', ['board' => 'event'])}}" data-bs-toggle="modal">  All Event </a></div>
                    @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
                <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
           
            @if($formm == 'event' )
                <form wire:submit.prevent="updateEvent">
                    <div class="row g-1">

                        <div class="col-sm-3">
                        <label class="form-label" for="seniority">Type</label>
                        <select class="form-control" type="text"   wire:model.lazy="eventype"  placeholder="Provide short title of your request">
                            <option> Choose</option>
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
                            <input class="form-control" type="text" placeholder="Your Event"   wire:model="eventname" wire:keyup="generateSlug" required="">
                            @error( 'eventname' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-1">
                            <label class="form-label" for="cf-name">Edition</label>
                            <input class="form-control" type="text" placeholder="Your Edition" wire:model.lazy="edition" required="">
                            @error( 'edition' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Start Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="startdate" required="">
                            @error('startdate' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">End Date</label>
                            <input class="form-control" type="date"  wire:model.lazy="enddate" required="">
                            @error( 'enddate' ){{ $message}}@enderror
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
                    


                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Tag Line</label>
                            <textarea class="form-control" type="text" row="2" placeholder="Your Tagline" wire:model.lazy="tagline" required=""></textarea>
                            @error('tagline'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Desc</label>
                            <textarea class="form-control" type="text" placeholder="Your Desc" rows="2" wire:model.lazy="desc" required=""></textarea>
                            @error('desc'){{ $message}}@enderror
                        </div>

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Short Description</label>
                            <textarea class="form-control" type="text" placeholder="Your Short desc" rows="2" wire:model.lazy="shtdesc" required=""></textarea>
                            @error('shtdesc'){{ $message}}@enderror
                        </div>    

                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Web Link</label>
                            <input class="form-control" type="text"  wire:model.lazy="link" required=""></input>
                            @error('link'){{ $message}}@enderror
                        </div>
                    
                    </div>
                    
                    <hr class="my-2">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label" for="cf-name">Organizer</label>
                                <input class="form-control" type="text" placeholder="Your email"   wire:model.lazy="organizer" required="">
                                @error( 'organizer' ){{ $message}}@enderror
                            </div>
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
            @endif


            @if($formm == 'image')
                <form  wire:submit.prevent="dateImage">
                    <div class="col-sm-2">
                        <label class="form-label" for="cf-name"> {{$evento->eventname}} Image</label>
                        <input class="form-control" type="file"   wire:model.lazy="image" required="">
                        @error('image'){{ $message}}@enderror
                    </div>
                    <button class=" form-control btn btn-primary mt-2" type="submit">Submit</button>
                </form> 

                <hr class="mt-5">
               
                @foreach($photos as $imgo)
                    <div class="container">
                        <div class="row row-cols-3 row-cols-lg-6 gy-2 gx-1 g-lg-3"> 
                            <div class="col">
                                <a href="#" wire:click.prevent="adDphoto({{$imgo->brand_lgo}})">
                                    <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}"  width="50%" alt=""></a>
                                <a href="" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>

                                <a href="" class="btn btn-primary" wire:click.prevent="adDphoto({{$imgo->brand_lgo}})"> Testing</a>
                           </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if($formm == 'tag')
                <form  wire:submit.prevent="updateEvent">
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Tag Line</label>
                            <textarea class="form-control" type="text" rows="8" placeholder="Your Tagline" wire:model.lazy="tagline" required=""></textarea>
                            @error('tagline'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($formm == 'desc')
                <form  wire:submit.prevent="updateEvent">
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Desc</label>
                            <textarea class="form-control" type="text" placeholder="Your Desc" rows="5" wire:model.lazy="desc" required=""></textarea>
                            @error('desc'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($formm == 'short')
                <form  wire:submit.prevent="updateEvent">
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Short Description</label>
                            <textarea class="form-control" type="text" placeholder="Your Short desc" rows="5" wire:model.lazy="shtdesc" required=""></textarea>
                            @error('shtdesc'){{ $message}}@enderror
                        </div>    
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($formm == 'webo')
                <form  wire:submit.prevent="updateEvent">
                    
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Web Link</label>
                            <input class="form-control" type="text"  wire:model.lazy="link" required=""></input>
                            @error('link'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

            @if($formm == 'organiser' )
                <form wire:submit.prevent="updateEvent">
                    
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label" for="cf-name">Organizer</label>
                                <input class="form-control" type="text" placeholder="Your email"   wire:model.lazy="organizer" required="">
                                @error( 'organizer' ){{ $message}}@enderror
                            </div>
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

                <!-- select organiser -->
                <form wire:submit.prevent="addorganisation">
                        <div class="row">

                            <div class="col-sm-3">
                                <label class="form-label" for="seniority">Find Organiser</label>
                                <select class="form-control" type="text" wire:model.lazy="brand_id"  placeholder="Provide short title of your request">
                                <option >Choose</option>
                                    @foreach($findoorganizer as $organiserowner)
                                        <option value="{{$organiserowner->id}}">{{$organiserowner->brand_name}}</option>
                                    @endforeach                        
                                </select>
                                @error('brand_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>

                        </div>

                    <button class=" form-control btn btn-primary mt-2" type="submit">Submit</button>
                </form>
                
                    <div class="col">
                        <a href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Add Organiser</div>
                        </a> 
                    </div>
            @endif

            @if($formm == 'magazine')
                <form wire:submit.prevent="">

                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Name</label>
                            <input class="form-control" type="text" placeholder="Name" wire:model.lazy="name" required="">
                            @error( 'name' ){{ $message}}@enderror
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Type</label>
                            <input class="form-control" type="email" placeholder="Type" wire:model.lazy="type" required="">
                            @error( 'type' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Desc</label>
                            <input class="form-control" type="number" placeholder="Description"   wire:model.lazy="desc" required="">
                            @error( 'desc' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Desc</label>
                            <input class="form-control" type="number" placeholder="Distribution"   wire:model.lazy="frequency" required="">
                            @error( 'frequency' ){{ $message}}@enderror
                        </div>

                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

        </div>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail',['slug' => $evento->slug])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Admin</span>
        </a>
       

        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' =>'edit'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
          <span class="handheld-toolbar-label">category</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>
    </main>
