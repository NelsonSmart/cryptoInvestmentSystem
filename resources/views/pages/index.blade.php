<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
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
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/skin_color.css')}}">
	
	<style> 
		.img-box{
			position: relative;
		
			padding: 10px;
			margin-top: 100px;
			box-sizing: border-box;
		}
		
	
		.img__item-1{
			
			
			
			position: relative;
			z-index: -1;
			float: left;
		}
		.img__item-2{
			position: relative;
			bottom: 160px;
			right:90px;
			border: 3px solid darkblue;
			text-align: left;
			z-index: 1;

		}
		.overflow-text {
			position: absolute;
			top: 0;
			left: 30%;
			transform: rotate(-90deg);
			transform-origin: inherit;
			color: rgba(103,114,134,.3);
			font-size: 45px;
			margin-top: 190px;
			line-height: 45px;
			letter-spacing: 5px;
			text-transform: uppercase;
	    }
	</style>
     
  </head>

<body class="theme-warning bg-dark-body">
	
		@include('pages.header')

    
    <div id="particles-js" class="overflow-hidden z-0"></div>
	<section class="h-100vh position-relative z-1" data-overlay="5">
		<div class="container h-p100">
			<div class="row h-p100 align-items-center">
				<div class="col-lg-6 col-12">
					<div class="mt-80">
						<h1 class="box-title text-white mb-20 fw-600 fs-60">Secure and Easy Way to Trade Bitcoin</h1>
						<h4 class="text-white-80 fw-300 mb-30">Decentralized digital currency that enables instant payments anyone in the global control the creation of additional. Engage beside CryptoFX and achieve your desires with reliance! </h4>
						<div class="d-flex gap-3 justify-content-start">
							<a href="{{ url('register')}}" class="btn btn-primary">Get Started  <i class="glyphicon glyphicon-arrow-right btn-icon ml-1"></i></a>
						</div>
					</div>	
				</div>
				<div class="col-lg-6 col-12">					
					<div class="text-center">
						<div class="owl-carousel owl-theme owl-btn-1 banner-slide" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
							<div class="item">
								<img src="{{ asset('assets/images/front-end-img/b-1.png')}}" class="img-fluid" alt="" />
							</div>
							<div class="item">
								<img src="{{ asset('assets/images/front-end-img/b-2.png')}}" class="img-fluid" alt="" />
							</div>
							<div class="item">
								<img src="{{ asset('assets/images/front-end-img/b-3.png')}}" class="img-fluid" alt="" />
							</div>
							<div class="item">
								<img src="{{ asset('assets/images/front-end-img/b-4.png')}}" class="img-fluid" alt="" />
							</div>
						</div>						
					</div>
				</div>
			</div>			
		</div>		
	</section>
	
	
	
	<section class="py-50 overflow-xh bg-white" data-aos="fade-up">
		<div class="container">
		<div class="row align-items-center">
            <div class="col-lg-7 col-12 text-start responsive-column-full">
                <div class="about-content">
                    <div class="section-heading">
                        <div class="section-shape"></div>
                        <p class="section__meta pb-2"><b>Learn About Us</b></p>
                        <h2 class="section__title padding-bottom-30px">Awards Winning Digital Cryptocurrency Platform</h2>
                        <p class="section__desc">
                            Our deep sector knowledge and unrivaled insight into the private fund market 
                            across several asset classes allows us to raise capital efficiently and effectively. 
                            We thrive on working alongside the most innovative funds and consistently partner with 
                            the highest-quality fund managers.<br> {{$settings->site_title}}  is programmed financing platform that glorifies it's improved trust management co-operation worldwide to the concerned investors. Our acknowledged team centres on complex advanced Forex, stocks and crypto trading techniques and strategies over multiple Exchanges & Brokers and markets. As finance diversification is quite excellent, we can able to produce secured and steady accretion for our clients.<br>

                            {{$settings->site_title}}  is thoroughly automated and adaptable that even investors with oblivion experience will also gain. If you have been looking for an easy to use investment platform, engage besides {{$settings->site_title}}  and achieve your desires with reliance! 
                        </p>
                    </div><!-- end section-heading -->
                    <div class="about-btn-box padding-top-30px">
                        <a href="{{url('about_us')}}" class="btn theme-btn btn-primary-light">Read More<i class="la la-arrow-right btn-icon ml-1"></i></a>
                    </div>
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 col-12 d-lg-block d-none ml-auto responsive-column-full">
                <div class="img-box">
                    <img src="{{ asset('assets/images/front-end-img/avatar/btc.gif')}}" alt="about-us"  class="img__item img__item-1">
                   
                </div><!-- end img-box -->
            </div><!-- end col-lg-5 -->
            	<div class="row">
				<div class="col-lg-3 col-lg-6 col-8 bg-primary-light mt-5">
					<div class=" mb-30 mb-lg-0 mt-5 p-5 bg-temple-white">
						<div class=" b-1 border-white  mx-auto">
						<img src="{{asset('assets/images/cert.png')}}" height="400px" alt="company_cert">
						</div>
						
						<div class="text-uppercase text-white mt-5 pd-5 float-left">
							<a href="{{asset('assets/images/cert.jpg')}}" target="_blank" class="btn btn-sm btn-primary text-white">VIEW CERTIFICATE</a>
							
						</div>
						
					</div>
				</div>

				<div class=" col-lg-3 col-lg-6 col-8">
					<div class="float-left" style="border-radius: 4px; box-shadow: 0px 8px 8px #000;">
						<iframe  width="100%" height="420px;" src="https://www.youtube.com/embed/SzAuB2FG79A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

						

					</div>
				</div>
			
			
			</div>
        </div>
		</div>
	</section>
	

	<section class="py-100 bg-img countnm-bx" data-aos="fade-up" style="background-image: url(assets/images/front-end-img/map.png); background-position: top center;">
		<div class="container">			
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 mb-50">
					<h1 class="mb-15 text-white text-center">Run Your ICO from Anywhere</h1>	
					<hr class="w-100 bg-primary">
					<p class="text-white text-center fs-18 mb-50">Internet access has been declared a human right by United States, its start-up culture is booming and its citizens and businesses have been able to enjoy the use of many streamlined digital public services.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center mb-30 mb-lg-0">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-primary fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="my-10 text-white fw-300">$<span class="countnm">50</span></h1>
						<div class="text-uppercase text-white">billion USD — excepted revenue of coins by 2020</div>
					</div>
				</div>	
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center mb-30 mb-lg-0">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-primary fs-40 icon-Book"></span>
						</div>
						<h1 class="my-10 text-white fw-300"><span class="countnm">100</span>+</h1>
						<div class="text-uppercase text-white">million potential clients worldwide</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center mb-30 mb-lg-0">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-primary fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="my-10 text-white fw-300"><span class="countnm">10</span>%</h1>
						<div class="text-uppercase text-white">no borders for international payments</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center mb-30 mb-lg-0">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-primary fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="my-10 text-white fw-300"><span class="countnm">20</span>x</h1>
						<div class="text-uppercase text-white">faster transaction speed</div>
					</div>
				</div>			
			</div>
		</div>
	</section>
	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
				    <h3 class="mb-15">Affordable Packages</h3>	
					<h1 class="mb-15">Choose Pricing Plan</h1>					
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				 <?php                
                $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
            ?>
            
                @if(isset($invs) && count($invs) > 0)
                    @foreach($invs as $inv)
                        <div class="col-sm-4">
                            <div class="panel card pack-container bg-primary" align="center">
                                <div class="panel-head" >
                                    <h3 class="txt_transform">{{$inv->package_name}} PLAN</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>{{ __('messages.ivt_prd') }}</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{$inv->period}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                            @if($inv->method == 0)
                                                {{ __('messages.days')}}
                                            @endif
                                            @if($inv->method == 1)
                                                {{ __('messages.wrk_days')}}
                                            @endif
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center">
                                        <h4 class="u_case" >
                                            <strong>{{ __('messages.min_invstm') }}</strong>
                                        </h4>
                                        <span class="pk_num">{{$settings->currency}} {{$inv->min}}</span>
                                        <h4 class="u_case">
                                            <strong>{{ __('messages.max_invstm') }}</strong>
                                        </h4>
                                        <span class="pk_num">{{$settings->currency}} {{$inv->max}}</span>
                                </div>                                                    
                                
                                <span align="center">..............................</span>
                           
                                <div class="" align="center">
                                    <h4 class="u_case">
                                       <strong> {{ __('messages.wthdrwls_intvl') }}</strong>
                                    </h4> 
                                    <span class="pk_num">{{$inv->days_interval}} {{__('messages.days')}}</span>
                                </div>
                                <div class="" align="center">
                                    <p>{{ __('messages.capt_invst_elsp') }}</p>
                                </div>
                                <div class="" align="center">
                                        <a id="{{$inv->id}}" href="{{ url('/user/dashboard')}}" class="collcc btn btn-info" >
                                            {{ __('messages.invst') }}
                                        </a>
                                        <br><br>
                                </div>
    
                            </div>
                        </div>
                                                                          
                    @endforeach
                @endif
            
					
				
			</div>						
		</div>
	</section>
	
	<section class="py-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Reviews & Ratings</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">				
				<div class="col-md-3 col-16 ml-10">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test11.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Joycee Lesidi</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                             {{$settings->site_title}} is a LEGIT BITCOIN INVESTMENT partner every investor should have; they are professionals, and efficient in their service. I highly recommend Crypto Trading for all prospective investors.
                            </p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test12.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Albert James</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            Great platform for starting traders and Rookie investors. Great Selection of investment plans, transparent fee system ad Bitcoin Investment Price for Bitcoin Investment Account.
                        </p>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test13.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Davies Joe</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            {{$settings->site_title}} is a fantastic trading platform and Legit Bitcoin Investment Site, both from ease of use and technical perspective. This is a great Bitcoin Investment Software.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test14.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Fabio McCarthy</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            {{$settings->site_title}} team is very professional, I have started to recommend to family, friends, and build my own team, get passive income, thanks  {{$settings->site_title}}.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test15.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Neema Olivia</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
								I met the manager who thought me how it’s done and gave me guidelines too which was put to good use and now I have double all I have.
							</div>
						</div>
					</div>
	             </div>
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/test16.png')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">LUCY ADLA</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            {{$settings->site_title}} helps me to understand the Cryptocurrency world better, because the way it explains it simple and thus easy to understand. Thanks team {{$settings->site_title}}.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/2.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Anshu Srivastav</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            {{$settings->site_title}}  is my most correct choice, I can get continuous income, I will continue to invest {{$settings->site_title}}  it will help me wealth freedom.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-16">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{ asset('assets/images/front-end-img/avatar/5.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Doe</a>
										<span class="text-fade fs-12">Investor</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">
                            Am very grateful to {{$settings->site_title}} , I can earn a steady profit every day, I can get payment instantly, I can use it to pay for my doctoral tuition..</p>
								
							</div>
						</div>
					</div>
				</div>
				
			
			</div>
		</div>
	</section>

	<section class="py-50 " data-aos="fade-up">
		<div class="container-fliud">
			
			
					<div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
					
								
		</div>
	</section>
	
	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Live Coin Chart</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="box bg-transparent no-shadow">
						<div class="box-body">
							<div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=light&amp;coin_id=859&amp;pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
						</div>
					</div>
					<div class="box bg-transparent no-shadow">
						<div class="box-body">
						    <div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=dark&amp;coin_id=145&amp;pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
						
						</div>
					</div>
					<div class="box bg-transparent no-shadow">
						<div class="box-body">
							<div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=light&amp;coin_id=359&amp;pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
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
	<script src="{{ asset('assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js')}}"></script>
	<script src="{{ asset('assets/js/particles.js')}}"></script>
	<script src="{{ asset('assets/js/app.js')}}"></script>
	<script>
		//ticker
		if ($('#webticker-1').length) {   
			$("#webticker-1").webTicker({
				height:'auto', 
				duplicate:true, 
				startEmpty:false, 
				rssfrequency:5
			});
		}
		/*--- Sparkline charts - mini charts ---*/ 
		function sparkline_charts() {
			$('.sparklines').sparkline('html');
		}
		if ($('.sparklines').length) {
			sparkline_charts();
		} 
	</script>
	
	<!-- CryptoCurrency front end -->
	<script src="{{ asset('assets/js/template.js')}}"></script>
	
	
</body>
</html>
