@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Team</b></h3>
            </div>
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border-radius: 10px; border: 1px solid white;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Team</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                            <table class="table3 table-bordered table-hover">
                                                <tr id="header-2"> 
                                                    <tr id="header-2">
                                                    <th>Name and surname</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Education</th>
                                                    <th>Skills</th>
                                                    <th>Location</th>
                                                    <th>Notes</th>
                                                    <th>Action</th>
                                                </tr>
                                                    @if(count($team) > 0)
                                                    @foreach ($team as $item)
                                                  <tbody>
                                                    <tr>
                                                        <td>{{$item ->name}}</td>
                                                        <td>{{$item->email}}</td> 
                                                        <td>{{$item->phone}}</td> 
                                                        <td>{{$item->education}}</td>
                                                        <td>{{$item->skills}}</td> 
                                                        <td>{{$item->location}}</td> 
                                                        <td>{{$item->notes}}</td>
                                                        <td>
                                                         <form action="{{route('deleteteam', $item->id)}}" role="form" method="POST">
                                                             @csrf
                                                             <div class="submitaa">
                                                               <button type="button home-button">Delete Member</button>
                                                             </div>
                                                           </form>
                                                        </td>   
                                                    </tr>
                                                      @endforeach 
                                                      @else
                                                      <p>Nothing yet<p>  
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
        </div>
    </div>
@endsection