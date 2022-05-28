<div class="container">
            <div class="table-responsive fs-md mb-4">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                        <th><small>ID</small></th> 
                       
                        <th><small>Product</small></th>
                        <th><small>Qty</small></th>
                        <th><small>Total <span class="fw-normal">Subtotal + Disc. + Tax</span></small> </th>
                        
                        <th><small>Status</small></th>
                        <th>Action</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($short as $order)
                        <tr>
                            <td class="py-1 align-middle"> 
                            {{$order->order_id}}
                            </td>
                            
                            <td class="py-1 align-middle"> 
                            {{ucwords(trans($order->franchise->brand_name))}}
                            <div class="fw-normal badge bg-success">{{$order->price}} X {{$order->quantity}}</div>
                            </td>
                            <td class="py-1 align-middle"> 
                            {{ucwords(trans($order->order->city))}} | {{$order->order->zipcode}}
                            </td>

                            <td class="py-1 align-middle"> <strong>{{$order->order->total}}</strong> | <span class="badge bg-primary"> </span>
                            <div class="fw-normal badge bg-success">{{$order->order->subtotal}} + {{$order->order->discount}} + {{$order->order->tax}}</div> </td>
                            
                            
                            <td class="py-1 align-middle"> <span class="badge bg-success">{{$order->created_at}}</span></td>
                            <td class="py-2 align-middle"> 
                            <div class="dropdown">
                                <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$order->order->status}}</a>
                                
                                <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                    @foreach ($optio as $response) <li><a class="dropdown-item" href="#"  wire:click.prevent="rEsPonse({{$order->id}},{{$response->id}})">{{ucwords(trans($response -> name))}}</a></li> @endforeach
                                    <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrdrStatus({{$order->id}}, 'canceled')">Canceled</a></li>
                                    <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrdrStatus({{$order->id}}, 'delivered')">Delivered</a></li>
                                    <li><a class="dropdown-item" href="{{route('seller.orderDetails',['order_id'=> $order->id])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                                </ul>
                            </div>      
                            </td>
                        </tr>
                        @endforeach          
                    </tbody>
                </table>
            </div>
            {{$short->links('pagination-links')}}
            </div>
