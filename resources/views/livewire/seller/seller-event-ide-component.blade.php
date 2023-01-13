<div class="container">
   <div class="row pt-5">
      <div class="col-6 order-2 ">
         <ul> Popular Tags Rating {{$rate->count()}} {{ROUND($rate->avg('rate'))}}%
          <li class="border-bottom  pb-1">  @foreach($tryc as $check)
            <div class="badge bg-primary">{{$check->hasttag}} {{$check->tryu}} </div>
            <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"></span>
            @endforeach</li>
         

            
         <li>
            Pavillion {{$pavillion->count()}}
            @if($pavillion->count() > 0)
                  <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
               @else
                  <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
            @endif
               <div class="row">
                  @foreach($pavillion as  $check )
                     
                        <div class="col border-left">{{Carbon\Carbon::parse ($check -> startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($check -> lastdate)->format('D, d M')}}   
                           <div class="h4">{{$check -> pavillion_name }}</div>
                           <div class="fs-md">{{$check -> business }}</div>
                           <p class="bg-secondary small fs-sm">{{$check -> desc }}</p>
                           Space <a class="navbar-tool-icon-box bg-secondary dropdown-toggle p-1"><span class="navbar-tool-label">{{$check -> nostall }}</span></a>
                        </div>               
                     
                  @endforeach
               </div>
         </li>

   </ul>
      </div>
      <div class="col-6 order-1 border">
      {{Carbon\Carbon::parse ($event -> startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event -> lastdate)->format('D, d M')}}
      <br>
      <div class="h4">{{$event->eventname}}</div>
       |   Auidence : Visitor {{$event->auidence}} | Exhibitor {{$event->exhibitors}} 
         <br>
         Catgeory :: category: {{$event -> category->industry}} | Sector: {{$event -> sector -> sector}} | Expo: {{$event->expo->expoindustry}} | Search: {{$event->search->tag}}<br>
         Venue:: {{$event->venue}} {{$event->city}} {{$event->country}} <br>
         Contact:: {{$event->organizer}} {{$event->email}} {{$event->phone}}

            <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>

      </div>
   </div>
<ul>

</br>


<br>Sponsership {{$sponsership->count()}} 
@if($sponsership->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
 {{$sponsership}}

<hr>

<br>Speaker {{$speaker->count()}}
@if($speaker->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
<ul><li>{{$speaker}}</li></ul><hr>

<br>Partner {{$partner->count()}}
@if($partner->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
<ul><li>{{$partner}}</li></ul><hr>

<br>
</br>

<ul>
    
</ul>

<hr>
<br>Ticket  {{$ticket->count()}}
@if($ticket->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
<ul><li> {{$ticket}}</li></ul><hr>


<br>Lead {{$lead->count()}}
@if($lead->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
<ul><li>{{$lead}}</li></ul><hr>

<br>Hashtag {{$hashtag->count()}}
@if($hashtag->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>
    <ul>
       

        @foreach($hashtag as $check)

        <li>{{$check -> hastag}} </li>
        
        @endforeach
    </ul>

<hr>
<br>Rating {{$rate->count()}} {{ROUND($rate->avg('rate'))}}%
@if($rate->count() > 0)
   <a href="#" class="btn  btn-sm btn-outline-primary"> Edit</a>
@else
   <a href="#" class="btn btn-sm btn-outline-primary"> Add</a>
@endif
</br>

</div>
