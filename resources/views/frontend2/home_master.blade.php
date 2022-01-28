<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') - Best Internal Aquarium Filter | Buy Aquarium Filter</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend2/assets/css/color-01.css')}}">

	      <!-- Toaster CSS -->
		  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

	<!-- open graph  -->
	@include('frontend.body.opengraph')
<!-- open graph  -->
<!-- favicon start  -->
 @include('frontend.body.favicon') 
<!-- favicon end  -->
</head>
<body class="home-page home-01 ">

<img src="{{asset('frontend/assets/img/loader.gif')}}" class=" center" alt=" loader" id="loader"  >
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    @include('frontend2.body.header')
	
	@if(session('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong>{{session('success')}}</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif 




<!-- end header  -->

<main id="main">
@yield('content')

	</main>

	<footer id="footer">
    @include('frontend2.body.footer')
	</footer>
	
	<script src="{{asset('frontend2/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('frontend2/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('frontend2/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('frontend2/assets/js/functions.js')}}"></script>


	<script>
	document.onreadystatechange = function() {
	if (document.readyState !== "complete") {
	document.querySelector(
	"body").style.visibility = "hidden";
	document.querySelector(
	"#loader").style.visibility = "visible";
	} else {
	document.querySelector(
	"#loader").style.display = "none";
	document.querySelector(
	"body").style.visibility = "visible";
	}
	};
</script>
 <!-- Toaster Javascript cdn -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>
</html>