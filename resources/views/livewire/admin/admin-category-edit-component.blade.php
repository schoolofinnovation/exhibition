@section('page_title','Dashboard')

<main>

<div class="container my-9 mx-auto">

    <div class="container mx-auto my-5"> 
        <div class=" d-flex row">
            <p >Let's Create Event Together</p>
            <small">{{$evento->eventname}}</small>
            <small class="mb-2">{{$evento->desc}}</small>
            <div class="col-lg-8 col-sm-7">
            <input type="text" class="form-control" placeholder="Search your Event..." wire:model.lazy="searchTerm">
            </div>
            <div class="col-lg-4 col-sm-5"><a  class="btn btn-primary">Search</a></div>
        </div>
    </div>

   
    @if(is_null($searchTerm))
    
      
    @else
    @if($searchcat->count() > 0)
        <form wire:submit.prevent="updateEvent">      
            <div class="row mb-5 pb-2" wire:model="checkvalue">
                @foreach ($searchcat as $franchise) 
                {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}

                @endforeach
                {{--<div>@json($checkvalue)</div>--}}
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
    @else
        <div class="small bold">Sorry, we could found relevant industry</div>
    @endif
    @endif



</div>

</main>