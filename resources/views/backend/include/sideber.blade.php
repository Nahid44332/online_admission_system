<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="profile" />
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Nahid Hossen</span>
                    <span class="text-secondary text-small">Web Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <!-- Students -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#student-menu" aria-expanded="false"
                aria-controls="student-menu">
                <span class="menu-title">Students</span>
                <i class="menu-arrow"></i>
                <i class="fa-solid fa-user"></i>
            </a>
            <div class="collapse" id="student-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/student/list') }}">Student List</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Teachers -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#teacher-menu" aria-expanded="false"
                aria-controls="teacher-menu">
                <span class="menu-title">Teachers</span>
                <i class="menu-arrow"></i>
                <i class="fa-solid fa-chalkboard-user"></i>
            </a>
            <div class="collapse" id="teacher-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/teacher/list') }}">Teachers List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/teacher/add') }}">Add Teacher</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Course -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/course') }}">
                <span class="menu-title">Course</span>
                <i class="mdi mdi-book menu-icon"></i>
            </a>
        </li>

        <!-- Payment -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/payment/list') }}">
                <span class="menu-title">Payment</span>
                <i class="mdi mdi-cash menu-icon"></i>
            </a>
        </li>

        <!-- Admit Card -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/admit-card') }}">
                <span class="menu-title">Admit Card</span>
                <i class="mdi mdi-card-account-details-outline menu-icon"></i>
            </a>
        </li>

        <!-- Exam -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#exam-menu" aria-expanded="false"
                aria-controls="exam-menu">
                <span class="menu-title">Exam</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-file-text menu-icon"></i>
            </a>
            <div class="collapse" id="exam-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/exam') }}">Exam List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/exam/create') }}">Upload Exam File</a>
                    </li>
                </ul>
            </div>
        </li>

          <!-- Student Result -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/student/result')}}">
                <span class="menu-title">Result</span>
                <i class="mdi mdi-file-find menu-icon"></i>
            </a>
        </li>

        <!-- Contact -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/contact-us') }}">
                <span class="menu-title">Contact Message</span>
                <i class="mdi mdi-account-box menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
