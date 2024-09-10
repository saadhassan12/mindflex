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
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Dashboard</h2>
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

								<!-- Tab Menu -->
								<nav class="user-tabs mb-4">

									<!-- /Tab Menu -->
									<section class="main">
										{{-- <div class="main-top">
											<h1>Welcome Back! </h1><br>
											<i class="fas fa-user-cog"></i>
										</div> --}}
										<div class="main-skills">
											<div class="card">
												<i class="fas fa-dumbbell"></i>
												<h3>Exercise Analytics</h3>
												<p>Join Over 1 million patients.</p>
												<button>Get Started</button>
											</div>
											<div class="card">
												<i class="fas fa-video"></i>
												<h3>Virtual Consultation</h3>
												<p>Join Over 3 million patients.</p>
												<button>Get Started</button>
											</div>
											<div class="card">
												<i class="fas fa-chart-line"></i>
												<h3>Daily performance</h3>
												<p>Join Over 2 million Patients.</p>
												<button>Get Started</button>
											</div>
											<div class="card">
												<i class="fas fa-tasks"></i>
												<h3>TO DO</h3>
												<p>Join Over 1 million Patients.</p>
												<button>Get Started</button>
											</div>
										</div>

										<section class="main-course">
											<h1>Excercise</h1>
											<div class="course-box">
												<ul>
													<li class="active">In progress</li>
													<!-- <li>explore</li>
											  <li>incoming</li>
											  <li>finished</li> -->
												</ul>
												<div class="course">
													<div class="box">
														<h3>Cognitive Behavioral Therapy</h3>
														<p>0% - progress</p>
														<button
															style="background-color: #06A3DA; color: white;">continue</button>
														<i class="fas fa-brain"></i>
														<!-- Changed to brain icon for Cognitive Behavioral Therapy -->
													</div>
													<div class="box">
														<h3>Dialectical Behavior Therapy (DBT)</h3>
														<p>01% Bhi Nahi - progress</p>
														<button
															style="background-color: #06A3DA; color: white;">continue</button>
														<i class="fas fa-balance-scale"></i>
														<!-- Changed to balance scale icon for DBT -->
													</div>
													<div class="box">
														<h3>Orthopedic Physiotherapy</h3>
														<p>.5% - progress</p>

														<button
															style="background-color: #06A3DA; color: white;">continue</button>
														<i class="fas fa-walking"></i>
														<!-- Changed to walking icon for Orthopedic Physiotherapy -->
													</div>

												</div>
											</div>
										</section>
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

	<!-- Footer Start -->
{{-- @include('footer') --}}
<!-- Footer End -->

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