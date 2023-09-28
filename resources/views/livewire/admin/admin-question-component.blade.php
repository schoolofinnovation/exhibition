<main>
    <div class="container">
        <form wire:submit.prevent="questadd">
            <input type="text" class="form-control" wire:model.lazy="quest" placeholder="list your question">
            <button type="submit" class="form-control btn-primary btn" >Submit</button>
        </form>
    </div>

    <div class="container my-3">
        @foreach($result as $evento)
        <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                
                  <div class="h4 fw-light mb-0"></div> 
                  <div class="small text-muted text-capitalize"></div>

                <div class="round-circle">{{$evento->id}}</div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                  {{ucwords(trans($evento->question))}}</a></div>

              <div class="text-muted fs-sm text-start">
                  {{$evento->event_id}}
              </div>  
              <div class="text-muted fs-sm text-start"></div>
            </div>

            <div class="col-3  p-0">
                <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="delete({{$evento->id}})"> <i class="bi bi-x"></i> </a>

                <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updateEventstatus({{$evento->id}},'1')"> <i class="bi bi-plus"></i> </a>
                <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updateEventDestatus({{$evento->id}},'0')"> <i class="bi bi-active"></i> </a>

                <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updated({{$evento->id}},'0')"> <i class="bi bi-pencil"></i> </a>
            </div>
        </div>
        @endforeach
    </div>
</main>