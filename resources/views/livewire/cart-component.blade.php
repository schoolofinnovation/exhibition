<main>
<div class="navbar-tool dropdown ms-3">
@if(Cart::instance('cart')->count() > 0)
                  <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{route('franchise.wishlist')}}">
                    @if(Cart::instance('cart')->count() > 0)
                    <span class="navbar-tool-label"> {{Cart::instance('cart')->count()}}</span> 
                    @endif
                    <i class="navbar-tool-icon bi bi-cart"></i></a>
                  
                  <a class="navbar-tool-text" href="{{route('franchise.wishlist')}}"><small>My Cart</small></a>
                  
                  <!-- Cart dropdown-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar="init" data-simplebar-auto-hide="false">
                      <div class="simplebar-wrapper" style="margin: 0px -16px 0px 0px;">
                      <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                      <div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                      <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                      <div class="simplebar-content" style="padding: 0px 16px 0px 0px;">

                      @foreach (Cart::instance('cart')->content() as $item)
                        <div class="widget-cart-item pb-2 border-bottom">
                          <button class="btn-close text-danger" wire:click="destroy('{{$item->rowId}}')" type="button" aria-label="Remove"><span aria-hidden="true">×</span></button>
                          <div class="d-flex align-items-center">
                            <a class="d-block flex-shrink-0" href="{{route('franchise.details',['slug'=>$item->model->slug])}}">
                            <img src="{{asset ('Storage/brands')}}/{{$item->model->image}}" width="64" alt="{{$item->model->brand_name}}"></a>
                              <div class="ps-2">
                                <h6 class="widget-product-title">
                                <a href="{{route ('franchise.details',['slug'=>$item->model->slug])}}">{{Str::limit($item->model->brand_name,28)}}</a></h6>
                                <div class="widget-product-meta">
                                <span class="text-accent me-2">{{$item->model->max_investment}} lac<small> - {{$item->model->min_investment}} lac</small></span>
                                <span class="text-muted">x 1</span></div>
                              </div>
                          </div>
                        </div>
                      @endforeach
                       
                       
                      </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div>
                      <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                      <div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div>
                      <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                      <div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);">
                    </div></div></div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                        <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span>
                        <span class="text-accent fs-base ms-1">$452 <small>00</small></span></div>
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('franchise.wishlist')}}">
                          Compare<i class="bi bi-chevron-right ms-1 me-n1"></i></a>
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="{{route('checkout')}}"><i class="bi bi-card me-2 fs-base align-middle"></i>Send request to Brand</a>
                    </div>
                  </div>
@endif
         </div> 
</main>