<div class="panel-header " style="background-color: {{$settings->header_color}}">
	<div class="page-inner py-5" style="background-color: {{$settings->header_color}}">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">
					{{ $breadcome }}
				</h2>				
			</div>
				<div class="ml-md-auto py-2 py-md-0">
						<b class="text-white" >Affiliate link <em class="fas fa-link"></em></b>
						<i style="color: black; font-size: 13px; word-wrap: break-word;">
							{{env('APP_URL').__('/register/').$user->username}}
						</i>
					                                             
					</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="{{ url('/'.$user->username .'/investments')}}" class="btn btn-white btn-border btn-round mr-2">{{ __('messages.investments') }}</a>
				<a href="{{ url( '/'.$user->username .'/wallet')}}" class="btn btn-secondary btn-round">{{ __('messages.dpsts') }}</a>
			</div>
		</div>
	</div>
</div>