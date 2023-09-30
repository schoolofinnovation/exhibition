@section('page_title', ('Book your Space '.$findevent->eventname))
@section('page_description', ('Great Place To Exhibit '.$findevent->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in' .$findevent->city)

      
      
      <main>
        @if($board == 'business')
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

                
                  <form  wire:submit.prevent="add" >
                    <div class="mb-3">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      <div class="invalid-feedback">Please provide valid email address.</div>
                    </div>
                    <div class="mb-3">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      <div class="invalid-feedback">Please provide valid email address.</div>
                    </div>
                    <div class="mb-3">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                      <div class="invalid-feedback">Please provide valid phone.</div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </form>
              
              </div>


            </div>
          </div>
        @endif

        @if($board == 'ticket')
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">


            
              <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-2">Contact Details</h2>
                <!-- <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}} -->

                
                  <form  wire:submit.prevent="addTicket" >
                    <div class="mb-3">
                      <label class="form-label fs-xs " for="recover-email">Your Name</label>
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      <label class="fs-xs fw-light text-muted" for="recover-email">Easy to Approach</label>
                      <div class="invalid-feedback">Please provide name.</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label fs-xs " for="recover-email">Your email</label>
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      <label class="fs-xs fw-light text-muted" for="recover-email">To access the ticket(s) on other devices, Login with this E-mail</label>
                      <div class="invalid-feedback">Please provide valid email address.</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label fs-xs" for="recover-email">* Mobile Number</label>
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                      <label class="text-muted fw-light fs-xs" for="recover-email">Your Number will only be used for sending Details.</label>
                      <div class="invalid-feedback">Please provide valid phone.</div>
                    </div>


                    <!-- <button class="btn btn-primary" type="submit">Submit</button> -->

                    <div class="handheld-toolbar bg-secondary">
                      <div class="py-2 px-2">
                     
                        <button class="btn btn-primary btn-shadow d-block w-100 " type="submit">Submit</button>
                     
                      </div>
                    </div>
                  </form>
              
              </div>
            

            </div>
          </div>
        @endif

        @if($board == 'thankyou')
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">


            
              <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-2">Right Time, Right Place, Right People</h2>
                <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Thanks for sharing and let's make it happen </p>
                <ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2"></span>Thank you for your interest in the Exhibition</li>
                  <li><span class="text-primary me-2"></span>Our representative will be contacting you shortly to discuss your participation.</li>
                  <li><span class="text-primary me-2"></span>If you prefer, you can also proactively reach us at 9991856776</li>
                </ol>

                
                 
              
              </div>
            

            </div>
          </div>
        @endif
      </main>