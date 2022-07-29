<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{$settings->site_title}} - {{$settings->site_descr}}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('img/' . $settings->site_logo) }}" type="image/x-icon"/>
	<!-- Fonts and icons -->
	<script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/atlantis/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.min.css">
	<link rel="stylesheet" href="{{ asset('atlantis/style.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('atlantis/css/demo.css">
	<!-- jquery lib -->
	<script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>

</head>

<body>


@yield('content')

</body>

</html>