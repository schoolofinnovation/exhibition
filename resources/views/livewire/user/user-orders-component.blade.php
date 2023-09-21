<main>
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


    <div class="container">
        <form wire:submit.prevent="contractForm">
            <h1>Exhibitor Details</h1>
            <input type="text" placeholder="owner" class="form-control">
            <input type="text" class="form-control" placeholder="company" wire:model="organisation">
            <input type="text" class="form-control" placeholder="brand" wire:model="brand_name">
            <input type="text" class="form-control" placeholder="pan" wire:model="GST">
            <input type="text" class="form-control" placeholder="email" wire:model="email">
            <input type="text" class="form-control" placeholder="contact" wire:model="contact">

            <h1>Address</h1>
            <input type="text" class="form-control" placeholder="address" wire:model="address">
            <input type="text" class="form-control" placeholder="city" wire:model="city">
            <input type="text" class="form-control" placeholder="state" wire:model="state">
            <input type="text" class="form-control" placeholder="country" wire:model="country">

            <h1>Space Details</h1>
            <input type="text" class="form-control" placeholder="hall" wire:model="hall">
            <input type="text" class="form-control" placeholder="stall" wire:model="stall">
            <input type="text" class="form-control" placeholder="size" wire:model="size">
           

            <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>
    </div>

    <h5>Generate a Contract Form</h5>
    <a href="#" class="btn btn-primary" wire:click="">Share</a>

    <h1>Calculation</h1> 
    <form wire:submit.prevent="payment">      
            <input type="text" class="form-control" placeholder="tax" wire:model="tax">
            <input type="text" class="form-control" placeholder="total" wire:model="total">
            <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>  

    <h1>Advertise</h1>
    <form wire:submit.prevent="advertise">
        <input type="text" class="form-control" wire:model="person" placeholder="person">
        <input type="text" class="form-control" wire:model="phone" placeholder="phone">
        <input type="text" class="form-control" wire:model="facia" placeholder="facia">
        <input type="text" class="form-control" wire:model="logo" placeholder="brand_logo">
        <input type="text" class="form-control" wire:model="website" placeholder="website">
        <input type="text" class="form-control" wire:model="product" placeholder="product details">
         
        News, Articles
        <input type="checkbox" name="" id="" value="1" wire:model="news">

        Nominate for Awards
        <input type="checkbox" name="" id="" value="1" wire:model="Awards">

        <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>

</main>