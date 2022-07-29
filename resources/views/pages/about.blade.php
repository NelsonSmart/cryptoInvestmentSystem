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
	
	
   @include('pages.header')
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">About us</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">About us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->	
	<section class="py-50">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Position1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
							<h3 class="my-15">Our Mission</h3>
							<div class="text-fade fs-16 mb-10">The mission of our company is to provide a reliable and profitable management system for all members. We seek to grow and safeguard the investments of all our clients in a manner that maximizes profitability and trust.The whole trading system is built on state of art quantitative models.</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Book-open"><span class="path1"></span><span class="path2"></span></span>
							<h3 class="my-15">Our Vission</h3>
							<div class="text-fade fs-16 mb-10">A sound financial plan should take into consideration ways to manage risk. Whether you’re looking to provide for your loved ones, or position your business for future growth as part of an overall wealth plan, we can help you identify effective insurance solutions available through our management.</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Compiling"><span class="path1"></span><span class="path2"></span></span>
							<h3 class="my-15">Our Philosophy</h3>
							<div class="text-fade fs-16 mb-10">We were able to balance risks and profit levels using advances and highly qualified employees of the company.</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="py-50 bg-white">
		<div class="container">
			<div class="">

					<h2 class="mb-10">Learn About Us</h2>
					<h4 class="fw-400">Awards Winning Digital Cryptocurrency Platform</h4>
					<p class="">
                            

{{$settings->site_title}} - managed by the company named as {{$settings->site_title}} endowed in 2018 by Scott Greenwood in the United Kingdom with the company number #11400670 with SIC licence 62012.

{{$settings->site_title}} is programmed financing platform that glorifies it's improved trust management co-operation worldwide to the concerned investors. Our acknowledged team centres on complex advanced Forex, stocks and crypto trading techniques and strategies over multiple Exchanges & Brokers and markets. As finance diversification is quite excellent, we can able to produce secured and steady accretion for our clients.

{{$settings->site_title}} is thoroughly automated and adaptable that even investors with oblivion experience will also gain. If you have been looking for an easy to use investment platform, engage besides {{$settings->site_title}} and achieve your desires with reliance!

                        </p>
					<a href="{{ url('/contact')}}" class="btn btn-primary">Contact Us</a>
				
			</div>
		</div>
	</section>
	
	<section class="py-30 bg-img countnm-bx" data-jarallax='{"speed": 0.4}' style="background-image: url(../images/front-end-img/background/bg-1.jpg)" data-overlay="5">
		<div class="container">			
			<div class="box box-body bg-transparent mb-0">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="text-center mb-30 mb-lg-0">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">5428</h1>
							<div class="text-uppercase text-white">CONSUMERS</div>
						</div>
					</div>	
					<div class="col-lg-3 col-6">
						<div class="text-center mb-30 mb-lg-0">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Book"></span>
							</div>
							<h1 class="countnm my-10 text-white">120</h1>
							<div class="text-uppercase text-white">COUNTRIES</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="text-center">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">7485</h1>
							<div class="text-uppercase text-white">INDUSTRIES</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="text-center">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">100</h1>
							<div class="text-uppercase text-white">BRANDS</div>
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
	<script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
    <script src="{{ asset('assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
	
	
</body>
</html>
