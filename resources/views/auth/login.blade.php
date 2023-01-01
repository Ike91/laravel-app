@extends('layouts.default_layout')
@section('content')
<main id="main">
<div class="loginw">
  <div class="cont">
    <div class="text">
      <img src="img/logo/logo3.jpg" alt="Academia logo" style="color: white;">
    </div>
    <form role="form" action="{{ route('login') }}" method="POST">
      @csrf
       <div class="field">
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
          <span class="fas fa-user"></span>
          <label>Email</label>
       </div>
       <br>
       <br>
       <div class="field">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
          <span class="fas fa-lock"></span>
          <label>Password</label>
       </div>
       <br>
       <div class="checkbox" style="margin-left: 5px; color: grey;">
        <label>
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>
    </div>
       <div class="forgot-pass">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">Forgot Password?</a>
        @endif
       </div>
          <button style="color: white !important;">Sign In</button>
       <div class="sign-up">
          Not a member?
          <a href="/register">Create account</a>
       </div>
    </form>
 </div>
</div>   
</main>
@endsection