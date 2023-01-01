@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Students</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card"  style="border-bottom-left-radius: 10px; border-bottom-right-radius:10px; border: 1px solid white; box-shadow: 1px 1px 1px 1px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Appointments from high school students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body" style="background: grey;">
                                        <div class="">
                                            <!-- /.row -->
                                      <div class="row">
                                          <div class="col-12">
                                           
                                                <p style="color: yellowgreen;"><b>Appointments from unregistered students</b></p>
                                                <hr>
                                                <table class="table3 table-bordered table-hover">
                                                  <thead>
                                                    <tr>
                                                      <th>Acadmia ID</th>
                                                      <th>Student Name</th>
                                                      <th>Subject</th>
                                                      <th>Grade</th>
                                                      <th>Date</th>
                                                      <th>Short description</th>
                                                    </tr>
                                                  </thead>
                                                  @if (count($appointments) > 0)
                                                  @foreach ($appointments as $item)
                                                  <tbody>
                                                    <tr data-widget="expandable-table" aria-expanded="false">
                                                      <td>{!!$item->id!!}</td>
                                                      <td>{!!$item->first_name!!} {!!$item->last_name!!} </td>
                                                      <td>{!!$item->subject!!}</td>
                                                      <td>{!!$item->grade!!}</td>
                                                      <td>{!!$item->appd!!} {!!$item->appt!!}</td>
                                                      <td>{!!$item->shortd!!}</td>
                                                    </tr>
                                                    <tr class="expandable-body">
                                                      <td colspan="6">
                                                        <div class="desc">
                                                          <p>
                                                            <a href="{{route('teamstudentdetails', $item->id)}}">{!!$item->shortd!!}</a>
                                                           </p>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                  @endforeach                                                      
                                                  @else
                                                   <p style="color: yellowgreen;">No Appointments</p>  
                                                  @endif
                                                </table>
                                                <b><hr></b>
                                                <p style="color: yellowgreen;"><b>Appointments from registered students</b></p>
                                                <hr>
                                                <table class="table3 table-bordered table-hover">
                                                  <thead>
                                                    <tr>
                                                      <th>Acadmia ID</th>
                                                      <th>Student Name</th>
                                                      <th>Email</th>
                                                      <th>Grade</th>
                                                      <th>Subject</th>
                                                      <th>Date</th>
                                                      <th>Time</th>
                                                      <th>Venue Preference</th>
                                                      <th>Address</th>
                                                    </tr>
                                                  </thead>
                                                  @if (count($studentbook) > 0)
                                                  @foreach ($studentbook as $item)
                                                  <tbody>
                                                    <tr data-widget="expandable-table" aria-expanded="false">
                                                      <td>{!!$item->id!!}</td>
                                                      <td>{!!$item->name!!}</td>
                                                      <td>{!!$item->email!!}</td>
                                                      <td>{!!$item->grade!!}</td>
                                                      <td>{!!$item->subject!!}</td>
                                                      <td>{!!$item->adate!!}</td>
                                                      <td>{!!$item->atime!!}</td>
                                                      <td>{!!$item->venue!!}</td>
                                                      <td>{!!$item->address!!}</td>
                                                    </tr>
                                                    <tr class="expandable-body">
                                                      <td colspan="9">
                                                        <div class="desc">
                                                          <p>
                                                            <a href="{{route('teamstudentdetailsr', $item->id)}}">{!!$item->address!!}</a>
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

                                             
                                              <!-- /.card-body -->
                                            <!-- /.card -->
                                          </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border-bottom-left-radius: 10px; border-bottom-right-radius:10px; border: 1px solid white; border-radius: 10px; box-shadow: 1px 1px 1px 1px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Appointments from varsity students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body" style="background: grey;">
                                                <!-- /.row -->
                                          <div class="row">
                                              <div class="col-12">
                                                    <p style="color: yellowgreen;"><b>Appointments from university students</b></p>
                                                    <hr>
                                                   
                                                     
                                                    <table class="table3 table-bordered table-hover">
                                                      <thead>
                                                        <tr>
                                                          <th>ID</th>
                                                          <th>Student Name</th>
                                                          <th>Student Email</th>
                                                          <th>Module name and code</th>
                                                          <th>Year of study</th>
                                                          <th>Date</th>
                                                          <th>Time</th>
                                                        </tr>
                                                      </thead>
                                                      @if (count($studentsv) > 0)
                                                      @foreach ($studentsv as $item)
                                                      <tbody>
                                                        <tr data-widget="expandable-table" aria-expanded="false">
                                                          <td>{!!$item->id!!}</td>
                                                          <td>{!!$item->name!!}</td>
                                                          <td>{!!$item->email!!}</td>
                                                          <td>{!!$item->module!!}</td>
                                                          <td>{!!$item->year!!}</td>
                                                          <td>{!!$item->date!!}</td>
                                                          <td>{!!$item->time!!}</td>
                                                        </tr>
                                                        <tr class="expandable-body">
                                                          <td colspan="7">
                                                            <p>
                                                              <a href="{{route('teamstudentdetailsv', $item->id)}}">  {!!$item->name!!}</a>
                                                            </p>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                      @endforeach  
                                                      @else
                                                          <p>No appointments</p>
                                                      @endif
                                                    </table>
                                                  <!-- /.card-body -->

                                                <!-- /.card -->
                                              
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4" disabled>Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                        




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