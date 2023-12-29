<main>
    @if($trackcustomer == "magazine")
        <div class="container">
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">List Magazine</a>
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'image-magazine'])}}">Image</a>
        </div>
        
        @if($magazine ->count() == '0')

            <div class="container">
                 <a href="{{route('partner.magazine',['trackcustomer' => 'add-magazine'])}}"><small> <i class="bi bi-plus"></i> Add your Magazine</small></a>  
            </div>
        @else
            @foreach ($magazine as $evento)
                <div class="container my-3">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                        <div class="col  pr-0">
                        
                            <div class="h4 fw-light mb-0">18</div> 
                            <div class="small text-muted">Jul</div>
                            
                            <div class="round-circle">1</div> 
                            
                        </div>

                        <div class="col-7  p-0">
                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="">
                            {{ucwords(trans(Str::limit($evento->name, 24)))}}</a></div>
                        <div class="text-muted fs-sm text-start">
                            
                        </div>  
                        <div class="text-muted fs-sm text-start"></div>
                        </div>

                        <div class="col-3  p-0">
                            @if(is_null($evento->image))
                                <a class="card-img-top d-block overflow-hidden" href="{{route('partner.magazine',['trackcustomer' => 'image-magazine'])}}">Add</a>
                                <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                                @else
                            <a class="card-img-top d-block overflow-hidden" href="">
                            <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}"></a>
                            <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    @endif

    @if($trackcustomer == 'add-magazine')     
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">List your Business Magazine</small>
            <form wire:submit.prevent="added">
                <input type="text" class="form-control mb-1"  placeholder = "name"  wire:model.lazy="name" >
                <input type="text" class="form-control mb-1"  placeholder = "type"  wire:model.lazy="type" >
                <input type="text" class="form-control mb-1"  placeholder = "subscriber"  wire:model.lazy="subscriber" >
                <textarea type="text" class="form-control mb-1"  placeholder = "desc" rows="3" wire:model.lazy="desc" > </textarea>
                <input type="text" class="form-control mb-1"  placeholder = "frequency"  wire:model.lazy="frequency" >
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'image-magazine')
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">Update Magazine Cover</small>
            <form wire:submit.prevent = "image">
            <input type="file" class="form-control mb-1"  placeholder = "image"  wire:model="image" >
            <div class="btn btn-primary form-control mb-1">Submit</div>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'print-facts')
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">Add Print Facts</small>
            <form wire:submit.prevent="printedfacts">
                <input type="text" class="form-control mb-1"  placeholder = "released"  wire:model.lazy="released" >
                <input type="text" class="form-control mb-1"  placeholder = "frequency"  wire:model.lazy="updated" >
                <input type="text" class="form-control mb-1"  placeholder = "version" wire:model.lazy="version" >

                

                <div class="col-sm-4 mb-2 pb-2">
                        <label class="form-label" >Category</label>
                          <div class="input-group">
                            <select class="form-control" placeholder = "category"  wire:model.lazy="category">
                            <option selected >Choose...</option>  
                                @foreach ($tryin as $cat)
                                    <option value="{{$cat->id}}" >{{$cat->tag}}</option>
                                @endforeach
                            </select>
                          </div>
                          <span class="text-danger">@error( 'category' ){{ $message}}@enderror</span>
                      </div>

                
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'contact')
        <div class="container">
        <small class="mt-3 mb-4 fw-bold">Add Business Contact</small>
            <form wire:submit.prevent="addContact">
                <input type="text" class="form-control mb-1" wire:model.lazy = "name" placeholder="name">
                <input type="text" class="form-control mb-1" wire:model.lazy = "phone" placeholder="phone">
                <input type="text" class="form-control mb-1" wire:model.lazy = "email" placeholder="email">
                <input type="text" class="form-control mb-1" wire:model.lazy = "designation" placeholder="designation">
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </form>
        </div>
    @endif


    @if($trackcustomer == 'event')       
        <!--<div class="small">Distribution Audience</div>
                <form wire:submit.prevent ="businessAudience">
                        <input type="text" wire:model.lazy = "email" placeholder="email">
                </form> -->

        <div class="small">Upcoming Exhibition, where you are going to participate? May be/ May be Not?</div>
            <form wire:submit.prevent="chooseEvent">

            </form>
    @endif

        <!-- <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
          <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}" value="magazine"  wire:model="trackcustomer">
                           <div class="p-3 border rounded border-dark bg-light text-center">Magazine</div>
                        </a> 
                    </div>
                   
                   
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Event</div>
                        </a> 
                    </div>


                     <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Expand your Business</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Hire us Media Buying</div>
                        </a> 
                    </div>
                    
                    <div class="h4">Expand your Business</div>
                    <div class="smalll">Reach your business goals with Marketing Solutions.</div>
                    <a href="" class="btn btn-primary" value="contact" wire:model="trackcustomer">Hire us Media Buying</a>

                </div>
            </div>
          </div>
        </section> -->



            <!-- <form wire:submit.prevent="addMagazine">
                <input type="text" class="form-control" wire:model.lazy = "magazineName" placeholder="Magazine Name">
                <input type="text" class="form-control" wire:model.lazy = "brandName" placeholder="Brand">
                <input type="text" class="form-control" wire:model.lazy = "RNI" placeholder="RNI">

                <input type="text" class="form-control" wire:model.lazy = "industry" placeholder="industry">
                <input type="text" class="form-control" wire:model.lazy = "edition" placeholder="Current Edition">
                <input type="text" class="form-control" wire:model.lazy = "issue" placeholder="Current Issue"> 
                
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </form>


    

            <div class="small">When going to print?</div>
            <form wire:submit.prevent="date">
                <input type="text" class="form-control" wire:model.lazy = "date" placeholder="Print Date">
            </form> -->




        @if($trackcustomer == 'magazine')

            //choose industry
            <form action="">
                <input type="text" class="form-control" wire:model.lazy = "industry">
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </form>

            <form wire:submit.prevent="addMagazine">
                <input type="text" class="form-control" wire:model.lazy = "magazineName" placeholder="Magazine Name">
                <input type="text" class="form-control" wire:model.lazy = "brandName" placeholder="Brand">
                <input type="text" class="form-control" wire:model.lazy = "RNI" placeholder="RNI">

                <input type="text" class="form-control" wire:model.lazy = "industry" placeholder="industry">
                <input type="text" class="form-control" wire:model.lazy = "edition" placeholder="Current Edition">
                <input type="text" class="form-control" wire:model.lazy = "issue" placeholder="Current Issue"> 
                
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </form>

            <form wire:submit.prevent="addContact">
                <input type="text" class="form-control" wire:model.lazy = "name" placeholder="Owner Name">
                <input type="text" class="form-control" wire:model.lazy = "phone" placeholder="phone">
                <input type="text" class="form-control" wire:model.lazy = "email" placeholder="email">
                <button class="btn btn-primary form-control" type="submit">Submit</button>
            </form>


            <div class="small">Upload Magazine Images</div>

            <form wire:submit.prevent="multiImage">

            </form>

            //choose or select 
            <!-- <div class="small">Distribution Audience</div>
                <form wire:submit.prevent="businessAudience">
                        <input type="text" wire:model.lazy = "email" placeholder="email">
                </form> -->

            //choose or select
            <div class="small">Upcoming Exhibition, where you are going to participate? May be/ May be Not?</div>
            <form wire:submit.prevent="chooseEvent">

            </form>

                <div class="small">When going to print?</div>
                <form wire:submit.prevent="date">
                    <input type="text" class="form-control" wire:model.lazy = "date" placeholder="Print Date">
                </form>
        @endif


       
        

        



    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'print-facts'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Facts</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'contact'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Contact</span>
          </a>

      
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'inquiry'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Inquiry</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'user/add-your-business' == request()->path() ? 'active' : '' }}" href="{{route('user.claim')}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'user/add-your-business' == request()->path() ? 'active' : '' }}">Event</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'business'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Plan</span>
          </a>
      

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
</main>