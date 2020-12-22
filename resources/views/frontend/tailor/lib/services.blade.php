<!-- Services section starts -->
<section class="service" id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Services</h2>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				@foreach ($services as $item)
					<div class="col-md-3 col-sm-6">
						<div class="service-single">
							<div class="icon-box-outer">
								<div class="icon-box">
									<i class="{{$item->service_icon}}"></i>
								</div>
							</div>
							
							<h3>{{ $item->service_title }}</h3>
							<p>{{ $item->service_description }}</p>
							<h5>{{ $item->service_time }}</h5>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Services section ends -->