@section('page_title','Category')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' All Category')
@section('page_path',' Job')
@section('page_list',' addJob')

<main>
<div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="#">{{$categories->count()}} Industry</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#"> {{$sector->count()}} Sector</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$service->count()}} Business</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0"> Business Category</h1>
          </div>
        </div>
      </div>

     
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">

          <!-- Sidebar-->
         {{--@livewire('admin.admin-aside-component')--}}


         
          <!-- Content  -->
          <section class="col-lg-12 col-md-6">
           
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item"><a class="nav-link px-0 active" href="#group" data-bs-toggle="tab" role="tab">
                <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>Group</div>
                <div class="d-lg-none text-center"><i class="ci-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Franchise</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#category" data-bs-toggle="tab" role="tab">
                <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Category {{$categories->count()}}</div>
                <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#sector" data-bs-toggle="tab" role="tab">
                <div class="d-none d-lg-block"><i class="ci-bell opacity-60 me-2"></i>Sector {{$sector->count()}}</div>
                <div class="d-lg-none text-center"><i class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Social</span></div></a></li>
            <li class="nav-item"><a class="nav-link px-0" href="#business" data-bs-toggle="tab" role="tab">
                <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Business {{$service->count()}}</div>
                <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Team</span></div></a></li>   
       </ul>

        <!-- Tab content-->
        <div class="tab-content pt-2">

              <!-- category-->
              <div class="tab-pane fade show active" id="group" role="tabpanel">
                  <!-- Orders list-->
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Industry<span class="badge bg-danger">{{$catcount->count()}}</span></th>
                          <th>Sector<span class="badge bg-danger">{{$sector->count()}}</span></th>
                          <th>Business<span class="badge bg-danger">{{$service->count()}}</span></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        @foreach($categ as $category)
                          <tr>
                            <td class="py-3">
                            <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                            {{$category->id}} </a></td>

                            <td class="py-3">{{$category->industry}} 
                            
                            </td>

                            <td class="py-3">
                              @foreach($category->sector as $cat)
                              <span class="badge bg-success m-0">{{$cat->sector}}</span>
                              @endforeach
                            </td>

                            <td class="py-3">
                              @foreach($category->service as $cat)
                              <span class="badge bg-success m-0">{{$cat->business}}</span>
                              @endforeach
                            </td>       
                          
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- Pagination-->
                {{$categ->links('pagination-links')}}
              </div>

            <!--Sector-->
             <div class="tab-pane fade " id="sector" role="tabpanel">
                  <!-- Orders list-->
                  <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Sector</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($sectorr as $category)
                            <tr>
                              <td class="py-3">
                              <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                              {{$category->id}} </a></td>
                              <td class="py-3">{{$category->sector}} </td>
                              
                              <td class="py-3">
                                @if($category->status == 'active')
                                <span class="badge bg-success m-0">Active</span>
                                @else
                                <span class="badge bg-danger m-0">Deactive</span>
                                @endif
                              </td>

                              <td class=" py-3 align-middle">
                                <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                                <i class="bi bi-pencil"></i></a>
                                <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                <i class=" bi bi-x"></i></a>
                              </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- Pagination-->
               {{$sectorr->links('pagination-links')}}

             </div>

            <!-- business-->
            <div class="tab-pane fade" id="business" role="tabpanel">
                      <!-- Orders list-->
                    <div class="table-responsive fs-md mb-4">
                      <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Business   <span class="badge bg-danger"></span></th>
                             
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                        <tbody>
                          @foreach ($business as $category)
                            <tr>
                              <td class="py-3">
                              <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                              {{$category->id}} </a></td>
                              <td class="py-3">{{$category->business}} 
                              <span class="badge bg-danger"> 22 </span>
                              </td>
                              
                              <td class="py-3">
                              @if($category->status == 'active')
                              <span class="badge bg-success m-0">Active</span>
                              @else
                              <span class="badge bg-danger m-0">Deactive</span>
                              @endif
                              </td>

                              <td class=" py-3 align-middle">
                              <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                              <i class="bi bi-pencil"></i></a>
                              <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                              <i class=" bi bi-x"></i></a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- Pagination-->
            {{$business->links('pagination-links')}}

              </div>
         

          <!-- category-->
          <div class="tab-pane fade" id="category" role="tabpanel">
                      <!-- Orders list-->
                      <div class="table-responsive fs-md mb-4">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Industry   <span class="badge bg-danger"></span></th>
                             
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($categ as $category)
                            <tr>

                              <td class="py-3">
                              <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                              {{$category->id}} </a></td>
                              <td class="py-3">{{$category->industry}} 
                              <span class="badge bg-danger"> 22 </span>
                              </td>
                            
                            
                              
                              <td class="py-3">
                              @if($category->status == 'active')
                              <span class="badge bg-success m-0">Active</span>
                              @else
                              <span class="badge bg-danger m-0">Deactive</span>
                              @endif
                              </td>

                          
                            <td class=" py-3 align-middle">
                            <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                            <i class="bi bi-pencil"></i></a>

                            <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                <i class=" bi bi-x"></i></a> </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
          </div>
        </div>
            
          </section>
        </div>
      </div>
</main>