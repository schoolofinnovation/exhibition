@section('page_title','Career')

@section('content_description','Job')
@section('content_keywords',' Job')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<section class="container-fluid py-3 py-lg-5  ">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              

            </div>
              <h2 class="display-5 fw-normal">Do the Most Meaningful Work <br> of Your Career</h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">
            <a href="">Council of Innovation</a> is building a team with superpowers. <strong>How are we doing it? </strong>
            <br> By hiring top talent and creating a unique work environment, built as their own extended career frameworks, 
            rich with new skills as components and plugins.
            </p>
            <a href="#opening" class="btn btn-lg btn-outline-primary mb-3">Browse open positions</a>
          </div>
        
        </section>

        <!--Our culture and values-->

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              

            </div>
              <h2 class="display-6 fw-normal" id="opening">Vacancies</h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">
            We are an independent innovation strategy and business design firm. We have offices in New York, Amsterdam, Antwerp, and Singapore, but we serve Fortune 500 companies from across the globe. If the office of your preference is not shown below, there are no positions available in that location at the moment.
              <a href="">official Bootstrap Themes marketplace</a>. 
              
            </p>
            <a href="" class="btn btn-lg btn-outline-primary mb-3">Browse themes</a>
          </div>
        
        <!--jobs
        
        <div class="d-flex justify-content-evenly  my-4 text-dark border-bottom">
          <h2 class="fs-5 fw-light">Andorid Developer</h2>
          <div class="fs-5 fw-light">5-7 year</div>
          <div class="fs-5 fw-light">Delhi,India</div>
          </div>
          -->
        @foreach ($jobs as $job)
          <div class="d-flex justify-content-evenly  my-4 text-dark border-bottom" >
         
          <h2 class="fs-5 text-center  fw-light">{{$job->title}}
          <div class="fs-sm text-primary">{{$job->level}}, {{$job->type}}<i class="fs-sm  bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>
          <h2 class="fs-5 text-center fw-light">{{$job->experience}} years
          <div class="fs-sm text-primary">Click to see requirement<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>

          <h2 class="fs-5 text-center fw-light">{{$job->location_state}}
          <div class="fs-sm text-primary">{{$job->location_country}}<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>

          <h2 class="fs-5 text-center fw-light"  >
          <a href="#apply">  
          Apply
          </a><small>here</small>
          </h2>

          </div>
         @endforeach 
        
      <!--<div class="d-flex justify-content-evenly  my-4 text-dark border-bottom">
          <h2 class="fs-5 fw-light">Andorid Developer
          <div class="fs-sm text-primary">latest Andorid Skill<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>
          <div class="fs-5 fw-light">5-7 year</div>
          <div class="fs-5 fw-light"><i class=" bi bi-geo-alt h3 mt-2 mb-4 text-primary"></i>Delhi <i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </div>
          
          <div class="d-flex justify-content-evenly  my-4 text-dark border-bottom">
          <h2 class="fs-5 fw-light">Andorid Developer</h2>
          <div class="fs-5 fw-light">5-7 year</div>
          <h2 class="fs-5 fw-light">Genva
          <div class="fs-sm text-primary">Singapore<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>
          </div>
          
          <div class="d-flex justify-content-evenly  my-4 text-dark border-bottom">
          <h2 class="fs-5 fw-light">Andorid Developer</h2>
           <h2 class="fs-5 fw-light">5-7 year
          <div class="fs-sm text-primary">Click to see map<i class=" bi bi-chevron-right align-middle ms-1"></i></div>
          </h2>
          <div class="fs-5 fw-light">Delhi</div>
          </div>-->
        </section>
<!--vacancies-->


       <!--jobs apply form-->
       <section class="row g-0" id="apply">
          <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
          </div>

          <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">
          

          @livewire('job-application-component')
         
          </div>
        </section> 
