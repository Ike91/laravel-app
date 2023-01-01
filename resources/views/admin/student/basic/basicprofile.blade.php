@extends('layouts.students.dashboard_basic')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Profile</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Update Profile</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="utadeD">
                                              <!-- Content Wrapper. Contains page content -->
                                        <div class="content-wrapper">
                                          <br>
                                          <!-- Main content -->
                                          <section class="content">
                                            <div class="container-fluid">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <!-- Profile Image -->
                                                  <div class="card card-primary card-outline">
                                                    <div class="card-body box-profile">
                                                      <div class="text-center">
                                                        <img class="profile-user-img img-fluid img-circle"
                                                        @if (count($user) > 0)
                                                        @foreach ($user as $item)
                                                            src="{!!$item->file!!}"
                                                            alt="User profile picture">
                                                        @endforeach
                                                       @else
                                                         <p> </p>
                                                       @endif
                                                      </div>
                                                      <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
                                                      <p class="text-muted text-center">Student</p>
                                                    </div>
                                                  </div>
                                                  <!-- About Me Box -->
                                                  @if (count($user) > 0)
                                                  @foreach ($user as $item)
                                                  <div class="card card-primary">
                                                    <div class="card-header">
                                                      <h3 class="card-title">About Me</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                      <strong><i class="fas fa-book mr-1"></i> Education</strong>
                                                      <p class="text-muted">
                                                        {!!$item->education!!} 
                                                      </p>
                                                      <hr>
                                                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                                      <p class="text-muted"> {!!$item->location!!} </p> 
                                                      <hr>
                                                      <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                                      <p class="text-muted"> {!!$item->notes!!} </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                  </div>  
                                                  @endforeach      
                                                  @else
                                                      <p>No records</p>
                                                  @endif
                                                  <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-md-9">
                                                  <div class="card">
                                                    <div class="card-header p-2">
                                                      <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profile</a></li>
                                                      </ul>
                                                    </div><!-- /.card-header -->
                                                    <div class="card-body">
                                                      <div class="tab-content">
                                                        <div class="active tab-pane" id="activity">
                                                          <!-- Post -->
                                                          <div class="post">
                                                            <div class="user-block">
                                                             
                                                            </div>
                                                            <!-- /.user-block -->
                                                            <p>Activities will appera here</p>
                                          
                                                          </div>
                                                        </div>
                                                        <div class="tab-pane" id="settings">
                                                          <form class="form-horizontal" action="{{route('updatebasicprofile')}}" method="POST" role="form" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group row">
                                                              <label for="inputName" class="col-sm-2 col-form-label">Name and Surname</label>
                                                              <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" id="inputName" placeholder="Name and Surname">
                                                              </div>
                                                            </div>
                                                            <div class="form-group row">
                                                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                              <div class="col-sm-10">
                                                                <input type="email" class="form-control" value="{{Auth::user()->email}}" name="email" id="inputEmail" placeholder="Email">
                                                              </div>
                                                            </div>
                                                            <div class="form-group row">
                                                              <label for="inputphone" class="col-sm-2 col-form-label">Phone number</label>
                                                              <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number">
                                                              </div>
                                                            </div>
                            
                                                            <div class="form-group row">
                                                              <label for="inputEducation" class="col-sm-2 col-form-label">Education</label>
                                                              <div class="col-sm-10">
                                                                <textarea class="form-control" name="education" id="education" placeholder="Grade"></textarea>
                                                              </div>
                                                            </div>

                                                            <div class="form-group row">
                                                              <label for="location" class="col-sm-2 col-form-label">Location</label>
                                                              <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                                                              </div>
                                                            </div>
                                                            <div class="form-group row">
                                                              <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                                                              <div class="col-sm-10">
                                                                <textarea class="form-control" name="notes" id="education" placeholder="notes"></textarea>
                                                              </div>
                                                            </div>

                                                            <div class="form-group row">
                                                              <label for="inputprofile" class="col-sm-2 col-form-label">Upload profile photo</label>
                                                              <div class="col-sm-10">
                                                                <input type="file"  class="form-file" id="profilepicture" name="file" placeholder="">
                                                              </div>
                                                            </div>

                                                            <div class="form-group row">
                                                              <div class="offset-sm-2 col-sm-10">
                                                                <div class="checkbox">
                                                                  <label>
                                                                    <input  type="checkbox" name="terms" value="unchecked"> I agree to the <a href="#">terms and conditions</a>
                                                                  </label>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="form-group row">
                                                              <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                              </div>
                                                            </div>
                                                          </form>
                                                        </div>
                                                        <!-- /.tab-pane -->
                                                      </div>
                                                      <!-- /.tab-content -->
                                                    </div><!-- /.card-body -->
                                                  </div>
                                                  <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->
                                            </div><!-- /.container-fluid -->
                                          </section>
                                          <!-- /.content -->
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2" disabled>Other</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <p>Please leave it open for future updates
                                    
                                            </div>
                                             





                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"disabled>Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <p>Please leave it open for future updates
                                    
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    
          </div>
    </div>
@endsection