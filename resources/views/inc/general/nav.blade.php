<nav class="navbar navbar-dark bg-#1e4356 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <div class="logoh">
         <img src="img/logo/logo3.jpg" alt="Academia logo" style="color: white;">
         
        </div>
      </a>
     
 

      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <div class="logo">
              <img src="img/logo/logo3.jpg" alt="Academia logo" style="color: white;">
            </div>
          </h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
              <a class="nav-link" href="/tutorial">Tutorial</a>
              <a class="nav-link" href="/university">University Q/A</a>
              <a class="nav-link" href="/utrade">Utrade</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Basic Education
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="/grade8">Grade 8</a></li>
                <li><a class="dropdown-item" href="/grade9">Grade 9</a></li>
                <li><a class="dropdown-item" href="/grade10">Grade 10</a></li>
                <li><a class="dropdown-item" href="/grade11">Grade 11 and 12</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Book a session</a></li>
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact us</a>
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2 seachbar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
