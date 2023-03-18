@section('page_title','post blog')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')

@section('page_name',' Post your News, Blog Artciles')
@section('page_path',' Job')
@section('page_list',' addJob')

  <main> 
    <div class="container">
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end"><a class="btn btn-primary" href="{{route ('admin.info')}}" data-bs-toggle="modal">  All Brand </a></div>
            @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>

        <h2>Post your News, Blog Artciles</h2>
          <form wire:submit.prevent="add" >
            <div class="row">

              <div class="col-sm-3 mb-3 pb-2">
                <label class="form-label" >Title</label>
                <input class="form-control" type="text" wire:model="tittle"  wire:keyup="generateSlug">
                @error('tittle')
                <div class="form-text alert alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="col-sm-3 mb-3">
                  <label class="form-label">Category</label>
                  <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <select class="form-control" wire:model.lazy="cag_id">
                    <option>Choose ...</option>
                        @foreach ($category_type as $cat)
                          <option value="{{$cat->id}}" >{{$cat->category}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-text">Choose business Industry</div>
                  @error('cag_id')
                  <div class="form-text alert alert-danger">{{$message}}</div>
                  @enderror
              </div>

              <div class="col-sm-3 mb-3">
                  <label class="form-label"> Sub Category</label>
                    <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                      <select class="form-control" wire:model.lazy="tag">
                        <option>Choose ...</option>
                          @foreach ($subcategory as $cat)
                            <option value="{{$cat->sector}}">{{$cat->sector}}</option>
                          @endforeach
                      </select>
                    </div>
                  <div class="form-text">Choose business Industry</div>
                  @error('tag')
                   <div class="form-text alert alert-danger">{{$message}}</div>
                  @enderror
              </div>

              {{--<div class="col-sm-3 mb-3 pb-2">
                <label class="form-label" >Tag</label>
                <select class="form-control" wire:model="tag">
                      @foreach ($category as $cat)
                          <option value="{{$cat->tag}}"> {{$cat->category}}</option>
                      @endforeach
                  </select>
                    
                <div class="form-text">Choose Category</div>
              </div>--}}

              <div class="col-sm-6 mb-3 pb-2">
                <label class="form-label" >Short Description</label>
                <textarea class="form-control" type="text" wire:model.lazy="s_desc"></textarea>
                <div class="form-text"> </div>
                @error('s_desc')
                   <div class="form-text alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            

              <div class="col-sm-6 mb-3 pb-2">
                <label class="form-label">Description</label>
                <textarea class="form-control" type="text" wire:model.lazy="desc"></textarea>
                <div class="form-text"></div>
                @error('desc')
                   <div class="form-text alert alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="col-sm-6 mb-3 pb-2">
                <label class="form-label" >upload image</label>
                <input class="form-control" type="file" wire:model="image"></input>
                <div class="form-text"></div>
                  @error('image')
                   <div class="form-text alert alert-danger">{{$message}}</div>
                  @enderror
              </div>
            
              <button class="btn btn-primary d-block w-40" type="submit"><i class="bi bi-cloud-upload fs-lg me-2"></i>Submit</button>
          
            </div>
          </form>
    </div>
  </main>
