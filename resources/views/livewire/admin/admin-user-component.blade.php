@section('page_title','User')

@section('page_description','Job')
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
                <li class="breadcrumb-item text-nowrap"><a href="#">admin</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Users</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Users</h1>
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
                    <th>Name </th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                @if($user->email_verified_at == 'null')
                  <tr class="bg-primary">
                  
                    <td class="py-3">
                    <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                    {{$user->id}} </a></td>
                    <td class="py-3">{{$user->name}}<br> <span class="badge bg-info m-0">{{$user->email}}</span></td>
                    <td class="py-3">{{$user->utype}}</td>

                    <td class="py-3">
                      
                   <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="active" data-off="Inactive" {{$user->status ? 'checked' : ''}}>
                    </td>

                
                  <td class="py-3 align-middle">
                  <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$category->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                 

                  </tr>

                  @else

                 <tr class="bg-light">
                  
                    <td class="py-3">
                    <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                    {{$user->id}} </a></td>
                    <td class="py-3">{{$user->name}}<br> <span class="badge bg-info m-0">{{$user->email}}</span></td>
                    <td class="py-3">{{$user->utype}}</td>
                    <td class="py-3">

                    <div class="col-sm-3 mb-3">
                    <label class="form-label" >Status</label>
                    <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                    <select class="form-control" wire:model="status">
                      <option value="0" >Inactive</option>
                      <option value="1">Active</option>
                    </select>
                    </div>
                    
                  </div>
                  
                    @if($user->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                    @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                
                  <td class="py-3 align-middle">
                  <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{$user->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                 

                  </tr>
                  @endif
                  @endforeach

                  
                  
                </tbody>
              </table>
            </div>


            <!-- Pagination-->
           
            {{$users->links('pagination-links')}}

          </section>
        </div>
      </div>
</main>

@push('scripts')
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#member-table').DataTable()
                    });
                    $(function(){
                      $('toggle-class').change(function(){
                        var status = $(this).prop('checked') == true ? 1 : 0;
                        var user_id = $(this).data('id');
                        
                       });
                    });
                </script>
            @endpush