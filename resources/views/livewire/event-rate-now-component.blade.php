<main>
    <div class="container">
    <form wire:submit.prevent="add">
        <!-- Title-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">How was the experience?</h2>
            
        </div>
            <div class="py-2"> 
                 <div class=" row justify-content-end">
                    <div>0</div>
                    <div>10</div>
                
                </div>
                <input type="range" class="form-range" min="0" max="10" step="1" id="customRange3" wire:model.lazy="rate">
                
                @error('rate')
                <div class="form-text">Which Edition going to be organised?</div>
                <div class="form-text">{{$message}}</div>
                @enderror
            </div>
        
            
        @if(!is_null($rate))
            <div class="col-sm-2 mb-3">
                <label class="form-label" for="unp-standard-price">What do you think about business learning?
                     <span class="text-muted">Express yourself with hashtags!</span></label>
                     @json($hasttag)
                <div class="input-group">

                @foreach ($hashtag as $hhtag)
                <input class="form-control" type="checkbox" value="{{$hhtag->id}}" wire:model.lazy="hasttag" multiple>
                <span class="badge badge-secondary bg-primary">#{{$hhtag->hastag}}</span>
                @endforeach

                </div>
                
            </div>

           
            <div class=" col-sm-10 mb-3 pb-2">
                <label class="form-label" for="unp-product-name">Express more, write a review <span class="text-muted">(optional)</span></label>
                <textarea class="form-control" type="text" wire:model.lazy="opinion" row="3"></textarea>
                <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                @error('opinion')
                <div class="form-text">{{$message}}</div>
                @enderror
            </div>
                
        @endif
    

        <button class="btn btn-primary d-block w-100" type="submit">Submit</button>
    </form>
    </div>
</main>