<main>

<div class="container">
    <div class="fs-md">
     
    </div>
<form wire:submit.prevent="brandBcontact">
    <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
    <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
    
    <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
    
    <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
    <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
    <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
    <input type="text" class="form-control" placeholder="email" wire:model.lazy="email">
    
    <button class="form-control  btn btn-primary" type="submit">Submit</button>
</form>
</div>
</main>