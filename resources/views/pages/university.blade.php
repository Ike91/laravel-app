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
                        <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif">Recent topics</h3>
                    </div>
                        <!-- /.card-header -->
                        <div class="card-body side">
                          @if (count($answer)> 0)
                           @foreach ($answer as $topics)            
                            <p style="color: black"><a href="{{route('show', $topics->id)}}">{!!$topics->topic!!}</a></p>
                            <hr>
                            @endforeach
                          @else
                          <div class="notittle">
                                <h5>No Questions</h5>
                          </div>
                          @endif 
                        </div>
                        <!-- /.card-body -->
                </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
        <div class="col-md-9">
        <div class="card ">
           <div class="card-header p-2">
             <ul class="nav nav-pills">
               <li class="nav-item customlinks1"><a class="nav-link active" href="#activity" data-toggle="tab">
                    <img src="icons/icons8-faq-26.png">
                    <div class="iconsa" style="margin-top:-25px; margin-left:5px;">
                       <p style="margin-left: 10px;"><B>Q & Answers<B></p>
                    </div>
              </a></li>
               <li class="nav-item customlinks2"><a class="nav-link" href="#settings" data-toggle="tab">
                <img src="icons/icons8-questions-26.png">
                <div class="iconsa" style="margin-top:-25px; margin-left:5px;">
                  <p><B> Ask a question<B></p>
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
                    <form action="{{route('searchfunctionv')}}" method="GET">
                      <div class="wrap">
                        <div class="search">
                            <input type="text" id="search" class="searchTerm" name="term" placeholder="What are you looking for?">
                            <button type="submit" class="searchButton">
                              <i class="fa fa-search"></i>
                            </button>
                         </div>
                        </div>
                        <script type="text/javascript">
                          var route = "{{ url('autocompleteSeach')}}";
                  
                          $('#search').typeahead({
                              source: function (query, process) {
                                  return $.get(route, {
                                      query: query
                                  }, function (data) {
                                      return process(data);
                                  });
                              }
                          });
                      </script>
                      </form>
                      <h4 style="font-family: 'Times New Roman', Times, serif; margin-left:10px; margin-top:10px; color: white;">Results....</h4>
                      <hr style="margin-left: 10px;">
                    @if (count($answer)> 0)
                    @foreach ($answer as $item)
                      <div class="question">
                        <div class="questionBack" style="background: #1d1f21; border: 1px solid white;color:white">
                          {!!$item->topic!!}
                          <hr>
                          {!!$item->question!!}
                        </div>
                          <div class="showanswerb">
                             <a  href="{{route('answer', $item->id)}}" class="btn btn-default">show answer</a>
                          </div>
                      </div>
                    @endforeach
                    @else
                      <div class="noanswer">
                            <h3>No results found</h3>
                      </div>
                    @endif
                   </div>
                  </div>
                 </div>
                <div class="tab-pane" id="settings">
                  <div class="vidswra">
                    <div class="askquestioncontainer" id="askquestionc">
                        <form action="{{route('askquestion')}}" role="form" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label class="form-label" for="Your question" style="color: white;">Question tittle</label>
                            <input class="form-control" name="topic" placeholder="e.g fibonacci series in java">
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="Your question" style="color: white;">Your Question</label>
                            <textarea style="background: grey !importantdv;"  class="summernote form-control" name="question" id="summernote" cols="30" rows="10" style="color: white !important;"></textarea>
                            <script>
                               $('#summernote').summernote({
                              placeholder: 'Your question',
                              tabsize: 2,
                              height: 120,
                              toolbar: [
                              ['style', ['style']],
                              ['font', ['bold', 'underline', 'clear']],
                              ['color', ['color']],
                              ['para', ['ul', 'ol', 'paragraph']],
                              ['table', ['table']],
                              ['insert', ['link', 'picture', 'video']],
                              ['view', ['fullscreen', 'codeview', 'help']]]
                              });
                         </script>                      
                          </div>
                        <div class="extra">
                           <label for="extra_instractions" class="required">Extra Instructions</label><br>
                           <input type="text" name="exraInstructions" id="extraI" value="" tabindex="1" required="required" placeholder ="e.g please include comments in your code" style="color: grey">
                        </div>
                        <div class="submitanser">
                          <button type="button home-button" id="#" >submit question</button>
                        </div>
                      </form>
                    </div>
                    </div>
                   <!-- /.tab-pane -->
                   </div>
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