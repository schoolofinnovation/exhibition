<main>

 @if($board == 'birthday')
    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0 align-center">
        <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
        <h3 class="h4 pb-2">Your Day</h3
            <form class="needs-validation" wire:submit.prevent="birthdadd" >
            <div class="mb-3">
                <label class="form-label" for="review-name">Date<span class="text-danger">*</span></label>
                <input class="form-control" type="date" required="" wire:model.lazy="Bdate" >
                @error('name')    
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Nominate your Expertise</button>
            </form>
        </div>
    </div>
 @endif

 @if($board == 'aniversary')
    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0 align-center">
        <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
        <h3 class="h4 pb-2">Your Day</h3
            <form class="needs-validation" wire:submit.prevent="anydadd" >
            <div class="mb-3">
                <label class="form-label" for="review-name">Date<span class="text-danger">*</span></label>
                <input class="form-control" type="date" required="" wire:model.lazy="Adate" >
                @error('name')    
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Nominate your Expertise</button>
            </form>
        </div>
    </div>
 @endif


 @if($board == 'Thankyou')
 <div class="container">
    Thank you
 </div>
@endif
</main>


