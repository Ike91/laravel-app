<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--include head --->
	  @include('inc.general.head')
    <body>
        @include('inc.general.nav')
        <div class="container">
        @include('inc.general.massages')
        {{-- @include('inc.general..loader') --}}
        @yield('content')
        </div>
        @include('inc.general.footer')
		 <!--scripts --->
		@include('inc.general.scripts')
    </body>
</html>
