<!DOCTYPE html>
<html lang="en">


@include('layout.app')
@include('patient.head')

<style>
	.date-dropdown,
	.time-dropdown {
		margin-bottom: 15px;
	}
</style>

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
		<div class="container">
			<form action="{{ route('appointment.store') }}" method="POST">
				@csrf
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="booking-doc-info">
									<a href="doctor-profile.html" class="booking-doc-img">
										<img class="img-fluid" alt="User Image" src="{{ asset('images/' . $doctors->image) }}">
									</a>
									<div class="booking-info">
										<h4><a href="doctor-profile.html">{{ $doctors->first_name }} {{ $doctors->last_name }}</a></h4>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">35</span>
										</div>
										<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{ $doctors->address }}</p>
									</div>
								</div>
							</div>
						</div>
	
						<!-- Schedule Widget -->
						<div class="card booking-schedule schedule-widget">
							<!-- Schedule Header -->
							<div class="schedule-header">
								<div class="row">
									<div class="col-md-12">
										<!-- Date Dropdown -->
										<div class="date-dropdown">
											<select id="date-picker" class="form-control">
												<option value="" disabled selected>Select Date</option>
												<!-- Dates will be populated by JavaScript -->
											</select>
										</div>
									</div>
								</div>
							</div>
							<!-- /Schedule Header -->
	
							<!-- Schedule Content -->
							<div class="schedule-cont">
								<div class="row">
									<div class="col-md-12">
										<!-- Time Dropdown -->
										<div class="time-dropdown">
											<select id="time-picker" class="form-control" disabled>
												<option value="" disabled selected>Select Time</option>
												<!-- Time slots will be populated based on selected date -->
											</select>
										</div>
									</div>
								</div>
							</div>
							<!-- /Schedule Content -->
						</div>
						<!-- /Schedule Widget -->
	
						<!-- Hidden Inputs -->
						<input type="hidden" name="date" id="hidden-date">
						<input type="hidden" name="time" id="hidden-time">
						<input type="hidden" name="doctor_id" id="doctor_id" value="{{ $doctors->user_id }}">
						<input type="hidden" name="patient_id" id="patient_id" value="{{ auth()->id() }}">
						<!-- Submit Section -->
						<div class="submit-section proceed-btn text-right">
							<button id="submit-btn" class="btn btn-primary submit-btn" disabled type="submit">Proceed to Pay</button>
						</div>
						<!-- /Submit Section -->
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const datePicker = document.getElementById('date-picker');
			const timePicker = document.getElementById('time-picker');
			const submitBtn = document.getElementById('submit-btn');
			const hiddenDate = document.getElementById('hidden-date');
			const hiddenTime = document.getElementById('hidden-time');
	
			// Generate the next 15 days
			function generateDateOptions() {
				const today = new Date();
				for (let i = 0; i < 15; i++) {
					const date = new Date(today);
					date.setDate(today.getDate() + i);
					const day = date.getDate();
					const month = date.toLocaleString('default', { month: 'short' });
					const year = date.getFullYear();
					const formattedDate = `${day} ${month} ${year}`;
					const option = document.createElement('option');
					option.value = date.toISOString().split('T')[0]; // Format YYYY-MM-DD
					option.textContent = formattedDate;
					datePicker.appendChild(option);
				}
			}
	
			generateDateOptions();
	
			// Dummy time slots based on selected date
			const timeSlots = {
				'2024-08-28': ['9:00 AM', '10:00 AM', '11:00 AM'],
				'2024-08-29': ['1:00 PM', '2:00 PM', '3:00 PM'],
				// Add more dates and times as needed
			};
	
			datePicker.addEventListener('change', function() {
				const selectedDate = this.value;
				hiddenDate.value = selectedDate; // Set hidden input value
				if (timeSlots[selectedDate]) {
					timePicker.innerHTML = '<option value="" disabled selected>Select Time</option>'; // Reset time options
					timeSlots[selectedDate].forEach(time => {
						const option = document.createElement('option');
						option.value = time;
						option.textContent = time;
						timePicker.appendChild(option);
					});
					timePicker.disabled = false; // Enable time picker
				} else {
					timePicker.innerHTML = '<option value="" disabled selected>No Time Slots Available</option>';
					timePicker.disabled = true; // Disable time picker
				}
				submitBtn.disabled = true; // Disable submit button until a time is selected
			});
	
			timePicker.addEventListener('change', function() {
				hiddenTime.value = this.value; // Set hidden input value
				submitBtn.disabled = false; // Enable submit button
			});
		});
	</script>
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


</body>

<!-- doccure/invoices.html  30 Nov 2024 04:12:14 GMT -->

</html>

</div>


<script>
	document.addEventListener('DOMContentLoaded', function() {
    const timings = document.querySelectorAll('.timing');
    
    timings.forEach(timing => {
        timing.addEventListener('click', function(event) {
            event.preventDefault();
            
            const slotId = this.getAttribute('data-slot-id');
            const time = this.getAttribute('data-time');
            
            // Send data to server
            fetch('/save-booking', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    slot_id: slotId,
                    time: time
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Booking saved successfully!');
                } else {
                    alert('An error occurred.');
                }
            });
        });
    });
});


</script>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>

<!-- doccure/booking.html  30 Nov 2024 04:12:16 GMT -->

</html>