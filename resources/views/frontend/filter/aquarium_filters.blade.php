@extends('frontend.home_master')
  
@section('title')
Aquarium-filters
@endsection
  
@section('content')
<!-- slider  -->




<!-- end slider  -->

<div class="container">
    <!-- product  -->
@include('frontend.product.product1')
<!-- product  -->
  


<!-- ============================ -->
<div class="py-5">
    <div>
        <p class="main_heading text-center">
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


<button type="button" class="btn btn-info my-5" data-toggle="collapse" data-target="#demo">Know more sample</button>
  <div id="demo" class="collapse ">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>

<!-- container end  -->
</div>

@endsection