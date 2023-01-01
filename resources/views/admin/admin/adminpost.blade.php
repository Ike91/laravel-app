@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">

    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Upload your Tutorial Videos</b></h3>
            </div>
         
           <div class="dashw">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><h4 style="color: yellowgreen;">Upload Video Links</h4></button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                        <div class="uploadwr">
                                            <form action="{{route('storevideos')}}" role="form" method="POST">
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
                                           </div>  
                                           <br>
                                           <div class="vidswra">
                                            <div class="row pb-row">
                                                @if (count($videos)> 0)
                                                @foreach ($videos as $item)
                                                   
                                                  <div class="col-md-3 pb-video">
                                                      <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/{!!$item->youtubeURL!!}" frameborder="0" allowfullscreen></iframe>
                                                      <label class="form-control label-warning text-center"> {!!$item->videoTittle!!}</label>
                                                      <div class="posta">
                                                         <a href="adminupdatevideo/{{ $item['id']}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
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
                                                   <h4 style="margin-left: 10px; color:grey!important;"> No videos</h4>
                                                  @endif
                                              </div>  
                                          </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2"><h4 style="color: yellowgreen;">Upload Notes</h4></button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body customb">
                                            <div class="tutorialRew">
                                                <form action="{{route('adminstorenotes')}}" method="POST"  enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="form-label" for="topic">Tittle</label>
                                                        <input type="text" class="form-control" name="topic" placeholder="Notes topic or tittle">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="author">Author</label>
                                                        <input type="text" class="form-control" name="author" placeholder="Author">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="summary">Notes summary</label>
                                                        <input type="text" class="form-control" name="summary" placeholder="Notes summary">
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="notes description">Notes</label>
                                                            <textarea  class="summernote"name="description" id="summernote" cols="30" rows="10" style="color: white;"></textarea>
                                                            <script>
                                                                $('#summernote').summernote({
                                                                placeholder: 'Hello stand alone ui',
                                                                tabsize: 2,
                                                                height: 120,
                                                                toolbar: [
                                                                    ['style', ['style']],
                                                                    ['font', ['bold', 'underline', 'clear']],
                                                                    ['color', ['color']],
                                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                                    ['table', ['table']],
                                                                    ['insert', ['link', 'picture', 'video']],
                                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                                ]
                                                                });
                                                            </script>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="attach">Post Image</label><br>
                                                            <input  type="file" name="filename"><br>
                                                            
                                                    </div>
                                                    <script>
                                                            $(document).ready(function() {
                                                            $('#summernote').summernote();
                                                        });
                                                    </script>

                                                        <div class="uploadbb">
                                                        <button type="button home-button" id="#">Upload</button>
                                                        </div>
                                                </form>
                                            </div>
                                            <br>
                                            <h3 style="color: yellowgreen;">Posted notes</h3>
                                                <hr>
                                                @if(count($notes)> 0)
                                                @foreach ($notes as $item)
                                                <div class="postreview">
                                                    <div class="post">
                                                        <img src="{!!$item->filename!!}" alt="postImagre" class="post-img">
                                                        <div class="post-preview">
                                                            <h2 style="color:grey !important;">{!!$item->topic!!}</h2>
                                                            <i class="far fa-user" style="color: green !important;">&nbsp; {!!$item->author!!} </i>
                                                            &nbsp; 
                                                            <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!}  </i>
                                                            <p class="preview-text" style="color: white!important;">
                                                                {!!$item->summary!!}
                                                            </p>
                                                            <a href="adminshownotes/{{$item['id']}}" class="btn-new">Read more</a>
                                                         <div class="postactions">
                                                            <a href="admineditnotes/{{ $item['id']}}" style="background: yellow!important;" class="btn btn-default">Edit</a>
                                                        <form action="{{route('admindeletepost', $item->id)}}" method="POST">
                                                         @csrf
                                                           <div class="deleteBtn">
                                                              <button type="" id="#">Delete</button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                {{$notes->links('pagination::bootstrap-4')}}  
                                                @else 
                                                <p>No notes posted yet</p>
                                                @endif   
                                        </div>
                                    </div>
                                </div>
                                <div class="card"  style="border: 1px solid white; border-bottom-left-radius: 10px !important;border-bottom-right-radius: 10px !important">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"><h4 style="color: yellowgreen;">Tutorial Requests</h4></button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">   
                                         <table class="table3 table-bordered table-hover">
                                             <tr id="header-2">
                                                   <th>Name and Surname</th>
                                                   <th>Email</th>
                                                   <th>Tutorail description</th>
                                                   <th>Action</th>
                                             </tr>
                                             <tbody>
                                                 <tr>
                                                     <td>Isaac Mhlanga</td>
                                                     <td>I please make a tutorial about calculas</td>
                                                     <td>I please make a tutorial about calculas</td>
                                                     <td> 
                                                        <form action="" role="form" method="POST">
                                                            @csrf
                                                            <div class="submitaa">
                                                              <button type="button home-button">Done</button>
                                                            </div>
                                                          </form>
                                                     </td>
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
            <style>
                .card
                {
                    border-radius: 10px !important;
                }
              </style>
          </div>
      </div>
    </div>
@endsection