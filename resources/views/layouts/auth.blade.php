
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from salero.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 12:16:46 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="PT.FAN Integrasi Teknologi">
	
	<!-- PAGE TITLE HERE -->
	<title>@yield('title') || {{ config('app.name') }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ url('') }}/assets/images/favicon.png">
	<link href="{{ url('') }}/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/css/style.css" rel="stylesheet">
    @yield('css-library')
    @yield('css-custom')
	
	{{-- <link href="{{ url('') }}/assets/css/sweetalert2.min.css" rel="stylesheet"> --}}

</head>

<body class="vh-100">
	<div class="page-wraper">

		<!-- Content -->
		@yield('content')
		<!-- Content END-->
	</div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('') }}/assets/vendor/global/global.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ url('') }}/assets/js/deznav-init.js"></script>
    <script src="{{ url('') }}/assets/js/custom.js"></script>
    <script src="{{ url('') }}/assets/js/demo.js"></script>
    <script src="{{ url('') }}/assets/js/styleSwitcher.js"></script>
	{{-- <script src="{{ url('') }}/assets/js/sweetalert2.min.js"></script> --}}
	@yield('js-library')
	@yield('js-custom')
	
</body>
</html>