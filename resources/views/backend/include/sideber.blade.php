  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                      <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="profile" />
                      <span class="login-status online"></span>
                      <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                      <span class="font-weight-bold mb-2">Nahid Hossen</span>
                      <span class="text-secondary text-small">Web Developer</span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">
                  <span class="menu-title">Dashboard</span>
                  <i class="mdi mdi-home menu-icon"></i>
              </a>
          </li>
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
                          <a class="nav-link" href="{{url('/admin/teacher/list')}}">Teachers List</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/teacher/add')}}">Add Teacher</a>
                      </li>
                  </ul>
              </div>
          </li>
      </ul>
  </nav>
