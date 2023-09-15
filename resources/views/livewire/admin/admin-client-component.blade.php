<main>
    <div class="container my-5">
        <form wire:submit.prevent="sharetoCleint">
                <div class="row g-1">
                    <div class="col-sm-4">
                        <label class="form-label" for="cf-name">Name</label>
                        <input class="form-control" type="text" placeholder="Name"   wire:model.debounce.500ms="name"  required="">
                        @error( 'organizer' ){{ $message}}@enderror
                    </div>

                    <div class="col-sm-1">
                        <label class="form-label" for="seniority">Month</label>
                            <select class="form-control" type="text" wire:model.lazy="pincode">
                                <option selected>Choose</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('month') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>   
                </div>

                <hr class="my-2">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Email</label>
                            <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" required="">
                            @error( 'email' ){{ $message}}@enderror
                        </div>

                        <div class="col-sm-4">
                            <label class="form-label" for="cf-name">Phone</label>
                            <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" required="">
                            @error( 'phone' ){{ $message}}@enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
    </div>


    <!-- mailing -->

    <form wire:submit.prevent="CarryEmail">
        <input type="text" wire:model = "data">
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
</main>