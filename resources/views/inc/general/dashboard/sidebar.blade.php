 <!-- Side Navbar -->
 <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src="img/isaac.jpeg" alt="person" class="img-fluid rounded-circle">
          <h2 class="h5"></h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="/dashboard"> <i class="icon-home"></i>Home</a></li>
          <li><a href="/adminprofile"> <i class="fa fa-user"></i>Profile</a></li>
          <li><a href="adminteam"> <i class="fa fa-group"></i>Team</a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-group"></i>Students</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="/adminstudents">Registered students</a></li>
            </ul>
          <li> <a href="/adminbookings"> <i class="icon-flask"> </i>Appoitnments
          <li><a href="/adminquestion"> <i class="fa fa-question"></i>Questions Q/A</a></li>
          </li>
          <li><a href="/adminpost"> <i class="icon-interface-windows"></i>Tutorials</a></li>
          <li> <a href="/adminmassages"> <i class="icon-mail"></i>Messages
              <div class="badge badge-warning">6 New</div></a></li>
          </ul>
      </div>
      <div class="admin-menu">
        <h5 class="sidenav-heading">Other</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
          <li> <a href="/admintrade"> <i class="icon-screen"> </i>Trade</a></li>
          <li> <a href="#"> <i class="icon-flask"> </i>Demo</a></li>
          <li> <a href="/adminterms"> <i class="icon-picture"> </i>Terms and conditiions</a></li>
        </ul>
      </div>
    </div>
  </nav>