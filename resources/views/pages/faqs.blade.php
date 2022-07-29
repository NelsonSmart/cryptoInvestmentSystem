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
						<h2 class="page-title text-white">FAQs</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="{{ url('/')}}" class="text-white-50"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">FAQs</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50 cust-accordion">
		<div class="container">
			<div class="row">
			    <?php                
                $faqs = App\faq::all();                
            ?>
            @if(isset($faqs) && count($faqs) > 0)
               @foreach($faqs as $faq)
			        <div class="col-12">
					    <div class="tab-wrapper v1">
					       	<div class="list">
						        <div class="item">
							        	<div class="tab-btn">
								        	<a href="#">{{ $faq->question}}<em class="ti-plus"></em></a>
							        	</div>
								    <div class="tab-content">
									    <p>{{ $faq->answer }}</p>
								    </div>
						    	</div>
							
					    	</div>
					    </div>
				    </div>
				@endforeach
			@endif
			</div>
		</div>
	</section>	
	
	
	
	
	@include('pages.footer')
	
	
	<!-- Vendor JS -->
	<script src="{{ asset('assets/js/vendors.min.js')}}"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="{{ asset('assets/corenav-master/coreNavigation-1.1.3.j')}}s"></script>
    <script src="{{ asset('assets/js/nav.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
	
	
</body>
</html>
