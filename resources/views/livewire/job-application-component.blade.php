<main>
           @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div> 
            @endif
            <div class="mx-auto py-lg-5" style="max-width: 35rem;">

           
          <h2 class="h3 mb-2 fw-bolder">We are hiring new talents</h2>
          @if($currentStep == 1)
            <p class="fs-sm text-muted pb-2">If you want to be part of our team please submit you CV using the form below:</p>

              <form class=" row g-4" wire:submit.prevent="add"  >   
                <div class="col-sm-6">
                  <input class="form-control" type="text" placeholder="Your name"  wire:model="name" >
                  <span class="text-danger">@error( 'name' ){{ $message}}@enderror</span>
                </div>
                
                <div class="col-sm-6">
                  <input class="form-control" type="email" placeholder="Your email"   wire:model="email" >
                  <span class="text-danger">@error( 'email' ){{ $message}}@enderror</span>
                </div>
                
                <div class="col-12">
                  <textarea class="form-control" rows="2" placeholder="describle your skills"  wire:model="message"  ></textarea>
                  <span class="text-danger">@error( 'message' ){{ $message}}@enderror</span>
                </div>
                
                <div class="col-12">
                  <input class="form-control" type="file" wire:model="resume"   >
                  <span class="text-danger">@error( 'resume' ){{ $message}}@enderror</span>
                </div>
                                     
                <div class="form-check  col-12">
                          <input class="form-check-input" type="checkbox" value="" id="terms">
                          <label class="form-check-label" for="flexCheckDefault">
                          You must agree with our <a href="#"> Terms & Conditions</a>
                          </label><br>
                          <span class="text-danger">@error( 'terms' ){{ $message}}@enderror</span>
                        </div>
                        @if($currentStep == 1 )
                <button class="btn col-12  btn-shadow text-light" type="submit" wire:click="decreaseStep()"  style="background-color:#ff0440;">Submit your CV</button>         
              @endif
              </form>
           @endif

          @if($currentStep == 2)
              hi enjoy your day, Thanks you applying, we are going through with your resquest. Once we 'll complete basic review process. You ll get an email from our respective Consultanat.
             
              <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 center " href="asset('/about-us')" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                 About us
              </button>
              @endif
            </div>
</main>