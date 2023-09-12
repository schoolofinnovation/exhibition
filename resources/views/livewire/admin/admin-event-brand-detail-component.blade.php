<main>

<form wire:submit.prevent="brandBcontact">
    <input type="text" class="form-control" wire:model.lazy="organisation">
    <input type="text" class="form-control" wire:model.lazy="brand_name">
    
    <input type="text" class="form-control" wire:model.lazy="industry">
    
    <input type="text" class="form-control" wire:model.lazy="name">
    <input type="text" class="form-control" wire:model.lazy="designation">
    <input type="text" class="form-control" wire:model.lazy="phone">
    <input type="text" class="form-control" wire:model.lazy="email">
    
    <button class="form-control  btn btn-primary" type="submit">Submit</button>
</form>

</main>