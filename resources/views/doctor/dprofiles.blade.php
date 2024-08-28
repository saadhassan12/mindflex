<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-profile-settings.html  30 Nov 2019 04:12:14 GMT -->


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
								<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
							</ol>
						</nav>
						<h2 class="breadcrumb-title">Profile Settings</h2>
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
						<!-- Profile Sidebar -->
						@include('doctor.siderbar')
						<!-- /Profile Sidebar -->

					</div>
					<div class="col-md-7 col-lg-8 col-xl-9">
						<h1>Doctor Information</h1>
						<form action="#" method="POST" enctype="multipart/form-data">
							@csrf
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="firstName">First Name:</label>
									<input type="text" class="form-control" id="first_name" name="first_name" required value="{{ $doctorProfile->first_name }}">
									<small class="form-text error" id="firstNameError"></small>
								</div>
								<div class="form-group col-md-6">
									<label for="lastName">Last Name:</label>
									<input type="text" class="form-control" id="last_name" name="last_name" required value="{{ $doctorProfile->last_name }}">
									<small class="form-text error" id="lastNameError"></small>
								</div>
							</div>
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="age">Age:</label>
									<input type="number" class="form-control" id="age" name="age" required max="80" oninput="validateAge(this)" value="{{ $doctorProfile->age }}">
									<small class="form-text error" id="ageError"></small>
								</div>
								<div class="form-group col-md-6">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="user_name" name="user_name" required value="{{ $doctorProfile->user_name }}">
									<small class="form-text error" id="usernameError"></small>
								</div>
							</div>
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" name="email" required  value="{{ $doctorProfile->email }}">
									<small class="form-text error" id="emailError"></small>
								</div>
								{{-- <div class="form-group col-md-6">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" name="password" required>
									<small class="form-text error" id="passwordError"></small>
								</div> --}}
							</div>
					
							<input type="hidden" name="type" value="doctor" />
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="gender">Gender:</label>
									<select class="form-control" id="gender" name="gender" required>
										<option value="">Choose Gender</option>
										<option value="male" {{ $doctorProfile->gander == 'male' ? 'selected' : '' }}>Male</option>
										<option value="female" {{ $doctorProfile->gander == 'female' ? 'selected' : '' }}>Female</option>
										<option value="other" {{ $doctorProfile->gander == 'other' ? 'selected' : '' }}>Other</option>
									</select>
									<small class="form-text error" id="genderError"></small>
								</div>
								<div class="form-group col-md-6">
									<label for="specialization">Specialization:</label>
									<input type="text" class="form-control" id="specialization" name="specialization" required value="{{ $doctorProfile->specialization }}">
									<small class="form-text error" id="specializationError"></small>
								</div>
							</div>
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="experience">Experience (Years):</label>
									<input type="number" class="form-control" id="experience" name="experience" required value="{{ $doctorProfile->experience }}">
									<small class="form-text error" id="experienceError"></small>
								</div>
								<div class="form-group col-md-6">
									<label for="phone">Phone Number:</label>
									<input type="tel" class="form-control" id="phone" name="phone" required value="{{ $doctorProfile->phone }}">
									<small class="form-text error" id="phoneError"></small>
								</div>
							</div>
					
							<div class="row">
								<div class="form-group col-md-6">
									<label for="address">Address:</label>
									<textarea class="form-control" id="address" name="address" rows="3" required>{{ $doctorProfile->address }}</textarea>
									<small class="form-text error" id="addressError"></small>
								</div>
								<div class="form-group col-md-6">
									<label for="notes">Additional Notes:</label>
									<textarea class="form-control" id="notes" name="notes" rows="3">{{ $doctorProfile->notes }}</textarea>
								</div>
							</div>
					
							<div class="row mt-4">
								<div class="form-group col-md-6">
									<label for="documents">Doctor's Documents:</label>
									<input type="file" class="form-control-file" id="documents" name="documents[]" accept=".pdf,.doc,.docx" multiple>
									<small class="form-text error" id="documentsError"></small>
							
									@if(!empty($doctorProfile->documents))
										<div class="mt-2">
											<label>Existing Documents:</label>
											<ul>
												@foreach(json_decode($doctorProfile->documents) as $document)
													<li><a href="{{ asset('storage/documents/' . $document) }}" target="_blank">{{ $document }}</a></li>
												@endforeach
											</ul>
										</div>
									@endif
								</div>
							
								<div class="form-group col-md-6">
									<label for="image">Doctor's Image:</label>
									<input type="file" class="form-control-file" id="image" name="image" accept="image/*">
									<small class="form-text error" id="imageError"></small>
							
									@if(!empty($doctorProfile->image))
										<div class="mt-2">
											<label>Existing Image:</label><br>

											<img class="img-fluid" alt="Doctor's Image"  style="max-width: 150px;"
																				src="{{ asset('images/' . $doctorProfile->image) }}">
										</div>
									@endif
								</div>
							</div>
							
							{{-- <button type="submit" class="btn btn-primary mt-4">Save</button> --}}
						</form>
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

</body>

<!-- doccure/doctor-profile-settings.html  30 Nov 2019 04:12:15 GMT -->

</html>