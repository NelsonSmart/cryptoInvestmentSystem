<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="{{asset('img/'.$settings->site_logo)}}">

    <title>{{$settings->site_title}} - {{$settings->site_descr}}</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/skin_color.css')}}">
     
  </head>

<body class="theme-warning">
	
	<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div>
					   <h1 class="fs-180 fw-bold"> <img src="{{asset('assets/images/logo.png')}}"></h1>
					  <h1>UNDER MAINTENANCE!</h1>
					  <h3>We're sorry for the inconvenience.</h3>
					  <h4>Please check back later.</h4>	
				  </div>
			  </div>				
		  </div>
		</div>
	</section>
	
	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>	
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('asets/js/template.js')}}"></script>
	
	
	
</body>

</html>
