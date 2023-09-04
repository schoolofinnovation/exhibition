<main>
   

    <div class=" container col-lg-8">
              <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fs-md mb-0">Top reviews</h6>
                    <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> {{count($eventrate)}}
                    reviews<i class="bi bi-chevron-right me-2"></i></a>
              </div>

                <div class="fs-xs fw-normal">Summary of {{count($eventrate)}} reviews.</div> 
                
                    <!-- <div class="d-flex badgese pb-2">
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Today  <span class="bg-"> 2935</span> </span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                    </div> -->
              <!-- comment-->
              @foreach($eventrate as $busness)

               @php
                  $finduserdetails = db::table('users')->where('id' , $busness->user_id)->get();

               @endphp
                <div class=" border-1 d-flex align-items-start py-2 mt-2 border-bottom">
                    <img class="rounded-circle" src="#" width="50" alt="">

                    <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">{{$finduserdetails->name}}</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                        <i class="bi bi-star me-2"></i>{{$busness->rate}}/10</a>
                    </div>
                    <h4 class="fs-md mb-3">{{$busness->opinion}}</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">
                        9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>
                        12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i>
                        </span>

                        <span class="fs-ms text-muted">Sep 7, 2019 
                        </span>
                    </div>
                    
                    <!-- comment  insdie comment reply-->
                    {{--<div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="#" width="50" alt="Sara Palson">
                        <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fs-md mb-0">Sara Palson</h6>
                        </div>
                        <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                        </div>
                    </div>--}}

                    </div>
                </div>
              @endforeach

              <!-- Post comment form
              <div class="card border-0 px-0 shadow my-2">
                <div class="card-body">
                  <div class="d-flex align-items-start"><img class="rounded-circle border p-2" src="#" width="50" alt="Createx Studio">
                    <form class="needs-validation w-100 ms-3" novalidate="">
                      <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Write comment..." required=""></textarea>
                        <div class="invalid-feedback">Please write your comment.</div>
                      </div>
                      <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                    </form>
                  </div>
                </div>
              </div>-->
            </div>
</main>