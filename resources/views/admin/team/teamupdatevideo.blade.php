@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Update video</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Others</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="editwrappe">
                                            <form action="{{route('teamstorevideotut', $video->id)}}" method="POST">
                                                @csrf
                                                <div class="category">
                                                    <select id="category" name="category" value="{{$video['category']}}"  onchange="selectcategory()">
                                                        <option value="#" class="#">Select Module</option>
                                                        <option value="laptops" class="laptops">Applied Mathematics</option>
                                                        <option value="phones" class="phones">Calculas</option>
                                                        <option value="books" class="books">Computer Sciences</option>
                                                        <option value="services" class="#">Linear Algebra</option>
                                                        <option value="others" class="#">Other</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                  <label class="control-label" for="video_tittle">Video Tittle</label>
                                                  <input class="form-control" value="{{$video['videoTittle']}}" name="videoTittle" placeholder="Video Tittle" type="text">
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label" for="youtube-url-link">YouTube URL</label>
                                                    <input class="form-control" value="{{$video['youtubeURL']}}" name="youtubeURL" placeholder="YouTube URL " type="text">
                                                 </div>
                                                    <div class="uploadbb">
                                                        <button type="button home-button" id="#">Update</button>
                                                    </div>
                                            </form>
                                      </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update notes</button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                             





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