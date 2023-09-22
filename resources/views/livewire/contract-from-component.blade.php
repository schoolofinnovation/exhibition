<main>


    <div class="container">
        @if($formm == 'basic')
    
        <form wire:submit.prevent="contractForm">
            <h1>Exhibitor Details</h1>
            <input type="text" class="form-control" placeholder="owner" required wire:model.lazy="owner">
            <input type="text" class="form-control" placeholder="company" required wire:model.lazy="organisation">
            <input type="text" class="form-control" placeholder="brand" required wire:model.lazy="brand_name">
            <input type="text" class="form-control" placeholder="pan" required wire:model.lazy="GST">
            <input type="text" class="form-control" placeholder="Industry" required wire:model.lazy="industry">
            <input type="text" class="form-control" placeholder="product" required wire:model.lazy="product">
            <input type="text" class="form-control" placeholder="email" required wire:model.lazy="email">
            <input type="text" class="form-control" placeholder="contact" required wire:model.lazy="phone">

            <h1>Address</h1>
            <input type="text" class="form-control" placeholder="address" required wire:model.lazy="address">
            <input type="text" class="form-control" placeholder="city" required wire:model.lazy="city">
            <input type="text" class="form-control" placeholder="state" required wire:model.lazy="state">
            <input type="text" class="form-control" placeholder="country" required wire:model.lazy="country">
            
            <h1>Space Details</h1>

            <input type="text" class="form-control" placeholder="hall" required wire:model.lazy="hall">
            <input type="text" class="form-control" placeholder="stall" required wire:model.lazy="stall">
            <input type="text" class="form-control" placeholder="size" required wire:model.lazy="size">


            <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

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
        @endif
    </div>

    <h5>Generate a Contract Form</h5>
    <a href="" class="btn btn-primary" wire:click="">Share</a>

</main>