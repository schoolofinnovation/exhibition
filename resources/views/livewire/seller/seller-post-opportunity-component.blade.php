 <!--create a  table  with social media, address table, contant with designation name number,--> 

 <div class="container">
           
                
            <form wire:submit.prevent="add">
                <div class="row g-1 border-bottom">
                    <div class="col-sm-3 mb-2 pb-2">
                        <label class="form-label" >Company Name:</label>
                        <input class="form-control" type="text" wire:model.lazy="co_name" wire:keyup="generateSlug" >
                        <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                    </div>

                    <div class="col-sm-3 mb-2 pb-2">
                        <label class="form-label" >Official website</label>
                        <input class="form-control" type="text" wire:model.lazy="co_name">
                        <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                    </div>

                    <div class="col-sm-3 mb-2 pb-2">
                        <label class="form-label" >Founded In</label>
                        <input class="form-control" type="text" wire:model.lazy="co_name">
                        <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                    </div>

                    <div class="col-sm-3 mb-2 pb-2">
                        <label class="form-label" >Level(startup)</label>
                        <input class="form-control" type="text" wire:model.lazy="co_name">
                        <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                    </div>

                    

                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" ># Employee</label>
                        <input class="form-control" type="text" wire:model.lazy="co_name">
                        <span class="text-danger">@error( 'co_name' ){{ $message}}@enderror</span>
                    </div>

                    <div class="col-sm-4 mb-2 pb-2">
                        <label class="form-label" >GSTIN:</label>
                        <input class="form-control" type="text" wire:model.lazy="gstin">
                        <span class="text-danger">@error( 'gstin' ){{ $message}}@enderror</span>
                    </div>

                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Industry:</label>
                        <input class="form-control" type="text" wire:model.lazy="industry">
                        <span class="text-danger">@error( 'gstin' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Sector:</label>
                        <input class="form-control" type="text" wire:model.lazy="industry">
                        <span class="text-danger">@error( 'gstin' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Service:</label>
                        <input class="form-control" type="text" wire:model.lazy="industry">
                        <span class="text-danger">@error( 'gstin' ){{ $message}}@enderror</span>
                    </div>

                    
                </div>

                
            
                <label class="form-label" >Address: <small> Don't have Regsitered Office?</small></label>
                <div class="row g-1 border-bottom">
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Type of office:</label>
                        <input class="form-control" type="text" wire:model.lazy="line1">
                        <span class="text-danger">@error( 'line1' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-4 mb-2 pb-2">
                        <label class="form-label" >Line1:</label>
                        <input class="form-control" type="text" wire:model.lazy="line1">
                        <span class="text-danger">@error( 'line1' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >City:</label>
                        <input class="form-control" type="text" wire:model.lazy="city">
                        <span class="text-danger">@error( 'city' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Province:</label>
                        <input class="form-control" type="text" wire:model.lazy="province">
                        <span class="text-danger">@error( 'province' ){{ $message}}@enderror</span>
                    </div>
                    <div class="col-sm-2 mb-2 pb-2">
                        <label class="form-label" >Pincode:</label>
                        <input class="form-control" type="text" wire:model.lazy="pincode">
                        <span class="text-danger">@error( 'pincode' ){{ $message}}@enderror</span>
                    </div>
                </div>

                <label class="form-label" >Founder: <small> Founder is Ceo?</small></label>
                <div class="row border-bottom">
                    
                    <div class="row g-1">
                        <div class="col-sm-2 mb-2 pb-2">
                            <label class="form-label" >Designation:</label>
                            <input class="form-control" type="text" wire:model.lazy="name">
                            <span class="text-danger">@error( 'name' ){{ $message}}@enderror</span>
                        </div>
                        <div class="col-sm-2 mb-2 pb-2">
                            <label class="form-label" >Name:</label>
                            <input class="form-control" type="text" wire:model.lazy="name">
                            <span class="text-danger">@error( 'name' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-3 mb-2 pb-2">
                            <label class="form-label" >e-mail</label>
                            <input class="form-control" type="text" wire:model.lazy="email">
                            <span class="text-danger">@error( 'email' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-2 mb-2 pb-2">
                            <label class="form-label" >contact:</label>
                            <input class="form-control" type="text" wire:model.lazy="contact">
                            <span class="text-danger">@error( 'contact' ){{ $message}}@enderror</span>
                        </div>

                        <div class="col-sm-3 mb-2 pb-2">
                            <label class="form-label" >Link:</label>
                            <input class="form-control" type="text" wire:model.lazy="link">
                            <span class="text-danger">@error( 'link' ){{ $message}}@enderror</span>
                        </div>
                    </div>
                    
                </div>
                <button  class="btn btn-primary" type="submit">Submit</button>
            </form>


            <div class="col-sm-4 mb-2 pb-2">
                        <label class="form-label" >Logo</label>
                        <input class="form-control" type="file" wire:model.lazy="co_logo"  >
                        <span class="text-danger">@error( 'co_logo' ){{ $message}}@enderror</span>
                    </div>
</div>
