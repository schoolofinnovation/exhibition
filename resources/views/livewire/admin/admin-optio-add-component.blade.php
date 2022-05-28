
@section('page_title',' Add Coupon')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')


    <main> 
    <div class="container">
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
            <a class="btn btn-primary" href="{{route ('admin.categories')}}" data-bs-toggle="modal">  All Coupon </a></div>
                @if (Session::has('message'))   
                <h6 class="fs-base text-light mb-0"> {{Session::get('message')}} </h6>
                @endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>

        <form wire:submit.prevent="add" >
          <div class="row">
            <div class="col-sm-4 mb-3 pb-2">
                <label class="form-label"> Name</label>
                <input class="form-control" type="text" wire:model.lazy="name">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="col-sm-4 mb-3 pb-2">
                <label class="form-label"> Content</label>
                <input class="form-control" type="text" wire:model.lazy="content">
                @error('content') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
            <button class="btn btn-primary d-block w-100" type="submit" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>Submit</button>
          </div>
        </form>
    </div>
    </main>