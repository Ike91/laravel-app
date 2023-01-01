@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Registered Students</b></h3>
            </div>
           <br> 
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Hilgh school students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                            <table class="table3 table-bordered table-hover">
                                                <tr id="header-2">
                                                  <th>Name and surname</th>
                                                  <th>Email</th>
                                                  <th>Phone</th>
                                                  <th>Education</th>
                                                  <th>Location</th>
                                                  <th>Notes</th>
                                                  <th>Action</th>
                                                </tr>
                                                @if (count($studentsh) > 0)
                                                @foreach ($studentsh as $item)
                                                <tbody>
                                                  <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td> 
                                                    <td>{{$item->phone}}</td> 
                                                    <td>{{$item->education}}</td>
                                                    <td>{{$item->location}}</td> 
                                                    <td>{{$item->notes}}</td>
                                                    <td>
                                                      <form action="{{route('deletestudent', $item->id)}}" role="form" method="POST">
                                                        @csrf
                                                        <div class="submitaa">
                                                          <button type="button home-button">Delete student</button>
                                                        </div>
                                                      </form>
                                                    </td> 
                                                  </tr>
                                                  <tr>
                                                  </tbody>
                                                @endforeach 
                                                @else
                                                   <p style="color: white;">No registered students</p> 
                                                @endif
                                            </table> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style=" border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">University students</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                                <table class="table3 table-bordered table-hover">
                                                    <tr id="header-2">
                                                      <th>Name and surname</th>
                                                      <th>Email</th>
                                                      <th>Phone</th>
                                                      <th>Education</th>
                                                      <th>Location</th>
                                                      <th>Notes</th>
                                                      <th>Action</th>
                                                    </tr>
                                                    @if (count($students) > 0)
                                                    @foreach ($students as $item)
                                                    <tbody>
                                                      <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->email}}</td> 
                                                        <td>{{$item->phone}}</td> 
                                                        <td>{{$item->education}}</td>
                                                        <td>{{$item->location}}</td> 
                                                        <td>{{$item->notes}}</td> 
                                                        <td>
                                                          <form action="{{route('deletestudent', $item->id)}}" role="form" method="POST">
                                                            @csrf
                                                            <div class="submitaa">
                                                              <button type="button home-button">Delete student</button>
                                                            </div>
                                                          </form>
                                                        </td> 
                                                      </tr>
                                                      <tr>
                                                      </tbody>
                                                    @endforeach 
                                                    @else
                                                       <p style="color: white;">No registered students</p> 
                                                    @endif
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
    
          </div>
    </div>
@endsection