@php
$sliders=DB::table('homesliders')->get();
@endphp
<div class="container-fluid px-0 ">

    <div id="carouselExampleCaptions" class="carousel slide  " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner h-50">
    @foreach( $sliders as $key => $slider)  
        <div class="carousel-item {{ $key ==0 ? 'active' :'' }}">
      <img src="{{asset($slider->image)}}" class="d-block w-100 " alt="{{$slider->alttag}}" >
      <!-- <img src="{{asset('frontend/assets/img/flag1.png')}}" alt="indian-flag" width="150" height="85" > -->
      <!-- <p class="flag_image text-white">From India, From Indians
</p> -->
    
      
        <div class="carousel-caption  d-none d-md-block">
        <h5 style="font-size: 4rem;" >{{$slider->title}}{{$slider->boldtitle}}
 </h5>
            <p  style="font-size:20px;">	{{$slider->subtitle}}
</p>
<button class="btn btn-light">Shop Now</button>


        </div>
        </div>
@endforeach


    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>