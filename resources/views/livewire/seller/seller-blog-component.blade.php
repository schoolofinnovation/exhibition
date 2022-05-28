@section('page_title','post blog')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' Post your News, Blog Artciles')
@section('page_path',' Job')
@section('page_list',' addJob')


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
                  <label class="form-label" >Blog tittle</label>
                  <input class="form-control" type="text" wire:model="tittle"  wire:keyup="generateSlug">
                  <div class="form-text">{{$slug}}</div>
                  
                </div>

                <div class="col-sm-8 mb-3">
                    <label class="form-label" >Category</label>
                    <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <select class="form-control" wire:model="cag_id">
                        @foreach ($category as $cat)
                      <option value="{{$cat->id}}" >{{$cat->sector}}</option>
                        @endforeach
                      
                    </select>
                    </div>
                    <div class="form-text"></div>
                  </div>

                <!--<div class="col-sm-4 mb-3 pb-2">
                  <label class="form-label" >Tag</label>
                  <select class="form-control" wire:model="tag">
                        @foreach ($category as $cat)
                      <option value="{{$cat->tag}}"> {{$cat->category}}</option>
                        @endforeach
                    </select>
                      
                  <div class="form-text"></div>
                </div>-->

                <div class="col-sm-6 mb-3 pb-2">
                <label class="form-label" >Short Desc</label>
                  <textarea class="form-control" type="text" wire:model="s_desc"></textarea>
                  <div class="form-text"></div>
                </div>
               

                <div class="col-sm-6 mb-3 pb-2">
                  <label class="form-label" >Desc</label>
                  <textarea class="form-control" type="text" wire:model="desc"></textarea>
                  <div class="form-text"></div>
                </div>

                <div class="col-sm-6 mb-3 pb-2">
                  <label class="form-label" >upload image</label>
                  <input class="form-control" type="file" wire:model="desc"></input>
                  <div class="form-text"></div>
                </div>
                

                <button class="btn btn-primary d-block w-100" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                Post</button>
              

            </div>
            </div>
            </form>

