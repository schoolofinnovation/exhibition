
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


      home
      Category
      Tags
      Menu

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