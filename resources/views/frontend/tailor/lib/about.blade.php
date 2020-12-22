<!-- About us section starts -->
<section class="aboutus" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>About Cheroki Tailor</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="about-image">
						@foreach ($about_images as $item)
							<div class="about-img-single">
								<img src="{{ asset("storage/$item->about_image") }}" alt="" />
							</div>
						@endforeach
						
					</div>
					
					<div class="about-desc">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About us section ends -->