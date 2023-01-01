<nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center">
          <h2 class="h5">{{Auth::user()->name}}</h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="/basicprofile"> <i class="icon-form"></i>Profile</a></li>
          <li><a href="/basicbooking"> <i class="fa fa-bar-chart"></i>Book a tutor</a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Notes</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="basicrequestnotes">Request Notes</a></li>
              <li><a href="basicrequesttut">Request Tutorials</a></li>
            </ul>
          </li>
          <li><a href="basicask"> <i class="icon-interface-windows"></i>Ask question</a></li>
          <li> <a href="basicmassage"> <i class="icon-mail"></i>Messages
              <div class="badge badge-warning">6 New</div></a></li>
			   <li><a href="basicterms"> <i class="icon-interface-windows"></i>Terms and conditions</a></li>
        </ul>
      </div>
    </div>
  </nav>