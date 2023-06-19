<main>
    @if($formm == 'detailPavillion')
        <form wire:submit.prevent="">

        </form>
    @endif

    @if($formm == 'brand')
        <form wire:submit.prevent="">

        <input type="text" wire:model="brand_name">
        <input type="text" wire:model="">
        </form>
    @endif


    

</main>