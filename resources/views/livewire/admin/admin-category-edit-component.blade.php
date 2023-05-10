@section('page_title','Dashboard')

<main>

    <div class="container my-5 mx-auto">

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
        

    
        @if(is_null($searchTerm))
        @else

            @if($searchcat->count() > 0)
                <form wire:submit.prevent="updateEvent">      
                    <div class="row mb-5 pb-2" wire:model="checkvalue">

                        @foreach ($searchcat as $franchise) 
                        {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                        <div class=" col col-auto my-1 px-2"> 
                        <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}
                        </div>
                        @endforeach
                        <div>@json($checkvalue)</div>
                        
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @else
                <div class="small bold">Sorry, we could found relevant industry. You can upload </div>

                <form wire:submit.prevent="updatetag">
                    <input type="text" placeholder="tag" wire:model="tag">
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
            @endif

        @endif


        </div>
    </div>

</main>

