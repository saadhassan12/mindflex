<!DOCTYPE html>
<html lang="en">

<!-- doccure/booking-success.html  30 Nov 2019 04:12:16 GMT -->
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
								<li class="breadcrumb-item active" aria-current="page">Booking</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Booking</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content success-page-cont">
			<div class="container-fluid">

				<div class="row justify-content-center">
					<div class="col-lg-6">

						<!-- Success Card -->
						<div class="card success-card">
							<div class="card-body">
								<div class="success-cont">
									<i class="fas fa-check"></i>
									<h3>Appointment booked Successfully!</h3>
									<a href="{{ route('patientview') }}" class="btn btn-primary view-inv-btn">View Dashboard</a>
								</div>
							</div>
						</div>
						<!-- /Success Card -->

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Content -->

		<!-- Footer -->
		<footer class="footer">

			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->
							<div class="footer-widget footer-about">
								<div class="footer-logo">
									<img src="assets/img/only mindflex 201x52.jpg" alt="logo">
								</div>
								<div class="footer-about-content">
									<p>Unlock the power of your mind with Mindflex, the ultimate brain-training
										experience that combines focus, concentration, and fun. Dive into a world where
										your thoughts take control, challenging your mental agility like never before .
									</p>
									<div class="social-icon">
										<ul>
											<li>
												<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
											</li>
											<li>
												<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->
							<!-- <div class="footer-widget footer-menu">
								<h2 class="footer-title">For Patients</h2>
								<ul>
									<li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
									<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
									<li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
									<li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
									<li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
								</ul>
							</div> -->
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">For Doctors</h2>
								<ul>
									<li><a href="appointments.html"><i class="fas fa-angle-double-right"></i>
											Appointments</a></li>
									<li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
									<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
									<li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i>
											Register</a></li>
									<li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor
											Dashboard</a></li>
								</ul>
							</div>
							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<span><i class="fas fa-map-marker-alt"></i></span>
										<p> Jinnah univeristy For women ,<br> Karachi, Pakistan</p>
									</div>
									<p>
										<i class="fas fa-phone-alt"></i>
										+92 34567889 8
									</p>
									<p class="mb-0">
										<i class="fas fa-envelope"></i>
										mindflex@gmail.com.com
									</p>
								</div>
							</div>
							<!-- /Footer Widget -->

						</div>

					</div>
				</div>
			</div>
			<!-- /Footer Top -->

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container-fluid">

					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<!-- <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p> -->
								</div>
							</div>
							<div class="col-md-6 col-lg-6">

								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>This Project is created by</a></li>
										<li> Bushra Nameera Hiba & Maryam</a></li>
									</ul>
								</div>
								<!-- /Copyright Menu -->

							</div>
						</div>
					</div>
					<!-- /Copyright -->

				</div>
			</div>
			<!-- /Footer Bottom -->

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