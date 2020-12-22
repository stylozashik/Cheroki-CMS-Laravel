<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
	<!-- Page Title -->
	<title>Cheroki The Tailor</title>
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700%7CMontserrat:400,500,600,700,800,900" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- Font Awesome & Flat icon css-->
	<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet" media="screen">
	<!-- Carousel css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}">
	<!-- Main custom css -->
	<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen" >
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="https://use.fontawesome.com/a16fba612b.js"></script>
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="71">
	<!-- Preloader starts -->
	<div class="preloader">
		<div class="browser-screen-loading-content">
			<div class="loading-dots dark-gray">
				<i></i>
				<i></i>
				<i></i>
				<i></i>
			</div>
			<p class="loading-text">Loading</p>
		</div>
    </div>
	<!-- Preloader Ends -->
	
	<!-- Header Section Starts-->
	@yield('site_content')
	
    <!-- Jquery Library File -->
	<script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
	<!-- SmoothScroll -->
	<script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <!-- Bootstrap js file -->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<!-- Slick Nav js file -->
	<script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
	<!-- Owl Carousel js file -->
	<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <!-- Main Custom js file -->
	<script src="{{ asset('frontend/js/function.js') }}"></script>
	
</body>
</html>