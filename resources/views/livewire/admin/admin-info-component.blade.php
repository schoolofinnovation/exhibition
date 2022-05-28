@section('page_title','Info')
@section('page_path',' Info')
@section('page_list',' addInfo')
@section('page_name',' All Info')

<main> 
 <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
          <a class="btn btn-primary" href="{{route ('admin.infoadd')}}" data-bs-toggle="modal">Add Entity </a>          
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
                  <th>Entity:Created at</th>
                  <th>Email:Use</th>
                  <th>Phone:Use</th>
                  <th>Address:Use</th>
                  <th>Location:country</th>
                  <th>Social</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              @foreach ($infos as $info)
                <tr>
                  
                  <td class="py-3 align-middle">{{$info->id}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->name}}<br>{{$info->updated_at}}</span></td>
                  <td class="py-3 align-middle">{{$info->email}}<br>{{$info->type_email}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge  ms-2">{{$info->address}}<br>{{$info->type_address}}</span></td>
                  <td class="py-3 align-middle">{{$info->phone}}<br>{{$info->type_phone}}</td>
                  <td class="py-3 align-middle">{{$info->location}} , {{$info->country}}<br>{{$info->map}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->twiter}}<br>{{$info->facebook}}<br>{{$info->pinterest}}<br>{{$info->instagram}}<br>{{$info->youtube}}</span></td>
                  <td class="py-3">
                    @if($info->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                    @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                  <td class="py-3 align-middle">
                  <a class="nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="btn nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div> 
          {{$infos->links('pagination-links')}}
</main>