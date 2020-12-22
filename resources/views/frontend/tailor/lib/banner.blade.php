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
		
		<div class="banner-icon"><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iT3V0bGluZSIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMi4wMTggMTgzLjQ2OGE4IDggMCAwIDAgMTUuOTY0IDEuMDY0YzMuMTEyLTQ2LjY2NiAyMC4xMDgtNzkuNzM5IDUwLjUxOC05OC4zYTk4LjQzNCA5OC40MzQgMCAwIDEgMTkuNzYxLTkuMTgzbDMuNTUgMjkuMjU4Yy4wMTMuMTA4LjAzNy4yMTMuMDU0LjMyaC0uMDFsNjIuMjQ1IDM4Mi42NThhOCA4IDAgMCAwIDcuODkxIDYuNzE1IDguMzIyIDguMzIyIDAgMCAwIC45NjctLjA1OSA4IDggMCAwIDAgNy4wMTgtOC41NzFsLTMwLjQ4Mi0zODYuNTA4aC0uMDFjLS4wMDktLjExMi0uMDEtLjIyMy0uMDI0LS4zMzZsLTMuMjM4LTI2LjY5MWMxNy45NzkgNC41ODUgNDQuNDQ0IDE4LjMzMiA2Ni44IDU4LjA4NiAyMy4yIDQxLjIzNyA1NC4yNDUgNjUuODQ2IDkyLjI4NSA3My4xNDRhMTI3LjI2NiAxMjcuMjY2IDAgMCAwIDI0LjAyMyAyLjIyM2M1Mi4xIDAgMTAzLjIyNy0yOS4zMTEgMTI3LjY5MS00OS4wNjVhOCA4IDAgMSAwIC0xMC4wNTItMTIuNDQ4Yy0yLjg2OCAyLjMxNS03MSA1Ni41Ni0xMzguNjQ4IDQzLjU3Ny0zMy4yLTYuMzctNjAuNTczLTI4LjMzMi04MS4zNTMtNjUuMjc1LTIyLjM1MS0zOS43MzQtNDkuMDg4LTU2LjEzMS02Ny41ODItNjIuODlhOTIuNTM4IDkyLjUzOCAwIDAgMCAtMTUuMjA3LTQuMTQ3bC0yLjQzMi0yMC4wNDhhMjQgMjQgMCAxIDAgLTQ3LjY0NyA1Ljc4MmwyLjIgMTguMDc2YTExNS40MyAxMTUuNDMgMCAwIDAgLTI1LjQxNiAxMS4yOWMtNDQuMjkxIDI2LjU3NS01Ni40NTggNzUuMjA5LTU4Ljg2NiAxMTEuMzI4em0xMzYuNzgyIDExMi4wNzQtMjkuODE0LTE4My4yNTkgMTUuMjEzLTEuODQ1em0tMTYuMTg3LTIwMS4wMjktMTUuODgzIDEuOTI2LTIuODMtMjMuMzQ3YTcxLjQ1NyA3MS40NTcgMCAwIDEgMTAuMS0xLjA5MiA4LjEgOC4xIDAgMCAwIDEuMjYzLS4xIDM0LjMwOCAzNC4zMDggMCAwIDEgNC41NzctLjI0NnptLTIwLjk4My01OS41NjRhNy45NDUgNy45NDUgMCAwIDEgNS4zMzQtMy4wMDcgOC4wNjQgOC4wNjQgMCAwIDEgLjk3OS0uMDYgOCA4IDAgMCAxIDcuOTI2IDcuMDM4bDIuMDM2IDE2Ljc4Yy0yLjEzMS4wNTgtMy42NjYuMjA3LTQuNDkuMzA2YTg3LjY3MiA4Ny42NzIgMCAwIDAgLTExLjQ0OSAxLjE2NWwtMS45ODEtMTYuMzI2YTcuOTU0IDcuOTU0IDAgMCAxIDEuNjQ1LTUuODk2eiIvPjwvc3ZnPg==" /></div>
	</section>
	<!-- Banner Section Ends -->

	