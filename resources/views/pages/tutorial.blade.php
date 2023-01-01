@extends('layouts.default_layout')
@section('content')
<main id="main">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper custome-card">
  <!-- Main content -->
   <section class="content">
    <br>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            <!-- About Me Box -->
               <div class="card card-primary">
                   <div class="card-header">
                        <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif">Recent Tutorials</h3>
                    </div> 
                        <div class="card-body side">
                          @if(count($notes)> 0)
                          @foreach ($notes as $item)
                          <p style="color: black"><a href="{{route('show', $item->id)}}">{!!$item->topic!!}</a></p>
                          <hr style="color: white !important;">
                          @endforeach
                          @else 
                          <p>No recent post</p>
                          @endif  
                        </div>
                </div>
                <br>
                  <div class="card card-primary">
                   <div class="card-header">
                        <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif">Recent videos</h3>
                    </div>                      
                        <div class="card-body side">
                          @if(count($videos)> 0)
                          @foreach ($videos as $item)
                          <p style="color: black"><a href="{{$item->youtubeURL}}" target="_blank">{!!$item->videoTittle!!}</a></p>
                          <hr style="color: white !important;">
                          @endforeach
                          @else 
                          <p>No recent post</p>
                          @endif  
                        </div>
                </div>
            </div>
        <div class="col-md-9">
        <div class="card ">
           <div class="card-header p-2">
             <ul class="nav nav-pills">
               <li class="nav-item customlinks1"><a class="nav-link active" href="#activity" data-toggle="tab">
                <img src="icons/icons8-note-26.png">
                <div class="iconsa" style="margin-top:-25px; margin-left:5px;">
                   <p style="margin-left: 10px;"><B>Seach notes<B></p>
                </div>
              </a></li>
               <li class="nav-item customlinks1"><a class="nav-link" href="#settings" data-toggle="tab">
                <img src="icons/icons8-video-file-26.png">
                <div class="iconsa" style="margin-top:-25px; margin-left:5px;">
                   <p style="margin-left: 10px;"><B>Seach videos<B></p>
                </div>
              </a></li>
             </ul>
           </div><!-- /.card-header -->
            <div class="card-body customb">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="vidswra">
                      <form action="{{route('searchnotes')}}" method="GET">
                        <div class="wrap">
                          <div class="search">
                              <input type="seach" class="searchTerm" name="term" placeholder="What are you looking for?">
                              <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                              </button>
                           </div>
                          </div>
                        </form>
                        <br>
                        <h4>Results...</h4>
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
                                    <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!}</i>
                                    <p class="preview-text" style="color: white!important;">
                                      {!!$item->summary!!}
                                    </p>
                                    <a href="{{route('show', $item->id)}}" class="btn-new">Read more</a>
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
                    <div class="tab-pane" id="settings">
                      <div class="vidswra">
                        
                        <div class="row pb-row">
                          @if (count($videos)> 0)
                          @foreach ($videos as $item)   
                            <div class="col-md-3 pb-video">
                                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/{!!$item->youtubeURL!!}" frameborder="0" allowfullscreen></iframe>
                                <div class="fomr-group givespace">
                                  <label class="form-control label-warning text-center"> {!!$item->videoTittle!!}</label>
                                </div>
                            </div>
                            <br>
                            @endforeach
                            <div class="vidpage">
                                 {{$videos->links('pagination::bootstrap-4')}} 
                             </div>
                             @else
                             <h4 style="margin-left: 10px; color:grey!important;"> No videos</h4>
                            @endif
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
    <br>
   </section>
 <!-- /.content -->
</div>
</main>
@endsection