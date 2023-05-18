<main>

@section('page_title','Add Hashtags')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - The exhibition Network')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
    <div class="container">
    <form wire:submit.prevent="add">
        <!-- Title-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">How was the experience?</h2>
            
        </div>
            
      
            <div class="row">
       
                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="unp-standard-price">Create Hashtag 
                       </label>
                    <div class="input-group">
                    <input class="form-control" type="text" wire:model.lazy="hastag">
                    </div>
                    @error('hastag')
                    <div class="form-text">Create hashtag, separate with comma </div>
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="seniority">Type of event</label>
                    <select class="form-control" type="text"   wire:model.lazy="event_id" >
                        <option selected>Choose...</option>
                        @foreach($event as $evento)
                        <option value="{{$evento->id}}">{{$evento->eventname}}</option>
                        @endforeach
                        </select>
                        @error('event_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

            </div>

        
    

        
    </form>
    </div>
</main>