<!-- Booking section starts -->
<section class="contactus" id="contact">
		<div class="container-fluid">
			<div class="row no-pad">
				<div class="col-md-4">
					<div class="contact-form">
						<h2 class="contact-form-title">Contact</h2>
						
						<form role="form" action="{{ url('/tailor/booking') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<input type="text" name ="customer_name" class="form-control" placeholder="Enter Your Name" />
							</div>
							
							<div class="form-group">
								<input type="number" name="customer_phone" maxlength="11" class="form-control" placeholder="Enter phone number" />
							</div>
							
							<div class="form-group">
								<input type="email" name ="customer_email" class="form-control" placeholder="Enter Your Email" />
							</div>

							<div class="form-group">
								<label for="exampleFormControlSelect1"><i class="fas fa-clock"></i> Select Schedule</label>
								<select name="booking_time"  class="form-control" id="exampleFormControlSelect1">
								  <option >Choose Time</option>
								  <option value="9.59 am">9.59 am</option>
								  <option value="10.59 am">10.59 am</option>
								  <option value="11.59 am">11.59 am</option>
								  <option value="12.59 pm">12.59 pm</option>
								  <option value="1.59 pm">1.59 pm</option>
								  <option value="2.59 pm">2.59 pm</option>
								  <option value="3.59 pm">3.59 pm</option>
								  <option value="4.59 pm">4.59 pm</option>
								  <option value="5.59 pm">5.59 pm</option>
								  <option value="6.59 pm">6.59 pm</option>
								  <option value="7.59 pm">7.59 pm</option>
								  <option value="8.59 pm">8.59 pm</option>
								  <option value="9.59 pm">9.59 pm</option>
								</select>
							  </div>

							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Write Message Here"></textarea>
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn-contact" value="Book Now" />
							</div>
						</form>
						
					</div>
				</div>
				
				<div class="col-md-8">
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.723033070624!2d70.75848835!3d22.280612599999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1504611295336" height="600" style="border:0;width:100%;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Booking section ends -->