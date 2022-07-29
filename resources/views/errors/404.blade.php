<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 17:56:06 GMT -->
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
					  <img src="{{ asset('assets/images/auth-bg/404.png')}}" class="max-w-650 w-p100" alt="" />
					  <h1>Page Not Found !</h1>
					  <h3>looks like, page doesn't exist</h3>
					  <div class="my-30"><a href="{{ url('/')}}" class="btn btn-danger">Back to Home</a></div>				  

					  
				  </div>
			  </div>				
		  </div>
		</div>
	</section>
	
	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>	
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
	
	
</body>

</html>
