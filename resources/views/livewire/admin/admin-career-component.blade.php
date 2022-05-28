@section('page_title','Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<main> 
 <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
          <a class="btn btn-primary" href="{{route('admin.jobadd')}}" data-bs-toggle="modal">Add New Job Post </a>          
          </div>
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
          </div>

          <div class="table-responsive fs-md mb-4">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>title:slug:type</th>
                  <th>skills:level</th>
                  <th>desc:req</th>
                  <th>qual:exp.</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>

              @foreach ($jobs as $info)
                <tr>
                  
                  <td class="py-3 align-middle">{{$info->id}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}} , {{$info->department}}<br>{{$info->experience}} 
                                                            , {{$info->type}}<br>
                                                            {{$info->location_state}} , {{$info->location_country}}</span></td>
                  <td class="py-3 align-middle">{{$info->skills}}<br>{{$info->level}}</td>
                  <td class="py-3 align-middle">{{$info->description}}<br>{{$info->requirement}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                 
                  
                  
                  <td class="py-3 align-middle">
                    @if($info->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                    @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                  <td class="py-3 align-middle">
                  <a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div> 
          {{$jobs->links('pagination-links')}}
</main>