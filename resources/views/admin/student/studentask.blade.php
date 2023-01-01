@extends('layouts.students.dashboard_student')
@section('content')
<div class="utadeD">
  <br>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card" style="border-radius: 10px !important;">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item customlinks"><a class="nav-link active" href="#activity" data-toggle="tab">
                  Ask Questions
                </a></li>
                <li class="nav-item customlinks"><a class="nav-link" href="#settings" data-toggle="tab">Question Solution</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="card cardfrom" style="border-radius: 10px;">
                      <div class="card-header">
                            <h3 class="card-title">Questions</h3>
                      </div>
                      <div class="tutwraper">
                        <form action="studentaskquestion" role="form" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                          <label class="form-label" for="Your question" >Question Tittle</label>
                          <input class="form-control" name="topic" placeholder="e.g fibonacci series in java">
                          </div>
                          <div class="form-group">
                          <label class="form-label" for="Your question">Your question</label>
                          <textarea  class="summernote form-control" value="" name="question" id="summernote" cols="30" rows="10" style="color: white !important;"></textarea>
                          <script>
                            $('#summernote').summernote({
                          placeholder: 'Your question',
                          tabsize: 2,
                          height: 120,
                          toolbar: [
                          ['style', ['style']],
                          ['font', ['bold', 'underline', 'clear']],
                          ['color', ['white']],
                          ['para', ['ul', 'ol', 'paragraph']],
                          ['table', ['table']],
                          ['insert', ['link', 'picture', 'video']],
                          ['view', ['fullscreen', 'codeview', 'help']]]
                          });
                        </script> 
                        <style>
                          .note-editable { background-color: rgb(54, 52, 52); color: white; }
                          </style>                    
                          </div>
                        <div class="form-group">
                          <label for="extra_instractions" class="required">Extra Instructions</label><br>
                          <input type="text" class="form-control" name="exraInstructions" value="" tabindex="1" required="required" placeholder ="e.g please include comments in your code" style="color: grey">
                        </div>
                        <div class="submita">
                          <button type="button home-button" id="#" >submit question</button>
                          </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="settings">
                  <div class="tutwraper"> 
                    <b><p style="color:yellowgreen;">Bellow you will find answers of questions you may have asked</p></b>
                     <hr style="color: white;">
                    @if (count($answer) > 0)
                    @foreach ($answer as $item)
                    <div class="studenta">
                      <p>Answered by: <i class="far fa-user" style="color: green !important;">&nbsp;  {!!$item->name!!}</i>
                        &nbsp;
                      <i class="far fa-calendar" style="color: green !important;"> {!!$item->created_at!!} </i></p>
                      
                      <div class="questionsection">
                        <p> Your question : {!!$item->question!!}</p>
                        <hr style="margin-left: 10px; margin-right:10px; color: white;">
                        <p> Solution : {!!$item->answer!!}</p>
                      </div>
                      <div class="submita">
                         <a  href="{{route('studentshowanswers', $item->id)}}" >Show answer</a>
                      </div>
                    </div> 
                    @endforeach  
                    @else
                      <p style="color: white;">No questions answered yet</p>
                    @endif 
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
    </div>
  </section> 
</div>
@endsection