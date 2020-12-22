<!-- Pricing Section starts -->
<div class="pricing" id="pricing">
		<div class="container">
			<div class="row no-pad">
				<div class="col-md-6">
					<div class="store-image">
						<img src="{{ URL::asset('frontend/images/tailor_store.jpg') }}" alt="" />
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="pricing-logo">
						<img src="{{ URL::asset('frontend/images/logo.png') }}" alt="" />
					</div>
					
					@foreach ($pricing_info as $pricing)
						<div class="price-list">
							<div class="price-item">{{ $pricing->pricing_title }}</div>
							<div class="price-line"></div>
							<div class="price-amount">${{ $pricing->price }}</div>
						</div>
					@endforeach
					
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Section ends -->