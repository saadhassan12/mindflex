<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:03 GMT -->

@include('doctor.head')
@include('layout.app')

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

								<!-- again add home page link here upprrrr -->

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
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

						<!-- Profile Sidebar -->
						@include('doctor.siderbar')
						<!-- /Profile Sidebar -->
					</div>
					<div class="col-md-7 col-lg-8 col-xl-9">

						<div class="row">
							<div class="col-md-12">
								<div class="card dash-card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-lg-4">
												<div class="dash-widget dct-border-rht">
													<div class="circle-bar circle-bar1">
														<div class="circle-graph1" data-percent="75">
															<img src="assets/img/icon-01.png" class="img-fluid"
																alt="patient">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Total Patient</h6>
														<h3>100</h3>
														<p class="text-muted">Till Today</p>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-lg-4">
												<div class="dash-widget dct-border-rht">
													<div class="circle-bar circle-bar2">
														<div class="circle-graph2" data-percent="65">
															<img src="assets/img/icon-02.png" class="img-fluid"
																alt="Patient">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Today Patient</h6>
														<h3>10</h3>
														<p class="text-muted">06, August 2024</p>
													</div>
												</div>
											</div>

											<div class="col-md-12 col-lg-4">
												<div class="dash-widget">
													<div class="circle-bar circle-bar3">
														<div class="circle-graph3" data-percent="50">
															<img src="assets/img/icon-03.png" class="img-fluid"
																alt="Patient">
														</div>
													</div>
													<div class="dash-widget-info">
														<h6>Appoinments</h6>
														<h3>85</h3>
														<p class="text-muted">06, august, 2024</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h4 class="mb-4">Patient Appoinment</h4>
								<div class="appointment-tab">

									<!-- Appointment Tab -->
									<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
										<li class="nav-item">
											<a class="nav-link active" href="#upcoming-appointments"
												data-toggle="tab">Total Appointments</a>
										</li>
									</ul>
									<!-- /Appointment Tab -->

									<div class="tab-content">

										<!-- Upcoming Appointment Tab -->
										<div class="tab-pane show active" id="upcoming-appointments">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Patient Name</th>
																	<th>Appt Date</th>
																	<th>Gender</th>
																	<th>Type</th>
																	<th class="text-center">Age</th>
																	<th></th>
																</tr>
															</thead>

															<tbody>
																@foreach($appointments as $appointment)
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="{{ url('patient-profile/' . $appointment->patient_id) }}"
																				class="avatar avatar-sm mr-2">
																				<img src="./passets/img/patients/images.png" alt="User Image">

																			</a>
																			<a
																				href="{{ url('patient-profile/' . $appointment->patient_id) }}">
																				{{ $appointment->first_name }} {{ $appointment->last_name }}
																				<span>#PT{{ $appointment->patient_id
																					}}</span>
																			</a>
																		</h2>
																	</td>
																	<td>{{
																		\Carbon\Carbon::parse($appointment->date)->format('d
																		M Y') }}
																		<span class="d-block text-info">{{
																			\Carbon\Carbon::parse($appointment->time)->format('h:i
																			A') }}</span>
																	</td>
																	<td>{{ $appointment->gander }}</td>
																	<td>{{ $appointment->type }}</td>
																	<td class="text-center">{{ $appointment->age
																		}}</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);"
																				class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																			<a href="javascript:void(0);"
																				class="btn btn-sm bg-success-light">
																				<i class="fas fa-check"></i> Accept
																			</a>
																			<a href="javascript:void(0);"
																				class="btn btn-sm bg-danger-light">
																				<i class="fas fa-times"></i> Cancel
																			</a>
																		</div>
																	</td>
																</tr>
																@endforeach
															</tbody>

														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- Upcoming Appointment Tab -->


									</div>
								</div>
							</div>
						</div>
					</div>

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

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:09 GMT -->

</html>