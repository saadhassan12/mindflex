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
	
			// Generate time slots dynamically (e.g., from 9 AM to 5 PM with 1-hour intervals)
			function generateTimeSlots() {
				const times = [];
				const startHour = 9; // Start time: 9 AM
				const endHour = 17; // End time: 5 PM
				for (let hour = startHour; hour < endHour; hour++) {
					const timeAMPM = (hour <= 12 ? hour : hour - 12) + ':00 ' + (hour < 12 ? 'AM' : 'PM');
					times.push(timeAMPM);
				}
				return times;
			}
	
			// Listen for date selection
			datePicker.addEventListener('change', function() {
				const selectedDate = this.value;
				hiddenDate.value = selectedDate; // Set hidden input value
	
				// Reset time picker options
				timePicker.innerHTML = '<option value="" disabled selected>Select Time</option>';
				const timeSlots = generateTimeSlots(); // Generate time slots dynamically
				timeSlots.forEach(time => {
					const option = document.createElement('option');
					option.value = time;
					option.textContent = time;
					timePicker.appendChild(option);
				});
	
				timePicker.disabled = false; // Enable time picker
				submitBtn.disabled = true; // Disable submit button until a time is selected
			});
	
			// Listen for time selection
			timePicker.addEventListener('change', function() {
				hiddenTime.value = this.value; // Set hidden input value
				submitBtn.disabled = false; // Enable submit button
			});
		});
	</script>
	
	
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