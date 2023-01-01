@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="notice">
    <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Update your answer below</b></h3>
</div>

    <div class="question-tittle">
     
       
         <div class="answer" id="answerdiv">
          <div class="answerwrapper" id="addcomments">
               <form action="{{route('editanswer', $answer['id'])}}" method="POST"  enctype="multipart/form-data"id="commentform">
                @csrf
                <div class="form-group">
                   <label for="author" class="form-label">Your name</label>
                   <input type="text"  class="form-control" value="{!!$answer['name']!!}" name="name" id="name" placeholder="Your name" tabindex="1">
                </div>
                <div class="form-group">
                    <label for="author" class="form-label">Question tittle</label>
                    <input type="text"  class="form-control" value="{!!$answer['topic']!!}" name="topic" id="name" placeholder="topic" tabindex="1">
                 </div>
                 <div class="form-group">
                    <label for="author" class="form-label">Question</label>
                    <textarea type="text"  class="form-control" name="question" id="name" placeholder="Question">{{$answer['question']}}</textarea>
                 </div>
                <div class="form-group">
                   <label for="comment" class="form-label">Your answer</label>
                   <textarea  class="summernote" name="answer" id="summernote" cols="30" rows="10">{{$answer['answer']}}</textarea>
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
                          const showInst = document.getElementById("showInst");
                          const showinstructionsbtn = document.getElementById("showinstructionsbtn");
                          showinstructionsbtn.onclick = function () {
                          if (showInst.style.display !== "none") {
                            showInst.style.display = "none";
                          document.getElementById("showinstructionsbtn").innerHTML = "show Instructions";
                          document.getElementById("showinstructionsbtn").style.background = "grey";
                                     
                          } else {
                            showInst.style.display = "block";
                            document.getElementById("showinstructionsbtn").innerHTML = "hide Instructions";
                            document.getElementById("showinstructionsbtn").style.background = "yellowgreen";
                          }
                        };
                      </script>
                </div>
                 <div class="submita">
                   <button type="button home-button">Update answer</button>
                 </div>
               </form>
           </div>
          </div> 
 </div>

@endsection