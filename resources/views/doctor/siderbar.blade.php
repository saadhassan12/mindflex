<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="../dassets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</h3>

                <div class="patient-details">
                    <h5 class="mb-0">{{ Auth::user()->type}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('doctorhomepage') }}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dappointment') }}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="my-patients.html">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>
               
                <li>
                    <a href="invoices.html">
                        <i class="fas fa-file-invoice"></i>
                        <span>Invoices</span>
                    </a>
                </li>
               
                <li>
                    <a href="chat-doctor.html">
                        <i class="fas fa-comments"></i>
                        <span>Message</span>
                        <small class="unread-msg">23</small>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dprofile') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('chngepass') }}">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('adminlogout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>