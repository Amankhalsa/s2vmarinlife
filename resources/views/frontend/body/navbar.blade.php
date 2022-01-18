<!-- ============ Top header ================= -->


	<!-- top header info  start  -->




		<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top pt-0 pb-0 ">
        <a class="navbar-brand text-light text-wrap brand_text " href="{{route('homepage.view')}}">
<img src="{{asset('frontend/assets/img/logo.png')}}" class="img-fluid " alt="logo" width="45px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto ">
		<li class="nav-item active">
		<a class="nav-link" href="#"><i class="fa fa-cart" aria-hidden="true"></i> Explore   </a>
		</li>
		<li class="nav-item ">
		<a class="nav-link" href="{{route('filters_psge.view')}}"><i class="fa fa-" aria-hidden="true"></i> Filter   </a>
		</li>
		<li class="nav-item ">
		<a class="nav-link" href="#"><i class="fa fa-" aria-hidden="true"></i> Support  </a>
		</li>
		
		</ul>

		<form class="search-form " >
    <div class="input-group ">
  
		<input class="form-control" type="text" placeholder="Search here.." style="width: 130px; border-radius:15px;"  />
		<div class="input-group-prepend ">
	
&nbsp;
		<span class="input-group-text " style="background-color:  var(--navtextcolor); color:white; border-radius:15px;">
	<a href="#" class="text-white">
        <i class="fa fa-shopping-cart " aria-hidden="true"> Cart</i> </a>
    </span>

	
	</div>
		

    </div>
</form>


</nav>
