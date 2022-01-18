@extends('frontend.home_master')
  
@section('title')
S2V Marine Life
@endsection
  
@section('content')
<!-- slider  -->
<!--slider -->

<!--  slider end -->

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{session('success')}}</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif  
<!-- end slider  -->

<div class="container">
    <div class="py-5">
<h1 class="text-center text-danger py-5">
Best Aquarium Internal Filters For Fresh And Salt Water
</h1>
<!-- card start  -->
<div class="card-deck">
  <div class="card">
    <img src="{{asset('frontend/assets/img/place.webp')}}" class="card-img-top img-fluid" alt="...">
  
    <h5 class="my_card-title">Convict Mini 12W
</h5>
  </div>
  <div class="card">
    <img src="{{asset('frontend/assets/img/place.webp')}}" class="card-img-top" alt="...">
    <!-- <div class="card-body"> -->
      <h5 class="my_card-title">Jaguar 15W
</h5>
    <!-- </div> -->
 
  </div>
  <div class="card">
    <img src="{{asset('frontend/assets/img/place.webp')}}" class="card-img-top" alt="...">

      <h5 class="my_card-title">Oscar Jumbo 40W 
</h5>

 
  </div>
</div>
<!-- card end  -->
    </div>


<!-- ============================ -->
<div class="py-5">
    <div>
        <p class="main_heading text-center py-5">
        EVERYTHING YOU NEED IN A AQUARIUM INTERNAL FILTER.
        </p>
     
    </div>
    <!-- row start  -->

  <div class="row row-cols-1 row-cols-md-2">
      <!-- ================== -->
  <div class="col mb-4">
    <div class="card">
      <img src="{{asset('frontend/assets/img/nyc-skyline.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">QUALITY ASSURED
</h5>
        <p class="card-text">Indian Product With 6 months Guarantee
</p>
<button class="btn btn-primary">Know More
</button>
      </div>
    </div>
  </div>
  <!-- ================== -->
    <!-- ================== -->
    <div class="col mb-4">
    <div class="card">
      <img src="{{asset('frontend/assets/img/nyc-skyline.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">USER FRIENDLY
</h5>
        <p class="card-text">Easy To Clean & Install
</p>
<button class="btn btn-primary">Know More
</button>
      </div>
    </div>
  </div>
  <!-- ================== -->
      <!-- ================== -->
      <div class="col mb-4">
    <div class="card">
      <img src="{{asset('frontend/assets/img/nyc-skyline.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PERFECTION AT TOP
</h5>
        <p class="card-text sub_heading">Filter, Circulate & Supply Oxygen
</p>
<p class="para">Filter Sponge absorb dirt to clear water, gives the perfect water circulation and supply O2 into water.
</p>
<button class="btn btn-primary">Know More
</button>
      </div>
    </div>
  
  </div>
  <!-- ================== -->
      <!-- ================== -->
      <div class="col mb-4">
    <div class="card">
      <img src="{{asset('frontend/assets/img/nyc-skyline.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SMART DESIGN
</h5>
        <p class="card-text sub_heading">Fix common issues
</p>
<p class="para">Plugs are designed to fix loose connection issue and water leakage from air pipe during power outage.
</p>
<button class="btn btn-primary">Know More
</button>
      </div>
    </div>
  </div>
  <!-- ================== -->
</div>


  <!-- ================== -->


    <!-- row end  -->
</div>




<!-- container end  -->
</div>

@endsection