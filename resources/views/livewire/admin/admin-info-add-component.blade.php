@section('page_title','Add brand')
@section('page_path',' addbrand')
@section('page_list',' addbrand')
@section('page_name',' Add Brand')

         <main> 

      <!-- Toolbar-->
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
          <a class="btn btn-primary" href="{{route ('admin.info')}}" data-bs-toggle="modal">  All Brand </a></div>
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
                  <label class="form-label" >Entity Name</label>
                  <input class="form-control" type="text" wire:model="name"  >
                  <div class="form-text"></div>
                </div>

                

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Location</label>
                  <input class="form-control" type="text" wire:model="location"  >
                  <div class="form-text"></div>
                </div>


                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Map</label>
                  <input class="form-control" type="text" wire:model="map"  >
                  <div class="form-text"></div>
                </div>
                
                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Country</label>
                  <input class="form-control" type="text" wire:model="country"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >type_Email</label>
                  <input class="form-control" type="text" wire:model="type_email"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Email</label>
                  <input class="form-control" type="text" wire:model="email"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Address_type</label>
                  <input class="form-control" type="text" wire:model="type_address"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Address</label>
                  <input class="form-control" type="text" wire:model="address"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Phone_type</label>
                  <input class="form-control" type="text" wire:model="type_phone"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Phone</label>
                  <input class="form-control" type="text" wire:model="phone"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Facebook</label>
                  <input class="form-control" type="text" wire:model="facebook"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Twitter</label>
                  <input class="form-control" type="text" wire:model="twiter"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Instagram</label>
                  <input class="form-control" type="text" wire:model="instagram"  >
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Youtube</label>
                  <input class="form-control" type="text" wire:model="youtube"  >
                  <div class="form-text"></div>
                </div>

                  <div class="col-sm-3 mb-3">
                    <label class="form-label" >Status</label>
                    <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <select class="form-control" wire:model="status">
                      <option value="0" >Inactive</option>
                      <option value="1">Active</option>
                    </select>
                    </div>
                    <div class="form-text"></div>
                  </div>
                  
                  

                <button class="btn btn-primary d-block w-100" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                Entity Submit</button>
              

            </div>
            </div>
            </form>

