@php
$email="";
$sitename=" S2V Marinelife.com";
$phone="";
@endphp

<footer  style="background-image:var(--footercolor)" id="contact">

<div class="" >
	<!-- Region bg start  -->
	<div class=" border border-top-0 border-left-0 border-right-0 border-bottom-2 " >
	<div class="container-fluid">
		<p class="text-light text-left pt-3" >Country/Region:<img src="{{asset('frontend/assets/img/flag.png')}}" alt="US Flag-icon"> United States</p>
	</div>
</div>
	<!-- Region bg end  -->
<div class="container-fluid text-white text-wrap mt-2">	
	<div class="row mt-3">  	<!-- row start  -->
		<div class="col-md-4">		
			<p class="text-justify " style="font-size:12px;" >
            <img src="{{asset('frontend/assets/img/logo.png')}}" class="img-fluid " alt="logo" width="45px"> <span style="font-size: 20px;"> {{($sitename == true)?$sitename:""}}</span>
 <br> <br>

<address>
<i class="fa fa-envelope-o" aria-hidden="true"></i> Email:
<a href="mailto:{{($email == true )? $email :''}}" class="text-light">  
{{($email == true )? $email :''}}</a><br>

<i class="fa fa-phone" aria-hidden="true"></i> Call us: <a href="tel:1 (888) 988-3342" class="text-white">{{($phone == true)?$phone:''}} </a><br>
<i class="fa fa-globe" aria-hidden="true"></i> Website: <a href="#" class="text-light">{{($sitename == true)?$sitename:""}}</a>
<img src="{{asset('frontend/assets/img/card.png')}}" alt="" class=" img-fluid " width="55%">
</address>

				</div>
			<div class="col-md-2  "> 
<p class=" text-left mb-0">Shop Online
 </p>
<a class="nav-link text-light" href="#"> 
<i class="fa fa-" aria-hidden="true"></i> Aquarium Filters</a>

<a class="nav-link text-light" href="#">
<i class="fa fa-" aria-hidden="true"></i> Aquarium Filters </a>
<a class="nav-link text-light" href="#">
<i class="fa fa-" aria-hidden="true"></i> Aquarium  Filters</a>
<a class="nav-link text-light" href="#"> 
<i class="fa fa-" aria-hidden="true"></i> Aquarium Filters </a>
			
			</div>
			<div class="col-md-2  "> 
				<p class="text-left mb-0"> Contact US</p>     
				<!-- <a class="nav-link text-light" href="services.html">Services </a> -->
				<a class="nav-link  text-light" href=""><i class="fa fa-" aria-hidden="true"></i>Privacy Policy </a>	
			<a class="nav-link  text-light" href="#"><i class="fa fa-" aria-hidden="true"></i>Terms &amp; Conditions </a>	
			<a class="nav-link  text-light" href="#"><i class="fa fa-" aria-hidden="true"></i>Chat with rep</a>	
			<a class="nav-link  text-light" href="#"><i class="fa fa-" aria-hidden="true"></i>Tutorials </a>	
		

			</div>
			<div class="col-md-4  "> 
				<p class="text-left mb-0"><i class="fa fa-"> </i> My Account</p> 	

				<a class="nav-link  text-light" href="#">
				<i class="fa fa-" aria-hidden="true"></i>Order History </a>	
			<a class="nav-link  text-light" href="#">
				<i class="fa fa-" aria-hidden="true"></i>Track My order</a>	
			<a class="nav-link  text-light" href="#">
				<i class="fa fa-" aria-hidden="true"></i>My account</a>	
		
                <form  action="{{route('subscribed.reg')}}" method="post" >
                	@csrf

           
          
<table>
    <tr><td>
           <div class="form-group">
<Label>Stay Connected</label>
<input class="form-control form-control-sm" type="email" name="email"  placeholder="E-Mail us for newsletters" />
@error('email') 
<span class="text-danger">{{ $message }} </span>
@enderror
</div>
</td>
<td>
   <div class="form-group">
<button class="btn btn-warning btn-sm " type="submit" name="submit" style="margin-top:32px;">Sign Up
</button>
</div></td>
<tr>
</table>
                </form>
         

				
			</div>
			
		</div>	<!-- row end  -->
		
		</div>   <!-- footer Container end -->


</div>
<div class=" border  border-left-0 border-right-0 pb-0 bg-dark" >

	<p class="text-center pt-3 text-light">
 Copyright © {{ date('Y')}} 
     <a href="" class="text-white text-decoration-none ">
         <a href="#" class="text-light">{{($sitename == true)?$sitename:""}}</a>
        </a>, All Rights Reserved  </p>


		
</div>


</footer>