@extends('layouts.students.dashboard_student')
@section('content')
<div class="utadeD">
    <div class="notice">
        <h3 style="color: yellowgreen; margin-left:15px; margin-top: 5px;"><b>Book a session with our prominent tutor</b></h3>
    </div>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card" style="border-radius: 10px !important;">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item customlinks"><a class="nav-link active" href="#activity" data-toggle="tab">Book a tutor</a></li>
                    <li class="nav-item customlinks"><a class="nav-link" href="#settings" data-toggle="tab">Appointment status</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                          <div class="card cardfrom" style="border-radius: 10px; ">
                            <div class="card-header">
                                  <h3 class="card-title">Book a tutor</h3>
                            </div>
                            <form action="{{route('studentbook')}}" role="form" method="POST">
                              @csrf
                              <div class="form-row schedule-form">
                                  <div class="col-md-12">	
                                      <label class="form-label" for="subject or module">Module</label>
                                      <input type="text" name="module" class="form-control" placeholder="module name and code">
                                  </div>
                              </div>
                              <div class="form-row schedule-form">
                                  <div class="col-md-6">	
                                      <div class="form-group">
                                          <label class="form-label" for="date">Date</label>
                                          <input type="date" name="date" min="2022-02-01" max="2022-12-20" class="form-control" placeholder="date">
                                      </div>           		            		            
                                  </div> 
                        
                                  <div class="col-md-6">	
                                      <label class="form-label" for="time">Time</label>
                                      <input type="time" name="time" class="form-control" min="07:00" max="00:00" placeholder="Time">
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
                    <div class="tab-pane" id="settings">
                      <div class="card cardfrom" style="border-radius: 10px;">
                        <div class="card-header">
                              <h3 class="card-title">Appointment summary</h3>
                        </div>
                      <div class="tutwraperr"> 
                       
                         <b><p>Below you will find a summary of your bookings and aproval statuses</p></b>
                          <hr>
                          <b><p style="color: white !important;">Your booking summary, these summary will be deleted as soon as your appointment is approved</p></b>
                          <hr>
                          <table class="table3 table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Your Name</th>
                                <th>Your Phone number</th>
                                <th>Your Email</th>
                                <th>Year of Study</th>
                                <th>Module</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Venue Preference</th>
                                <th>Address</th>
                              </tr>
                            </thead>
                            @if (count($summary) > 0)
                            @foreach ($summary as $item)
                            <tbody>
                              <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{!!$item->id!!}</td>
                                <td>{!!$item->name!!}</td>
                                <td>{!!$item->phone!!}</td>
                                <td>{!!$item->email!!}</td>
                                <td>{!!$item->year!!}</td>
                                <td>{!!$item->module!!}</td>
                                <td>{!!$item->date!!}</td>
                                <td>{!!$item->time!!}</td>
                                <td>{!!$item->venue!!}</td>
                                <td>{!!$item->address!!}</td>
                              </tr>
                            </tbody>
                            @endforeach                                                      
                            @else
                             <p>No Appointments</p>  
                            @endif
                          </table>
                          <hr>
                         <b><p>Status</p></b>
                         <hr>
                          <table class="table3 table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Tutor Name</th>
                                <th>Tutor Phone number</th>
                                <th>Tutor email</th>
                                <th>Approval date and time</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            @if (count($feedback) > 0)
                            @foreach ($feedback as $item)
                            <tbody>
                              <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{!!$item->id!!}</td>
                                <td>{!!$item->name!!} </td>
                                <td>{!!$item->phone!!}</td>
                                <td>{!!$item->email!!}</td>
                                <td>{!!$item->created_at!!}</td>
                                <td>{!!$item->status!!}</td>
                              </tr>
                              <tr class="expandable-body">
                                <td colspan="6">
                                  <div class="desc">
                                    <p style="color: white !important;">
                                      {!!$item->notes!!}
                                     </p>
                                  </div>
                                </td>
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