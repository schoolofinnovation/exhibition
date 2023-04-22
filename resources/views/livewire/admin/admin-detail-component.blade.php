@section('page_title',  ($this->slug))

<main>
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                @else
                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                @endif 
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-4  p-0">
              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                  {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
              <div class="text-muted fs-sm text-start">
                  @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                  {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                  @else
                  {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                  @endif 
              </div>  
              <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
            </div>

            <div class="col-3  p-0">
              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                  Last update: {{$evento->updated_at}}</a></div>
              
                  @if(is_null($evento->created_at))
                    <div class="text-muted fs-sm text-start">Created at: {{$evento->created_at}}</div>  
                  @else
                    <div class="text-muted fs-sm text-start">Created by: Admin</div>
                  @endif
              
              <div class="text-muted fs-sm text-start">{{$evento->edition}} </div>
            </div>

            <div class="col-3  p-0">
            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
               
                <div class="h4 fw-light mb-0"> {{$evento->id}}</div> 
                <div class="small text-muted">ID</div>
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-2  p-0">
              <div class="fs-md fw-normal text-start">
               @if(is_null($evento->category_id)) 
                  <a value="1" href="" wire:click="$categ" class="btn-sm btn-primary btn">ADD</a>
               @else
                  {{$evento->category->industry}}
               @endif
              </div>
              <div class="text-muted fs-sm text-start">
                Category 
              </div>
            </div>

            <div class="col-2  p-0">
              <div class="fs-md fw-normal text-start">
               @if(is_null($evento->search_id)) 
                  <a href="" class="btn-sm btn-primary btn">ADD</a>
               @else
                  {{$evento->search_id}}  <a href="" class="btn-sm btn-primary btn">Edit</a>
               @endif
              </div>
              <div class="text-muted fs-sm text-start">
                Search 
              </div>
            </div>

            <div class="col-2  p-0">
              <div class="fs-md fw-normal text-start">
               @if(is_null($evento->sector_id)) 
                  <a href="" class="btn-sm btn-primary btn">ADD</a>
               @else
                  {{$evento->sector_id}}  <a href="" class="btn-sm btn-primary btn">Edit</a>
               @endif
              </div>
              <div class="text-muted fs-sm text-start">
                Sector 
              </div>
            </div>

            <div class="col-2  p-0">
              <div class="fs-md fw-normal text-start">
               @if(is_null($evento->expo_id)) 
                  <a href="" class="btn-sm btn-primary btn">ADD</a>
               @else
                  {{$evento->expo_id}}  <a href="" class="btn-sm btn-primary btn">Edit</a>
               @endif
              </div>
              <div class="text-muted fs-sm text-start">
                Expo 
              </div>
            </div>

            <div class="col-2 p-0">
               @if(is_null($evento->sector_id || $evento->category_id || $evento->expo_id || $evento->search_id))
                <a  href="{{route('admin.eventEdit',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Update</a>
               @else
                <a href="{{route('admin.eventEdit',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Add</a>
               @endif
            </div>
        </div>
    </div>

    {{--tag--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Tag</div> 
                <div class="small text-muted">Line</div>
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start">
                  {{$evento->tagline}}
              </div>
              <div class="text-muted fs-sm text-start">
                Suggest Something big happen! 
              </div>
            </div>

            

            <div class="col-2 p-0">
               @if(is_null($evento->tagline))
                <a href="" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="" class="btn btn-primary btn-sm">update</a>
               @endif
            </div>
        </div>
    </div>

   {{--Short--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Short</div> 
                <div class="small text-muted">Description</div>
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start">{{$evento->shtdesc}}</div>
              <div class="text-muted fs-sm text-start">
                Short Story should be more convincing 
              </div>
            </div>

            

            <div class="col-2 p-0">
               @if(is_null($evento->shtdesc))
                <a href="" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="" class="btn btn-primary btn-sm">Update</a>
               @endif
            </div>
        </div>
    </div>

   {{--Long--}}
    <div class="container my-3">
        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                <div class="h4 fw-light mb-0">Long</div> 
                <div class="small text-muted">Description</div>
                <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start">{{$evento->desc}}</div>
              <div class="text-muted fs-sm text-start">
               Long Description should be well Described 
              </div>
            </div>

            

            <div class="col-2 p-0">
               @if(is_null($evento->desc))
                <a href="" class="btn btn-primary btn-sm">Add</a>
               @else
                <a href="" class="btn btn-primary btn-sm">Update</a>
               @endif
            </div>
        </div>
    </div>

    <div class="container">
     <form wire:submit.prevent="catUpdate">
        <div class="col-sm-1">
          <label class="form-label" for="seniority">Category</label>
          <select class="form-control" type="text"   wire:model.lazy="category_id"  placeholder="Provide short title of your request">
              <option selected>Choose</option>
              @foreach($catevent as $categ)
                <option value="{{$categ->id}}">{{$categ->industry}}</option>
              @endforeach
          </select>
              @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
        </div>
        <a href="#" type="submit" class="btn btn-primary">Submit</a>
      </form>
    </div>
    
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="#shop-sidebar" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Filters</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Status</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i>
          <span class="badge bg-primary rounded-pill ms-1">4</span></span>
          <span class="handheld-toolbar-label">$265.00</span>
        </a>
      </div>
    </div>

</main>