<!DOCTYPE html>
<html lang="en">

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
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
								<li class="breadcrumb-item active" aria-current="page">Appointment</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Appointment</h2>
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
									<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
										<li class="nav-item">
											<a class="nav-link active" href="#pat_appointments"
												data-toggle="tab">Appointments</a>
										</li>
										{{-- <li class="nav-item">
											<a class="nav-link" href="#pat_prescriptions"
												data-toggle="tab">Prescriptions</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span
													class="med-records">Medical Records</span></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#pat_billing" data-toggle="tab">Billing</a>
										</li> --}}
									</ul>
								</nav>
								<!-- /Tab Menu -->

								<!-- Tab Content -->
								<div class="tab-content pt-0">

									<!-- Appointment Tab -->
									<div id="pat_appointments" class="tab-pane fade show active">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Doctor</th>
																<th>Appt Date</th>
																<th>Booking Date</th>
																<th>Follow Up</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															@foreach($appointments as $appointment)

															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ url('doctor-profile', $appointment->doctor_id) }}"
																			class="avatar avatar-sm mr-2">

																			<img class="img-fluid" alt="User Image"
																				src="{{ asset('images/' . $appointment->image) }}">

																		</a>
																		<a href="#">
																			Dr. {{ $appointment->first_name }} {{
																			$appointment->last_name }}
																			<span>{{ $appointment->specialization
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
																<td>{{
																	\Carbon\Carbon::parse($appointment->created_at)->format('d
																	M Y') }}</td>
																<td>{{
																	\Carbon\Carbon::parse($appointment->created_at)->format('d
																	M Y') }}</td>

																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
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

									<!-- /Appointment Tab -->

									<!-- Prescription Tab -->
									<div class="tab-pane fade" id="pat_prescriptions">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Date </th>
																<th>Name</th>
																<th>Created by </th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>14 Nov 2019</td>
																<td>Prescription 1</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-01.jpg"
																				alt="User Image">
																		</a>

																		<a href="doctor-profile.html">Dr. Mariam naeem
																			<span>physiotherpist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>13 Nov 2019</td>
																<td>Prescription 2</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-02.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. junaid
																			<span>physcologist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>12 Nov 2019</td>
																<td>Prescription 3</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-03.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Sara
																			<span>physiotherpist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																	</div>
																</td>
															</tr>



														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- /Prescription Tab -->

									<!-- Medical Records Tab -->
									<div id="pat_medical_records" class="tab-pane fade">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>ID</th>
																<th>Date </th>
																<th>Description</th>
																<th>Attachment</th>
																<th>Created</th>
																<th></th>
															</tr>
														</thead>
														<tbody>



															<tr>
																<td><a href="javascript:void(0);">#MR-0004</a></td>
																<td>8 Nov 2019</td>
																<td>Head pain</td>
																<td><a href="#">neuro-test.pdf</a></td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-07.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Nameera
																			<span>physcologist<span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td><a href="javascript:void(0);">#MR-0003</a></td>
																<td>7 Nov 2019</td>
																<td>Skin Alergy</td>
																<td><a href="#">alergy-test.pdf</a></td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-08.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Maleeha
																			<span>physiotherpist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td><a href="javascript:void(0);">#MR-0002</a></td>
																<td>6 Nov 2019</td>
																<td>Dental Removing</td>
																<td><a href="#">dental-test.pdf</a></td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-09.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. bushra <span>
																				physiotherpist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td><a href="javascript:void(0);">#MR-0001</a></td>
																<td>5 Nov 2019</td>
																<td>Dental Filling</td>
																<td><a href="#">dental-test.pdf</a></td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-10.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Ayesha
																			<span>physcologist</span></a>
																	</h2>
																</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- /Medical Records Tab -->

									<!-- Billing Tab -->
									<div id="pat_billing" class="tab-pane fade">
										<div class="card card-table mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-center mb-0">
														<thead>
															<tr>
																<th>Invoice No</th>
																<th>Doctor</th>
																<th>Amount</th>
																<th>Paid On</th>
																<th></th>
															</tr>
														</thead>
														<tbody>





															<tr>
																<td>
																	<a href="invoice-view.html">#INV-0003</a>
																</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-08.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Mariam naeem
																			<span>physiotherpist</span></a>
																	</h2>
																</td>
																<td>$250</td>
																<td>7 Nov 2019</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="invoice-view.html"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="invoice-view.html">#INV-0002</a>
																</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-09.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. junaid
																			<span>physcologist</span></a>
																	</h2>
																</td>
																<td>$175</td>
																<td>6 Nov 2019</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="invoice-view.html"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="invoice-view.html">#INV-0001</a>
																</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="doctor-profile.html"
																			class="avatar avatar-sm mr-2">
																			<img class="avatar-img rounded-circle"
																				src="assets/img/doctors/doctor-thumb-10.jpg"
																				alt="User Image">
																		</a>
																		<a href="doctor-profile.html">Dr. Sara
																			<span>physiotherpist</span></a>
																	</h2>
																</td>
																<td>$550</td>
																<td>5 Nov 2019</td>
																<td class="text-right">
																	<div class="table-action">
																		<a href="invoice-view.html"
																			class="btn btn-sm bg-info-light">
																			<i class="far fa-eye"></i> View
																		</a>
																		<a href="javascript:void(0);"
																			class="btn btn-sm bg-primary-light">
																			<i class="fas fa-print"></i> Print
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- /Billing Tab -->

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