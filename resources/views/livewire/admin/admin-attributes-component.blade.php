<div class="table-responsive fs-md mb-4">
                  <table class="table table-hover mb-0">
                          <thead>
                            <tr> <th>#</th>
                              <th>Name</th>
                              <th>Created At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--<tr>
                              <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                              <td class="py-3">09/27/2019 | 09/30/2019</td>
                              <td class="py-3">Website problem</td>
                              <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                              <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                            </tr>--> 
                          
                @foreach($fattributes as $info)
                  <tr>
                  <td class="py-3 align-middle">{{$info->id}}</td>
                  <td class="py-3 align-middle">{{$info->name}}<span class="align-middle badge bg-info ms-2"> 
                                            </span><small> </small> </td>
                  <td class="py-3 align-middle">{{$info->created_at}}</td>          
                  <td class="align-middle">
                  <a class="nav-link-style"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit" href="{{route('admin.editattributes',['attribute_id'=>$info->id])}}">
                  <i class="bi bi-pencil"></i></a>
                  <a class="nav-link-style text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <i class=" bi bi-x"></i></a> </td>
                                </tr>
                              @endforeach          
                          
                          </tbody>
                  </table>
                  {{$fattributes->links('pagination-links')}}
                </div>