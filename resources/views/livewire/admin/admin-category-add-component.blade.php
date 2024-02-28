
    <main> 


       <div class="container">
        <div class="col-lg-8 col-sm-7 ">
            <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
            <a  class="btn btn-primary">Search</a>
        </div>
        
        <div class=" border-0">
              @foreach($resultAdded as $resultAdd)
                 @php
                   $findcountevent = DB::table('dencos')->where('expo_id', $resultAdd->id)->count()
                 @endphp

                   
                  <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="eventdelete({{$resultAdd->id}})">
                  {{$resultAdd -> tag}} {{$findcountevent}}<i class="bi bi-x me-2"></i>
                    </a>
              @endforeach
        </div>

        {{$counteventWithCategory}}

        @if(is_null($searchTerm))
            <p class="text-center my-5">like to find Something businessfull</p>
            @else
              <div class="my-5">
                <p>Result</p>
                @foreach ($searchcat as $searchcato)
                  <a href="#" class="badge bg-success m-0" wire:click.prevent="updateEventstatus({{$searchcato->id}},'1')"> {{$searchcato->tag}}  </a>
                @endforeach
              </div>
        @endif

      </div>





      <!-- //panel for industry Heads -->
       
      <div class="container">
        <h5>Industry <a href="" class=""> <i class="bi bi-pencil"></i></a> </h5>
        @foreach($industryhead as $headcategories)
          <div class="text-accent">
          <h5>{{$headcategories->industry}} <a href="" class=""> <i class="bi bi-pencil"></i></a> </h5>
          <a href="" class=""><i class="bi bi-pencil"></i></a>
            <hr>
               <div>
                @foreach($subcategory as $findo)
                  
                  

                  <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" 
                  onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  
                  wire:click.prevent="eventdelete({{$findo->id}})">
                 
                    </a>
                    @php
                       $findsubcat = DB::table('expos')->where('id', $findo -> subtag_id )->where('type','tag')->value('tag');
                    @endphp

                    {{$findsubcat}} {{$findcountevent}}<i class="bi bi-x me-2"></i>
                    <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" wire:click.prevent="eventdelete({{$findo->id}})"><i class="bi bi-plus me-2"></i></a>
                @endforeach
                <span class="badge bg-primary mt-0"><i class="bi bi-plus me-2"></i></span>
                </div>

            <div>
            <a href="{{route('admin.categories')}}" class="btn btn-primary btn sm">testing<i class="bi bi-pencil"></i></a>
            <a href="{{route('admin.categories', ['board' => 'addsubcategory', 'category' => $headcategories -> slug])}}" class="btn btn-primary btn sm"><i class="bi bi-pencil"></i></a>
              <a href="" class="btn btn-primary btn sm">Active</a>
              <a href="" class="btn btn-primary btn sm">De-Active</a>
            </div>
          </div>

          <hr>
        @endforeach
      </div>

      @if($board == 'addsubcategory')
        <div class="container">Add Sub-category</div>
        <div>testing</div>
      @elseif($board == 'job')
      @endif




      <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
          <!-- @if($board == 'job')
            <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
              <span class="handheld-toolbar-icon">
              <i class="ci-filter-alt"></i></span>
              <span class="handheld-toolbar-label">Job</span>
            </a>
            
            <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
              <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
              <span class="handheld-toolbar-label">Add</span>
            </a>
          @elseif($board == 'magazine')
            <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label">Magazine</span>
              </a>
              
              <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
                <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
                <span class="handheld-toolbar-label">Add</span>
              </a>
          @elseif($board == 'blog')

              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
              </a>
              
              <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
                <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                <span class="handheld-toolbar-label">Add</span>
              </a>

          @elseif($board == 'event')
              
              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
              </a>
              
              <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                <span class="handheld-toolbar-label">Add</span>
              </a>
          
          @elseif($board == 'visitor')
              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
              </a>
              
              <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                <span class="handheld-toolbar-label">Add</span>
              </a>
          @elseif($board == 'client')
              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
              </a>
              
              <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                <span class="handheld-toolbar-label">Brand</span>
              </a>
          @endif -->

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Home</span>
              </a>

              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Category</span>
              </a>

              <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                <span class="handheld-toolbar-icon">
                <i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Tag</span>
              </a>

          <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
          </a>
        </div>
      </div>
    </main>