@section('page_title','Add Job')
@section('page_path',' addjob')
@section('page_list',' addjob')
@section('page_name',' Add Job')

         <main> 

      <!-- Toolbar-->
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
          <a class="btn btn-primary" href="{{route ('admin.job')}}" data-bs-toggle="modal">  All Posted Job </a></div>
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
          </div>

              <form wire:submit.prevent="add" >
                <div class="row">
                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Title</label>
                  <input class="form-control" type="text" wire:model="title"  >
                  <div class="form-text"></div>
                </div>

                
                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Skills</label>
                  <input class="form-control" type="text" wire:model="skills"  >
                  <div class="form-text"></div>
                </div>
                
               
                <div class="col-sm-3 mb-3">
                    <label class="form-label">Level</label>
                    <div class="input-group"><span class="input-group-text"><i class=" bi bi-dollar"></i></span>
                    <select class="form-control" wire:model="level">
                    <option value="Management">Management </option>
                      <option value="Corporate">Corporate </option>
                      <option value="Junior">Junior </option>
                      <option value="Senior">Senior</option>
                    </select>
                    </div>
                  </div>


                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Requirement</label>
                  <input class="form-control" type="text" wire:model="requirement"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Qualification</label>
                  <input class="form-control" type="text" wire:model="qualification"  >
                  <div class="form-text"></div>
                </div>

                

                <div class="col-sm-3  mb-3">
                    <label class="form-label">Department</label>
                    <div class="input-group">
                    <select class="form-control" wire:model="department">
                    <option value="Business Development">Business Development</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Branding">Branding </option>
                      <option value="Operation">Operation</option>
                      <option value="Corporate">Corporate</option>
                      <option value="Management">Management</option>
                    </select>
                    </div>
                  </div>
              
                <div class="col-sm-3 mb-3">
                    <label class="form-label" >Country</label>
                    <div class="input-group"><span class="input-group-text"><i class=" bi bi-dollar"></i></span>
                    <select class="form-control" wire:model="location_country">
                    <option value="India">India </option>
                      <option value="Switzerland">Switzerland </option>
                      <option value="Canada">Canada </option>
                    </select>
                    </div>
                  </div>

                <div class="col-sm-3 mb-3">
                    <label class="form-label" >State</label>
                    <div class="input-group"><span class="input-group-text"><i class=" bi bi-dollar"></i></span>
                    <select class="form-control" wire:model="location_state">
                    <option value="Gurgaon">Gurgaon</option>
                      <option value="Geneva">Geneva</option>
                      <option value="Fort Qu Appelle">Fort Qu'Appelle</option>
                    </select>
                    </div>
                  </div>

                <div class="col-sm-3 mb-3">
                    <label class="form-label" >Experience</label>
                    <div class="input-group"><span class="input-group-text"><i class=" bi bi-dollar"></i></span>
                    <select class="form-control" wire:model="experience">
                    <option value="0-2">0-2 years</option>
                      <option value="2-5">2-5 years</option>
                      <option value="5-7">5-7 years</option>
                      <option value="7-12">7-12 years</option>
                    </select>
                    </div>
                  </div>

                <div class="col-sm-3 mb-3">
                    <label class="form-label" >Type</label>
                    <div class="input-group"><span class="input-group-text"><i class=" bi bi-dollar"></i></span>
                    <select class="form-control" wire:model="type">
                    <option value="temporary" >Temporary</option>
                      <option value="freelancer" >Freelancer</option>
                      <option value="full-time">Full Time</option>
                      <option value="permanent">Permanent</option>
                    </select>
                    </div>
                    
                  </div>

                  <div class="col-sm-3 mb-3">
                    <label class="form-label" >Status</label>
                    <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <select class="form-control" wire:model="status">
                      <option value="deactive" >Inactive</option>
                      <option value="active">Active</option>
                    </select>
                    </div>
                  </div>
                  
                  <div class="col-sm-4  col-md-4 mb-3 pb-2">
                  <label class="form-label" >Description</label>
                  <input class="form-control" type="text" wire:model="description"  >
                  <div class="form-text"></div>
                </div>
                  

                <button class="btn btn-primary d-block w-100" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                Entity Submit</button>
              

            </div>
            </div>
            </form>

