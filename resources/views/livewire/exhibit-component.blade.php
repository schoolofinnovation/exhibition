<div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <h2 class="h3 mb-2">Exhibit with us.</h2>
            <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
            {{--<ol class="list-unstyled fs-md">
              <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
              <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
              <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
            </ol>--}}

            <div class="card py-2 mt-4">
              <form class="card-body needs-validation" wire:submit.prevent="add" >
                <div class="mb-3">
                  <label class="form-label" for="recover-email">Enter your email address</label>
                  <input class="form-control" type="email"  wire:model.lazy="email" required="">
                  <div class="invalid-feedback">Please provide valid email address.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="recover-email">Enter your phone</label>
                  <input class="form-control" type="phone"  wire:model.lazy="phone" required="">
                  <div class="invalid-feedback">Please provide valid phone.</div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>