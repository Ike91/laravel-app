@extends('layouts.team.dashboard_team')
@section('content')
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Students Feedback</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">High school</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="requests">

                                             <!-- /.row -->
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <br>
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Notes</th>
                                                        </tr>
                                                        </thead>
                                                        @if (count($feedback) > 0)
                                                        @foreach ($feedback as $item)
                                                            
                                                        <tbody>
                                                        <tr>
                                                            <td>{!!$item->id!!}</td>
                                                            <td>{!!$item->name!!}</td>
                                                            <td>{!!$item->created_at!!}</td>
                                                            <td><span class="tag tag-success">{!!$item->status!!}</span></td>
                                                            <td>{!!$item->notes!!}</td>
                                                        </tr>
                                                        @endforeach  
                                                        @else
                                                          <p>No appointments</p>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                    </div>



                                                <!-- /.card-header -->
                                              
                                            </div>
                                            <!-- /.card -->
                                            </div>
                                        </div>
                                       
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Varsity</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                                <div class="row">
                                                    <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                        <div class="card-tools">
                                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                        
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default">
                                                                <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <br>
                                                        <!-- /.card-header -->
                                                        <div class="card-body table-responsive p-0">
                                                            <table class="table table-hover text-nowrap">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>User</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                    <th>Reason</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>John Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td><span class="tag tag-success">Approved</span></td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>219</td>
                                                                    <td>Alexander Pierce</td>
                                                                    <td>11-7-2014</td>
                                                                    <td><span class="tag tag-warning">Pending</span></td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>657</td>
                                                                    <td>Bob Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td><span class="tag tag-primary">Approved</span></td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>175</td>
                                                                    <td>Mike Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td><span class="tag tag-danger">Denied</span></td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
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
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <div class="requests">
                                       
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