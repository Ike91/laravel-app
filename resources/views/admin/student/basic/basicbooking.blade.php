@extends('layouts.students.dashboard_basic')
@section('content')
<div class="requestvidswrapper">
    <div class="notice">
        <h3 style="color: yellowgreen; margin-left:15px; margin-top: 5px;"><b>Book a session with our prominent tutors</b></h3>
    </div>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Book a tutor</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Appointment status</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      
                      <!-- Post -->
                      <div class="post">
                        <div class="tutwraper">
                        <p style="color: yellowgreen;"><b>If you need a one-on -one session book it below, charges will apply</b></p>
                        <hr>
                        <div class="card" style="border-radius: 10px;">
                          <div class="card-header">
                                <h3 class="card-title">Book a session</h3>
                          </div>
                            <form action="{{route('basicbook')}}" role="from" method="POST" style="padding: 10px;">
                              @csrf
                              <div class="form-row schedule-form">
                                  <div class="col-md-12">	
                                      <label class="form-label" for="subject or module">Subject</label>
                                      <input type="text" name="subject" class="form-control" placeholder="Subject">
                                  </div>
                              </div>
                              <div class="form-row schedule-form">
                                  <div class="col-md-6">	
                                      <div class="form-group">
                                          <label class="form-label" for="date">Date</label>
                                          <input type="date" name="adate" min="2022-02-01" max="2022-12-20" class="form-control" placeholder="date">
                                      </div>           		            		            
                                  </div> 
                        
                                  <div class="col-md-6">	
                                      <label class="form-label" for="time">Time</label>
                                      <input type="time" name="atime" class="form-control" min="07:00" max="00:00" placeholder="Time">
                                  </div>
                              </div>
                              <div class="form-row schedule-form">
                                  <div class="col-md-6">	
                                      <div class="form-group">
                                          <label class="form-label" for="venuepreference"> Venue preference</label>
                                          <select id="venue" name="venue" class="form-control">
                                              <option selected>--Select--</option>
                                              <option value="Home">Home</option>
                                              <option value="School">School</option>
                                              <option value="Other">Other</option>
                                          </select>	
                                      </div>           		            		            
                                  </div> 
                        
                                  <div class="col-md-6">	
                                      <label class="form-label" for="address">Address</label>
                                      <input type="text" name="address" class="form-control" placeholder="Venue address">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="submita">
                                      <button type="button home-button">Book</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="settings">
                      <div class="tutwraper"> 
                          <b><p style="color:yellowgreen;">Below you will find a summary of your bookings and aproval statuses</p></b>
                          <hr>
                      <div class="card" style="border-radius: 10px;">
                        <div class="card-header">
                              <h3 class="card-title">Session summary</h3>
                        </div>
                        <table class="table3 table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                                <th>Tutor Name</th>
                                <th>Tutor email</th>
                                <th>Tutor Phone number</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Notes</th>
                            </tr>
                          </thead>
                          @if (count($feedback) > 0)
                          @foreach ($feedback as $item)
                          <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                              <td>{!!$item->id!!}</td>
                                <td>{!!$item->name!!}</td>
                                <td>{!!$item->temail!!}</td>
                                <td>{!!$item->phone!!}</td>
                                <td>{!!$item->created_at!!}</td>
                                <td>{!!$item->status!!}</td>
                                <td>{!!$item->notes!!}</td>
                            </tr>
                          </tbody>
                          @endforeach                                                      
                          @else
                           <p>No Appointments</p>  
                          @endif
                        </table>
                      </div>
                      </div>
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
</div> 
@endsection