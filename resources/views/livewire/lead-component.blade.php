<main>
    <section class="container col-lg-8 pt-lg-4 pb-4 mb-3 align-center">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">            
            <form wire:submit.prevent="add" enctype= "multipart/form-data">                
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-standard-price">Name</label>
                        <input class="form-control" type="text" wire:model.lazy="name">
                        @error('name')
                            <div class="form-text">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-product-name">e-mail </label>
                        <input class="form-control" type="email" wire:model.lazy="email">
                        @error('email')
                            <div class="form-text">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-product-name">City</label>
                        <input class="form-control" type="city" wire:model.lazy="city">
                        @error('city')
                            <div class="form-text">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="unp-product-name">Phone</label>
                        <input class="form-control" type="phone" wire:model.lazy="phone">
                        @error('phone')
                            <div class="form-text">{{$message}}</div>
                        @enderror
                    </div>

                    {{--<div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" checked wire:model.lazy="terms">
                        <label class="form-check-label" for="flexCheckChecked">
                        By clicking "submit" you agree to our Terms of Service.
                        </label>
                    </div>--}}

                    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>
        </div>
    </section>

    <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                  <h3 class="h4 pb-2">Write a review</h3>
                  <form class="needs-validation" method="post" novalidate="">
                    <div class="mb-3">
                      <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" required="" id="review-name">
                      <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                      <input class="form-control" type="email" required="" id="review-email">
                      <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                      <select class="form-select" required="" id="review-rating">
                        <option value="">Choose rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                      </select>
                      <div class="invalid-feedback">Please choose rating!</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                      <textarea class="form-control" rows="6" required="" id="review-text"></textarea>
                      <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-pros">Pros</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                    </div>
                    <div class="mb-3 mb-4">
                      <label class="form-label" for="review-cons">Cons</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                  </form>
                </div>
              </div>
</main>