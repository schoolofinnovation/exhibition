@section('page_title', 'The Exhibtion Network - Connecting the World of Exhibitions & Conferences')
@section('page_description', 'Join the Swiss-based Exhibition Network and connect with the world of exhibitions and conferences. Stay up to date with the latest updates and news, and be a part of the dynamic exhibition industry')
@section('page_keyword', 'World largest business event platform, find all upcoming events, business conferences, exhibition2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

<main>
    <div class="bg-secondary d-lg-none mb-3">
    <div class="container">
        <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

            <div class="align-content-center py-2 "><a href="{{$previous}}"><i class="bi bi-chevron-left"></i></a></div>
        
            <div class="text-center py-2"><div>How was the experience?</div></div>

            <div class="align-content-center py-2"><a href=""><i class="bi bi-x"></i></a></div>
        </div>
    </div>
    </div>

    <div class="container py-lg-5 my-lg-5">
        <form wire:submit.prevent="add">
            <!-- Title-->
            <div class="align-items-center pb-5 d-none d-sm-block position-absolute">
                <h3 class=" pt-2 me-2 text-center text-sm-start">How was the experience?</h3>
                <p class=" fs-sm  me-2 text-center text-sm-start">We hope your visit to this event was a experience! Please hit the appropriate rating below:</p>
            </div>


            <div class="pb-5 pb-sm-3"> 
                <div class="form-label fw-normal">How would you rate your experience?</div> 
                    <div class="d-flex justify-content-between">
                    <div >0</div>
                    <div >5</div>
                    <div>10</div>
                </div>

                <input type="range" class="form-range" min="0" max="10" step="1" id="customRange3" wire:model.lazy="rate">
                <small class="fs-xs  me-2 text-center text-sm-start text-muted">They help others decide what to visit next. </small>

                @error('rate')
                    <div class="form-text text-primary">{{$message}}</div>
                @enderror
            </div>
            
                
            {{--@if(!is_null($rate))--}}
                <div class="col-sm-2 col-md-12 pb-5 pb-sm-5">
                    <label class="form-label fw-normal">What do you think about business learning?
                        <span class="">Express yourself with hashtags!</span></label>
                       
                    <div class="input-group">
                        @foreach ($hashtag as $hhtag)


                        <div class=" col col-auto my-1 px-2"> 
                            <input class="form-check-input" type="checkbox"   value="{{$hhtag->id}}"  wire:model="hasttag">{{$hhtag->hastag}}
                        </div>
                        @endforeach
                    </div>
                    @json($hasttag)
                    
                </div>

            
                <div class=" col-sm-10 mb-3">
                    <label class="form-label fw-normal " for="unp-product-name">Express more, write a review <span class="text-muted">(optional)</span></label>
                    <textarea class="form-control" type="text" wire:model.lazy="opinion" row="3"></textarea>
                    <div class="form-text">Maximum 100 characters.</div>
                    @error('opinion')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                </div>
            {{--@endif--}}
        
            <button class="btn btn-primary d-block w-100 mt-5 d-none d-sm-block" type="submit">Submit</button>

            <div class="handheld-toolbar bg-secondary">
                <button class="btn btn-primary d-block w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>