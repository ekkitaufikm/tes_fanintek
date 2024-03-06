
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="PT.FAN Integrasi Teknologi">
	
	<!-- PAGE TITLE HERE -->
	<title>@yield('title') || {{ config('app.name') }}</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ url('') }}/assets/images/favicon.png">
    
    @include('includes.main-css')
    @yield('css-library')
    @yield('css-custom')
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	 -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	
	
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('layouts.sidebar')
		
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->
		
        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->
        
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
        @include('includes.main-js')
        @yield('js-library')
        @yield('js-custom')
</body>
</html>