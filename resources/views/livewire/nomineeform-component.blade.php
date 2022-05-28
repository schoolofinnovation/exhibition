<form class=" mb-3"  wire:submit.prevent="sendMessage">
                  
                  
                  
                  
                  
                  
                  email
                  state
                  city
                  website
                  GST
                  price
                  
                  service_id
                  category_id

              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">Organization
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">promoter
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">ownership
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">addr
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">mobile
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">pincode
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">landline
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"  id="name" name="name" wire:model="name" required="">
                  @error('name')
                  <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>



                <div class="col-sm-6">
                  <label class="form-label" for="cf-email">Professional Email address:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="email"  placeholder="yourname@coi.com" id="email" name="email"  wire:model="email" required="">
                  @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="+1 (212) 00 000 000" id="phone" name="phone" wire:model="phone" required="">
                  @error('phone') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-subject">Industry:</label>
                  <select class="form-control" type="text"  wire:model="industry"   id="industry" name="industry" placeholder="Provide short title of your request">
                    <option selected>Please select</option>
                    <option value="professional_services">Professional Services</option>
                    <option value="Technology, Media & Telecom">Technology, Media & Telecom</option>
                    <option value="Logistics, Travel">Logistics, Travel</option>
                    <option value="consumer products & retail">Consumer Products & Retail</option>
                    <option value="consumer products & retail">Food & Bevearge</option>
                    <option value="consumer products & retail">Other</option>
                    </select>
                    @error('industry') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="col-sm-6">
                  <label class="form-label" for="department">Department:</label>
                  <select class="form-control" type="text"  wire:model="department" id="department" name="department" placeholder="Provide short title of your request">
                    <option selected>Please select</option>
                    <option value="strategy">Strategy</option>
                    <option value="Innovation_&_ew_business">Innovation & New business</option>
                    <option value="marketing & product">marketing & Product</option>
                    <option value="Learning & Development">Learning & Development</option>
                    <option value="Consultant_or self-employed ">Consultant or Self-employed</option>
                    <option value="student">student</option>
                    <option value="sustainability">sustainability</option>
                    </select>
                    @error('department') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                
                <div class="col-sm-6">
                  <label class="form-label" for="seniority">Seniority:</label>
                  <select class="form-control" type="text"   wire:model="seniority"  id="seniority" name="seniority" placeholder="Provide short title of your request">
                    <option selected>Please select</option>
                    <option value="Entry Level">Entry level</option>
                    <option value="Senior">Senior</option>
                    <option value="Manager">Manager</option>
                    <option value="Director">Director</option>
                    <option value="VP">VP</option>
                    <option value="CXO">CXO</option>
                    </select>
                    @error('seniority') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                

                <div class="col-12">
                  <label class="form-label" for="cf-message">More info:&nbsp;<span class="text-danger">*</span></label>
                  <textarea class="form-control"  rows="2" name="message" id="message" wire:model="message" placeholder="Please provide us with some context on your current challenge or your reason for reaching out." required=""></textarea>
                  
                  @error('message') <div class="invalid-feedback"> {{$message}} </div> @enderror
                  <div class="form-text text-dark opacity-60">
                  We are committed to protecting and respecting your privacy, and we’ll only use your personal data to provide the info requested from us. Review our Privacy Policy.
                  </div>
                  
                  
                </div>
                <button class="btn btn-primary mt-2" type="submit">Get in touch</button>
              </div>
            </form>
