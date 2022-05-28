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
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Message</th>
                  <th>Resume</th>
                  <th>Comments</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>

              @foreach ($jobs as $info)
                <tr>
                  
                  <td class="py-3 align-middle">{{$info->id}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->name}} 
                                                          </span> - <small>{{$info->created_at->format("d/F h:m")}} </small> </td>
                  <td class="py-3 align-middle">{{$info->email}}</td>
                  <td class="py-3 align-middle">{{$info->message}}</td>
                  <td class="py-3 align-middle">{{$info->resume}}</td>
                 
                  <td class="py-3 align-middle">
                    @if($info->status == 'new')
                    <span class="badge bg-success m-0">new</span>
                    @else
                    <span class="badge bg-danger m-0">old</span>
                    @endif
                    </td>

                  <td class="align-middle">
                  <a class=" nav-link-style "  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <i class=" bi bi-x"></i></a> </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div> 
          {{$jobs->links('pagination-links')}}
</main>