<!-- Photo Gallery section starts -->
<section class="gallery" id="gallery">
		<div class="container-fluid">
			<div class="row no-pad">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Our Works</h2>
					</div>
				</div>
			</div>
			
			<div class="row no-pad">
				@foreach ($works as $item)
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="gallery-box">
						<figure>
							<img src="{{ asset("storage/$item->our_works_image") }}" alt="" />
						</figure>
						
						<div class="gallery-overlay">
							<div class="gallery-info">
								<p>{{ $item->our_works_title }}</p>
							</div>
						</div>
					</div>
				</div>	
				@endforeach
			</div>
		</div>
	</section>
	<!-- Photo Gallery section ends -->