<main>
        <section class="container pt-2 " id="exhibit"> 
           <div class="list-unstyled pt-2 pb-1 px-0 pl-0">
                <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm"> Trending Business<br><span class="fw-medium h5">Magazine</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                     <ul class="dropdown-menu" width="auto">
                      <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'magazine'])}}">More</a></li>
                      <li><a class="dropdown-item" href="#">Advertise</a></li>
                      <li><a class="dropdown-item" href="#">Subscribe</a></li>
                      <li><a class="dropdown-item" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Add</a></li>
                    </ul>
                    </span>
                </div>
            </div>
            
             <div class="d-flex badgeseMagaz">
                @foreach( $finder as $categ) 
                  <a class="badge border-1 text-right border-dark text-dark mr-1" href="{{route('coi.exhibitioncategory',['eventype' => 'magazine', 'categry_id' => $categ->id])}}">
                  {{ucwords(trans($categ->tag))}}</a>
                @endforeach
              </div>
              
            <!-- Grid-->
            <div class="row mx-n2 my-Slider10 g-0 py-0"> 
              <!-- magazine-->
              @foreach($magazine as $eventoi)
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('business.magazine', ['slug' => $eventoi->slug])}}">
                      <img src="{{url('public/assets/image/exhibition/'.$eventoi->image)}}" class="img-thumbnail" alt="">
                    </a>
                  </div>
                </div>
              @endforeach  
            </div>

            
        </section>
</main>

@push('scripts')
    <script>
      var slider = tns({
        "container": '.badgeseMagaz',   
        
        "responsive": {
          "300": {
            "items": 3,
            "controls": false,
            "fixedWidth": 100,
            "mouseDrag": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 1,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
                "fixedWidth": 100,
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>


    <script>
      var slider = tns({
        "container": '.my-Slider10',            
        "responsive": {
          "300": {
            "items": 2,
            "controls": false,
            "mouseDrag": true,
            "autoplay": false,
            "fixedWidth": 150,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 7,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay": false,
            "fixedWidth": 300,
            "autoplayButtonOutput": false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>
@endpush