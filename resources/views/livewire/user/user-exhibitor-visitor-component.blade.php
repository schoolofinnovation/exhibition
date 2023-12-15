<main>

    <div class="container">
        <form wire:submit.prevent="likesUser">
            <input  class="form-control" type="text" placeholder="name" wire:model="name">
            <input  class="form-control" type="email"  placeholder="email" wire:model="email">
            <input  class="form-control" type="number" placeholder="phone" wire:model="phone">
            <div  class="btn btn-primary form-control" type="submit">Submit</div>
        </form>
    </div>

    <div class="container">
        <form wire:submit.prevent="likesUser">
            <input  class="form-control" type="number" placeholder="Company" wire:model="exp">
            <input  class="form-control" type="text" placeholder="designation" wire:model="designation">
            <input  class="form-control" type="text" placeholder="industry" wire:model="industry">
            <div  class="btn btn-primary form-control" type="submit">Submit</div>
        </form>
    </div>

</main>