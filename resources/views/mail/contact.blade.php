<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>contact mail</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:5%; ">
            <div align="">
        		<img src="{{env('APP_URL')}}/img/{{$settings->site_logo}}" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align="">{{ __('messages.hi') }},</h3>
        	<p>Hi, This is <strong>{{ $data['name'] }}</strong> and phone number is {{ $data['phone'] }}</p>

                <h4>Message: </h4> 
                <p>{{ $data['message'] }}.</p>

                <p>It would be appriciative, if you gone through this feedback.</p>
        	<p>
        	    {{ __('messages.reg_str_msg') }} <a href="{{env('APP_URL')}}"><b>{{env('APP_NAME')}}</b></a>
                <br>
        		{{ __('messages.reg_msg_cont') }}.
                <br><br>
        		<a class="btn btn-info" href = "mailto:{{$data['email']}}">{{ $data['name'] }}</a>
                    <b>{{ __('messages.confirm_reg') }}</b>
                </a>
        	</p>
        	<p>
        		<i class="fa fa-certificate"></i>{{env('APP_NAME')}}.
        	</p>
        </div>
    </div>
	
</body>
</html>