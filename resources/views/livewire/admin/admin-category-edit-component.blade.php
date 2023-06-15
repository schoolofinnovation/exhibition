@section('page_title','Dashboard')

<main>
    <div class="container my-5 mx-auto">
        <div class="container mx-auto my-5"> 
            <div class=" d-flex row">
                <p >Let's Create Event Together</p>
                <small">{{$evento->eventname}}</small>
      
                @foreach($selectedcategory as $catego)
                    <a class="badge  border-1 text-right border-dark text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                    {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                    </a>
                @endforeach

                <div class="col-lg-8 col-sm-7 ">
                    <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
                </div>
                <div class="col-lg-4 col-sm-5"><a  class="btn btn-primary">Search</a></div>
            </div>
        
            @if(is_null($searchTerm))
            
            @else

                @if($searchcat->count() > 0)
                

                
                    <form wire:submit.prevent="updateEvent">      
                        <div class="mb-5 pb-2">
                        @foreach ($findAdminStatus as $findoo)
                            <span class="badge bg-success m-0" value="{{$findoo->id}}"  wire:model="checkvalue">  {{$findoo -> tag}} </span>
                        @endforeach

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

