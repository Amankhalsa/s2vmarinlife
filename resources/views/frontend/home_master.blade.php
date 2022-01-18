<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
        <title>@yield('title') - Best Internal Aquarium Filter | Buy Aquarium Filter
</title>
    <meta charset="utf-8">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- open graph  -->
 @include('frontend.body.opengraph')
<!-- open graph  -->
<!-- favicon start  -->
 @include('frontend.body.favicon') 
<!-- favicon end  -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/main_css.css')}}">
<!-- start Favicon -->


<!-- End Favicon -->

  </head>
  <body class="text-wrap">

<!-- navbar start -->
@include('frontend.body.navbar')

<!-- navbar emd -->

<!-- slider start  -->
@include('frontend.body.slider')
<!-- slider end  -->

<img src="{{asset('frontend/assets/img/loader.gif')}}" class=" center" alt=" loader" id="loader"  >
<div>
@yield('content')
</div>



<!-- footer start -->
@include('frontend.body.footer')
<!-- footer emd -->



<!-- javascript  -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- javascript  -->

<!-- loader js  -->
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
<!-- loader js  -->

  </body>
</html>