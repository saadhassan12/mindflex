<!DOCTYPE html>
<html lang="en">

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->

@include('doctor.head')

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		@include('doctor.header')
		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-12 col-12">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Appointments</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Appointments</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

						<!-- Profile Sidebar -->
						@include('doctor.siderbar')
						<!-- /Profile Sidebar -->

					</div>

					<div class="col-md-7 col-lg-8 col-xl-9">
						<div class="appointments">

							

							<!-- Appointment List -->
							@foreach($appointments as $appointment)
							<div class="appointment-list">
								<div class="profile-info-widget">
									<a href="#"
										class="booking-doc-img">
										<img src="../dassets/img/doctors/doctor-thumb-02.jpg" alt="User Image">

									</a>
									<div class="profile-det-info">
										<h3><a href="#">{{
												$appointment->first_name }}</a></h3>
										<div class="patient-details">
											<h5><i class="far fa-clock"></i> {{ $appointment->date }}, {{
												$appointment->time }}</h5>
											<h5><i class="fas fa-map-marker-alt"></i> {{ $appointment->type }}</h5>
											<h5><i class="fas fa-envelope"></i> {{ $appointment->email	 }}</h5>
										
										</div>
									</div>
								</div>
								<div class="appointment-action">
									<a href="#" class="btn btn-sm bg-info-light" data-toggle="modal"
										data-target="#appt_details">
										<i class="far fa-eye"></i> View
									</a>
									<a href="#"
										class="btn btn-sm bg-success-light">
										<i class="fas fa-check"></i> Accept
									</a>
									<a href="#"
										class="btn btn-sm bg-danger-light">
										<i class="fas fa-times"></i> Cancel
									</a>
								</div>
							</div>
							@endforeach

					

						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /Page Content -->

		<!-- Footer -->
		
@include('footer')

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

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->

</html>