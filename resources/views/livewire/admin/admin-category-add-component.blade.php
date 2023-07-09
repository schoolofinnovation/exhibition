
    <main> 
      <div class="container">
        <div class="col-lg-8 col-sm-7 ">
            <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
            <a  class="btn btn-primary">Search</a>
        </div>
        
        <div class=" border-0">
              @foreach($resultAdded as $resultAdd)
                 @php
                   $findcountevent = DB::table('dencos')->where('expo_id', $resultAdd->id)->count()
                 @endphp

                   
                  <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="eventdelete({{$resultAdd->id}})">
                  {{$resultAdd -> tag}} {{$findcountevent}}<i class="bi bi-x me-2"></i>
                    </a>
              @endforeach
        </div>

        {{$counteventWithCategory}}

        @if(is_null($searchTerm))
            <p class="text-center my-5">like to find Something businessfull</p>
            @else
              <div class="my-5">
                <p>Result</p>
                @foreach ($searchcat as $searchcato)
                  <a href="#" class="badge bg-success m-0" wire:click.prevent="updateEventstatus({{$searchcato->id}},'1')"> {{$searchcato->tag}}  </a>
                @endforeach
              </div>
        @endif

      </div>

      
    </main>