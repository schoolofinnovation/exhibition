<div class=" pt-1 px-1 ps-lg-0 pe-xl-5  ">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li class="nav-item"><a class="nav-link px-0 active" href="#brand" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class=" bi bi-user opacity-60 me-2"></i>My Brand <br><small>List your Brand</small></div>
                          <div class="d-lg-none text-center"><i class=" bi bi-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Brand</span></div></a></li>
                      <li class="nav-item"><a class="nav-link px-0" href="#expo" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class=" bi bi-bell opacity-60 me-2"></i>Expo | Awards <br><small>List your Exhibition</small></div>
                          <div class="d-lg-none text-center"><i class=" bi bi-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Expo</span></div></a></li>
                      <li class="nav-item"><a class="nav-link px-0" href="#social" data-bs-toggle="tab" role="tab">
                          <div class="d-none d-lg-block"><i class=" bi bi-card opacity-60 me-2"></i>Macro Expo<br><small>Attendee</small></div>
                          <div class="d-lg-none text-center"><i class=" bi bi-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
                    </ul>
                </div>
                
                <div class="">
                </div>

                <div class="tab-content text-muted fs-sm">
                  <div class="row pt-2 tab-pane fade show active" id="brand" role="tabpanel">
                      <div class=""><span class="badge bg-danger p-1">Your Preferences</span>
                      <a href="{{asset('/')}}"> <i class="bi bi-pencil opacity-60 me-2"></i></a></div>
                      <div class="row pt-2">
                          @foreach($brand as $user)
                            <!-- Product-->
                            <div class="col-sm-2 mb-grid-gutter">
                                <div class=" rounded-circle flex-shrink-0" style="width: 6.375rem;">
                                      <img class="rounded-circle"src="{{url('Storage/brands/'.$user->image)}}" alt="Createx Studio" href="{{route('franchise.details',['slug' => $user->slug])}}">
                                </div>
                            </div>
                          @endforeach
                      </div>
                  
                    <div class=""><span class="badge bg-danger p-1">Recommended Brand</span><a href="{{asset('/')}}"> <i class="bi bi-pencil opacity-60 me-2"></i></a></div> 
                      <div class="row pt-2" >
                          @foreach($maxinves as $user)
                            <!-- Product-->
                            <div class="col-sm-2 mb-grid-gutter">
                                <div class=" rounded-circle flex-shrink-0" style="width: 6.375rem;">
                                      <img class="rounded-circle"src="{{url('Storage/brands/'.$user->image)}}" alt="Createx Studio" href="{{route('franchise.details',['slug' => $user->slug])}}">
                                </div>
                            </div>
                          @endforeach
                      </div>
                    </div>
                  
                  <div class="row pt-2 tab-pane fade" id="expo" role="tabpanel">
                    <div class=""><span class="badge bg-danger p-1">Recommended Exhibition | Awards</span><a href="{{asset('/')}}"> <i class="bi bi-pencil opacity-60 me-2"></i></a> List your Exhibition / Award</div>
                      <div class="row pt-2">
                        @foreach($brand as $user)
                          <!-- Product-->
                          <div class="col-sm-2 mb-grid-gutter">
                              <div class=" rounded-circle flex-shrink-0" style="width: 6.375rem;">
                                    <img class="rounded-circle"src="{{url('Storage/brands/'.$user->image)}}" alt="Createx Studio" href="{{route('franchise.details',['slug' => $user->slug])}}">
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>

                  <div class="row pt-2 tab-pane fade" id="social" role="tabpanel">
                    <div class="row pt-2" >
                      @foreach($brand as $user)
                        <!-- Product-->
                        <div class="col-sm-2 mb-grid-gutter">
                            <div class=" rounded-circle flex-shrink-0" style="width: 6.375rem;">
                                  <img class="rounded-circle"src="{{url('Storage/brands/'.$user->image)}}" alt="Createx Studio" href="{{route('franchise.details',['slug' => $user->slug])}}">
                            </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
