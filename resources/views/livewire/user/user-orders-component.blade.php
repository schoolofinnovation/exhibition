        <div class="container">
            <div class="table-responsive fs-md mb-4">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr> 
                        <th><small>Product</small></th>
                        <th><small>Total <span class="fw-normal">Subtotal + Disc. + Tax</span></small> </th>                        
                        <th><small>Status</small></th>
                        <th>Action</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($userorders as $order)
                        <tr>
                            <a href="{{route('user.orderDetails',['order_id'=> $order->id])}}">
                                <td class="py-1 align-middle"> 
                                    @foreach($order->orderItems as $test)
                                    {{$test->franchise->brand_name}}  {{$test->franchise->max_investment}} - {{$test->franchise->min_investment}} lacs <br>
                                    @endforeach
                                </td>
                                <td class="py-1 align-middle"> <strong>{{$order->total}}</strong> | <span class="badge bg-primary"> {{$order->status}}</span>
                                <div class="fw-normal badge bg-success">{{$order->subtotal}} + {{$order->discount}} + {{$order->tax}}</div> </td>
                                <td class="py-1 align-middle"> <span class="badge bg-success">{{$order->created_at}}</span></td>
                            </a>
                            <td class="py-2 align-middle">
                                <div class="dropdown">
                                    <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ucwords(trans($order->status))}}</a>
                                    <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                        @if(($order->status) == 'ordered')
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="cancelOrder({{$order->id}})">Cancel</a></li>
                                        @endif
                                        <li><a class="dropdown-item" href="{{route('user.orderDetails',['order_id'=> $order->id])}}"><i class="bi bi-note me-2"></i>Details</a></li>
                                    </ul>
                                </div>      
                            </td>
                        </tr>
                        @endforeach          
                    </tbody>
                </table>
            </div>
            {{$userorders->links('pagination-links')}}
            </div>

            