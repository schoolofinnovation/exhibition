<main>
 <!-- Sidebar-->
 
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse offcanvas-end bg-white w-100 rounded-3 shadow-lg ms-lg-auto py-1" id="shop-sidebar" style="max-width: 22rem;">
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">Filters</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Categories</h3>
                  <div class="accordion mt-n1" id="shop-categories">
                   @foreach ($categories as $category)
                    <!-- Shoes-->
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                      <a class="accordion-button collapsed" href="#{{$category->slug}}" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="{{$category->industry}}">{{ucwords(trans($category->industry))}}</a></h3>
                      <div class="accordion-collapse collapse" id="{{$category->slug}}" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links widget-filter">
                            <div class="input-group input-group-sm mb-2">
                              <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search">
                              <i class=" bi bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar="init" data-simplebar-auto-hide="false">
                            <div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                            <div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                            <div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                            @foreach ($category->sector as $seet)
                              <li class="widget-list-item widget-filter-item">
                              <a class="widget-list-link d-flex justify-content-between align-items-center" >
                              <span class="widget-filter-item-text" id="{{$category->id}}"> {{ucwords(trans($seet->sector))}}</span>
                              <span class="fs-xs text-muted ms-3">{{$categories->count()}}</span>
                              </a>
                              </li>
                            @endforeach                                
                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;"></div></div></ul>
                          </div>
                        </div>
                      </div>
                    </div>
                     @endforeach
                  </div>
                </div>
                <!-- Price range
                <div class="widget mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Price</h3>
                  <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                    <div class="range-slider-ui noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(25%, 0px) scale(0.43, 1);"></div></div><div class="noUi-origin" style="transform: translate(-750%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="680.0" aria-valuenow="250.0" aria-valuetext="$250"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$250</div></div></div><div class="noUi-origin" style="transform: translate(-320%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="250.0" aria-valuemax="1000.0" aria-valuenow="680.0" aria-valuetext="$680"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$680</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 1%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 2%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 3%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 4%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 6%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 7%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 8%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 9%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 10%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 11%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 12%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 13%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 14%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 16%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 17%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 18%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 19%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 20%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 21%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 22%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 23%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 24%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 25%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="250" style="left: 25%;">250</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 26%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 27%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 28%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 29%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 30%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 31%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 32%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 33%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 34%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 36%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 37%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 38%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 39%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 40%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 41%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 42%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 43%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 44%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 46%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 47%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 48%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 49%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="500" style="left: 50%;">500</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 51%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 52%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 53%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 54%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 56%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 57%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 58%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 59%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 60%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 61%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 62%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 63%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 64%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 66%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 67%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 68%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 69%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 70%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 71%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 72%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 73%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 74%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 75%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="750" style="left: 75%;">750</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 76%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 77%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 78%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 79%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 80%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 81%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 82%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 83%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 84%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 86%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 87%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 88%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 89%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 90%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 91%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 92%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 93%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 94%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 96%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 97%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 98%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 99%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="1000" style="left: 100%;">1000</div></div></div>
                    <div class="d-flex pb-1">
                      <div class="w-50 pe-2 me-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-min" type="text">
                        </div>
                      </div>
                      <div class="w-50 ps-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-max" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>-->

                <!-- Filter by Brand-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Brand</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                   @foreach($brand as $brands)
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="adidas">
                        <label class="form-check-label widget-filter-item-text" for="adidas">{{$brands->brand_name}}</label>
                      </div><span class="fs-xs text-muted">425</span>
                    </li>
                   @endforeach
                   

                    

                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wrangler">
                        <label class="form-check-label widget-filter-item-text" for="wrangler">Wrangler</label>
                      </div><span class="fs-xs text-muted">115</span>
                    </li>

                  </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 870px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 35px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                </div>
                <!-- Filter by Size-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Size</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="bi bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar="init" data-simplebar-auto-hide="false"><div class="simplebar-wrapper" style="margin: -4px -16px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 4px 16px 0px 0px;">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xs">
                        <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                      </div><span class="fs-xs text-muted">34</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-s">
                        <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-m">
                        <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                      </div><span class="fs-xs text-muted">198</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-l">
                        <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                      </div><span class="fs-xs text-muted">72</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xl">
                        <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                      </div><span class="fs-xs text-muted">46</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-39">
                        <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                      </div><span class="fs-xs text-muted">112</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-40">
                        <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                      </div><span class="fs-xs text-muted">85</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-41">
                        <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                      </div><span class="fs-xs text-muted">210</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-42">
                        <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-43">
                        <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                      </div><span class="fs-xs text-muted">30</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-44">
                        <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                      </div><span class="fs-xs text-muted">61</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-45">
                        <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                      </div><span class="fs-xs text-muted">23</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-46">
                        <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                      </div><span class="fs-xs text-muted">19</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-47">
                        <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                      </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-48">
                        <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                      </div><span class="fs-xs text-muted">12</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-49">
                        <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                      </div><span class="fs-xs text-muted">8</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-50">
                        <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                      </div><span class="fs-xs text-muted">6</span>
                    </li>
                  </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 510px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 60px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                </div>
                <!-- Filter by Color-->
                <div class="widget">
                  <h3 class="widget-title">Color</h3>
                  <div class="d-flex flex-wrap">
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-blue-gray">
                      <label class="form-option-label rounded-circle" for="color-blue-gray"><span class="form-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-burgundy">
                      <label class="form-option-label rounded-circle" for="color-burgundy"><span class="form-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-teal">
                      <label class="form-option-label rounded-circle" for="color-teal"><span class="form-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-teal">Teal</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-brown">
                      <label class="form-option-label rounded-circle" for="color-brown"><span class="form-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-brown">Brown</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-coral-red">
                      <label class="form-option-label rounded-circle" for="color-coral-red"><span class="form-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-navy">
                      <label class="form-option-label rounded-circle" for="color-navy"><span class="form-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-navy">Navy</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-charcoal">
                      <label class="form-option-label rounded-circle" for="color-charcoal"><span class="form-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-sky-blue">
                      <label class="form-option-label rounded-circle" for="color-sky-blue"><span class="form-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
</main>