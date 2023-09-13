<main>

<div class="container">
    <div class="fs-md">
     
    </div>
    <form wire:submit.prevent="brandBcontact">
        <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
        <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
        
        <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
        
        <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
        <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
        <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
        <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
        
        <button class="form-control  btn btn-primary" type="submit">Submit</button>
    </form>
</div>

  <div class="container mt-5">
    <div class="fs-md">
     Contact details 
     </div>
        @foreach ($getContact as $franchise) 
            <div class="">
                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                       
                        <div class="h4 fw-light mb-0"> 1 </div> 
                        <div class="small text-muted">{{$franchise->count()}} </div>
                        
                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                    </div>

                    <div class="col-7  p-0">
                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                        {{$franchise->name}} {{$franchise->designation}}</a></div>
                    <div class="text-muted fs-sm text-start">
                        {{$franchise->email}}
                    </div>  
                    <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                    </div>

                    <div class="col-3  p-0">
                        {{--<a class="card-img-top d-block overflow-hidden" href="#">
                            <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                            
                        {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <i class="bi bi-chevron-double-right"></i></a> 
                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})">Delete</a>

                        </div>
                </div>
            </div>
        @endforeach
  </div>
</main>