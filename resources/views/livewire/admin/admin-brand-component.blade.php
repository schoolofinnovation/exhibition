@section('page_title','Brand')

@section('page_description','Brand')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')

<main>
<div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Brand</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Brand</h1>
          </div>
        </div>
      </div>


      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">

          <!-- Sidebar-->
         @livewire('admin.admin-aside-component')


          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
              <div class="d-flex align-items-center">
                <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
                <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
                <select class="form-select" id="order-sort">
                  <option>All</option>
                  <option>Delivered</option>
                  <option>In Progress</option>
                  <option>Delayed</option>
                  <option>Canceled</option>
                </select>
              </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            <!-- Orders list-->
            <div class="table-responsive fs-md mb-4">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand <small>Est. year</small><br><small>Industry, Sector</small></th>
                    <th>Public's Contact</th>
                    <th>Brand's Contact</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($brands as $category)
                  <tr>

                    <td class="py-3">
                    <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                    {{$category->id}} </a></td>
                    <td class="py-3">{{$category->brand_name}} <span class="badge bg-danger m-0">{{$category->brand_est_year}}</span><br> <span class="badge bg-info m-0">{{$category->industry}}
                    </span><span class="badge bg-primary m-0">
                    {{$category->sector}}
                    </span></td>

                   
                    
                    <td class="py-3">{{$category->user_email}}<br>
                      <span class="badge bg-danger m-0">{{$category->user_contact}} </span></td>


                      <td class="py-3">{{$category->brand_head_name}}<span class="badge bg-danger m-0">{{$category->bh_contact}}</span>
                      <br><span class="badge bg-danger m-0">{{$category->bh_email}} </span></td>
                   
                    <td class="py-3">
                    @if($category->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                     @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                   <!-- <td class="py-3">
                      <input type="text" value="{{$category->status}}">
                    <select class="form-select" id="order-sort">
                  <option value="active">deactive</option>
                  <option value="deactive">active</option>
                </select>
                </td>-->

                  <td class="py-3 align-middle">
                  <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                
                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>

            <!-- Pagination-->           
            {{$brands->links('pagination-links')}}

          </section>
        </div>
      </div>
</main>