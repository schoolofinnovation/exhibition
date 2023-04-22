<main>
        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
          <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with COI Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Event</div>
                        </a> 
                    </div>
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'job'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Job</div>
                        </a> 
                    </div>
                   
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'client'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Client</div>
                        </a> 
                    </div>
                    
                    <div class="col">
                         <a href="{{route('admin.dashboard', ['board' => 'blog'])}}">
                            <div class="p-3 border rounded border-dark bg-light text-center">Blog</div>
                        </a> 
                    </div>
                    
                </div>
            </div>
          </div>
        </section>
</main>