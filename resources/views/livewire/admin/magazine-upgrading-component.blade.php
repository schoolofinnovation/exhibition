<main>
            @if($formm == 'image')
                <form  wire:submit.prevent="dateImage">
                        <div class="col-sm-2">
                            <label class="form-label" for="cf-name">Image</label>
                            <input class="form-control" type="file"   wire:model.lazy="image" required="">
                            @error('image'){{ $message}}@enderror
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>  
            @endif
</main>