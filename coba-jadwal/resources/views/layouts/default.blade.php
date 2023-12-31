<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Halaman master {{ Auth::user()->level }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	@yield('meta')
	<link rel="icon" href="{{  asset('back/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{  asset('back/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [ '{{asset('back/css/fonts.min.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('back/css/atlantis.min.css') }}">
	 <!-- Template Stylesheet -->
	 <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

	

</head>
<body>
	<div class="wrapper">
		<!--  headers  -->
        @include('includes.header')
		<!-- Sidebar -->
        @include('includes.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">

                @yield('content')
                
			</div>

            @include('includes.footer')
            <!-- foooters -->
		</div>

    

	</div>

	@include('includes.js')

	@include('sweetalert::alert')

	
</body>
</html>