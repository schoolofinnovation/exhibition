<main>
  <div class="container">
    @if($board =='edit')
          <form wire:submit.prevent="edit" >
                <div class="row">
                  <div class="col-sm-4 ">
                    <label class="form-label" >Blog tittle</label>
                    <textarea class="form-control" type="text" rows="3" wire:model="tittle"  wire:keyup="generateSlug"> </textarea>
                  </div>

                  <div class="col-sm-4">
                    <label class="form-label" >Short Desc</label>
                      <textarea class="form-control" type="text"  rows="7" wire:model.lazy="s_desc"></textarea>
                      <div class="form-text"></div>
                  </div>
              
                  
                  <div class="col-sm-4">
                    <label class="form-label" >Desc</label>
                    <textarea class="form-control" type="text"  rows="10" wire:model="desc"></textarea>
                    <div class="form-text"></div>
                  </div>
                  <div class="col-sm-4">
                  <button class="btn btn-primary d-block w-70" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                  Post</button>
                  </div>
              
                </div>
          </form>
    @endif

    @if($board == 'tag')
        <div class="col-lg-8 col-sm-7 ">
            <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
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
    @endif

    @if($board == 'image')
      <form  wire:submit.prevent="dateImage">
              <div class="col-sm-2">
                  <label class="form-label" for="cf-name">Image</label>
                  <input class="form-control" type="file"   wire:model="image" required=""></textarea>
                  @error('image'){{ $message}}@enderror
              </div>
              <button class="btn btn-primary mt-2" type="submit">Submit</button>
      </form>  
    @endif
  </div>
</main>