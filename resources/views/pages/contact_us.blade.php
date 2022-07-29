<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 18:04:22 GMT -->
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
						<h2 class="page-title text-white">Contact us</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Contact us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
		    
				     @if (count($errors) > 0)
                <div class="alert alert-danger">
                 <button type="button" class="close" data-dismiss="alert">×</button>
                 <ul>
                  @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                  @endforeach
                 </ul>
                </div>
               @endif
               @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
               @endif
			<div class="row align-items-center">
				<div class="col-md-7 col-12">
				    
					<form class="contact-form" action="{{ url('contact_mail')}}" method="post">
					    @csrf
						<div class="text-start mb-30">
							<h2>Get In Touch</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="First Name" name= "name">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Last Name" name="lname">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <input type="email" class="form-control" placeholder="Your Email" name="email">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <input type="tel" class="form-control" placeholder="Phone" name= "phone">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Subject" name="subject">
							</div>
						  </div>
						  <div class="col-lg-12">
						      <div class="form-group">
								<textarea name="message" rows="5" class="form-control" required="" placeholder="Message"></textarea>
							  </div>
						  </div>
						  <div class="col-lg-12">
							  <button name="submit" type="submit" value="Submit" class="btn btn-primary"> Send Message</button>
						  </div>
						</div>
					</form>
				</div>
				<div class="col-md-5 col-12 mt-30 mt-md-0">
					<div class="box box-body p-40 bg-dark mb-0">
						<h2 class="box-title text-white">Contact Info</h2>
						<div class="widget fs-18 my-20 py-20 by-1 border-light">	
							<ul class="list list-unstyled text-white-80">
								<li class="ps-40"><i class="ti-location-pin"></i>Hova House, 1 Hova Villas, Brighton <br> & Hove, England, BN3 3DH</li>
								
								<li class="ps-40"><i class="ti-email"></i> {{ env('SUPPORT_EMAIL')}}</li>
							</ul>
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
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
	
	
</body>
</html>
