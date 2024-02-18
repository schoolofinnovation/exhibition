@section('page_title', 'Career - Join The Exhibition Network team')
@section('page_description','Join the dynamic team at The Exhibition Network and make a difference in the world of exhibitions and conferences. Explore our current job opportunities and apply today.')
@section('page_keyword','Careers, The Exhibition Network, Job Opportunities, Join Our Team, Employment opportunities, Careers at The Exhibition Network, Work with us, Job Openings, Open Positions, Current job listings, Career development, Employee benefits, Workplace culture, Company values, Professional growth, Interships, Diversity and inclusion')


      <section class="container-fluid py-3 py-lg-5  ">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger"></div>
            <h2 class="display-4 fw-normal">Do the Most Meaningful Work <br> of Your Career</h2>
            
            <p class="col-md-10 col-lg-8 mx-auto lead"><a href="{{asset('/')}}">The Exhibition Network</a> is building a team with superpowers. <br><strong>How are we doing it? </strong>
            <div class="col-md-10 pb-2 col-lg-4 mx-auto"> By hiring top talent and creating a unique work environment, built as their own extended career frameworks, rich with new skills as components and plugins.</div>
            </p>
            
            <a href="#opening" class="btn btn-lg btn-outline-primary mb-3">Browse open positions</a>
          </div>
      </section>

      <!--Our culture and values-->
        <section class="container py-3 py-lg-5 mt-4 mb-3">
          @foreach ($jobs as $job)
            <div class="d-flex justify-content-evenly  my-4 text-dark border-bottom" id="opening">
                <h2 class="fs-5 text-center  fw-light">{{$job->title}}<div class="fs-xs text-primary">{{$job->level}}, {{$job->type}}<i class="fs-sm  bi bi-chevron-right align-middle ms-1"></i></div></h2>
                <h2 class="fs-5 text-center fw-light">{{$job->experience}} years<div class="fs-xs text-primary">Click to see requirement<i class=" bi bi-chevron-right align-middle ms-1"></i></div></h2>
                <h2 class="fs-5 text-center fw-light">{{$job->location_state}}<div class="fs-xs text-primary">{{$job->location_country}}<i class=" bi bi-chevron-right align-middle ms-1"></i></div></h2>
                <h2 class="fs-5 text-center fw-light"><a href="#apply"><i class="bi bi-chevron-right"></i> </a></h2>
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
        <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);"></div>
        <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">@livewire('job-application-component')</div>
      </section> 

      <!-- Why join-->
      <section class="container py-3 py-lg-5 mt-4 mb-3">
                <h2 class="display-5 text-center my-2">Why join The Exhibition Network?</h2>
                <p class="fs-sm  text-center">People behind your great experience</p>
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
          {{--<div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">test
            </div>--}}
            <h2 class="display-6 fw-normal">Freelancers</h2>
          <p class="col-md-10 col-lg-8 mx-auto lead">We occasionally work with freelancers on projects. If you would be interested, please connect here. One of our consultants will reach out if we have <a href="#">an opportunity</a> for you!</p>
          <a href="#jobapplication" class="btn btn-lg btn-outline-primary mb-3">Write to Us.</a>
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
            The Exhibtion Network recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation. </p>
            <a href="{{asset('/contact-us#contact')}}" class="btn btn-lg btn-outline-primary mb-3" >Connect with us.</a>
          </div>

              <!--<h2 class="h3 mb-2">International top talent, valued for their getting-things-done-mentality.</h2>
              <p class="fs-sm text-muted pb-2">Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation.</p>-->
              
            </div>
          </div>
        </section> 

        @push('scripts')
          <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "JobPosting",
              "title": "{{$job->title}}",
              "description":"<p>{{$job->description}}</p>"
              "identifier":{
                "@type":"PropertyValue",
                "name":"The Exhibition Network",
                "value":"785789",
              },
              "datePosted" : "{{$job->description}}",
              "validThrough" : "",
              "employmentType" : "PERMANENT" ,
              "hiringOrganization" : {
                "@type" : "Organization",
                "name" : "The Exhibtion Network",
                "sameAs" : "https://exhibition.org.in/",
                "logo" : "https://exhibition.org.in/image/Yoyo.png"
              },
              
              "jobLocation": {
                "@type": "Place",
                "address": {
                  "@type": "PostalAddress",
                  "streetAddress": "Rue de la Terrassière 58, 1207 Genève, Switzerland",
                  "addressLocality": "Rue de la Terrassière",
                  "postalCode": "1207 ",
                  "addressRegion": "Genève",
                  "addressCountry": "IN"
                }
              },
              "baseSalary": {
                "@type":"MonetaryAmount",
                "currency" : "USD",
                "value":{
                  "@type":"QuantitativeValue",
                  "value": 10.00,
                  "unitText":"Hour"
                }
              }
            }

          </script>
        @endpush
