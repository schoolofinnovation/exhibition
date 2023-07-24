    <main>
        @if($formm == 'pavilliondashboard')
            @foreach($pavillion as $pav)
                <div class="container my-3">
            
                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        <div class="h4 fw-light mb-0">Pav</div> 
                    
                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                        <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                        <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>
                        
                        {{$evento->startdate}}
                        </div>
                    @endif
                    </div>

                    <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                    </div>
                </div>
                
                </div>
            @endforeach
        @endif

        @if($formm == 'sponsershipdashboard')
            @foreach($pavillion as $pav)
                <div class="container my-3">
            
                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        <div class="h4 fw-light mb-0">Pav</div> 
                    
                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                        <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                        <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>
                        
                        {{$evento->startdate}}
                        </div>
                    @endif
                    </div>

                    <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                    </div>
                </div>
                
                </div>
            @endforeach
        @endif

        @if($formm == 'participantsdashboard')
            @foreach($pavillion as $pav)
                <div class="container my-3">
            
                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        <div class="h4 fw-light mb-0">Pav</div> 
                    
                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                        <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                        <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>
                        
                        {{$evento->startdate}}
                        </div>
                    @endif
                    </div>

                    <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                    </div>
                </div>
                
                </div>
            @endforeach
        @endif

        @if($formm == 'speakerdashboard')
            @foreach($pavillion as $pav)
                <div class="container my-3">
            
                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        <div class="h4 fw-light mb-0">Pav</div> 
                    
                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                        <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                        <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>
                        
                        {{$evento->startdate}}
                        </div>
                    @endif
                    </div>

                    <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                        <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                    </div>
                </div>
                
                </div>
            @endforeach
        @endif


        <section class="container col-lg-8 pt-lg-4 pb-4 mb-3">
            <div class=" ps-lg-0 pe-xl-5">
           
                @if($formm == 'addParticipants')
                    <div class="small">
                        <input type="checkbox" value="1" wire:model="lookingAddParticipants" name="" id=""> Add Participants
                    </div>

                    @if($lookingAddParticipants == 1)
                        <form wire:submit.prevent="updateBrand">
                            <label class="form-label">Add Participants<span class="text-danger">*</span></label> 
                                <textarea type="text" placeholder="participants" class="form-control" wire:model="brand_name" rows="7"></textarea>
                                <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
                        </form>
                    @endif

                    <div class="my-3">
                        <div class="small">
                            <input type="checkbox" value="1" wire:model="lookingAddImage" > Add Images
                        </div>
                        @if($lookingAddImage == 1)
                            <form wire:submit.prevent="multiImage">
                            <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
                                <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_logo"  multiple="multiple">
                                <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
                            </form>
                        @endif
                    </div>
                      
                    <form wire:submit.prevent="participantToAdd">      
                        <div class="row mb-5 pb-2" wire:model="checkvalue">

                            @foreach ($participants as $participant) 
                            {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                            <div class=" col col-auto my-1 px-2"> 
                                <input class="form-check-input" type="checkbox"   value="{{$participant->id}}"  wire:model="checkvalue"> {{$participant->brand_name}} 
                                <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Imagedelete({{$participant->id}})"> <i class="bi bi-x me-2"></i> </a>
                                <img src="{{url('public/assets/image/exhibition/'.$participant->brand_logo)}}" alt="#" width="50px">{{$participant->brand_name}}
                            </div>
                            @endforeach
                            <div>@json($checkvalue)</div>
                            
                        </div>

                        @if($sponser->count() > 0)
                            <select class="form-select flex-shrink-0"  wire:model="sponser_id">
                            <option>Categories</option>
                            <option  value="no">No</option>
                                @foreach ($sponser as $sponseroo)
                                
                                <option  value="{{$sponseroo->id}}">{{$sponseroo->plan}}</option>
                                @endforeach 
                            </select>
                        @else
                        <small>Please active Sponser plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}"> Click</a></small>
                        @endif

                        @if($pavillion->count() > 0)
                        <select class="form-select flex-shrink-0"  wire:model="pavill_id">
                          <option>Pavillion</option>
                          <option  value="no">No</option>
                                @foreach ($pavillion as $pavill)
                                  
                                    <option  value="{{$pavill->id}}">{{$pavill->pavillion_name}}</option>
                                @endforeach 
                        </select>
                        @else
                        <small>Please active Pavillion plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}"> Click</a></small>
                        @endif

                        @if($partners->count() > 0)
                        <select class="form-select flex-shrink-0"  wire:model="partner_id">
                          <option>Pavillion</option>
                          <option  value="no">No</option>
                                @foreach ($partners as $pavill)
                                    
                                    <option  value="{{$pavill->id}}">{{$pavill->pavillion_name}}</option>
                                @endforeach 
                        </select>
                        @else
                        <small>Please active Pavillion plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}"> Click</a></small>
                        @endif
                        
                        <input type="text" placeholder="partner" wire:model="partner"> </input>



                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                    
                    <div class="container my-5">

                    </div>
                @endif

                @if($formm == 'addPavillion')
                    <form wire:submit.prevent="updatePavillion">
                        <input type="text" placeholder="pavillion" wire:model="pavillion_name">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>

                    @foreach($pavillion as $pav)
                        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">
                                <div class="h4 fw-light mb-0"></div> 
                            
                                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                            </div>

                            <div class="col-7  p-0">
                               {{--@if(is_null($pav->desc))
                                        <div class="text-muted fs-sm text-start">{{$pav->pavillion_name}} </div>
                                    @else
                                        <div class="fs-md fw-normal text-start">
                                        {{$evento->pavillion_name}}<br>
                                        
                                        {{$evento->desc}}
                                        </div>
                                @endif--}}
                                <div class=" col col-auto my-1 px-2"> 
                                    <img src="{{url('public/assets/image/exhibition/'.$pav->brand_logo)}}" alt="#" width="50px">{{$pav->brand_name}}
                                </div>
                            </div>

                            <div class="col-3 p-0">
                            @if(is_null($pav->desc))
                                <a href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'id'=> $pav->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                            @else
                                <a href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'id'=> $pav->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                            @endif
                            </div>
                        </div>
                    @endforeach
                @endif

                @if($formm == 'addSponsership')
                    <form wire:submit.prevent="updateSponsership">
                        <input type="text" placeholder="plan" wire:model="plan">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                    @foreach($sponser as $pav)
                                    @php
                                      $getReferenceBrands = DB::table('participants')->where('event_id' , $event_id)->where('pavillion_id' , $pav->id)->get()
                                    @endphp    
                    
                        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">
                                
                                <div class="h4 fw-light mb-0">{{$getReferenceBrands->count()}}</div> 
                            
                                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                            </div>

                            <div class="col-7  p-0">
                                    
                                @if(is_null($pav->desc))
                                    <div class="text-muted fs-sm text-start">{{$pav->plan}} </div>
                                    @foreach($getReferenceBrands as $cget)
                                    {{$cget->brand_id}}
                                    @endforeach
                                @else
                                    <div class="fs-md fw-normal text-start">
                                    {{$evento->pavillion_name}}<br>
                                    
                                    {{$evento->desc}}
                                    </div>
                                @endif
                            </div>

                            <div class="col-3 p-0">
                                @if(is_null($pav->desc))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i> </a>
                                
                                    <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="SponserDelete({{$pav->id}})" class="btn btn-primary btn-sm"> <i class="bi bi-x me-2"></i> </a>
                                @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="SponserDelete({{$pav->id}})" class="btn btn-primary btn-sm"> <i class="bi bi-x me-2"></i> </a>
                                @endif
                            </div>
                        </div>
                        
                    @endforeach


                @endif

                @if($formm == 'addSpeaker')
                    <form wire:submit.prevent="updateSpeaker">
                        <input type="text" placeholder="Speaker" wire:model="name">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>

                    @foreach($speaker as $pav)
                        
                    
                        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">
                                <div class="h4 fw-light mb-0">Pav</div> 
                            
                                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                            </div>

                            <div class="col-7  p-0">
                            @if(is_null($pav->desc))
                                <div class="text-muted fs-sm text-start">{{$pav->name}} </div>
                            @else
                                <div class="fs-md fw-normal text-start">
                                {{$evento->name}}<br>
                                
                                {{$evento->organisation}}
                                </div>
                            @endif
                            </div>

                            <div class="col-3 p-0">
                            @if(is_null($pav->desc))
                                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Add</a>
                            @else
                                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Edit</a>
                            @endif
                            </div>
                        </div>
                        
                    @endforeach
                @endif

                @if($formm == 'add-hastag')
                    <form wire:submit.prevent="addHastag">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="unp-standard-price">Create Hashtag </label>
                            <div class="input-group">
                               <textarea class="form-control" type="text"  rows="5" wire:model.lazy="hastag"></textarea>
                            </div>
                            <div class="form-text">Create hashtag, separate with comma </div>
                            @error('hastag')
                                 <div class="form-text">{{$message}}</div>
                            @enderror

                            @if(count(findListedTag)>0)
                                <div class="col-sm-1">
                                    <label class="form-label" for="seniority">Tag</label>
                                        <select class="form-control" type="text"   wire:model.lazy="hasttag"  id="seniority"  placeholder="Provide short title of your request">
                                        @foreach($findListedTag as $tego)
                                            <option selected>Choose</option>
                                            <option value="{{$tego -> expo->tag}}">{{$tego -> expo->tag}}</option>
                                        @endforeach
                                        </select>
                                        @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                                </div>
                            @endif
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                    </form>

                    <div>
                       <span class="badge">#{{$hastag}}</span> 
                    </div>

                    <div class="container">
                        <div class="d-flex badgeseTag pb-2">
                            @foreach($hastago as $cat)
                                <span class="badge border border-1 text-right border-dark text-dark mr-1">{{$cat->hastag}}
                                    <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Hashdelete({{$cat->id}})"> <i class="bi bi-x me-2"></i> </a> 
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                @if($formm == 'detailPavillion')

                    <form wire:submit.prevent="add">
                        <!-- Title-->
                        <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                            <h2 class="h3 py-2 me-2 text-center text-sm-start">Your Pavillion</h2>
                            
                        </div>
                        
                        <div class="row">
                            

                            <div class=" col-sm-6 mb-3 pb-2">
                                <label class="form-label" for="unp-product-name">Business Industry</label>
                                <input class="form-control" type="text" wire:model.lazy="business" >
                                <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                                @error('business')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                        
                        </div>
                    
                

                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-standard-price">Start Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('startdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-extended-price">Last Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="lastdate">
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                                @error('lastdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
        
                                <label class="form-label" for="unp-standard-price">Number of stall</label>
                                <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                <input class="form-control" type="number" wire:model.lazy="nostall">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('nostall')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            

                            <div class="col-sm-12 mb-3">
                                <label class="form-label" for="unp-extended-price">Description</label>
                                <div class="input-group">
                                <textarea class="form-control" type="text" wire:model.lazy="desc" row="3"></textarea>
                                @error('desc')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                            </div>
                            
                        </div>

                        <div class="mb-3 pb-2">
                            <label class="form-label" for="unp-product-files">Exhibition Poster</label>
                            <input class="form-control" type="file" name="image" wire:model="image">
                            <div class="form-text">Maximum file size is 1GB</div>
                                @error('image')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                        </div>

                        <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                    </form>

                @endif

                @if($formm == 'detailSponsership')
                   <form wire:submit.prevent="">
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-standard-price">Audience</label>
                                <div class="input-group">
                                <input class="form-control" type="number" wire:model.lazy="auidence">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('auidence')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-standard-price">Start Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('startdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-extended-price">Last Date</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="lastdate">
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                                @error('lastdate')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-standard-price">Standard Cost</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="stdcost" placeholder="DD-MM-YYYY">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('stdcost')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="unp-extended-price">Actuall Cost</label>
                                <div class="input-group">
                                <input class="form-control" type="date" wire:model.lazy="extcost">
                                </div>
                                <div class="form-text">Typically 10x of the Standard license price.</div>
                                @error('extcost')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mb-3">
        
                                <label class="form-label" for="unp-standard-price">Sponser Coverage</label>
                                <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                <input class="form-control" type="number" wire:model.lazy="sponsercoverage">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('nostall')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
        
                                <label class="form-label" for="unp-standard-price">Media Coverage</label>
                                <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                <input class="form-control" type="number" wire:model.lazy="mediacoverage">
                                </div>
                                <div class="form-text">Average marketplace price for this category is $15.</div>
                                @error('nostall')
                                <div class="form-text">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                   </form>
                @endif

                @if($formm == 'detailSpeaker')
                @endif
                
                @if($formm == 'detailParticipants')

                    <form action="">
                    </form>

                    @elseif($formm == 'detailSpeaker') 

                        <form  wire:submit.prevent="newSpeaker">
                            <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                                <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Speaker</h2>

                                <div class="py-2">
                                <select class="form-select me-2" wire:model.lazy="event_id">
                                    <option>Select Event</option>
                                    @foreach($exhibition_id as $expo_id)
                                        <option value="{{$expo_id->id}}">{{$expo_id->eventname}}</option> 
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="row g-2">
                                    <div class=" col-6 form-floating mb-1">
                                    <input class="form-control" type="text" placeholder="Name" wire:model="name" wire:keyup="generateSlug">
                                    <label for="fl-text">Name</label>
                                    </div>

                                    <div class=" col-6 form-floating mb-1">
                                        <select class="form-select" wire:model.lazy="designation">
                                            <option selected>Choose Designation</option>
                                            <option value="founder">Founder</option>
                                            <option value="ceo">CEO</option>
                                            <option value="head">Head</option>
                                            <option value="manager">Manager</option>
                                            <option value="entrepreneur">Entrepreneur</option>
                                        </select>
                                        <label for="fl-select">Select Designation</label>
                                    </div>

                                    <div class="col-6 form-floating mb-3">
                                    <input class="form-control" type="text" placeholder="Brand Name" wire:model.lazy="organisation">
                                    <label for="fl-text">Organisation</label>
                                    <div class="form-text">Speaker's Organisation Name</div>
                                    </div>
                                    <div class="col-6 form-floating mb-3">
                                    <input class="form-control" type="text" placeholder="Brand's website" wire:model.lazy="website">
                                    <label for="fl-text">Brand's website</label>
                                    <div>
                                    <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="not_website">
                                    <label class="fs-ms">If you don't have business website.</label></div> 
                                    </div>
                                    
                            </div>

                            <div class="row g-2">
                                    <div class=" col-5 form-floating mb-1">
                                    <input class="form-control" type="text"  placeholder="Contact" wire:model.lazy="contact">
                                    <label for="fl-text">Contact</label>
                                    </div>

                                    <div class="col-7 form-floating mb-1">
                                    <input class="form-control" type="text"  placeholder="e-mail" wire:model.lazy="email">
                                    <label for="fl-text">e-mail</label>
                                    </div>

                                    <div class=" col-5 form-floating mb-3">
                                        <select class="form-select" wire:model.lazy="channel">
                                            <option selected>Choose Social</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="google">Google</option>
                                        </select>
                                        <label for="fl-select">Select Social</label>
                                        <div class="form-text">Select Speaker's social link Platform</div>
                                    </div>

                                    <div class="col-7 form-floating mb-3">
                                    <input class="form-control" type="text"  placeholder="Social Link" wire:model.lazy="link">
                                    <label for="fl-text">Socil Link</label>
                                    <div class="form-text">Upload speaker's social profile address.</div>
                                    </div>
                            </div>

                            <div class="mb-2 pb-2">
                                <!--<label class="form-label" for="unp-product-files">Exhibition booklet for sale</label>-->
                                <input class="form-control" type="file" wire:model.lazy="image">
                                <label class="fs-ms">Upload Speaker's Image</label><span class="form-text">
                                Maximum file size is 1GB</span>                           
                            </div>


                            <div class="form-check mb-1 pb-1">
                                <input class="form-check-input" type="checkbox" value="1"  wire:model.lazy="terms">
                                <label class="form-check-label" for="flexCheckDefault">
                                You must agree with our <a href="#"> Terms & Conditions</a>
                                </label>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                        </form>

                    @elseif($formm == 'planSponsership')
                @endif

            </div>
        </section>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail',['slug' => $evento->slug])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Admin</span>
        </a>
       

        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id,'board'=>'edit'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
          <span class="handheld-toolbar-label">category</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>
    
</main>