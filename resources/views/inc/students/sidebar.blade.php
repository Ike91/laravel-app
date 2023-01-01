<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center">
        <h2 class="h5">{{Auth::user()->name}}</h2><span>Student</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="studentprofile"> <i class="fa fa-user"></i>Profile</a></li>
        <li><a href="studentbooking"> <i class="fa fa-calendar" style="margin-left: 0px !important;"></i>Book a tutor</a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-sticky-note"></i>Notes</a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="studentrequestnotes">Request Notes</a></li>
            <li><a href="studentrequesttut">Request Tutorials</a></li>
          </ul>
        </li>
        <li><a href="/studentask"> <i class="fa fa-question"></i>Ask question</a></li>
        <li><a href="/studentseach"> <i class="fa fa-question-circle"></i>Question and answer</a></li>
        <li> <a href="/studentmassage"> <i class="icon-mail"></i>Messages
            <div class="badge badge-warning">6 New</div></a></li>
        <li><a href="/studentads"> <i class="fa fa-bar-chart"></i>Utrade</a></li>
      </ul>
    </div>
  </div>
</nav>