<main>

<form  wire:submit.prevent="add">
                  
                  <div class="mb-3">
                    <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                    <select class="form-select" required=""  name="rating" wire:model="rating">
                      <option value="">Choose rating</option>
                      <option value="5">5 stars</option>
                      <option value="4">4 stars</option>
                      <option value="3">3 stars</option>
                      <option value="2">2 stars</option>
                      <option value="1">1 star</option>
                    </select>
                    <error class="invalid-feedback">Please choose rating!</error>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="3" required=""  type="text" name="comment" wire:model="comment"></textarea>
                    <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                  </div>

                  <!--<div class="mb-3">
                    <label class="form-label" for="review-pros">Pros</label>
                    <textarea class="form-control" rows="2" placeholder="Separated by commas" type="text"  name="pros" wire:model="pros"></textarea>
                  </div>

                  <div class="mb-3 mb-4">
                    <label class="form-label" for="review-cons">Cons</label>
                    <textarea class="form-control" rows="2" placeholder="Separated by commas" type="text"  name="cons" wire:model="cons"></textarea>
                  </div>-->
                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                </form>
</main>