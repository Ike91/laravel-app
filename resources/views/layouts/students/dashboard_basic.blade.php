<!DOCTYPE html>
<html>
  <head>
    @include('inc.general.dashboard.head')
  </head>
  <body>
     @include('inc.students.basicsidebar')
     <div class="container">
        <div class="page">
           @include('inc.general.dashboard.nav')
           @include('inc.general.massages')
             @yield('content')
           @include('inc.general.dashboard.footer')
        </div>
    </div>
    @include('inc.general.dashboard.scripts')
  </body>
</html>