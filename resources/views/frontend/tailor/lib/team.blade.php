<!-- Our Team section starts -->
<section class="ourteam" id="ourteam">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2>Expert Cutting Team</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				@foreach ($team as $item)
				<div class="col-md-4">
					<div class="team-box">
						<figure>
							<img src="{{ URL::asset("storage/$item->photo") }}" alt="" />
						</figure>
						
						<div class="team-entry">
							<p>{{ $item->designation }}</p>
							<h3>{{ $item->name }}</h3>
							<div class="team-social">
								<a href="{{ $item->facebook }}"><i class="fa fa-facebook"></i></a>
								<a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a>
								<a href="{{ $item->pinterest }}"><i class="fa fa-pinterest-p"></i></a>
								<a href="{{ $item->linkdin }}"><i class="fa fa-linkedin"></i></a>
								<a href="{{ $item->twitter }}"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		
		</div>
	</section>
	<!-- Our Team section ends -->