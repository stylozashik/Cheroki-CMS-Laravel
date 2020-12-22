<!-- Testimonial section starts -->
<section class="testimonial" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Customer Testimonial</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<!-- Header slider starts -->
					<div class="owl-carousel owl-theme testimonial-slider" id="testimonial-slider">

						@foreach ($testimonials as $testimonial)
							<div class="item">
								<div class="testimonial-single">
									<div class="icon-box">
										<i class="fa fa-quote-left"></i>
									</div>
									
									<p>{{ $testimonial->testimonial_details }}</p>
									<h3>- {{ $testimonial->customer_name }}</h3>
								</div>
							</div>
						@endforeach
						
						
						

					</div>
					<!-- Header slider ends -->
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial section ends -->