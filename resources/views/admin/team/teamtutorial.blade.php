@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card" style="border: 1px solid white; border-radius: 10px;">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                             <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Uploadt Video Tutorial</b></h3>
                                            </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body" style="background: grey;">
                                       
                                        
                                            <form class="nclass" action="{{route('teamstorevideotut')}}" role="form" method="POST" style="padding: 10px;">
                                                @csrf
                                                <div class="category">
                                                    <select id="category" name="category"  onchange="selectcategory()">
                                                        <option value="#" class="#">Select Module</option>
                                                        <option value="Applied Mathematics" class="laptops">Applied Mathematics</option>
                                                        <option value="Calculas" class="phones">Calculas</option>
                                                        <option value="Computer Sciences" class="books">Computer Sciences</option>
                                                        <option value="Linear Algebra" class="#">Linear Algebra</option>
                                                        <option value="others" class="#">Other</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                  <label class="control-label" for="video_tittle">Video Tittle</label>
                                                  <input class="form-control" name="videoTittle" placeholder="Video Tittle" type="text">
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label" for="youtube-url-link">YouTube URL</label>
                                                    <input class="form-control" name="youtubeURL" placeholder="YouTube URL " type="text">
                                                 </div>
                                                    <div class="uploadbb">
                                                        <button type="button home-button" id="#">Upload</button>
                                                    </div>
                                            </form>
                                         
                                           <br>
                                           <div class="vidswra">
                                            <div class="row pb-row">
                                                @if (count($videos)> 0)
                                                @foreach ($videos as $item)
                                                   
                                                  <div class="col-md-3 pb-video">
                                                      <iframe class="pb-video-frame" width="100%" height="230" src="" frameborder="0" allowfullscreen></iframe>
                                                      <label class="form-control label-warning text-center"> {!!$item->videoTittle!!}</label>
                                                      <div class="posta">
                                                         <a href="teamupdatevideo/{{ $item['id']}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                         <form action="{{route('admindeletevideo', $item['id'])}}" method="POST" style="float: right;">
                                                             @csrf
                                                             <div class="deleteBt">
                                                                 <button type="" id="#">Delete</button>
                                                             </div>
                                                         </form>
                                                    </div>
                                                  </div>
                                                  @endforeach
                                                  <div class="pag">
                                                    <br>
                                                   </div>
                                                   @else
                                                   <h5 style="margin-left: 10px; color:white!important;">No uploaded videos</h5>
                                                  @endif
                                              </div>  
                                          </div>
                                     
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="border: 1px solid white; border-radius: 10px; box-shadow:2px 2px 2px 2px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                             <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Send Video link to student</b></h3>
                                            </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body"  style="background: grey;">
                                                <form class="nclass" action="{{route('teamsendlink')}}" role="form" method="POST" style="padding: 10px;">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label" for="studentemail">Student Email</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Student Email">
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="control-label" for="video_tittle">Video Tittle</label>
                                                      <input class="form-control" name="videoTittle" placeholder="Video Tittle" type="text">
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label" for="youtube-url-link">YouTube URL</label>
                                                        <input class="form-control" name="youtubeURL" placeholder="YouTube URL " type="text">
                                                     </div>
                                                        <div class="uploadbb">
                                                            <button type="button home-button" id="#">Send</button>
                                                        </div>
                                                </form>
                                              
                                           
                                           </div>
                                      </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-radius: 10px; box-shadow:2px 2px 2px 2px white;">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                             <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Video Tutorial Request</b></h3>
                                            </div>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body"  style="background: grey;">
                                            <div class="wr" style="border: 1px solid white; border-radius: 10px; padding: 5px;">
                                            <div class="infor">
                                              <h5 style="color: yellowgreen;">Requests from high school students</h5>
                                            </div>
                                            <br>
                                            
                                            <table class="table3 table-bordered table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Acadmia ID</th>
                                                    <th>Student Name</th>
                                                    <th>Email</th>
                                                    <th>Grade</th>
                                                    <th>Subject</th>
                                                    <th>Description</th>
                                                    <th>Date and time</th>
                                                  </tr>
                                                </thead>
                                                @if (count($tutorial) > 0)
                                                @foreach ($tutorial as $item)
                                                <tbody>
                                                  <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td>{!!$item->id!!}</td>
                                                    <td>{!!$item->name!!}</td>
                                                    <td>{!!$item->email!!}</td>
                                                    <td>{!!$item->subject!!}</td>
                                                    <td>{!!$item->grade!!}</td>
                                                    <td>{!!$item->description!!}</td>
                                                    <td>{!!$item->created_at!!}</td>
                                                  </tr>
                                                  <tr class="expandable-body">
                                                    <td colspan="7">
                                                      <div class="desc">
                                                        <p style="color: white;">
                                                            {!!$item->description!!}
                                                         </p>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                                @endforeach                                                      
                                                @else
                                                 <p style="color: white;">No tutorial requests</p>  
                                                @endif
                                              </table>
                                              <hr style="color: white">
                                              <div class="infor">
                                              <h5 style="color: yellowgreen">Requests from Varsity students</h5>
                                              </div>
                                              <br>
                                              <table class="table3 table-bordered table-hover">
                                                <thead>
                                                  <tr>
                                                    <th>Acadmia ID</th>
                                                    <th>Student Name</th>
                                                    <th>Email</th>
                                                    <th>Year of study</th>
                                                    <th>Module</th>
                                                    <th>Description</th>
                                                    <th>Date and time</th>
                                                  </tr>
                                                </thead>
                                                {{-- @if (count($tutorial) > 0)
                                                @foreach ($tutorial as $item) --}}
                                                <tbody>
                                                  <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                  </tr>
                                                  <tr class="expandable-body">
                                                    <td colspan="7">
                                                      <div class="desc">
                                                        <p style="color: white;">
                                                           
                                                         </p>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                                {{-- @endforeach                                                      
                                                @else
                                                 <p>No tutorial requests</p>  
                                                @endif --}}
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
    </div>
@endsection