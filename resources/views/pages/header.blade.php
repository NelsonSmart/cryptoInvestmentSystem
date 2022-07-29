 
	
                    
<header class="top-bar">
                   
		<div class="topbar">
		  <div class="container">
		      
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
					<li class="ms-10 pe-10"><a href="{{ url('/faqs')}}"><i class="text-white ti-help"></i> FAQs</a></li>
					<li class="ms-10 pe-10"><a href="{{'mailto:'. env('SUPPORT_EMAIL')}}"><i class="ti-email"></i> {{env('SUPPORT_EMAIL')}}</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">				  
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option>USD</option>
						</select>
					 </li>
					 <li class="me-10 ps-10 lng-drop">
					  	<div id="google_translate_element"></div>
					 </li>
					 <li class="me-10 ps-10"><a href="{{ url('login')}}"><i class="text-white ti-unlock d-md-inline-block d-none"></i> Login</a></li>
					 <li class="me-10 ps-10"><a href="{{ url('user/dashboard')}}"><i class="text-white ti-dashboard d-md-inline-block d-none"></i> My Account</a></li>
				  </ul>
				</div>
				
				
			  </div>
			 </div>
		  </div>
		</div>

		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="{{url('/')}}" class="brand">
					<img src="{{ asset('assets/images/logo.png')}}" alt=""/>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>								
			<ul class="menu">				
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>				
				<li>
					<a href="{{url('about_us')}}">About Us</a>
				</li>				
				<li>
						<a href="{{ url('trade/currency_converter')}}">Currency Converter</a>		
				</li>
				
				<li>
					<a href="{{ url('contact')}}">Contact</a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="{{url('register')}}" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>				
			</ul>
			
		</nav>
	</header>