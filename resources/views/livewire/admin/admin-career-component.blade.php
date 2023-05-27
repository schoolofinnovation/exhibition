@section('page_title','Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<main> 



 
    <div class="row">
                           
        <div class="container  ">
          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                
                  <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($findo->updated_at)->format('d')}}</div> 
                  <div class="small text-muted">{{Carbon\Carbon::parse ($findo->updated_at)->format('M')}} </div>
                
                  <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
            </div>

            <div class="col-7  p-0">
              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $findo->slug])}}">
                {{ucwords(trans(Str::limit($findo->title, 24)))}}</a></div>
              <div class="text-muted fs-sm text-start">
                
                  {{Carbon\Carbon::parse ($findo->updated_at)->format('D, d M')}}
                
              </div>  
              <div class="text-muted fs-sm text-start">{{ucfirst(trans($findo -> location_state))}}, {{ucfirst(trans($findo -> location_country))}}</div>
            </div>

            <div class="col-3  p-0">
              {{-- <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $findo->slug])}}">
                  <img src="{{url('exhibition/'.$findo->image)}}" alt="{{Str::limit($findo->eventname, 24)}}"></a>--}}
            </div>
          </div>
        </div>
      
    </div>

    
                           
        <div class="container  ">
          <div class=" text-center p-1 gx-0 mb-1">
            

            <div class="col  p-0">
              <div class="text-start fw-bold">Job description</div>
              <div class="text-muted text-start">What you'll do</div>  
              <div class="small text-start">Responsibilities</div>

              <div class="fs-xs  lh-1 fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $findo->slug])}}">
                {{ucwords(trans(Str::limit($findo->description)))}}</a></div>
             {{-- <div class="text-muted fs-sm text-start">
                
                  {{Carbon\Carbon::parse ($findo->updated_at)->format('D, d M')}}--}}
                
              </div>  
              {{--<div class="text-muted fs-sm text-start">
                {{ucfirst(trans($findo -> location_state))}}, {{ucfirst(trans($findo -> location_country))}}</div>--}}
            </div>

            
          </div>
       
    
 
              <div class="fs-sm fw-lighter">Qualification</div>
              <div class="fs-md">{{$findo->qualification}}</div>

              <div class="fs-sm fw-lighter">Industry Type</div>
              <div class="fs-md">{{$findo->qualification}}</div>

              <div class="fs-sm fw-lighter">Department</div>
              <div class="fs-md">{{$findo->Department}}</div>

              <div class="fs-sm fw-lighter">Role</div>
              <div class="fs-md">{{$findo->qualification}}</div>

              <div class="fs-sm fw-lighter">Role Category</div>
              <div class="fs-md">{{$findo->qualification}}</div>

              <div class="fs-sm fw-lighter">Employment type</div>
              <div class="fs-md">{{$findo->type}}</div>

              <div class="fs-sm fw-lighter">Education</div>
              <div class="fs-md">{{$findo->qualification}}</div>


              <div class="fs-sm fw-lighter">About Company</div>
              <div class="fs-md">{{$findo->qualification}}</div>
        </div>

  {{--<div class="container">
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
          <div class="text-sm-end">
          <a class="btn btn-primary" href="" data-bs-toggle="modal">Add New Job Post </a>          
          </div>
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>

          <div class="table-responsive fs-md mb-4">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>title:slug:type</th>
                  <th>skills:level</th>
                  <th>desc:req</th>
                  <th>qual:exp.</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>

              @foreach ($jobs as $info)
                <tr>
                  
                  <td class="py-3 align-middle">{{$info->id}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}} , {{$info->department}}<br>{{$info->experience}} 
                                                            , {{$info->type}}<br>
                                                            {{$info->location_state}} , {{$info->location_country}}</span></td>
                  <td class="py-3 align-middle">{{$info->skills}}<br>{{$info->level}}</td>
                  <td class="py-3 align-middle">{{$info->description}}<br>{{$info->requirement}}</td>
                  <td class="py-3 align-middle"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                 
                  
                  
                  <td class="py-3 align-middle">
                    @if($info->status == 'active')
                    <span class="badge bg-success m-0">Active</span>
                    @else
                    <span class="badge bg-danger m-0">Deactive</span>
                    @endif
                    </td>

                  <td class="py-3 align-middle">
                  <a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit">
                  <i class="bi bi-pencil"></i></a>

                  <a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                      <div class=" bi bi-x"></div></a> </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div> 
          {{$jobs->links('pagination-links')}}
  </div>--}}






    <script type="application/ld+json">
      {
        "@context" : "https://schema.org/",
        "@type" : "JobPosting",
        "title" : "{{$findo->title}}",
        "description" : "<p>{{$findo->desc}}</p>",
        "identifier": {
          "@type": "PropertyValue",
          "name": "The Exhibition Network",
          "value": "1234567"
        },
        "datePosted" : "{{$findo->updated_at}}",
        "validThrough" : "{{$findo->updated_at->addMonth(30)}}",
        "employmentType" : "{{$findo->type}}",
        "hiringOrganization" : {
          "@type" : "Organization",
          "name" : "The Exhibition Network",
          "sameAs" : "https://exhibition.org.in",
          "logo" : "https://exhibition.org.in/image/Yoyo.png" 
        },
        "jobLocation": {
        "@type": "Place",
          "address": {
          "@type": "PostalAddress",
          "streetAddress": "1600 Amphitheatre Pkwy",
          "addressLocality": "{{$findo->location_state}}",
          "addressRegion": "{{$findo->location_state}}",
          "postalCode": "110031",
          "addressCountry": "{{$findo->location_country}}"
          }
        },
        "baseSalary": {
          "@type": "MonetaryAmount",
          "currency": "INR",
          "value": {
            "@type": "QuantitativeValue",
            "value": 40000.00,
            "unitText": "MONTH"
          }
        }
      }
    </script>
  

</main>