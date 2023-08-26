<main>

  <div class="container">
    @if($formm == 'detailPavillion')
        <form wire:submit.prevent="updatePavillion">
              <input  class="form-control" type="text" placeholder="business"   wire:model.lazy="business">

              <input  class="form-control" type="text" placeholder="desc"   wire:model.lazy="desc">

              <input  class="form-control" type="number" placeholder="nostall"   wire:model.lazy="nostall">

              <input  class="form-control" type="date" placeholder="startdate"   wire:model.lazy="startdate">
              <input  class="form-control" type="date" placeholder="enddate"   wire:model.lazy="enddate">

              <button  type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
    @endif

    @if($formm == 'brand')
        <form wire:submit.prevent="">

        <input type="text" wire:model="brand_name">
        <input type="text" wire:model="">
        </form>
    @endif

      {{--need to be delete shifted to admin-event-multi-participants--}}
    @if($formm == 'client')
        <div class="container my-5">
              <div class="small"> List meet-up brand</div>   

              <form wire:submit.prevent="participantToAdd">
                <div class="row mb-5 pb-2" wire:model="checkvalue">

                    
                </div>
              </form>


              <form wire:submit.prevent="AddBrandAttend">

                    <!-- <select class="form-control mb-1" type="text"   wire:model.lazy="event_id" >
                        <option selected>Choose</option>
                      @foreach($findInspection as $findoo)
                        <option value="{{$findoo -> id}}">{{$findoo -> eventname}}</option>
                      @endforeach
                    </select> -->
                       

                <input type="text" class="form-control mb-1" wire:model.lazy="brand_name" placeholder="brand_name">

                @foreach ($participants as $participant) 
                    {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                    <div class=" col col-auto my-1 px-2"> 
                        <input class="form-check-input" type="checkbox"   value="{{$participant->id}}"  wire:model="checkvalue"> {{$participant->brand_name}} 
                        <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Imagedelete({{$participant->id}})"> <i class="bi bi-x me-2"></i> </a>
                        <img src="{{url('public/assets/image/exhibition/'.$participant->brand_logo)}}" alt="#" width="50px">{{$participant->brand_name}}
                    </div>
                    @endforeach
                    <div>@json($checkvalue)</div>
                    
                <input type="text" class="form-control mb-1" wire:model.lazy="country" placeholder="country">
                <input type="text" class="form-control mb-1" wire:model.lazy="link" placeholder="link">

                <input type="text" class="form-control mb-1" wire:model.lazy="name" placeholder="name">
                <input type="text" class="form-control mb-1" wire:model.lazy="contact" placeholder="contact">
                <input type="email" class="form-control mb-1" wire:model.lazy="email" placeholder="email">
                <input type="text" class="form-control mb-1" wire:model.lazy="designation" placeholder="designation">
                
               {{-- <textarea type="text" class="form-control mb-1" wire:model.lazy="comment" placeholder="comment"></textarea>
                <input type="text" class="form-control mb-1" wire:model.lazy="size" placeholder="size">
                <input type="text" class="form-control mb-1" wire:model.lazy="grade" placeholder="grade">
                <textarea type="text" class="form-control mb-1" wire:model.lazy="reminder" placeholder="reminder"></textarea>

                <input type="text" class="form-control mb-1" wire:model.lazy="email_request" placeholder="email_request">
                <input type="text" class="form-control mb-1" wire:model.lazy="service_request" placeholder="service_request">--}}

                <button class="btn btn-primary mt-2" type="submit">Submit</button>
              </form>
        </div>
    @endif
  </div>

</main>