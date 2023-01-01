@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Students Appointments</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Appoitments from varsity students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                        <div class="">
                                            <table class="table3 table-bordered table-hover">
                                              <tr id="header-2">
                                                    <th>Name and Surname</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Year</th>
                                                    <th>Module</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Venue</th>
                                                    <th>Address</th>
                                                    <th>Feedback</th>
                                                </tr>
                                                @if(count($studentv) > 0)
                                                @foreach($studentv as $item)
                                                <tbody>
                                                 
                                                  <tr  data-href="studentd">
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->year}}</td>
                                                    <td>{{$item->module}}</td>
                                                    <td>{{$item->date}}</td>
                                                    <td>{{$item->time}}</td>
                                                    <td>{{$item->venue}}</td>
                                                    <td>{{$item->address}}</td>
                                                    <td>
                                                        <div class="action">
                                                          <a href="{{route('adminstudentfeedback', $item->id)}}">Feedback<a>
                                                        </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                                @endforeach 
                                                @else
                                                <p style="color: white;">No Appointments<p>  
                                                @endif

                                              </table>
                                            </div>
                                            <style>
                                              .card
                                              {
                                                  border-radius: 10px !important;
                                              }
                                          </style>
                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Appoitments from high school students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            <div class="">
                                                <table class="table3 table-bordered table-hover">
                                                  <tr id="header-2">
                                                       
                                                        <th>Name and Surname</th>
                                                        <th>Email</th>
                                                        <th>Grade</th>
                                                        <th>Subject</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Venue</th>
                                                        <th>Address</th>
                                                        <th colspan="3">Feedback</th>
                                                    </tr>
                                                     @if(count($studentr) > 0)
                                                      @foreach($studentr as $item)
                                                      <tr> 
                                                    <tbody>
                                                          <td>{{$item->name}}</td>
                                                          <td>{{$item->email}}</td>
                                                          <td>{{$item->grade}}</td>
                                                          <td>{{$item->subject}}</td>
                                                          <td>{{$item->adate}}</td>
                                                          <td>{{$item->atime}}</td>
                                                          <td>{{$item->venue}}</td>
                                                          <td>{{$item->address}}</td>
                                                          <td>
                                                              <div class="action">
                                                                <a href="{{route('adminstudentfeedbackh', $item->id)}}">Feedback<a>
                                                              </div>
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                              
                                                          </td>
                                                        </tr>  
                                                         @endforeach 
                                                        @else
                                                        <p style="color: white;">No Appointments<p>  
                                                        @endif
                                                    </tbody>
                                                  </table>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Unregistered high school students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            <table class="table3 table-bordered table-hover">
                                                <tr id="header-2">
                                                     
                                                      <th>First name </th>
                                                      <th>Last name</th>
                                                      <th>form of contact</th>
                                                      <th>contact details</th>
                                                      <th>grade</th>
                                                      <th>subject</th>
                                                      <th>Time</th>
                                                      <th>Date</th>
                                                      <th>venue</th>
                                                      <th>address</th>
                                                      <th>short description</th>
                                                      <th colspan="3">Action</th>
                                                  </tr>
                                                   @if(count($studenth) > 0)
                                                    @foreach($studenth as $item)
                                                    <tr> 
                                                  <tbody>
                                                        <td>{{$item->first_name}}</td>
                                                        <td>{{$item->last_name}}</td>
                                                        <td>{{$item->form_of_contact}}</td>
                                                        <td>{{$item->contact}}</td>
                                                        <td>{{$item->grade}}</td>
                                                        <td>{{$item->subject}}</td>
                                                        <td>{{$item->appt}}</td>
                                                        <td>{{$item->appd}}</td>
                                                        <td>{{$item->venue}}</td>
                                                        <td>{{$item->Venue_address}}</td>
                                                        <td>{{$item->shortd}}</td>
                                                        <td>
                                                            <div class="action">
                                                              <a href="{{route('adminstudentfeedbackh', $item->id)}}">Feedback<a>
                                                            </div>
                                                        </td>
                                                      </tr>
                                                      <tr>    
                                                      </td>
                                                      </tr>  
                                                       @endforeach 
                                                      @else
                                                      <p style="color: white;">No Appointments<p>  
                                                      @endif
                                                  </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <style>
            .card
            {
                border-radius: 10px !important;
            }
        </style>
          </div>
    </div>
@endsection