 @if($settings->chat_widget != '' || $settings->chat_widget != null )
    {!! $settings->chat_widget !!}
  @endif
<footer class="footer_three">
		<div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
														
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="ti-direction"></i>Hova House, 1 Hova Villas, Brighton <br> & Hove, England, BN3 3DH</li>
								
								<li><i class="ti-mobile"></i><span><a href="#" target="_blank">Telegram Channel</a></span></li>
								<li> <i class="ti-email"></i> <a href="{{'mailto:'. env('SUPPORT_EMAIL')}}"><span>{{env('SUPPORT_EMAIL')}}</span></a></li>
							</ul>
						</div>
					</div>					
					<div class="col-12 col-lg-3">
                        <div class="widget footer_widget clearfix">
                            <h4 class="footer-title">Company</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
								<li><a href="{{ url('/')}}">Home</a></li>
								<li><a href="{{ url('trade/currency_converter/')}}">Trade</a></li>
								<li><a href="{{ url('contact')}}">Contact</a></li>
								<li><a href="{{ url('faqs')}}">FAQs</a></li>
							</ul>
                        </div>
                    </div>
                    
	
       <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title mt-20">Newsletter</h4>
							<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
                               		<form class=""  method="post" action="{{url('contact_mail')}}">
								@csrf
									<div class="input-group">
									    <input  type="hidden" name="name" value="visitor">
									    <input  type="hidden" name="message" value ="went to be receving mail from you">
									    <input  type="hidden" name="subject" value="Newsletter">
										<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="ti-email"></i> </button>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>		
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center">
					{{ __('messages.cpyrght') }} &#169; <a href="{{ url('/')}}">{{$settings->site_title}}</a> {{ date("Y") }}. {{ __('messages.all_rght_resrvd') }}
						</div>
					<div class="col-md-6 mt-md-0 mt-20">
						<!--
						<div class="social-icons">
							<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						-->
					</div>
                </div>
            </div>
        </div>
	</footer>
	