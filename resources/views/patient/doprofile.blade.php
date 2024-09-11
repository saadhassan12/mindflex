<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->

@include('patient.head')
@include('layout.app')

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
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">{{ $doctor->first_name }} {{ $doctor->last_name }}</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container">

				<!-- Doctor Widget -->
				<div class="card">
					<div class="card-body">
						<div class="doctor-widget">
							<div class="doc-info-left">
								<div class="doctor-img">
									<img src="{{ asset('images/' . $doctor->image) }}" class="img-fluid"
										alt="Doctor Image">
								</div>
								<div class="doc-info-cont">
									<h4 class="doc-name">Dr. {{ $doctor->first_name }} {{ $doctor->last_name }}</h4>
									<p class="doc-speciality">{{ $doctor->specialization }}</p>
								
									<div class="clinic-details">
										<p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{
											$doctor->address }} - <a href="javascript:void(0);">Get Directions</a></p>
									</div>
									<div class="clinic-services">
										<span>Phone: {{ $doctor->phone }}</span>
										<span>Experience: {{ $doctor->experience }} years</span>
									</div>
								</div>
							</div>
							<div class="doc-info-right">
								<div class="clini-infos">
									<ul>
										<li><i class="fas fa-envelope"></i> {{ $doctor->email }}</li>
										<li><i class="far fa-user"></i> Age: {{ $doctor->age }}</li>
										<li><i class="fas fa-user-md"></i> Gender: {{ $doctor->gander }}</li>
									</ul>
								</div>
								<div class="clinic-booking">
									<a class="apt-btn"
										href="{{ route('booking', ['id' => $doctor->user_id]) }}">Book
										Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Doctor Widget -->

			</div>
		</div>
		<!-- /Page Content -->

		</div>
		<!-- /Main Wrapper -->

		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/doctors/doctor-thumb-02.jpg"
											class="call-avatar">
										<h4>Dr. Darren Elder</h4>
										<span>Connecting...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end"
											data-dismiss="modal" aria-label="Close"><i
												class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i
												class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->

		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/doctors/doctor-thumb-02.jpg"
											alt="User Image">
										<h4>Dr. Darren Elder</h4>
										<span>Calling ...</span>
									</div>
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end"
											data-dismiss="modal" aria-label="Close"><i
												class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i
												class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
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
										experience
										that combines focus, concentration, and fun. Dive into a world where your
										thoughts
										take control, challenging your mental agility like never before . </p>
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


</body>

<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->

</html>