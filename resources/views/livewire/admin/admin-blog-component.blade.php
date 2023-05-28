@section('page_title','Write-a-blog')
@section('page_description','')
@section('page_keywords', '')


  <main> 
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

    <div class="container py-4">
      @if($board == 'addBlog')
        <form wire:submit.prevent="add" >
              <div class="row">
                <div class="col-sm-4 ">
                  <label class="form-label" >Blog tittle</label>
                  <textarea class="form-control" type="text" row="2" wire:model="tittle"  wire:keyup="generateSlug"> </textarea>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" >Short Desc</label>
                    <textarea class="form-control" type="text"  row="3" wire:model.lazy="s_desc"></textarea>
                    <div class="form-text"></div>
                </div>
            
                <div class="col-sm-4">
                  <label class="form-label" >Desc</label>
                  <textarea class="form-control" type="text"  row="5" wire:model.lazy="desc"></textarea>
                  <div class="form-text"></div>
                </div>
                <div class="col-sm-4">
                <button class="btn btn-primary d-block w-70" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                Post</button>
                </div>
            
              </div>
        </form>
      @endif


      @if($formm == 'image')
          <form  wire:submit.prevent="dateImage">
                  <div class="col-sm-2">
                      <label class="form-label" for="cf-name">Image</label>
                      <input class="form-control" type="file"   wire:model.lazy="image" required=""></textarea>
                      @error('image'){{ $message}}@enderror
                  </div>
                  <button class="btn btn-primary mt-2" type="submit">Submit</button>
          </form>  
      @endif
      
    </div>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Blog</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost')}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
    

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
          
  </main>

