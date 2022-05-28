


@if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div> @endif
<form wire:submit.prevent="qrcodegenerate">
             <div class="col-sm-6">
                  <label class="form-label" for="cf-name">Type
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  placeholder="Your Name"   wire:model="type" required="">
                 
                  @error( 'type' ){{ $message}}@enderror
              </div>

              <div class="col-sm-6">
                  <label class="form-label" for="cf-name">expire
                  <span class="text-danger">*</span></label>
                  <input class="form-control" type="date"  placeholder="expire date"    wire:model="expire" required="">
                 
                  @error( 'expire' ){{ $message}}@enderror
                </div>

            <div class="col-sm-6">
                <label class="form-label" for="cf-name">Link
                <span class="text-danger">*</span></label>
                <input class="form-control" type="text"  placeholder="Your link"   wire:model="link" required="">
               
                @error( 'link' ){{ $message}}@enderror
            </div>

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
</form>
{{$qr}}

<div class=" container m-5 p-5">

</div>