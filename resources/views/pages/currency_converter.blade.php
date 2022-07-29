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
	<link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">
	  
     
  </head>

<body class="theme-warning">
	
    @include('pages.header')
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url({{ asset('assets/images/front-end-img/background/bg-8.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Currency Converter</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Trade</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50">
		<div class="container">
		
		   <div class="row">
				<div class="col-12">
					<div class="box bg-transparent no-shadow">
						<div class="box-body">
			
			                  <div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="100%" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>	
		                 </div>
			       </div>	
		    	</div>
			</div>
		</div>
	</section>
	
	@include('pages.footer')
	
	
	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="{{ asset('assets/corenav-master/coreNavigation-1.1.3.js')}}"></script>
    <script src="{{ asset('assets/js/nav.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
	
	
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
</body>
</html>
