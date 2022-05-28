        
            <aside class="col-lg-4 pe-xl-5">
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
              <!-- Actual menu-->
              <div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Account</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0">
                      <a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/speaker' == request()->path() ? 'active' : '' }}" href="{{route('employee.addPartner')}}"><i class="ci-settings opacity-60 me-2"></i>Profile  <small>list your agency</small> </a></li>
                    <li class="border-bottom mb-0 "><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/speaker' == request()->path() ? 'active' : '' }}" href="{{route('employee.addPartner')}}"><i class="ci-basket opacity-60 me-2"></i>Exhibition <span class="fs-sm text-muted ms-auto">@if($exhibition == '0') List Partner @else {{$exhibition->count()}} @endif</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/speaker' == request()->path() ? 'active' : '' }}" href="{{route('employee.addPartner')}}"><i class="ci-heart opacity-60 me-2"></i>Award show<span class="fs-sm text-muted ms-auto">List us</span></a></li>
                  </ul>
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/speaker' == request()->path() ? 'active' : '' }}" href="{{route('employee.addSpeaker')}}">
                        <i class="ci-dollar opacity-60 me-2"></i>Speaker<span class="fs-sm text-muted ms-auto"> @if($speaker == '0') List speaker @else {{$speaker->count()}} @endif</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/exhibitor' == request()->path() ? 'active' : '' }}" href="{{route('employee.addExhibitor')}}">
                        <i class="ci-package opacity-60 me-2"></i>Exhibitors<span class="fs-sm text-muted ms-auto">@if($speaker == '0') List Exhibitor @else {{$speaker->count()}} @endif</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/category' == request()->path() ? 'active' : '' }}" href="">
                        <i class="ci-cloud-upload opacity-60 me-2"></i>Category<span class="fs-sm text-muted ms-auto">@if($speaker == '0') List Category @else {{$speaker->count()}} @endif</span></a></li>
                    <li class="border-bottom mb-0 "><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/partner' == request()->path() ? 'active' : '' }}" href="{{route('employee.addPartner')}}"><i class="ci-currency-exchange opacity-60 me-2"></i>Partners<span class="fs-sm text-muted ms-auto">@if($speaker == '0') List Partner @else {{$speaker->count()}} @endif</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{'exhibitor/add/sponsership' == request()->path() ? 'active' : '' }}" href="{{route('employee.addSponsership')}}">
                        <i class="ci-sign-out opacity-60 me-2"></i>Sponsership<span class="fs-sm text-muted ms-auto">{{$sponsership->count()}}</span></a></li>
                  </ul>
                  <hr>
                </div>
              </div>
            </aside>