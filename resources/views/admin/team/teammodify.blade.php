@extends('layouts.team.dashboard_team')
@section('content')
<div class="utadeD">
<div class="question">
        <form action="{{route('teamupdate', $answer['id'])}}" method="POST"  enctype="multipart/form-data"id="commentform">
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
@endsection