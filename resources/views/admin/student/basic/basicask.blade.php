@extends('layouts.students.dashboard_basic')
@section('content')
<div class="requestvidswrapper">
    <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ask question</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Solutions</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="tutwraper">
                          <form action="{{route('basicaskquestion')}}" role="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            <label class="form-label" for="Your question" >Question heading</label>
                            <input class="form-control" name="topic" placeholder="e.g sequence and series">
                            </div>
                            <div class="form-group">
                            <label class="form-label" for="Your question">Your question</label>
                            <textarea  class="summernote form-control" value="" name="question" id="summernote" cols="30" rows="10" style="color: black !important;"></textarea>
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
                          <div class="form-group">
                            <label for="extra_instractions" class="required">Extra Instructions</label><br>
                            <input type="text" class="form-control" name="exraInstructions" value="" tabindex="1" required="required" placeholder ="e.g please dont skip any step" style="color: grey">
                          </div>
                          <div class="submita">
                            <button type="button home-button" id="#" >submit question</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="settings">
                    <div class="tutwraper"> 
                     <b><p style="color:yellowgreen;">Below you will find answers of questions that you may have asked</p></b>
                      <hr>
                      @if (count($answer) > 0)
                      @foreach ($answer as $item)
                      <div class="studenta">
                        <p>Answered by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->name!!}</i>
                          &nbsp;
                        <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!} </i></p>
                        <hr>
                        <p>Question Heading : {!!$item->topic!!}</p>
                        <hr>
                        <p> Your question : {!!$item->question!!}</p>
                        <hr>
                        <p> Solution : {!!$item->answer!!}</p>
                      </div> 
                      @endforeach  
                      @else
                        <p>No questions answered yet</p>
                      @endif
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
    </section> 
  </div>
@endsection