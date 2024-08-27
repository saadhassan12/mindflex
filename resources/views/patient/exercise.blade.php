<!DOCTYPE html>
<html lang="en">

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->

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
								<li class="breadcrumb-item"><a href="patient-dashboard.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Excercise</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Excercise</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<!-- Profile Sidebar -->
					@include('patient.patientprofile')
					<!-- / Profile Sidebar -->

					<div class="col-md-7 col-lg-8 col-xl-9">
						<div class="card">
							<div class="card-body pt-0">

								<section class="comp-section comp-cards">
									<div class="comp-header">
										<h3 class="comp-title">Exercise</h3>
										<div class="line"></div>
									</div>

									<div class="row row-grid">
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/bridge.jpeg" class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Bridging</h5>
												</div>
												<div class="card-body">
													<p class="card-text">Lie on your back with knees bent and feet flat
														on the floor. Lift your hips towards the ceiling while squeezing
														your glutes, forming a straight line from shoulders to knees.
														Hold briefly, then lower back down.</p>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=Ce3XDuWXXq4"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/clamshell.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Clamshells</h5>
												</div>
												<div class="card-body">
													<p class="card-text"> Lie on your side with legs stacked and knees
														bent at a 90-degree angle. Keeping your feet together, lift the
														top knee towards the ceiling without rotating your hips. Slowly
														lower it back down.</p>
														<br>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=CiqvDV8pzRk"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/Heel-Slides-Right.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Heel Slides</h5>
												</div>
												<div class="card-body">
													<p class="card-text">Lie on your back with one leg straight and the
														other bent. Slide the heel of the bent leg along the floor,
														bringing your knee towards your chest. Then, slide it back out
														to the starting position.</p>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=A7fcobCVppc"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/quadset.jpeg" class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Quad Sets</h5>
												</div>
												<div class="card-body">
													<p class="card-text">Sit or lie down with your leg extended straight
														out. Tighten the quadriceps muscle by pressing the back of your
														knee towards the floor. Hold for a few seconds, then relax.</p>
														<br>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=5TUK4uT2nnw"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/wall-slides.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Wall Slides</h5>
												</div>
												<div class="card-body">
													<p class="card-text">Stand with your back against a wall and feet a
														few inches away from it. Slowly slide down the wall by bending
														your knees, keeping your back flat against the wall. Slide back
														up to the starting position.This exercise engages the muscles of
														the upper back.</p>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=LvW1tOPwTBM"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/straight leg.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Straight Leg Raise</h5>
												</div>
												<div class="card-body">
													<p class="card-text"> Lie on your back with one leg bent and the
														other straight. Tighten your quadriceps and lift the straight
														leg up to the level of the bent knee. Hold briefly, then lower
														slowly.</p>
														<br>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=gobteD5GWkE"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/Shoulder-pendulum.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Pendulum Exercise</h5>
												</div>
												<div class="card-body">
													<p class="card-text">Lean over a table or chair, letting your arm
														hang straight down. Gently swing your arm in small circles or
														back and forth without using your shoulder muscles to lift it.
													</p> <br>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=YYvl59eU78M"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/ankle.jpeg" class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Ankle Pumps</h5>
												</div>
												<div class="card-body">
													<p class="card-text">While sitting or lying down, flex and point
														your toes up and down repeatedly. You can also rotate your ankle
														in circles.Improves ankle flexibility and mobility, strengthens
														the muscles around the ankle.Enhances ankle flexibility,
														stretches the calf muscles, and strengthens the ankle.</p>
													<br>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=1NA0N8F0Nds"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-4 d-flex">
											<div class="card flex-fill">
												<img alt="Card Image" src="./passets/img/hamstring-stretches.jpeg"
													class="card-img-top">
												<div class="card-header">
													<h5 class="card-title mb-0">Hamstring Stretch</h5>
												</div>
												<div class="card-body">
													<p class="card-text"> Lie on your back and lift one leg up while
														keeping it straight. Use a strap or towel around the foot to
														gently pull the leg towards you, stretching the back of your
														thigh.Stretches the hamstrings, improves flexibility in the back
														of the thigh and lower back.Increases hamstring flexibility and
														helps relieve lower back tension.Provides a deep stretch for the
														hamstrings, improves flexibility.</p>
													<a class="btn btn-primary"
														href="https://www.youtube.com/watch?v=me22JRV7pJc"
														target="_blank">Watch Video</a>
												</div>
											</div>
										</div>












									</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 d-flex">

							</div>
						</div>
						</section>



					</div>
					<!-- Tab Content -->

				</div>
			</div>
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
								<img src="./passets/img/only mindflex 201x52.jpg" alt="logo">
							</div>
							<div class="footer-about-content">
								<p>Unlock the power of your mind with Mindflex, the ultimate brain-training experience
									that combines focus, concentration, and fun. Dive into a world where your thoughts
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
	<script src="./passets/js/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="./passets/js/popper.min.js"></script>
	<script src="./passets/js/bootstrap.min.js"></script>

	<!-- Sticky Sidebar JS -->
	<script src="./passets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="./passets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Circle Progress JS -->
	<script src="./passets/js/circle-progress.min.js"></script>

	<!-- Custom JS -->
	<script src="./passets/js/script.js"></script>

</body>

<!-- doccure/invoices.html  30 Nov 2019 04:12:14 GMT -->

</html>