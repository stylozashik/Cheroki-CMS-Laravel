<!-- Banner Section Starts -->
<style>
    .banner{
	position: relative;
	top: 0px;
	left: 0;
	width: 100%;
	background: url({{asset("storage/$banner_image->banner_image")}}) no-repeat center center;
	background-size: cover;
	padding: 100px 0 100px;
    }
</style>
<section class="banner" id="home">
		<div class="container">
			@if(Session::has('message'))
				<div class="alert alert-success" role="alert">
					<p class="text-center">
						Congratulations <strong>{{ Session::get('customer') }}</strong> your {{ Session::get('message') }}, we will meet at <strong>{{ Session::get('time') }}</strong> !
					</p>
					
					{{ Session::forget('message') }}
				</div>
			@endif

			<div class="row">
				<div class="col-md-12">
					<div class="header-banner">
						<img src="{{ asset("storage/$banner_logo->banner_logo") }}" alt="Logo" />
						<p>{{ $banner_info->logo_title }}</p>
						<h3>{{ $banner_info->big_title_up }} <br />{{ $banner_info->big_title_down }}</h3>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<div class="banner-info-single">
						<div class="icon-box"><i class="fa fa-clock-o"></i></div>
						<h3>Open Time</h3>
						<p>{{ $banner_info->open_time }}</p>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="banner-info-single">
						<div class="icon-box"><i class="fa fa-map-marker"></i></div>
						<h3>Our Location</h3>
						<p>{{ $banner_info->our_location }}</p>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="banner-info-single">
						<div class="icon-box"><i class="fa fa-phone"></i></div>
						<h3>Book Now</h3>
						<p>{{ $banner_info->booking_contact }}</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="banner-icon"><i class="flaticon-hair-salon-situation"></i></div>
	</section>
	<!-- Banner Section Ends -->
	