@extends('layouts.admin.dashboard')
@section('content')
<div class="utadeD">
    <!-- include libraries(jQuery, bootstrap) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="uploadContainer">
            <div class="notice">
                <h3 style="color: yellowgreen; margin-left:10px; margin-top: 5px;"><b>Answer Question</b></h3>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Your answer</button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                       <div class="card-body customb">
                                     
                                            <div class="question-tittle">
                                               <div class="question">
                                                  <div class="questionw">
                                                    <h4>Question</h4>
                                                    <hr style="margin-left: 5px; margin-right:10px;">
                                                    <div class="internalq">
                                                      <h4> {!!$question['topic']!!} </h4>
                                                      <div class="questionsection">
                                                        <p>{!!$question['question']!!}</p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                 <div class="extra-instruction" id="showInst">
                                                    <h4 style="color: grey; padding-left: 10px; margin-top: 5px;">Extra instructions</h4>
                                                    <hr style="margin-left: 10px; margin-right: 20px; margin-top: -5px;"> 
                                                    <p style="margin-top: -5px; margin-left:10px;">  {!!$question['exraInstructions']!!}</p>
                                                 </div>
                                                 <div class="answer" id="answerdiv">
                                                       <form action="{{route('saveAnswer', $question['id'])}}" method="POST" id="commentform">
                                                        @csrf
                                                        <div class="form-group">
                                                           <label for="author" class="form-label">Your name</label>
                                                           <input type="text"  class="form-control" name="name" id="name" placeholder="Your name" tabindex="1">
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
                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2" disabled>Other</button>
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
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4" disabled>Others</button>
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