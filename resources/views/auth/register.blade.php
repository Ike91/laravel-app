@extends('layouts.default_layout')
@section('content')
<main id="main">
  <body class="templatemo-bg-image-1">
    <div class="container">
       <div class="col-md-12">
        <form class="form-horizontal templatemo-login-form-2" role="form"  method="POST" action="{{ route('register') }}">
            @csrf
          <div class="general" id="general">
             <br>
              <h3 style="font-family: 'Times New Roman', Times, serif">Register</h3>
              <hr>

              <div class="Internal">
                  <div class="form-row fromc">
                    <div class="col-md-6">	
                        <div class="form-group">
                            <label for="first_name" class="form-label">First Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       	            		            		            
                    </div> 
           
                    <div class="col-md-6">
                        <div class="fomr-group">
                            <label for="last_name" class="from-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>			            		            		            
                     </div>
                  </div>
                


                   <div class="form-row formc fromcc">
                     <div class="col-md-6">	
                         <div class="form-group">
                            <label for="password" class="control-label">Create password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>	          			            		            		            
                     </div> 
                     <div class="col-md-6">	
                         <div class="form-group">
                            <label for="password" class="control-label">Confirm password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                         </div>
                     </div>             
                   </div>
                   <div class="form-row formc fromcc">
                    <div class="col-md-12">	
                        <div class="form-group">
                            <label for="" class="control-label"> Role</label>
                            <select id="#" name="role" class="form-control">
                                <option selected>--Select--</option>
                                <option value="High">High School Student</option>
                                <option value="Varsity">University Student</option>
                                <option value="Tutor">Tutor</option>
                            </select>		          	 
                    </div>        
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="sybmitbtn">
                            <button class="btn-primary" id="sButton" style="display: block;">Submit</button>
                        </div>
                    </div>
                    
                   </div>
          </div>
          </div>                
            </div>
          </div>           
      </form>
      <br>
    </div>
  </body>
</main>
@endsection