 <!-- Side Navbar -->
 <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center">
          <h2 class="h5">{{Auth::user()->name}}</h2><span>Tutor</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>

      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          {{-- <li><a href="/dashboard_team"> <i class="icon-home"></i>Home</a></li> --}}
          <li><a href="/teamprofile"> <i class="fa fa-user"></i>Profile</a></li>
          <li><a href="/teamstudents"> <i class="fa fa-group"></i>Students</a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Upload</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="/teamnotes">Notes to students</a></li>
              <li><a href="/teamtutorial">video tutorilas</a></li>
              <li><a href="/teamtrade">Post ad</a></li>
            </ul>
          </li>
          <li><a href="/teamquestion"> <i class="fa fa-question"></i>Questions</a></li>
          <li> <a href="/teammassages"> <i class="icon-mail"></i>Messages
              <div class="badge badge-warning">6 New</div></a></li>
        </ul>
      </div>
      <div class="admin-menu">
        <h5 class="sidenav-heading">Clients Feedback</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
          <li> <a href="/teamfeedbackg"> <i class="icon-flask"> </i>Clients feedback</a></li>
          <li> <a href="#"> <i class="icon-flask"> </i>Demo
              <div class="badge badge-info">Special</div></a></li>
          <li> <a href="#"> <i class="icon-flask"> </i>Demo</a></li>
          <li> <a href="/teamterms"> <i class="icon-picture"> </i>Terms and conditions</a></li>
        </ul>
      </div>
    </div>
  </nav>