<!-- Why join-->
<section class="container py-3 py-lg-5 mt-4 mb-3">
          <h2 class="display-5 text-center my-2">Why join Council of Innovation?</h2>
          <p class="fs-sm  text-center">People behind your great shopping experience</p>
          <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col col-md-3">
    <div class="card h-100  border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you enjoy being part of a global innovation consultancy working for some of the biggest brands in the world (like Roche, AB Inbev, Danone, and many more).</p>
      </div>
    </div>
  </div>
  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you thrive in an entrepreneurial environment and want to contribute to our overall business strategies and growth.</p>
      </div>
    </div>
  </div>
  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you get numerous on-the-job-and-beyond learning opportunities, the possibility to develop yourself in a direction of choice, and you  receive a self-development budget.</p>
      </div>
    </div>
  </div>
  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Pre- and post-Covid, we like to surf with the global team once a year. Not just on the internet, but also on the waves in the South of France during our annual Summer Office, bringing the whole team together to connect, learn and have fun.</p>
      </div>
    </div>
  </div>

  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you look for a place where you can be your whole self, and become part of highly talented, ambitious, (from time to time hilarious) international and diverse team (15 different nationalities and counting!).</p>
      </div>
    </div>
  </div>

  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you are eager to build a global professional network through our offices and clients worldwide (New York, Singapore, Antwerp, Amsterdam). </p>
      </div>
    </div>
  </div>

  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Because you can work flexibly when you’re most productive. We don’t have typical 9 to 5 expectations. And of course, remote work is highly supported! </p>
      </div>
    </div>
  </div>

  <div class="col col-md-3">
    <div class="card h-100 border-0">
      
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">If you’re interested, you enjoy creating positive change in societies and with INGOs (Unicef, SOS Children’s Villages,…) through our .Social branch.</p>
                </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!--Freelancers-->
        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              </div>
              <h2 class="display-6 fw-normal">Freelancers</h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">
            We occasionally work with freelancers on projects. If you would be interested, please connect here. One of our consultants will reach out if we have an opportunity for you!
              <a href="">official Bootstrap Themes marketplace</a>. 
              
            </p>
            <a href="#jobapplication" class="btn btn-lg btn-outline-primary mb-3">write to us.</a>
          </div>
        
        </section>


       

<!--Our culture and values-->

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <h2 class="display-5 text-center my-2">Our Culture & Values</h2>
           <p class="fs-sm  text-center">People behind your great shopping experience</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
               <div class="col col-md-3">
                <div class="card h-100  border-0">
      
                <div class="card-body">
                    <h5 class="card-title text-center"  style="color:#ff0440;">BE ENTREPRENEURIAL</h5>
                    <p class="card-text">We take ownership,
                                    and get things done.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        <div class="card h-100 border-0">
                        
                        <div class="card-body">
                            <h5 class="card-title text-center"  style="color:#ff0440;">RAISE THE BAR</h5>
                            <p class="card-text">We aim to set the standard
                        by working smarter, not harder.</p>
                        </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                <div class="card h-100 border-0">
                
                <div class="card-body">
                    <h5 class="card-title text-center"  style="color:#ff0440;">HELP OTHERS</h5>
                    <p class="card-text">We genuinely help others to shine and be amazing. No ego.</p>
                </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card h-100 border-0">
                
                <div class="card-body">
                    <h5 class="card-title text-center" style="color:#ff0440;">MAKE IT MATTER</h5>
                    <p class="card-text">We focus on what will have the biggest impact. No theatre.</p>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
        </section>


        <section class="row g-0 mb-2" >
          <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" 
          style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?office,career);"></div>
          <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
            <div class="mx-auto py-lg-5" style="max-width: 35rem;">
            <div class="text-center">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              </div>
              <h2 class="display-6 fw-normal">International top talent, valued for their getting-things-done-mentality.</h2>
            <p class="col-md-10 pb-2 col-lg-8 mx-auto ">
            Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation. </p>
            <a href="{{asset('/contact-us#contact')}}" class="btn btn-lg btn-outline-primary mb-3" >Connect with us.</a>
          </div>

              <!--<h2 class="h3 mb-2">International top talent, valued for their getting-things-done-mentality.</h2>
              <p class="fs-sm text-muted pb-2">Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation.</p>-->
              
            </div>
          </div>
        </section> 