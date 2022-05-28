@section('page_title','Business Partner')

@section('content_description','Sell Your Business ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')
            

            <section class="bg-accent bg-position-center bg-size-cover py-3 py-sm-5" style="background-image: url(img/intro/intro-hero.jpg);">
        <div class="container py-5">
          <div class="row pt-md-5 pb-lg-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
              <h1 class="text-light pb-sm-3"><span class="fw-light">Multipurpose</span> Bootstrap 5<br>E-Commerce <span class="fw-light">Template</span></h1><span class="d-inline-block h5 text-light fw-light mx-2 opacity-70">Single / Multi-vendor</span><span class="d-inline-block h3 text-light fw-light mx-2">Marketplace</span><span class="d-inline-block h4 text-light fw-light mx-2 opacity-70">Fashion</span><span class="d-inline-block h3 text-light fw-light mx-2 opacity-90">Electronics</span><span class="d-inline-block h6 text-light fw-light mx-2 opacity-60">Cart</span><span class="d-inline-block h3 text-light fw-light mx-2">Grocery store</span><span class="d-inline-block h5 text-light fw-light mx-2 opacity-80">Checkout</span><span class="d-inline-block h4 text-light fw-light mx-2">Food Delivery</span><span class="d-inline-block fs-lg text-light fw-light mx-2 opacity-60">Account / Dasboard</span>
              <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="#demos" data-scroll="">View Demos<i class="ci-arrow-down-circle ms-2"></i></a></div>
            </div>
          </div>
        </div>
      </section>


            <div class="container">
            <div class="row pt-2">
                  @foreach($brand as $user)
                <!-- Product-->
                 <div class="col-sm-1 mb-grid-gutter">
                    <div class=" rounded-circle flex-shrink-0" style="width: 6.375rem;">
                          <img class="rounded-circle"src="{{url('Storage/brands/'.$user->image)}}" alt="Createx Studio" href="{{route('franchise.details',['slug' => $user->slug])}}">

                    </div>
                  </div>
                  @endforeach
                </div>
                </div>

                business space: subscribe  our service  get free business space for weekend
                 
                sponsered by luxury business  brand
                business get-to-gethor every weekend: meet with new innovator share your ideas, get ideas, good networking space

                 get to list with us,
                free visitor marketing with free exhibition listing: we are biggest business networkign platfrom, we know requirement of entreprenuer
                so we can educate  about your exhibition help to get good geniunie business crowd

                sponser selling platfrom: getting tired to approch numerous  brand to get good sponser, lets  start with us to populate your marketing ideas 
                get sponser with business startegy cross marketing, today  covid effects huge  business marketing  which weakens buyer capabilty, high competition 
                 make=ing difficult to get instant  decision to  buy product. which impacts on roi of business marketing plan. cross promo help to get more business traffic with less risk , get reverts