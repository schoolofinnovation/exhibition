@section('page_title','update brand')

@section('page_description','Job')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
@section('page_author' , 'COI - CouncilofInnovation')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')


         <main> 


<div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
         
            @if (Session::has('message'))
            <h6 class="fs-base text-light mb-0">
            {{Session::get('message')}}
            </h6>
            @endif
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.blogdashboard')}}"><i class="ci-sign-out me-2"></i>Blog</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.job')}}"><i class="ci-sign-out me-2"></i>Job</a>
            <a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Post</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.user')}}"><i class="ci-sign-out me-2"></i>User</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.franchise')}}"><i class="ci-sign-out me-2"></i>Franchise</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.info')}}"><i class="ci-sign-out me-2"></i>Info</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.dashboard')}}"><i class="ci-sign-out me-2"></i>Dashboard</a>
            <a class="btn btn-primary btn-sm ml-1" href="{{route('admin.contact')}}"><i class="ci-sign-out me-2"></i>Contact</a>
          </div>

<div class="table-responsive">
  <table class="table table-bordered">
    <thead;>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Phone</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Blog</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>Category</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>CEO, Founder</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
        <td><a class="btn btn-primary btn-sm ml-1" href="#"><i class="ci-sign-out me-2"></i>+3 555 68 70</a></td>
      </tr>
    </tbody>
  </table>
</div>
         </main>