@extends('layouts.team.dashboard_team')
@section('content')
<div class="editwrapper">
              <div class="questionw">
                <h3> Question</h3>
                <hr style="margin-left: 5px; margin-right:10px;">
                <div class="internalq">
                  {!!$rquestion['topic']!!}
                  <hr>
                    {!!$rquestion['question']!!}
                </div>
              </div>
             <div class="extra-instruction" id="showInst">
                <h4 style="color: grey; padding-left: 10px; margin-top: 5px;">Extra instructions</h4>
                <hr style="margin-left: 10px; margin-right: 20px; margin-top: -5px;"> 
                <p style="margin-top: -5px; margin-left:10px;">  {!!$rquestion['exraInstructions']!!}</p>
             </div>
             <div class="answer" id="answerdiv">
              <div class="answerwrapper" id="addcomments">
                   <form action="{{route('teamsavestudentanswer', $rquestion['id'])}}" method="POST" id="commentform">
                    @csrf
                    <div class="form-group">
                       <label for="author" class="form-label">Your name</label>
                       <input type="text"  class="form-control" name="name" id="name" placeholder="Your name" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Student email</label>
                        <input type="email"  class="form-control" value="{!!$rquestion['email']!!}" name="email" id="name" placeholder="email">
                     </div>
                    <div class="form-group">
                       <label for="comment" class="form-label">Your answer</label>
                       <textarea id="summernote"  name="answer" cols="30" rows="10"></textarea>
                          <script>
                              $('#summernote').summernote({
                              placeholder: 'Type your answer',
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
                     <div class="submita">
                       <button type="button home-button">Submit Answer</button>
                    </div>
            </form>
        </div>
    </div> 
</div>
@endsection