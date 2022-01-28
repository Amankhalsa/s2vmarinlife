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


<h1 class="text-center text-light py-5   mt-5 alert rounded-pill" style="background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);">
Best Aquarium Internal Filters For Fresh And Salt Water
</h1>
<div class="container">
    <div class="">

<!-- card start  -->
<div class="card-deck">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod " url="#" number="2">
      <div class="hover-offer ehover1"><img class="img-responsive" src="https://www.edreams.es/content/img/OF/WebMasterPages/merch/img/672sized/672x584_Paris-min.jpg" alt="París" />
        <div class="offer-content">
          <div class="ribbon orange">Convict Mini 12W</div>

          <figcaption> 
          <span class="flights-icon">(</span>
          <h4>Coming soon</h4>

       
          
            <div class="button2">Buy Now</div>
            
          <p class="detail"> &#9733;&#9733;&#9733;</p>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="2">
      <div class="hover-offer ehover1"><img class="img-responsive" src="https://www.edreams.es/content/img/OF/WebMasterPages/merch/img/672sized/672x584_Paris-min.jpg" alt="París" />
        <div class="offer-content">
          <div class="ribbon orange">Jaguar 15W
</div>
          <figcaption> 
          <span class="flights-icon">(</span>
          <h4>Coming soon</h4>
          <p class="detail"> &#9733;&#9733;&#9733;</p>
            <div class="button2">Buy Now</div>
          </figcaption>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pod" url="#" number="2">
      <div class="hover-offer ehover1"><img class="img-responsive" src="https://www.edreams.es/content/img/OF/WebMasterPages/merch/img/672sized/672x584_Paris-min.jpg" alt="París" />
        <div class="offer-content">
          <div class="ribbon orange">Oscar Jumbo 40W 
</div>
          <figcaption> 
          <span class="flights-icon">(</span>
          <h4>Coming soon</h4>
          <p class="detail"> &#9733;&#9733;&#9733;</p>
            <div class="button2">Buy Now</div>

          </figcaption>
        </div>
      </div>
    </div>
  <!-- ================== -->
</div>
<!-- card end  -->
    </div>
</div>

<!-- ============================ -->
<div class="py-5">
    <div>
        <p class="main_heading text-center my-5 py-5 text-light rounded-pill font-weight-bold" style="background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);">
        EVERYTHING YOU NEED IN A AQUARIUM INTERNAL FILTER.
        </p>
      
    </div>
    <!-- row start  -->
<div class="container">
  <div class="row row-cols-1 row-cols-md-2">
      <!-- ================== -->
  <div class="col mb-4">
    <div class="card zoom">
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
    <div class="card zoom">
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
    <div class="card zoom">
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
    <div class="card zoom">
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