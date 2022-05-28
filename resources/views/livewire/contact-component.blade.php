@section('page_title','Contact')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')


@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{asset('/')}}"><i class="bi bi-house"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Contacts</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Contacts - We would like to hear  form you.</h1>
          </div>
        </div>
      </div>


      <section class="container-fluid pt-grid-gutter">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll="">
              <div class="card-body text-center"><i class=" bi bi-geo-alt h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-2">Corporate Office</h3>
                <p class="fs-sm text-muted">{{$corporate->address}}</p>
                <div class="fs-sm text-primary">Click to see map<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
              </div></a></div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="bi bi-clock h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Working hours</h3>
                <ul class="list-unstyled fs-sm text-muted mb-0">
                  <li>Mon - Fri: 10AM - 7PM</li>
                  <li class="mb-0">Sta: 11AM - 5PM</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class=" bi bi-telephone h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Phone numbers</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1">Toll-free-number</span><br><a class="nav-link-style" href="tel:+108044357260">{{$toll->phone}} </a></li>
                  <!--<li class="mb-0"><span class="text-muted me-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+1 00 33 169 7720</a></li>-->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class=" bi bi-envelope h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Email addresses</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1">Official</span> <br><a class="nav-link-style" href="mailto:+108044357260">{{$email->email}}</a></li>
                  <!--<li class="mb-0"><span class="text-muted me-1">Support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container py-3 py-lg-5 mt-4 mb-3">
          
          <h2 class="h1 text-center mb-2">
          Our core team</h2>
        <p class="fs-sm text-muted text-center">People behind your great shopping experience at</p>
                <div class="fs-sm text-primary text-center">Connect with us<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
                <p class="fs-sm  text-center">Board of Innovation is building a team with superpowers. How are we doing it? By hiring top talent and creating a unique work environment.</p>

          <div class="row pt-3">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/03.jpg" width="96" alt="Jonathan Doe">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Jonathan Doe</h6>
                  <p class="fs-ms text-muted mb-0">CEO, Co-founder</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:johndoe@example.com"><i class="ci-mail me-2"></i>johndoe@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/04.jpg" width="96" alt="Barbara Palson">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Barbara Palson</h6>
                  <p class="fs-ms text-muted mb-0">Chief of Marketing</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.palson@example.com"><i class="ci-mail me-2"></i>b.palson@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/06.jpg" width="96" alt="William Smith">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">William Smith</h6>
                  <p class="fs-ms text-muted mb-0">Financial director</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:w.smith@example.com"><i class="ci-mail me-2"></i>w.smith@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/02.jpg" width="96" alt="Amanda Gallaher">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Amanda Gallaher</h6>
                  <p class="fs-ms text-muted mb-0">Lead UX designer</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:a.gallaher@example.com"><i class="ci-mail me-2"></i>a.gallaher@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/01.jpg" width="96" alt="Benjamin Miller">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Benjamin Miller</h6>
                  <p class="fs-ms text-muted mb-0">Website development</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>b.miller@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/07.jpg" width="96" alt="Miguel Rodrigez">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Miguel Rodrigez</h6>
                  <p class="fs-ms text-muted mb-0">Content manager</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>m.rodrigez@example.com</a>
                </div>
              </div>
            </div>
          </div>
        </section>

      <section class="container pt-4 mt-md-4 mb-5">
        <h2 class="h1 text-center mb-2">
        Want to work together?</h2>
        <p class="fs-sm text-muted text-center">Drop us a line at</p>
                <div class="fs-sm text-primary text-center">newbusiness@councilofinnovation.com<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
                <p class="fs-sm text-muted text-center">and we’ll see how we can help you.</p>
       
        <div class="row pt-4">
          <div class="col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow"><img class="card-img-top" src="https://source.unsplash.com/1600x900/?Switzerland, office" alt="Switzerland">
              <div class="card-body">
                <h6>{{$corporate->location}}, {{$corporate->country}}</h6>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex pb-3 border-bottom"><i class="bi bi-geo-alt fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">{{$corporate->address}}</a></div>
                  </li>
                  <li class="d-flex pt-2 pb-3 border-bottom"><i class="bi bi-telephone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+178632256040">{{$corporate->phone}}</a></div>
                  </li>
                  <li class="d-flex pt-2"><i class="bi bi-envelope fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:orlando@example.com">{{$corporate->email}}</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow"><img class="card-img-top" src="https://source.unsplash.com/1600x900/?Canada, office" alt="Canada">
              <div class="card-body">
                <h6>{{$head->location}}, {{$head->country}}</h6>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex pb-3 border-bottom"><i class="bi bi-geo-alt fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">{{$head->address}}</a></div>
                  </li>
                  <li class="d-flex pt-2 pb-3 border-bottom"><i class=" bi bi-telephone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+184725276533">{{$head->phone}}</a></div>
                  </li>
                  <li class="d-flex pt-2"><i class="bi bi-envelope fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:chicago@example.com">{{$head->email}}</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-grid-gutter">
            <div class="card border-0 shadow"><img class="card-img-top" src="https://source.unsplash.com/1600x900/?delhi, corporate office" alt="delhi">
              <div class="card-body">
                <h6>{{$branch->location}}, {{$branch->country}}</h6>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex pb-3 border-bottom"><i class="bi bi-geo-alt fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">{{$branch->address}}</a></div>
                  </li>
                  <li class="d-flex pt-2 pb-3 border-bottom"><i class="bi bi-telephone fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+1212477690000">{{$branch->phone}}</a></div>
                  </li>
                  <li class="d-flex pt-2"><i class="bi bi-envelope fs-lg mt-2 mb-0 text-primary"></i>
                    <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:newyork@example.com">{{$branch->email}}</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="container-fluid px-0" id="map">
        <div class="row g-0">
          <div class="col-lg-6 iframe-full-height-wrap">
            <iframe class="iframe-full-height" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
             src="{{$infos->map}}">
             </iframe>
          </div>
          
          @livewire('contactus-component')

        </div>
      </div>
      </div>