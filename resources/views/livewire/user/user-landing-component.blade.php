<main>
<section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
          <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'event'])}}" value="magazine"  wire:model="trackcustomer">
                           <div class="p-3 border rounded border-dark bg-light text-center">Magazine</div>
                        </a> 
                    </div>
                   
                   
                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Event</div>
                        </a> 
                    </div>


                    <!-- <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Expand your Business</div>
                        </a> 
                    </div>

                    <div class="col">
                        <a  href="{{route('admin.dashboard', ['board' => 'createhashtagss'])}}">
                           <div class="p-3 border rounded border-dark bg-light text-center">Hire us Media Buying</div>
                        </a> 
                    </div> -->
                    
                    <div class="h4">Expand your Business</div>
                    <div class="smalll">Reach your business goals with Marketing Solutions.</div>
                    <a href="" class="btn btn-primary" value="contact" wire:model="trackcustomer">Hire us Media Buying</a>

                </div>
            </div>
          </div>
        </section>



        @if($trackcustomer == 'contact')



        @endif






        @if($trackcustomer == 'magazine')

//choose industry
        <form action="">
            <input type="text" class="form-control" wire:model.lazy = "industry">
            <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

        <form wire:submit.prevent="addMagazine">
            <input type="text" class="form-control" wire:model.lazy = "magazineName" placeholder="Magazine Name">
            <input type="text" class="form-control" wire:model.lazy = "brandName" placeholder="Brand">
            <input type="text" class="form-control" wire:model.lazy = "RNI" placeholder="RNI">

            <input type="text" class="form-control" wire:model.lazy = "industry" placeholder="industry">
            <input type="text" class="form-control" wire:model.lazy = "edition" placeholder="Current Edition">
            <input type="text" class="form-control" wire:model.lazy = "issue" placeholder="Current Issue"> 
            
            <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

        <form wire:submit.prevent="addContact">
            <input type="text" class="form-control" wire:model.lazy = "name" placeholder="Owner Name">
            <input type="text" class="form-control" wire:model.lazy = "phone" placeholder="phone">
            <input type="text" class="form-control" wire:model.lazy = "email" placeholder="email">
            <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>


        <div class="small">Upload Magazine Images</div>

        <form wire:submit.prevent="multiImage">

        </form>

//choose or select 
        <!-- <div class="small">Distribution Audience</div>
            <form wire:submit.prevent="businessAudience">
                    <input type="text" wire:model.lazy = "email" placeholder="email">
            </form> -->

//choose or select
        <div class="small">Upcoming Exhibition, where you are going to participate? May be/ May be Not?</div>
        <form wire:submit.prevent="chooseEvent">

        </form>

        <div class="small">When going to print?</div>
            <form wire:submit.prevent="date">
                <input type="text" class="form-control" wire:model.lazy = "date" placeholder="Print Date">
            </form>
    @endif
</main>