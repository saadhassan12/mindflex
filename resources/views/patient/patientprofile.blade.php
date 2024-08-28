
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-doc-img">
                    <img src="./passets/img/patients/images.png" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h3>
                    <div class="patient-details">
                        <h5><i class="fas fa-birthday-cake"></i>{{ auth()->user()->created_at }}</h5>
                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>{{ auth()->user()->email }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="active">
                        <a href="{{ route('patientview') }}">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('doctorview') }}">
                            <i class="fas fa-user-md"></i> <!-- Changed icon class to a more relevant one -->
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ route('pappointment') }}">
                            <i class="fas fa-calendar-check"></i> <!-- Changed icon class to a calendar/checkmark for appointments -->
                            <span>Appointment</span>
                        </a>
                    </li>
                    <li>
                        <a  href="{{ route('exercise') }}">
                            <i class="fas fa-dumbbell"></i> <!-- Changed icon class to a dumbbell for exercise -->
                            <span>Exercise</span> <!-- Fixed spelling mistake -->
                        </a>
                    </li>
                    <!-- <li>
                        <a href="favourites.html">
                            <i class="fas fa-bookmark"></i>
                            <span>Vr Excercise</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="chat.html">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">23</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pprofile') }}">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('changepass') }}">
                            <i class="fas fa-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('adminlogout') }}" method="POST" style="; border: none; background: none; padding: 14px 16px; margin: 0; cursor: pointer; color: inherit; font: inherit; display: flex; align-items: center; font-size: 16px;">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                            </button>
                        </form>
                    </li>
                    {{-- <li>
                        <form action="{{ route('adminlogout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                            </button>
                        </form>
                    </li> --}}
                </ul>
            </nav>
        </div>

    </div>
</div>