
<main>


    <div class="container my-5 py-5">
        
        <a class="btn btn-sm btn-outline-primary" href="{{route('admin.dashboard')}}"> Dashboard</a>
        <h1 class="">Create Attribute for business opportunities...</h1>  
          <form wire:submit.prevent="add">
           
                <div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Name</label>
                  <input class="form-control" type="text" wire:model="name">   
                  @error('name') <p class="text-danger">{{$message}}</p> @enderror 
                </div>
               
            <button class="btn btn-primary d-block w-25" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>Submit</button>
            
          </form>
          </div>
</main>