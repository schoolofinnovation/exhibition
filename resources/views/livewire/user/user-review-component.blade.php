 <main>
    <!-- Leave review form-->
    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
        <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
            <h3 class="h4 pb-2">Write a review</h3>
            
          <form class="needs-validation" wire:submit.prevent="add">
            <!--<div class="mb-3">
                <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                <input class="form-control" type="text" required="" id="review-name">
                <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
                <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                <input class="form-control" type="email" required="" id="review-email">
                <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
            </div>-->
            <div class="mb-3">
                <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                <select class="form-select" required=""  wire:model.lazy="rating">
                <option value="">Choose rating</option>
                <option value="5" >5 stars</option>
                <option value="4" >4 stars</option>
                <option value="3" >3 stars</option>
                <option value="2" >2 stars</option>
                <option value="1" >1 star</option>
                </select>
                @error('rating')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                <textarea class="form-control" rows="6" required="" id="review-text" wire:model.lazy="comment"></textarea>
                
                    @error('comment')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
            </form>
        </div>
    </div>
 </main>