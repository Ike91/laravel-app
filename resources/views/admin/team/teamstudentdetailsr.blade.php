@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Student Details</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border-bottom-left-radius: 10px; border-bottom-right-radius:10px; border: 1px solid white; box-shadow: 1px 1px 1px 1px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Appointment</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body"  style="background: grey;">

                                        <div class="">
                                          <h4 style="font-family: 'Times New Roman', Times, serif; color: white;">Appointment Details</h4>
                                          <br>
                                            <table class="table3 table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Grade</th>
                                                  <th>subject</th>
                                                  <th>Date</th>
                                                  <th>Time</th>
                                                  <th>Venue</th>
                                                  <th>Address</th>
                                                </tr>
                                              </thead>
                                             
                                              <tbody>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                  <td>{!!$details['id']!!}</td>
                                                  <td>{!!$details['name']!!}</td>
                                                  <td>{!!$details['email']!!}</td>
                                                  <td>{!!$details['grade']!!}</td>
                                                  <td>{!!$details['subject']!!}</td>
                                                  <td>{!!$details['adate']!!}</td>
                                                  <td>{!!$details['atime']!!}</td>
                                                  <td>{!!$details['venue']!!}</td>
                                                  <td>{!!$details['address']!!}</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          <br>
                                          <h4 style="font-family: 'Times New Roman', Times, serif; color: white;">Student Feedback</h4>
                                          <hr>
                                           <b> <p style="color: yellowgreen;">Please ensure to give feedback to student by endication below. If for any reason you can
                                                not accept a student request. Please give a short reason why a student's request was not accepted
                                                By sending feedback, You are giving a student your contact details to contact you direcly.
                                            </p></b>
                                          <hr>
                                          <form class="nclass" action="{{route('teamfeedback')}}" method="POST">
                                            @csrf
                                            <div class="form-row schedule-form">
                                                <div class="form-group col-md-6 inputWithIcon inputIconBg">
                                                    <label for="inputEmail4">Your Name</label>
                                                    <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control" id="inputEmail4" placeholder="Your name">
                                                </div>
                                 
                                                <div class="form-group col-md-6">
                                                    <label for="formOfcontact">Feedback</label>
                                                      <select id="selectContact" name="status" class="form-control selected">
                                                        <option selected>--Select feedback--</option>
                                                        <option value="Approved">Approved</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Denied">Denied</option>
                                                        <option value="other">Other</option>
                                                      </select>
                                                </div> 
                                              </div>
                                              <div class="form-group">
                                                  <label for="student-email" class="form-label">Student email</label>
                                                  <input type="email" class="form-control" name="email" value="{!!$details['email']!!}">
                                              </div>
                                              <div class="form-group schedule-form-message" id="feedback" style="display: block;">
                                                <label for="message">Leave a message or reason if denied</label>
                                                <textarea class="form-control selected inputWithIcon inputIconBg" name="notes" placeholder="Leave a message" required></textarea>
                                            </div>
                                            <div class="sendFeedbtn">
                                              <button class="btn-new">Send</button>
                                            </div>
                                          </form>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2" disabled>Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                       



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4" disabled>Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <p>Send massage to admin</p>



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