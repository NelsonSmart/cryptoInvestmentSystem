<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="{{ asset('assets/images/icon.png')}}">

    <title>{{$settings->site_title}} - {{$settings->site_descr}}</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/skin_color.css')}}">

	 <!-- CSS Files -->
	 
	 <!-- CSS Files -->
	
	 <link rel="stylesheet" href="{{asset('atlantis/css/atlantis.min.css')}}">
    <link rel="stylesheet" href="{{asset('atlantis/style.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('atlantis/css/demo.css ')}}">
    <!-- jquery lib -->
    <script src="{{asset('atlantis/js/core/jquery.3.2.1.min.js')}}"></script>
     <!-- CSS Files -->
	 
   
     
  </head>

<body class="theme-warning">
	
	
   @include('pages.header')
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url({{ asset('assets/images/front-end-img/background/bg-8.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Login</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class=" ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Login</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Let's Get Started</h2>
							<p class="mb-0">Sign in to continue to CryptoCurrency.</p>							
						</div>

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
						
						@if(Session::has('err_msg'))
										<div class="alert alert-danger">
											{{Session::get('err_msg')}}
										</div>
											{{Session::forget('err_msg')}}
									@endif

									@if(Session::has('regMsg'))
										<div class="alert alert-success" >
											{{Session::get('regMsg')}}
										</div>
											{{Session::forget('regMsg')}}
									@endif      
						<div class="p-40">
							<form action="{{ route('session_sa.upload_u2s') }}" method="post">
							@csrf
								          
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
										
										<input id="email" type="email" class=" @error('email') is-invalid @enderror form-control ps-15 bg-transparent" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('messages.user_login_frm_email') }}">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
									
										<input id="password" type="password" class=" @error('password') is-invalid @enderror form-control ps-15 bg-transparent" name="password" required autocomplete="current-password" placeholder="{{ __('messages.admin_form_pwd') }}">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox ms-5">
										

										<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            
                                                    <label class="form-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-end">
										
										@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                                            
                                        @endif
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15"> {{ __('messages.login_btn') }}</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
							<div class="text-center">
								<p class="mt-15 mb-0">{{ __('messages.dont_have_act') }} <a href="{{ route('register')}}" class="text-warning ms-5">{{ __('messages.register') }} </a></p>
							</div>	
						</div>
					</div>								

					
				</div>
			</div>
		</div>
	</section>	
	
	
	@include('pages.footer')

	<div id="err" class="alert alert-danger popup_alert_err" ></div>
<div id="suc" class="alert alert-success popup_alert_suc"></div>

 @if(Session::get('toast_type') == 'err' )
    <script type="text/javascript">
        $('#err').html("{{Session::get('toast_msg')}}")
        $('#err').show().animate({ width: "30%" }, "1000").delay(10000).fadeOut(100);
    </script>
@endif
@if(Session::get('toast_type') == 'suc' )
    <script type="text/javascript">
        $('#suc').html("{{Session::get('toast_msg')}}")
        $('#suc').show().animate({ width: "30%" }, "1000").delay(10000).fadeOut(100);
    </script>
@endif
	

<script src="{{asset('atlantis/js/core/popper.min.js')}}"></script>
<script src="{{asset('atlantis/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


<!-- Chart JS -->
<script src="{{asset('atlantis/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('atlantis/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('atlantis/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('atlantis/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('atlantis/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{asset('atlantis/js/atlantis.min.js')}}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{asset('atlantis/js/setting-demo.js')}}"></script>
<!-- <script src="/atlantis/js/demo.js"></script>    -->
<script src="{{asset('atlantis/js/moment.js')}}"></script>
<script src="{{asset('atlantis/main.js')}}"></script>

<script type="text/javascript">    
    $(document).ready(function(){
        var timeout = 10000;
        var num = 10
        setInterval(function() {
            $('#csrf').val('{{ csrf_token() }}');
            // alert('here');
        }, timeout);
    });                                                    
</script>
	
	
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
