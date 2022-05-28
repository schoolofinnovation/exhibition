@section('page_title','Contact')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' All Contact')
@section('page_path',' Contact')
@section('page_list',' addContact')

        
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
              </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href=""><i class="ci-sign-out me-2"></i>Sign out</a>
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
                    <th>Request by </th>
                    <th>Message</th>
                    <th>Response</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)
                  <tr>

                    <td class="py-3">
                    <a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">
                    {{$contact->id}} </a></td>
                    <td class="py-3">{{$contact->name}} - <small>{{$contact->created_at->format("d/F h:m")}} </small> <br> <span class="badge bg-info m-0">{{$contact->email}} - {{$contact->phone}}</span></td>
                    <td class="py-3">{{$contact->message}} <br>
                    <small>{{$contact->industry}} > {{$contact->seniority}} > {{$contact->department}}</small>
                    </td>
                    <td class="py-3">
                    @if($contact->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                    @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                
                  <td class=" align-middle">
                  <a class=" bg-secondary nav-link-style"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>
                  <a class=" bg-dark nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this contact?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteContact({{$contact->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                  <i class=" bi bi-x"></i></a> 
                  
                  </td>


                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Pagination-->           
            {{$contacts->links('pagination-links')}}
