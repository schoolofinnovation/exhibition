<main>
    <div class="container">
        @if($formm == 'image')
            <div class="my-5">
                <form  wire:submit.prevent="dateImage">
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" for="cf-name">Image</label>
                            <input class="form-control" type="file"   wire:model.lazy="image" required="">
                            @error('image'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
                </form>
            </div>

            <hr class="mt-5">
               
                @foreach($photos as $imgo)
                    <div class="container">
                        <div class="row row-cols-3 row-cols-lg-6 gy-2 gx-1 g-lg-3"> 
                            <div class="col">
                                <a href="#" wire:click.prevent="adDphoto({{$imgo->id}})">
                                    <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}"  width="50%" alt=""></a>
                                <a href="#" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>

                                <a href="#" class="btn btn-primary" wire:click.prevent="adDphoto({{$imgo->id}})"> Testing</a>
                           </div>
                        </div>
                    </div>
                @endforeach
        @endif



        @if($formm == 'organiser')
            <div class="my-5">
                <form  wire:submit.prevent="createOrganiser">
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" for="cf-name">Organiser</label>
                            <input class="form-control" type="text" wire:model.lazy="organiser" required="">
                            @error('organiser'){{ $message}}@enderror
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <label class="form-label" for="cf-name">Organiser</label>
                            <input class="form-control" type="text" wire:model.lazy="organiser" required="">
                            @error('organiser'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
                </form>
            </div>
        @endif

    </div>
</main>