<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/checkout.html  30 Nov 2019 04:12:16 GMT -->
@include('layout.app')
@include('patient.head')
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		<!-- Header -->
		@include('patient.header')
		<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									<form action="{{ route('checkoutstore') }}" method="POST">
										@csrf
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Personal Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>First Name</label>
														<input class="form-control" type="text" name="first_name" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Last Name</label>
														<input class="form-control" type="text" name="last_name" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" type="email" name="email" required>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" type="text" name="phone" required>
													</div>
												</div>
											</div>
											<div class="exist-customer">Existing Customer? <a href="#">Click here to login</a></div>
										</div>
										<!-- /Personal Information -->
									
										<div class="payment-widget">
											<h4 class="card-title">Payment Method</h4>
									
											<!-- Credit Card Payment -->
											<div class="payment-list">
												<label class="payment-radio credit-card-option">
													<input type="radio" name="payment_method" value="credit_card" checked>
													<span class="checkmark"></span>
													Credit card
												</label>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_name">Name on Card</label>
															<input class="form-control" id="card_name" type="text" name="card_name" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group card-label">
															<label for="card_number">Card Number</label>
															<input class="form-control" id="card_number" placeholder="1234 5678 9876 5432" type="text" name="card_number" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_month">Expiry Month</label>
															<input class="form-control" id="expiry_month" placeholder="MM" type="text" name="expiry_month" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="expiry_year">Expiry Year</label>
															<input class="form-control" id="expiry_year" placeholder="YY" type="text" name="expiry_year" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group card-label">
															<label for="cvv">CVV</label>
															<input class="form-control" id="cvv" type="text" name="cvv" required>
														</div>
													</div>
												</div>
											</div>
											<!-- /Credit Card Payment -->
									
											<!-- Paypal Payment -->
											<div class="payment-list">
												<label class="payment-radio paypal-option">
													<input type="radio" name="payment_method" value="paypal">
													<span class="checkmark"></span>
													Paypal
												</label>
											</div>
											<!-- /Paypal Payment -->
									
											<!-- Terms Accept -->
											<div class="terms-accept">
												<div class="custom-checkbox">
													<input type="checkbox" id="terms_accept" name="terms_accept" required>
													<label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
												</div>
											</div>
											<!-- /Terms Accept -->
									
											<input type="hidden" name="patient_id" value="{{ auth()->check() ? auth()->id() : '' }}" />
											<input type="hidden" name="doctor_id" value="{{ $appointment->doctor_id }}">
											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
											</div>
											<!-- /Submit Section -->
									
										</div>
									</form>
									
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
								
									<!-- Booking Doctor Info -->
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img class="img-fluid" alt="User Image"
											src="{{ asset('images/' . $appointment->image) }}">
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.html">{{$appointment->first_name}}</a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<div class="clinic-details">
												<p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$appointment->address}}</p>
											</div>
										</div>
									</div>
									<!-- Booking Doctor Info -->
									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<ul class="booking-date">
												<li>Date <span>{{$appointment->date}}</span></li>
												<li>Time <span>{{$appointment->time	}}</span></li>
											</ul>
											<ul class="booking-fee">
												<li>Consulting Fee <span>$100</span></li>
												<li>Booking Fee <span>$10</span></li>
												<li>Video Call <span>$50</span></li>
											</ul>
											<div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<span class="total-cost">$160</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Booking Summary -->
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer style="background-color: #06A3DA; color: #ecf0f1; padding: 40px 0;">
				<div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between;">
					
					<!-- About Section -->
					
					
					<!-- Contact Information -->
					<div style="flex: 1; margin-bottom: 20px;">
						<h4>Contact Us</h4>
						<p><strong>Phone:</strong> +1 234 567 890</p>
						<p><strong>Email:</strong> info@Mindflex.com</p>
						<p><strong>Address:</strong> 123 Karachi ,Pakistan</p>
					</div>
					
					<!-- Quick Links -->
					<div style="flex: 1; margin-bottom: 20px;">
						<h4>Quick Links</h4>
						<ul style="list-style-type: none; padding: 0;">
							<li><a href="#" style="color: #ecf0f1; text-decoration: none;">Home</a></li>
							<li><a href="#" style="color: #ecf0f1; text-decoration: none;">About Us</a></li>
							<li><a href="#" style="color: #ecf0f1; text-decoration: none;">Services</a></li>
							<li><a href="#" style="color: #ecf0f1; text-decoration: none;">Contact</a></li>
							<li><a href="#" style="color: #ecf0f1; text-decoration: none;">Privacy Policy</a></li>
						</ul>
					</div>
					
					<!-- Social Media Links -->
					<div style="flex: 1; margin-bottom: 20px;">
						<h4>Follow Us</h4>
						<a href="#" style="color: #ecf0f1; text-decoration: none; margin-right: 15px;">Facebook</a>
						<a href="#" style="color: #ecf0f1; text-decoration: none; margin-right: 15px;">Twitter</a>
						<a href="#" style="color: #ecf0f1; text-decoration: none; margin-right: 15px;">Instagram</a>
					</div>
					
				</div>
				<div style="text-align: center; padding: 20px 0; border-top: 1px solid #34495e;">
					<p style="margin: 0;">&copy; 2024 Rehab Center. All rights reserved.</p>
				</div>
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Circle Progress JS -->
		<script src="assets/js/circle-progress.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/invoices.html  30 Nov 2019 04:12:14 GMT -->
</html>
		   
		
		
	</body>

<!-- doccure/checkout.html  30 Nov 2019 04:12:16 GMT -->
</html>