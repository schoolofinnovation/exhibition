<main>
    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0 align-center">
    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
        {{--<h3 class="h4 pb-2">Write a review</h3>--}}
        <form class="needs-validation" wire:submit.prevent="add" enctype= "multipart/form-data">
        <div class="mb-3">
            <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
            <input class="form-control" type="text" required="" wire:model.lazy="name" >
            @error('name')    
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
            <input class="form-control" type="email" required="" wire:model.lazy="email">
            @error('email')    
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        
        <div class="mb-3">
            <label class="form-label" for="review-pros">Phone<span class="text-danger">*</span></label>
            <input class="form-control" type="number" required="" wire:model.lazy="phone">
            @error('phone')    
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3 mb-4">
            <label class="form-label" for="review-cons">City<span class="text-danger">*</span></label>
            <input class="form-control" type="city" required="" wire:model.lazy="city">
            @error('city')    
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Nominate your Expertise</button>
        </form>
    </div>
    </div>
</main>