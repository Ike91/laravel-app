@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Terms and Conditions</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Terms and conditions</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body">
                                        <div class="editwrapper">
                                            <div class="notice">
                                                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Update your answer bellow</b></h3>
                                            </div>
                                          
                                                <div class="question-tittle">
                                                 
                                                   <div class="question">
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
                                                                <textarea type="text"  class="form-control" name="question" id="name" placeholder="Question">{!!$answer['question']!!}</textarea>
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
                                             </div>
                                        </div>
                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Update Terms and Conditions</button>
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